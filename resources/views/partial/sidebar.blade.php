<nav class="navbar-default navbar-side" role="navigation">
            <div class="sidebar-collapse">
                <ul class="nav" id="main-menu">
                 

					
					
                    <li class="active-link">
                        <a href="{{route('home')}}" ><i class="fa fa-desktop "></i>Dashboard <span class="badge">Included</span></a>
                    </li>
                   

                    <li>
                        <a href="{{route('my_profile')}}"><i class="fa fa-table "></i>My Profile<span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="{{route('profile')}}"><i class="fa fa-edit "></i>List of Profile  <span class="badge">Included</span></a>
                    </li>
                    <li>
                        <a href="{{route('item')}}"><i class="fa fa-qrcode "></i>ITEM</a>
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
					 <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       <i class="fa fa-circle-o-notch "></i> {{ __('Logout') }}
                                    </a>
                    </li>
                    
                </ul>
                            </div>

        </nav>
		<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>