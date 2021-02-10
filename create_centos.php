<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <meta name="description" content="Sleek Dashboard - Free Bootstrap 4 Admin Dashboard Template and UI Kit. It is very powerful bootstrap admin dashboard, which allows you to build products like admin panels, content management systems and CRMs etc.">


  <title>Blockchain Class</title>

  <!-- GOOGLE FONTS -->
  <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500|Poppins:400,500,600,700|Roboto:400,500" rel="stylesheet" />
  <link href="https://cdn.materialdesignicons.com/4.4.95/css/materialdesignicons.min.css" rel="stylesheet" />


  <!-- PLUGINS CSS STYLE -->
  <link href="assets/plugins/nprogress/nprogress.css" rel="stylesheet" />

  
  
  <!-- No Extra plugin used -->
  
  
  
  <link href="assets/plugins/jvectormap/jquery-jvectormap-2.0.3.css" rel="stylesheet" />
  
  
  
  <link href="assets/plugins/daterangepicker/daterangepicker.css" rel="stylesheet" />
  
  
  
  <link href="assets/plugins/toastr/toastr.min.css" rel="stylesheet" />
  
  

  <!-- SLEEK CSS -->
  <link id="sleek-css" rel="stylesheet" href="assets/css/sleek.css" />

  <!-- FAVICON -->
  <link href="assets/img/logo.png" rel="shortcut icon" />

  

  <!--
    HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries
  -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script src="assets/plugins/nprogress/nprogress.js"></script>


  <script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
  <script>
       
      function check(){
          var form = document.create_centos_instance;
          console.log('111');

           $('#loading').show();
            
           setTimeout(function(){
                form.submit();
            }, 1000);
      }

      $(document).ready(function() {
          $('#loading').hide();
      });
   </script>
    <style>
        
        #loading {
        width: 100%;
        height: 100%;
        top: 0;
        left: 0;
        position: fixed;
        display: block;
        opacity: 0.75;
        background: white;
        z-index: 99;
        text-align: center;
        }


        #loading > img {
        position: fixed;
        top: 50%;
        left: 50%;
        z-index: 100;
        transform: translate(-50%, -50%);
        opacity: 1;
        }

    </style>


</head>


