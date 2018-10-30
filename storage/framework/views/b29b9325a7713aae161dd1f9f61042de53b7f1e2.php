<?php $__env->startSection('content'); ?>
 <div id="wrapper">
         <div class="navbar navbar-inverse navbar-fixed-top">
            <div class="adjust-nav">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="#">
                        <img src="assets/img/logo.png" />

                    </a>
                    
                </div>
              
                <span class="logout-spn" >
                  <a href="#" style="color:#fff;">LOGOUT</a>  

                </span>
            </div>
        </div>
 <div id="page-wrapper" >
            <div id="page-inner">
                <div class="row">
                    <div class="col-lg-12">
                     <h2>ADD RECORDS</h2>   
                    </div>
                </div>              
                 <!-- /. ROW  -->
                  <hr />
                <div class="row">
                    <div class="col-lg-12 ">
                        <div class="alert alert-info">
                             <strong>Welcome <?php echo e(Auth::user()->name); ?> ! </strong> You Have No pending Task For Today.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
				<form method="POST" action="<?php echo e(route('action')); ?>">
                 <?php echo csrf_field(); ?>
				<div class="row text-center pad-top">
				
					<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						
						<h5>Table  Sample One</h5>
                        <table class="table table-striped table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th>#</th>
									<th>USERID</th>
                                    <th>LASTNAME</th>
                                    <th>FIRSTNAME</th>
									<th>MIDDLENAME</th>
									<th>GENDER</th>
									<th>BIRTHDATE</th>
									<th>ADDRESS</th>
									<th>ACTION</th>
                                </tr>
                            </thead>
                            <tbody>
							
							<?php $__currentLoopData = $profile; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $profile): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
							</tr>
									<td><?php echo e($profile->profile_id); ?></td>
									<td><?php echo e($profile->user_id); ?></td>
									<td><?php echo e($profile->firstname); ?></td>
									<td><?php echo e($profile->lastname); ?></td>
									<td><?php echo e($profile->middlename); ?></td>
									<td><?php echo e($profile->gender); ?></td>
									<td><?php echo e($profile->birthdate); ?></td>
									<td><?php echo e($profile->address); ?></td>
									<td> <a href="<?php echo e(url('updateRecord',$profile->profile_id)); ?>">EDIT</a>&nbsp;&nbsp;<a href="<?php echo e(url('deleteRecord',$profile->profile_id)); ?>">DELETE</a></td>
                             <tr>   
							<?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
							
                                
                            </tbody>
                        </table>
						
					<div>
                  
				</div>
                 <!-- /. ROW  --> 
                
                  <!-- /. ROW  -->    
                
                 <!-- /. ROW  -->  
                 
                  <!-- /. ROW  -->  
                
                 <!-- /. ROW  -->   
				  <div class="row">
                    <div class="col-lg-12 ">
					<br/>
                        <div class="alert alert-danger">
                             <strong>Want More Icons Free ? </strong> Checkout fontawesome website and use any icon <a target="_blank" href="http://fortawesome.github.io/Font-Awesome/icons/">Click Here</a>.
                        </div>
                       
                    </div>
                    </div>
                  <!-- /. ROW  --> 
    </div>
             <!-- /. PAGE INNER  -->
            </div>
			</form>
         <!-- /. PAGE WRAPPER  -->
		 </div>
 <div class="footer">
      
    
            <div class="row">
                <div class="col-lg-12" >
                    &copy;  2014 yourdomain.com | Design by: <a href="http://binarytheme.com" style="color:#fff;" target="_blank">www.binarytheme.com</a>
                </div>
            </div>
        </div>
        
<?php $__env->stopSection(); ?>
<?php echo $__env->make('partial.footer', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>

	<!-- /. WRAPPER  -->
    <!-- SCRIPTS -AT THE BOTOM TO REDUCE THE LOAD TIME-->
    <!-- JQUERY SCRIPTS -->
    <script src="{{ asset('js/jquery-1.10.2.js"></script>
      <!-- BOOTSTRAP SCRIPTS -->
    <script src="{{ asset('js/bootstrap.min.js"></script>
      <!-- CUSTOM SCRIPTS -->
    <script src="{{ asset('js/custom.js"></script>
    <!-- tawk chat JS


<?php echo $__env->make('layouts.header', \Illuminate\Support\Arr::except(get_defined_vars(), array('__data', '__path')))->render(); ?>