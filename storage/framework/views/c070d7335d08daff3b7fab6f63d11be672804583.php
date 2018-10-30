<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

					
					
                    <li class="active-link">
                        <a href="<?php echo e(route('home')); ?>" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li>
                        <a href="<?php echo e(route('my_profile')); ?>"><i class="fa fa-table "></i>My Profile<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('profile')); ?>"><i class="fa fa-edit "></i>List of Profile  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="<?php echo e(route('item')); ?>"><i class="fa fa-qrcode "></i>ITEM</a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-bar-chart-o"></i>My Link Two</a>
                    </li>

                    <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Three </a>
                    </li>
                    <li>
                        <a href="#"><i class="fa fa-table "></i>My Link Four</a>
                    </li>
                     <li>
                        <a href="#"><i class="fa fa-edit "></i>My Link Five </a>
                    </li>
					 <li>
					 <a class="dropdown-item" href="<?php echo e(route('logout')); ?>"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-circle-o-notch "></i> <?php echo e(__('Logout')); ?>

                                    </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
		<form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                        <?php echo csrf_field(); ?>
                                    </form>