<body class="header-fixed sidebar-fixed sidebar-dark header-light" id="body">
  
  <script>
    NProgress.configure({ showSpinner: false });
    NProgress.start();
  </script>

  
  <div id="toaster"></div>
  

  <div class="wrapper">
    <!-- Github Link -->
    <a href="https://github.com/tafcoder/sleek-dashboard"  target="_blank" class="github-link">
      <svg width="70" height="70" viewBox="0 0 250 250" aria-hidden="true">
        <defs>
          <linearGradient id="grad1" x1="0%" y1="75%" x2="100%" y2="0%">
            <stop offset="0%" style="stop-color:#896def;stop-opacity:1" />
            <stop offset="100%" style="stop-color:#482271;stop-opacity:1" />
          </linearGradient>
        </defs>
        <path d="M 0,0 L115,115 L115,115 L142,142 L250,250 L250,0 Z" fill="url(#grad1)"></path>
      </svg>
      <i class="mdi mdi-github-circle"></i>
    </a>

            <!--
          ====================================
          ——— LEFT SIDEBAR WITH FOOTER
          =====================================
        -->
        <aside class="left-sidebar bg-sidebar">
          <div id="sidebar" class="sidebar sidebar-with-footer">
            <!-- Aplication Brand -->
            <div class="app-brand">
              <a href="index.html" title="Sleek Dashboard">
                <img src="assets/img/logo.png" width="40px">
                <span class="brand-name text-truncate">Blockchain Class</span>
              </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

              <!-- sidebar menu -->
              <ul class="nav sidebar-inner" id="sidebar-menu">
                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="index.html">
                      <i class="mdi mdi-view-dashboard-outline"></i>
                      <span class="nav-text">Dashboard</span>
                    </a>
                  </li>
                

                

                
                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#security"
                      aria-expanded="false" aria-controls="security">
                      <i class="mdi mdi-security"></i>
                      <span class="nav-text">Security</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="security"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Squid Guard</span>
                                
                              </a>
                            </li>
                          
                        

                        
                        
                          
                            <li >
                              <a class="sidenav-item-link" href="#">
                                <span class="nav-text">Firewall</span>
                                
                              </a>
                            </li>

                          
                        

                        
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub " >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#kvm_network"
                      aria-expanded="false" aria-controls="kvm_network">
                      <i class="mdi mdi-access-point-network"></i>
                      <span class="nav-text">KVM NETWORK</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse "  id="kvm_network"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          

                          
                        

                        
                        
                        <li  class="has-sub " >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#create_network"
                            aria-expanded="false" aria-controls="create_network">
                            <span class="nav-text">Create Network</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse "  id="create_network">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="create_nat_network.html"><i class="mdi mdi-play"></i> NAT Network</a>
                              </li>
                              
                              <li >
                                <a href="create_iso_network.html"><i class="mdi mdi-play"></i> Isolated Network</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>



                        <li>
                          <a class="sidenav-item-link" href="view_network_list.php">
                            <span class="nav-text">View Network List</span>
                            
                          </a>
                        </li>
                        

                        
                        
                        
                        

                        
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub active expand" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#kvm_instance"
                      aria-expanded="false" aria-controls="kvm_instance">
                      <i class="mdi mdi-desktop-mac"></i>
                      <span class="nav-text">KVM INSTANCE</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse show"  id="kvm_instance"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          

                          
                        

                        
                        
                        <li  class="has-sub active expand" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#create_instance"
                            aria-expanded="false" aria-controls="create_instance">
                            <span class="nav-text">Create Instance</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse show"  id="create_instance">
                            <div class="sub-menu">
                              
                              <li class="active" >
                                <a href="create_centos.php"><i class="mdi mdi-play"></i> CentOS Instance</a>
                              </li>
                              
                              <li >
                                <a href="settings_ubuntu.html"><i class="mdi mdi-play"></i> Ubuntu Instance</a>
                              </li>

                              <li >
                                <a href="settings_fedora.html"><i class="mdi mdi-play"></i> Fedora Instance</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>



                        <li >
                          <a class="sidenav-item-link" href="view_instance_list.php">
                            <span class="nav-text">View Instance List</span>
                            
                          </a>
                        </li>
                        

                        
                        
                        
                        

                        
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#docker"
                      aria-expanded="false" aria-controls="docker">
                      <i class="mdi mdi-docker"></i>
                      <span class="nav-text">DOCKER</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="docker"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          

                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#create_instance"
                            aria-expanded="false" aria-controls="create_instance">
                            <span class="nav-text">Create Instance</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="create_instance">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sign-in.html"><i class="mdi mdi-play"></i> CentOS Instance</a>
                              </li>
                              
                              <li >
                                <a href="sign-up.html"><i class="mdi mdi-play"></i> Ubuntu Instance</a>
                              </li>

                              <li >
                                <a href="sign-up.html"><i class="mdi mdi-play"></i> Fedora Instance</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>



                        <li >
                          <a class="sidenav-item-link" href="user-profile.html">
                            <span class="nav-text">View Instance List</span>
                            
                          </a>
                        </li>
                        

                        
                        
                        
                        

                        
                      </div>
                    </ul>
                  </li>

                  <li  class="has-sub" >
                    <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#ethereum"
                      aria-expanded="false" aria-controls="ethereum">
                      <i class="mdi mdi-ethereum"></i>
                      <span class="nav-text">ETHEREUM</span> <b class="caret"></b>
                    </a>
                    <ul  class="collapse"  id="ethereum"
                      data-parent="#sidebar-menu">
                      <div class="sub-menu">
                        
                        
                          

                          
                        

                        
                        
                        <li  class="has-sub" >
                          <a class="sidenav-item-link" href="javascript:void(0)" data-toggle="collapse" data-target="#create_instance"
                            aria-expanded="false" aria-controls="create_instance">
                            <span class="nav-text">Create Instance</span> <b class="caret"></b>
                          </a>
                          <ul  class="collapse"  id="create_instance">
                            <div class="sub-menu">
                              
                              <li >
                                <a href="sign-in.html"><i class="mdi mdi-play"></i> CentOS Instance</a>
                              </li>
                              
                              <li >
                                <a href="sign-up.html"><i class="mdi mdi-play"></i> Ubuntu Instance</a>
                              </li>

                              <li >
                                <a href="sign-up.html"><i class="mdi mdi-play"></i> Fedora Instance</a>
                              </li>
                              
                            </div>
                          </ul>
                        </li>



                        <li >
                          <a class="sidenav-item-link" href="user-profile.html">
                            <span class="nav-text">View Instance List</span>
                            
                          </a>
                        </li>
                        


                      </div>
                    </ul>
                  </li>
                

                
              </ul>

            </div>

            <div class="sidebar-footer">
              <hr class="separator mb-0" />
              <div class="sidebar-footer-content">
                <h6 class="text-uppercase">
                  Cpu Uses <span class="float-right">40%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar active"
                    style="width: 40%;"
                    role="progressbar"
                  ></div>
                </div>
                <h6 class="text-uppercase">
                  Memory Uses <span class="float-right">65%</span>
                </h6>
                <div class="progress progress-xs">
                  <div
                    class="progress-bar progress-bar-warning"
                    style="width: 65%;"
                    role="progressbar"
                  ></div>
                </div>
              </div>
            </div>
          </div>
        </aside>


    <div class="page-wrapper">
                <!-- Header -->
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
                  <input type="text" name="query" id="search-input" class="form-control" autocomplete="off" />
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
                          <i class="mdi mdi-account-plus"></i> New user registered
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-remove"></i> User deleted
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 07 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-chart-areaspline"></i> Sales report is ready
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 12 PM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-account-supervisor"></i> New client
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 10 AM</span>
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-server-network-off"></i> Server overloaded
                          <span class=" font-size-12 d-inline-block float-right"><i class="mdi mdi-clock-outline"></i> 05 AM</span>
                        </a>
                      </li>
                      <li class="dropdown-footer">
                        <a class="text-center" href="#"> View All </a>
                      </li>
                    </ul>
                  </li>
                  <li class="right-sidebar-in right-sidebar-2-menu">
                    <i class="mdi mdi-settings mdi-spin"></i>
                  </li>
                  <!-- User Account -->
                  <li class="dropdown user-menu">
                    <button href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
                      <img src="assets/img/user/user.png" class="user-image" alt="User Image" />
                      <span class="d-none d-lg-inline-block">Abdus Salam</span>
                    </button>
                    <ul class="dropdown-menu dropdown-menu-right">
                      <!-- User image -->
                      <li class="dropdown-header">
                        <img src="assets/img/user/user.png" class="img-circle" alt="User Image" />
                        <div class="d-inline-block">
                          Abdus Salam <small class="pt-1">iamabdus@gmail.com</small>
                        </div>
                      </li>

                      <li>
                        <a href="user-profile.html">
                          <i class="mdi mdi-account"></i> My Profile
                        </a>
                      </li>
                      <li>
                        <a href="#">
                          <i class="mdi mdi-email"></i> Message
                        </a>
                      </li>
                      <li>
                        <a href="#"> <i class="mdi mdi-diamond-stone"></i> Projects </a>
                      </li>
                      <li class="right-sidebar-in">
                        <a href="javascript:0"> <i class="mdi mdi-settings"></i> Setting </a>
                      </li>

                      <li class="dropdown-footer">
                        <a href="index.html"> <i class="mdi mdi-logout"></i> Log Out </a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </nav>


          </header>


          <div id="loading">
              <img src="assets/img/loading.gif" alt="loading">
          </div>

      <div class="content-wrapper">
        <div class="content">							<div class="row">
								<div class="col-lg-6">
									<div class="card card-default">
										<div class="card-header card-header-border-bottom">
											<h2><b><i class="mdi mdi-desktop-mac"></i> CentOS 인스턴스 생성</b></h2>
										</div>
										<div class="card-body">
											<form method="POST" name="create_centos_instance" id="create_centos_instance" action="create_centos_bash.php">
												<div class="form-group">
													<label for="exampleFormControlInput1"><b>인스턴스 이름</b></label>
													<input type="text" class="form-control" name="name" placeholder="생성하고자 하는 인스턴스 이름을 입력하세요.">
													<span class="mt-2 d-block">이미 존재하는 인스턴스 이름은 사용할 수 없습니다.</span>
												</div>
                        <div class="form-group">
													<label for="exampleFormControlSelect12"><b>CPU</b></label>
													<select class="form-control" name="cpu">
														<option value="1">1 EA</option>
                          </select>
                          <span class="mt-2 d-block">현재 CPU 1개 인스턴스 생성만 가능합니다.</span>
												</div>
                        <div class="form-group">
													<label for="exampleFormControlSelect12"><b>RAM</b></label>
													<select class="form-control" name="ram">
														<option value="1">1 GB</option>
                          </select>
                          <span class="mt-2 d-block">현재 RAM 1GB 인스턴스 생성만 가능합니다.</span>
                        </div>
                        <div class="form-group">
													<label for="exampleFormControlSelect12"><b>추가 저장소 (HDD)</b></label>
													<select class="form-control" name="disk">
														<option value="none">사용 안 함</option>
														<option value="1">1 GB</option>
														<option value="2">2 GB</option>
														<option value="3">3 GB</option>
														<option value="4">4 GB</option>
														<option value="5">5 GB</option>
                          </select>
                          <span class="mt-2 d-block">추가하여 사용할 저장소 용량을 선택하세요.</span>
                        </div>
                        <div class="form-group">
													<label for="exampleFormControlSelect12"><b>네트워크</b></label>
													<?php
                              $conn = mysqli_connect( '192.168.2.200', 'root', 'root', 'KVM_DB' );
                              $sql = "SELECT * FROM Virtual_Network;";
                              $result = mysqli_query( $conn, $sql );
                              echo "<select class='form-control' name='network'>";
                              while($row = mysqli_fetch_array($result)) {
                              echo "<option value=".$row['NAME'].">[ ".$row['NAME']." ] ".$row['NETWORK']."/24 (".$row['TYPE'].")</option>";
                             }
                              echo "</select>";
                              mysqli_close($conn);
                          ?>  
                          <span class="mt-2 d-block">인스턴스에 연결할 네트워크를 선택하세요.</span>
                        </div>
                       
                          
													<button type="submit" class="btn btn-primary btn-default" id="create_centos_instance" onclick="check(); return false;">만들기</button>
													<button type="reset" class="btn btn-secondary btn-default">초기화</button>
                        
											</form>
										</div>
									</div>
                  </div>

									
