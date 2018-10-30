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
						
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 <?php echo e($errors->has('firstname') ? ' has-error' : ''); ?>">
							<p style="text-align:left">Firstname</p>
								<input name="firstname" class="form-control" value="<?php echo e($profile == null ? '' : $profile->firstname); ?>"/>
								
								 <?php if($errors->has('firstname')): ?>
                                    <span class="invalid-feedback" role="alert">
                                        <strong><?php echo e($errors->first('firstname')); ?></strong>
                                    </span>
                                <?php endif; ?>
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 <?php echo e($errors->has('lastname') ? ' has-error' : ''); ?>">
							<p style="text-align:left">Lastname</p>
								<input name="lastname" class="form-control" value="<?php echo e($profile == null ? '' : $profile->lastname); ?>"/>
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 <?php echo e($errors->has('middlename') ? ' has-error' : ''); ?>">
							<p style="text-align:left">Middlename</p>
								<input name="middlename" class="form-control" value="<?php echo e($profile == null ? '' : $profile->middlename); ?>"/>
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 <?php echo e($errors->has('birthdate') ? ' has-error' : ''); ?>">
							<p style="text-align:left">Birthdate</p>
								<input name="birthdate" class="form-control" value="<?php echo e($profile == null ? '' : $profile->birthdate); ?>"/>
						</div>
						
						<div class="col-lg-5 col-md-5 col-sm-5 col-xs-5 ">
							<p style="text-align:left">Gender</p>
								<select name="gender" class="form-control">
									<option><?php echo e($profile == null ? 'Select Gender' : $profile->gender); ?></option>
									<option>Male</option>
									<option>Female</option>
								</select>
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8 <?php echo e($profile == null ? '' : $profile->address); ?>">
							<p style="text-align:left">Address</p>
								<input name="address" class="form-control" value="<?php echo e($profile == null ? '' : $profile->address); ?>"/>
						</div>
						
						<div class="col-lg-8 col-md-8 col-sm-8 col-xs-8">
						<p>&nbsp;</p>
							<button type="submit" class="btn btn-primary"> UPDATE</button>
							<button type="submit" class="btn btn-success"> BACK</button>
						</div>
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