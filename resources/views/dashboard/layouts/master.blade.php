<!DOCTYPE html>
<html lang="IR-fa" dir="rtl">

<head>
    @include('dashboard.layouts.main-head')
</head>


<body class="navbar-fixed sidebar-nav fixed-nav">
    @include('dashboard.layouts.main-header')
    <div class="sidebar">
        <nav class="sidebar-nav">
            <ul class="nav">
                <li class="nav-item">
                    <a class="nav-link" href="index.html"><i class="icon-speedometer"></i> داشبرد <span
                            class="tag tag-info">جدید</span></a>
                </li>

                <li class="nav-title">
                    مدیریت کاربران
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-user-follow"></i> ثبت کاربر</a>
                    <a class="nav-link" href="#"><i class="icon-people"></i> لیست کاربران</a>
                    <a class="nav-link" href="#"><i class="icon-user-following"></i> دسترسی کاربران</a>
                </li>

                <li class="nav-title">
                    مدیریت فایل ها
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-docs"></i> لیست فایل ها</a>
                </li>

                <li class="nav-title">
                    گزارش گیری
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"><i class="icon-people"></i> کاربران</a>
                    <a class="nav-link" href="#"><i class="icon-docs"></i> فایل ها</a>
                </li>
                <!--<li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-puzzle"></i> ثبت کاربر جدید</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="components-buttons.html"><i class="icon-puzzle"></i> لیست کاربران</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-social-buttons.html"><i class="icon-puzzle"></i> Social Buttons</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-cards.html"><i class="icon-puzzle"></i> Cards</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-forms.html"><i class="icon-puzzle"></i> Forms</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-switches.html"><i class="icon-puzzle"></i> Switches</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="components-tables.html"><i class="icon-puzzle"></i> Tables</a>
                        </li>
                    </ul>
                </li>-->

                <!--<li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Icons</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="icons-font-awesome.html"><i class="icon-star"></i> Font Awesome</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="icons-simple-line-icons.html"><i class="icon-star"></i> Simple Line Icons</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="widgets.html"><i class="icon-calculator"></i> Widgets <span class="tag tag-info">NEW</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="charts.html"><i class="icon-pie-chart"></i> Charts</a>
                </li>-->
                <!--<li class="divider"></li>
                <li class="nav-title">
                    Extras
                </li>
                <li class="nav-item nav-dropdown">
                    <a class="nav-link nav-dropdown-toggle" href="#"><i class="icon-star"></i> Pages</a>
                    <ul class="nav-dropdown-items">
                        <li class="nav-item">
                            <a class="nav-link" href="pages-login.html" target="_top"><i class="icon-star"></i> Login</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages-register.html" target="_top"><i class="icon-star"></i> Register</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages-404.html" target="_top"><i class="icon-star"></i> Error 404</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="pages-500.html" target="_top"><i class="icon-star"></i> Error 500</a>
                        </li>
                    </ul>
                </li>-->

            </ul>
        </nav>
    </div>
    <!-- Main content -->
    <main class="main">

        <!-- Breadcrumb -->
        @yield('content')
        <!--/.container-fluid-->
    </main>

    <aside class="aside-menu">
        <ul class="nav nav-tabs" role="tablist">
            <li class="nav-item">
                <a class="nav-link active" data-toggle="tab" href="#timeline" role="tab"><i
                        class="icon-list"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#messages" role="tab"><i
                        class="icon-speech"></i></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#settings" role="tab"><i
                        class="icon-settings"></i></a>
            </li>
        </ul>
        <!-- Tab panes -->
        <div class="tab-content">
            <div class="tab-pane active" id="timeline" role="tabpanel">
                <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                    <small><b>Today</b>
                    </small>
                </div>
                <hr class="transparent m-x-1 m-y-0">
                <div class="callout callout-warning m-a-0 p-y-1">
                    <div class="avatar pull-xs-right">
                        <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Meeting with
                        <strong>Lucas</strong>
                    </div>
                    <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                </div>
                <hr class="m-x-1 m-y-0">
                <div class="callout callout-info m-a-0 p-y-1">
                    <div class="avatar pull-xs-right">
                        <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                    </div>
                    <div>Skype with
                        <strong>Megan</strong>
                    </div>
                    <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 5pm</small>
                    <small class="text-muted"><i class="icon-social-skype"></i>&nbsp; On-line</small>
                </div>
                <hr class="transparent m-x-1 m-y-0">
                <div class="callout m-a-0 p-y-h text-muted text-xs-center bg-faded text-uppercase">
                    <small><b>Tomorrow</b>
                    </small>
                </div>
                <hr class="transparent m-x-1 m-y-0">
                <div class="callout callout-danger m-a-0 p-y-1">
                    <div>New UI Project -
                        <strong>deadline</strong>
                    </div>
                    <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 10 - 11pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                    <div class="avatars-stack m-t-h">
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="m-x-1 m-y-0">
                <div class="callout callout-success m-a-0 p-y-1">
                    <div>
                        <strong>#10 Startups.Garden</strong>Meetup
                    </div>
                    <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 1 - 3pm</small>
                    <small class="text-muted"><i class="icon-location-pin"></i>&nbsp; Palo Alto, CA</small>
                </div>
                <hr class="m-x-1 m-y-0">
                <div class="callout callout-primary m-a-0 p-y-1">
                    <div>
                        <strong>Team meeting</strong>
                    </div>
                    <small class="text-muted m-r-1"><i class="icon-calendar"></i>&nbsp; 4 - 6pm</small>
                    <small class="text-muted"><i class="icon-home"></i>&nbsp; creativeLabs HQ</small>
                    <div class="avatars-stack m-t-h">
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/2.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/3.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/4.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/5.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/6.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                        <div class="avatar avatar-xs">
                            <img src="img/avatars/8.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                        </div>
                    </div>
                </div>
                <hr class="m-x-1 m-y-0">
            </div>
            <div class="tab-pane p-a-1" id="messages" role="tabpanel">
                <div class="message">
                    <div class="p-y-1 p-b-3 m-r-1 pull-left">
                        <div class="avatar">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status tag-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted pull-left m-t-q">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="p-y-1 p-b-3 m-r-1 pull-left">
                        <div class="avatar">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status tag-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted pull-left m-t-q">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="p-y-1 p-b-3 m-r-1 pull-left">
                        <div class="avatar">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status tag-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted pull-right m-t-q">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="p-y-1 p-b-3 m-r-1 pull-left">
                        <div class="avatar">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status tag-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted pull-right m-t-q">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
                <hr>
                <div class="message">
                    <div class="p-y-1 p-b-3 m-r-1 pull-left">
                        <div class="avatar">
                            <img src="img/avatars/7.jpg" class="img-avatar" alt="admin@bootstrapmaster.com">
                            <span class="avatar-status tag-success"></span>
                        </div>
                    </div>
                    <div>
                        <small class="text-muted">Lukasz Holeczek</small>
                        <small class="text-muted pull-right m-t-q">1:52 PM</small>
                    </div>
                    <div class="text-truncate font-weight-bold">Lorem ipsum dolor sit amet</div>
                    <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt...</small>
                </div>
            </div>
            <div class="tab-pane p-a-1" id="settings" role="tabpanel">
                <h6>Settings</h6>
                <div class="aside-options">
                    <div class="clearfix m-t-2">
                        <small><b>Option 1</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                            <input type="checkbox" class="switch-input" checked>
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix m-t-1">
                        <small><b>Option 2</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                    <div>
                        <small class="text-muted">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna aliqua.</small>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix m-t-1">
                        <small><b>Option 3</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                            <input type="checkbox" class="switch-input">
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <div class="aside-options">
                    <div class="clearfix m-t-1">
                        <small><b>Option 4</b>
                        </small>
                        <label class="switch switch-text switch-pill switch-success switch-sm pull-right">
                            <input type="checkbox" class="switch-input" checked>
                            <span class="switch-label" data-on="On" data-off="Off"></span>
                            <span class="switch-handle"></span>
                        </label>
                    </div>
                </div>
                <hr>
                <h6>System Utilization</h6>
                <div class="text-uppercase m-b-q m-t-2">
                    <small><b>CPU Usage</b>
                    </small>
                </div>
                <progress class="progress progress-xs progress-info m-a-0" value="25"
                    max="100">25%</progress>
                <small class="text-muted">348 Processes. 1/4 Cores.</small>
                <div class="text-uppercase m-b-q m-t-h">
                    <small><b>Memory Usage</b>
                    </small>
                </div>
                <progress class="progress progress-xs progress-warning m-a-0" value="70"
                    max="100">70%</progress>
                <small class="text-muted">11444GB/16384MB</small>
                <div class="text-uppercase m-b-q m-t-h">
                    <small><b>SSD 1 Usage</b>
                    </small>
                </div>
                <progress class="progress progress-xs progress-danger m-a-0" value="95"
                    max="100">95%</progress>
                <small class="text-muted">243GB/256GB</small>
                <div class="text-uppercase m-b-q m-t-h">
                    <small><b>SSD 2 Usage</b>
                    </small>
                </div>
                <progress class="progress progress-xs progress-success m-a-0" value="10"
                    max="100">10%</progress>
                <small class="text-muted">25GB/256GB</small>
            </div>
        </div>
    </aside>

    @include('dashboard.layouts.Footer')
    @include('dashboard.layouts.scripts')
</body>

</html>