</div>

        

        <div class="right-sidebar-2">
    <div class="right-sidebar-container-2">
      <div class="slim-scroll-right-sidebar-2">

      <div class="right-sidebar-2-header">
        <h2>Layout Settings</h2>
        <p>User Interface Settings</p>
        <div class="btn-close-right-sidebar-2">
          <i class="mdi mdi-window-close"></i>
        </div>
      </div>

      <div class="right-sidebar-2-body">
        <span class="right-sidebar-2-subtitle">Header Layout</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-fixed-to btn-right-sidebar-2-active">Fixed</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-static-to">Static</a>
        </div>

        <span class="right-sidebar-2-subtitle">Sidebar Layout</span>
        <div class="no-col-space">
          <select class="right-sidebar-2-select" id="sidebar-option-select">
            <option value="sidebar-fixed">Fixed Default</option>
            <option value="sidebar-fixed-minified">Fixed Minified</option>
            <option value="sidebar-fixed-offcanvas">Fixed Offcanvas</option>
            <option value="sidebar-static">Static Default</option>
            <option value="sidebar-static-minified">Static Minified</option>
            <option value="sidebar-static-offcanvas">Static Offcanvas</option>
          </select>
        </div>

        <span class="right-sidebar-2-subtitle">Header Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active header-light-to">Light</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 header-dark-to">Dark</a>
        </div>

        <span class="right-sidebar-2-subtitle">Navigation Background</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active sidebar-dark-to">Dark</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 sidebar-light-to">Light</a>
        </div>

        <span class="right-sidebar-2-subtitle">Direction</span>
        <div class="no-col-space">
          <a href="javascript:void(0);" class="btn-right-sidebar-2 btn-right-sidebar-2-active ltr-to">LTR</a>
          <a href="javascript:void(0);" class="btn-right-sidebar-2 rtl-to">RTL</a>
        </div>

        <div class="d-flex justify-content-center" style="padding-top: 30px">
          <div id="reset-options" style="width: auto; cursor: pointer" class="btn-right-sidebar-2 btn-reset">Reset
            Settings</div>
        </div>

      </div>

    </div>
  </div>

</div>

      </div>

                <footer class="footer mt-auto">
            <div class="copyright bg-white">
              <p>
                &copy; <span id="copy-year">2019</span> Copyright Sleek Dashboard Bootstrap Template by
                <a
                  class="text-primary"
                  href="http://www.iamabdus.com/"
                  target="_blank"
                  >Abdus</a
                >.
              </p>
            </div>
            <script>
                var d = new Date();
                var year = d.getFullYear();
                document.getElementById("copy-year").innerHTML = year;
            </script>
          </footer>

    </div>
  </div>

  <script src="assets/plugins/jquery/jquery.min.js"></script>
<script src="assets/plugins/slimscrollbar/jquery.slimscroll.min.js"></script>
<script src="assets/plugins/jekyll-search.min.js"></script>



<script src="assets/js/sleek.bundle.js"></script>
</body>

</html>
