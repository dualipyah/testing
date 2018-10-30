<?php

namespace App\Http\Controllers\Crud;

use App\User;
use App\Profile;
use App\Http\Requests\ValidateProfileRequest;
use Auth;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\facades\DB;
use Illuminate\Support\Facades\Log;
use Illuminate\Database\Eloquent\SoftDeletes;
use Intervention\Image\Facades\Image;

class Crud extends Controller
{
	use softDeletes;
	
	public function deleteR($id){
		$profile = Profile::where('profile_id',$id);
		$profile->delete();
		return redirect()->route('profile');
	}
	//show update field
    public function show($id) {
	  $profile = Profile::where('profile_id',$id)->first();//Profile Model
      return view('updateRecord',['profile'=>$profile]);
   }
   
	//view records
	public function profile(){
		/*$user_id = User::find(Auth::id());
		$profile = Profile::where('user_id',$user_id)->first();//Profile Model
		return view('my_profile',['profile'=>$profile]);
		*/
		$profile = Profile::all();
		return view('profile', array('profile' => $profile));
	}
	/*
	public function edit(Request $request,$id) {
      $name = $request->input('stud_name');
      DB::update('update student set name = ? where id = ?',[$name,$id]);
      echo "Record updated successfully.<br/>";
      echo '<a href = "/edit-records">Click Here</a> to go back.';
   }*/
	
	/*EXCEPTION SAMPLE 
	public function item(){
		/*$user_id = User::find(Auth::id());
		$profile = Profile::where('user_id',$user_id)->first();//Profile Model
		return view('my_profile',['profile'=>$profile]);
		
		try{
		$profile = DB::table('profile');
		}
		catch(){
			
		}
		return view('profile', array('profile' => $profile));
	}
	*/
	
	public function item(){
		/*$user_id = User::find(Auth::id());
		$profile = Profile::where('user_id',$user_id)->first();//Profile Model
		return view('my_profile',['profile'=>$profile]);
		*/
		
		$profile = DB::table('profile');
		
		return view('profile', array('profile' => $profile));
	}
	
	//view profile
	public function my_profile(){
		$user_id = User::find(Auth::id());
		$profile = Profile::where('user_id',$user_id)->first();//Profile Model
		
		Log::info('Showing user profile for user'.Auth::id());//LOGGING SET UP
		return view('my_profile',['profile'=>$profile]);
	}
	
	public function update_profile(Request $request){
		if($this->validateInput($request->all())){
			$this->saveProfile($request->all());
			return redirect()->route('my_profile');
		}
	}
	
	public function getItem(){
		view('items');
	}
	
	private function validateInput(array $data){
		
		return Validator::make($data, [
			//'email' => 'required|email|max:200|unique:users',
			'firstname' => 'required|string|max|50',
			//'lastname' => 'required|string|max|50',
			//'middlename' => 'required|string|max|50',
			//'gender' => 'required',
			//'birthdate' => 'required|date',
			//'address' => 'required|string|max|150',
		]);
	}
	
	public function saveProfile(ValidateProfileRequest $data){
		
		$user_id = User::find(Auth::id()); //User Model
		$profile = Profile::where('user_id',Auth::id())->first(); //Profile Model
		
			if($profile){
				$profile->firstname = $data['firstname'];
				$profile->lastname = $data['lastname'];
				$profile->middlename = $data['middlename'];
				$profile->birthdate = date('Y-m-d',strtotime($data['birthdate']));
				$profile->gender = $data['gender'];
				$profile->address = $data['address'];
			}
			
			else{
				
				$profile = new profile([
					'firstname' => $data['firstname'],
					'lastname' => $data['lastname'],
					'middlename' => $data['middlename'],
					'birthdate' => date('Y-m-d',strtotime($data['birthdate'])),
					'gender' => $data['gender'],
					'address' => $data['address'],
					]);
				
			}//end else
			//$profile->save(); "with out foreign key"
			$user_id->profile()->save($profile);
			//$profile->save();
			return redirect()->route('profile');	
		}
		
	//FILE UPLOAD
	/*function fileResponse(Request $request){
		$filename = $request->('file');
		$path = $file->storeAs('img2',$request->user_id.'_'.$file->getClientOriginalExtension());
		
		$profile = Profile::find($request->id);
		$profile->image_path = $path;
		$profile->filename = $filename;
		$profile->save();

	}
	*/
}
