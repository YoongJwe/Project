<!-- LEFT SIDE NAV WITH FOOTER -->
<aside class="left-sidebar bg-sidebar">
    <div id="sidebar" class="sidebar sidebar-with-footer">
        <!-- Aplication Brand -->
        <div class="app-brand">
            <a href="/index.php" title="Sleek Dashboard" class="dashboard">
                <img src="/assets/img/logo.png" width="40px">
                    <span class="brand-name text-truncate">Blockchain Class</span>
                </a>
            </div>
            <!-- begin sidebar scrollbar -->
            <div class="sidebar-scrollbar">

                <!-- sidebar menu -->
                <ul class="nav sidebar-inner" id="sidebar-menu">

                    <li class="has-sub active expand">
                        <a class="sidenav-item-link dashboard" href="/index.php">
                            <i class="mdi mdi-view-dashboard-outline"></i>
                            <span class="nav-text">Dashboard</span>
                        </a>
                    </li>

                    <li class="has-sub">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#security"
                            aria-expanded="false"
                            aria-controls="security">
                            <i class="mdi mdi-security"></i>
                            <span class="nav-text">Security</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="security" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li >
                                    <a class="sidenav-item-link effective" href="#">
                                        <span class="nav-text">Squid Guard</span>

                                    </a>
                                </li>

                                <li >
                                    <a class="sidenav-item-link effective" href="#">
                                        <span class="nav-text">Firewall</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#kvm_network"
                            aria-expanded="false"
                            aria-controls="kvm_network">
                            <i class="mdi mdi-access-point-network"></i>
                            <span class="nav-text">KVM NETWORK</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="kvm_network" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="has-sub">
                                    <a
                                        class="sidenav-item-link"
                                        href="javascript:void(0)"
                                        data-toggle="collapse"
                                        data-target="#create_network"
                                        aria-expanded="false"
                                        aria-controls="create_network">
                                        <span class="nav-text">Create Network</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="collapse" id="create_network">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="/vnet/create_nat_network_form.php" class="effective nat-network">
                                                    <i class="mdi mdi-play"></i>
                                                    NAT Network</a>
                                            </li>

                                            <li >
                                                <a href="/vnet/create_iso_network_form.php" class="effective iso-network">
                                                    <i class="mdi mdi-play"></i>
                                                    Isolated Network</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>

                                <li >
                                    <a class="sidenav-item-link effective net-list" href="/vnet/view_network_list.php">
                                        <span class="nav-text">View Network List</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#kvm_instance"
                            aria-expanded="false"
                            aria-controls="kvm_instance">
                            <i class="mdi mdi-desktop-mac"></i>
                            <span class="nav-text">KVM INSTANCE</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="kvm_instance" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="has-sub">
                                    <a
                                        class="sidenav-item-link"
                                        href="javascript:void(0)"
                                        data-toggle="collapse"
                                        data-target="#create_instance"
                                        aria-expanded="false"
                                        aria-controls="create_instance">
                                        <span class="nav-text">Create Instance</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="collapse" id="create_instance">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="/kvm/create_centos.php" class="effective centos-create">
                                                    <i class="mdi mdi-play"></i>
                                                    CentOS Instance</a>
                                            </li>

                                            <li >
                                                <a href="/kvm/settings_ubuntu.php" class="effective ubuntu-create"> 
                                                    <i class="mdi mdi-play"></i>
                                                    Ubuntu Instance</a>
                                            </li>

                                            <li >
                                                <a href="/kvm/settings_fedora.php" class="effective fedora-create">
                                                    <i class="mdi mdi-play"></i>
                                                    Fedora Instance</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>

                                <li >
                                    <a class="sidenav-item-link effective instant-list" href="/kvm/view_instance_list.php">
                                        <span class="nav-text">View Instance List</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#docker"
                            aria-expanded="false"
                            aria-controls="docker">
                            <i class="mdi mdi-docker"></i>
                            <span class="nav-text">DOCKER</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="docker" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="has-sub">
                                    <a
                                        class="sidenav-item-link"
                                        href="javascript:void(0)"
                                        data-toggle="collapse"
                                        data-target="#create_instance"
                                        aria-expanded="false"
                                        aria-controls="create_instance">
                                        <span class="nav-text">Create Instance</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="collapse" id="create_instance">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    CentOS Instance</a>
                                            </li>

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    Ubuntu Instance</a>
                                            </li>

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    Fedora Instance</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>

                                <li >
                                    <a class="sidenav-item-link" href="#">
                                        <span class="nav-text">View Instance List</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                    <li class="has-sub">
                        <a
                            class="sidenav-item-link"
                            href="javascript:void(0)"
                            data-toggle="collapse"
                            data-target="#ethereum"
                            aria-expanded="false"
                            aria-controls="ethereum">
                            <i class="mdi mdi-ethereum"></i>
                            <span class="nav-text">ETHEREUM</span>
                            <b class="caret"></b>
                        </a>
                        <ul class="collapse" id="ethereum" data-parent="#sidebar-menu">
                            <div class="sub-menu">

                                <li class="has-sub">
                                    <a
                                        class="sidenav-item-link"
                                        href="javascript:void(0)"
                                        data-toggle="collapse"
                                        data-target="#create_instance"
                                        aria-expanded="false"
                                        aria-controls="create_instance">
                                        <span class="nav-text">Create Instance</span>
                                        <b class="caret"></b>
                                    </a>
                                    <ul class="collapse" id="create_instance">
                                        <div class="sub-menu">

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    CentOS Instance</a>
                                            </li>

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    Ubuntu Instance</a>
                                            </li>

                                            <li >
                                                <a href="#">
                                                    <i class="mdi mdi-play"></i>
                                                    Fedora Instance</a>
                                            </li>

                                        </div>
                                    </ul>
                                </li>

                                <li >
                                    <a class="sidenav-item-link" href="#">
                                        <span class="nav-text">View Instance List</span>

                                    </a>
                                </li>

                            </div>
                        </ul>
                    </li>

                </ul>

            </div>

            <div class="sidebar-footer">
                <hr class="separator mb-0"/>
                <div class="sidebar-footer-content">
                    <h6 class="text-uppercase cpu">
                        Cpu Uses
                        <span class="float-right">%</span>
                        <span class="float-right per">40</span>
                    </h6>
                    <div class="progress progress-xs cpu">
                        <div class="progress-bar active" style="width: 40%;" role="progressbar"></div>
                    </div>
                    <h6 class="text-uppercase memory">
                        Memory Uses
                        <span class="float-right">%</span>
                        <span class="float-right per">65</span>
                    </h6>
                    <div class="progress progress-xs memory">
                        <div
                            class="progress-bar progress-bar-warning"
                            style="width: 65%;"
                            role="progressbar"></div>
                    </div>
                </div>
            </div>
        </div>
    </aside>

    <script>
     $(function () {
        $nav = $('#sidebar-menu');
        $1depth=$nav.children('.has-sub');
        $1depth.on('click', function(){
            $1depth.removeClass('active');
            $(this).addClass('active');
        });

        $main =$('.dashboard')
        $main.on('click', function(){
           localStorage.setItem('click', false);
           localStorage.setItem('click', false);
        });

        $realLink=$('a.effective');
        $realLink.on('click', function(){
            localStorage.setItem('click', true);
        });

        if(localStorage.getItem('click')){
            $clickUrl=$('#body').data('page');
            $this=$("."+$clickUrl)
            
            $this.attr('style','color:#fff');
            $this.parents('.collapse').addClass('show');
            $this.closest('.collapse').parents('.has-sub').addClass('active').addClass('expand');
            $this.closest('.collapse').parents('.has-sub').children('.sidenav-item-link').removeClass('collapsed').attr('aria-expanded',"true");
        }

       
    </script>
<!-- //LEFT SIDE NAV WITH FOOTER -->