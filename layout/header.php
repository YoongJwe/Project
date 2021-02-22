<!-- HEADER  -->
<header class="main-header " id="header">
    <nav class="navbar navbar-static-top navbar-expand-lg">
        <!-- Sidebar toggle button -->
        <button id="sidebar-toggler" class="sidebar-toggle">
            <span class="sr-only">Toggle navigation</span>
        </button>
        <!-- search form -->
        <div class="search-form d-none d-lg-inline-block">
            <div class="input-group">
                <button type="button" name="search" id="search-btn" class="btn btn-flat">
                    <i class="mdi mdi-magnify"></i>
                </button>
                <input
                    type="text"
                    name="query"
                    id="search-input"
                    class="form-control"
                    autocomplete="off"/>
            </div>
            <div id="search-results-container">
                <ul id="search-results"></ul>
            </div>
        </div>

        <div class="navbar-right ">
            <ul class="nav navbar-nav">
                <li class="dropdown notifications-menu">
                    <button class="dropdown-toggle" data-toggle="dropdown">
                        <i class="mdi mdi-bell-outline"></i>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                        <li class="dropdown-header">You have 5 notifications</li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-plus"></i>
                                New user registered
                                <span class=" font-size-12 d-inline-block float-right">
                                    <i class="mdi mdi-clock-outline"></i>
                                    10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-remove"></i>
                                User deleted
                                <span class=" font-size-12 d-inline-block float-right">
                                    <i class="mdi mdi-clock-outline"></i>
                                    07 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-chart-areaspline"></i>
                                Sales report is ready
                                <span class=" font-size-12 d-inline-block float-right">
                                    <i class="mdi mdi-clock-outline"></i>
                                    12 PM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-account-supervisor"></i>
                                New client
                                <span class=" font-size-12 d-inline-block float-right">
                                    <i class="mdi mdi-clock-outline"></i>
                                    10 AM</span>
                            </a>
                        </li>
                        <li>
                            <a href="#">
                                <i class="mdi mdi-server-network-off"></i>
                                Server overloaded
                                <span class=" font-size-12 d-inline-block float-right">
                                    <i class="mdi mdi-clock-outline"></i>
                                    05 AM</span>
                            </a>
                        </li>
                        <li class="dropdown-footer">
                            <a class="text-center" href="#">
                                View All
                            </a>
                        </li>
                    </ul>
                </li>
                <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                </li>
                
                <?php
                session_start();
                $userName=$_SESSION['name'];
                $userEmail=$_SESSION['email'];

                if(!isset($_SESSION['name'])){
                    echo "<li class='login'><a href='/login/login.php'>LOGIN</a></li>";
                }else{ 
                    echo '<li class="dropdown user-menu">';
                    echo '    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">';
                    echo '        <img src="../assets/img/user/user.png" class="user-image" alt="User Image"/>';
                    echo '        <span class="d-none d-lg-inline-block">'.$userName.'</span>';
                    echo '    </button>';
                    echo '    <ul class="dropdown-menu dropdown-menu-right">';
                    echo '        <li class="dropdown-header">';
                    echo '            <img src="../assets/img/user/user.png" class="img-circle" alt="User Image"/>';
                    echo '            <div class="d-inline-block">';
                    echo '                <small class="pt-1">'.$userEmail.'</small>';
                    echo '            </div>';
                    echo '        </li>';
                    echo '        <li>';
                    echo '            <a href="user-profile.html">';
                    echo '                <i class="mdi mdi-account"></i>';
                    echo '                My Profile';
                    echo '            </a>';
                    echo '        </li>';
                    echo '        <li>';
                    echo '            <a href="#">';
                    echo '                <i class="mdi mdi-diamond-stone"></i>';
                    echo '                Projects';
                    echo '            </a>';
                    echo '        </li>';
                    echo '        <li class="right-sidebar-in">';
                    echo '            <a href="javascript:0">';
                    echo '                <i class="mdi mdi-settings"></i>';
                    echo '                Setting';
                    echo '            </a>';
                    echo '        </li>';
                    echo '        <li class="dropdown-footer">';
                    echo '            <a href="/login/logout.php">';
                    echo '                <i class="mdi mdi-logout"></i>';
                    echo '                Log Out';
                    echo '            </a>';
                    echo '        </li>';
                    echo '    </ul>';
                    echo '</li>';
                }
                ?>
            </ul>
        </div>
    </nav>

</header>
<!-- //HEADER  -->