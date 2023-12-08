<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">
            
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-build"></i>
                    </span>
                    <span class="title">Layout Utama</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li><a href="index.html">Navbar</a></li>
                    <li><a href="index.html">Footer</a></li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-home"></i>
                    </span>
                    <span class="title">Beranda</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="@if($title=="Section 1")active @endif"><a href="{{ route('beranda.section1') }}">Hero</a></li>
                    <li class="@if($title=="Section 2")active @endif"><a href="{{ route('beranda.section2') }}">About</a></li>
                    <li class="@if($title=="Section 3")active @endif"><a href="{{ route('beranda.section3') }}">Features</a></li>
                    <li class="@if($title=="Section 4")active @endif"><a href="{{ route('beranda.section4') }}">Projects</a></li>
                    <li class="@if($title=="Section 5")active @endif"><a href="{{ route('beranda.section5') }}">Events</a></li>
                    <li class="@if($title=="Section 6")active @endif"><a href="{{ route('beranda.section6') }}">Articles</a></li>
                    <li class="@if($title=="Section 7")active @endif"><a href="{{ route('beranda.section7') }}">Offers</a></li>                    
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-user"></i>
                    </span>
                    <span class="title">Profil</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="@if($title=="Profil Section 1")active @endif"><a href="{{ route('profil.section1') }}">Section 1</a></li>

                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-project"></i>
                    </span>
                    <span class="title">Program</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                {{-- <ul class="dropdown-menu">
                    <li><a href="index.html">Section 1</a></li>
                </ul> --}}
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-book"></i>
                    </span>
                    <span class="title">Riset</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                {{-- <ul class="dropdown-menu">
                    <li><a href="index.html">Section 1</a></li>
                </ul> --}}
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-calendar"></i>
                    </span>
                    <span class="title">Event</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                {{-- <ul class="dropdown-menu">
                    <li><a href="index.html">Section 1</a></li>
                </ul> --}}
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file-text"></i>
                    </span>
                    <span class="title">Berita</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                {{-- <ul class="dropdown-menu">
                    <li><a href="index.html">Section 1</a></li>
                </ul> --}}
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-table"></i>
                    </span>
                    <span class="title">Galeri</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li class="@if($title=="Galeri Section 1")active @endif"><a href="{{ route('galeri.section1') }}">Section 1</a></li>
                </ul>
            </li>
            <!--
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">Apps</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="app-chat.html">Chat</a>
                    </li>
                    <li>
                        <a href="app-file-manager.html">File Manager</a>
                    </li>
                    <li>
                        <a href="app-mail.html">Mail</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Projects</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="app-project-list.html">Project List</a>
                            </li>
                            <li>
                                <a href="app-project-details.html">Project Details</a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>E-commerce</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="app-e-commerce-order-list.html">Orders List</a>
                            </li>
                            <li>
                                <a href="app-e-commerce-products.html">Products</a>
                            </li>
                            <li>
                                <a href="app-e-commerce-products-list.html">Products List</a>
                            </li>
                            <li>
                                <a href="app-e-commerce-products-edit.html">Products Edit</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-build"></i>
                    </span>
                    <span class="title">UI Elements</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="avatar.html">Avatar</a>
                    </li>
                    <li>
                        <a href="alert.html">Alert</a>
                    </li>
                    <li>
                        <a href="badge.html">Badge</a>
                    </li>
                    <li>
                        <a href="buttons.html">Buttons</a>
                    </li>
                    <li>
                        <a href="cards.html">Cards</a>
                    </li>
                    <li>
                        <a href="icons.html">Icons</a>
                    </li>
                    <li>
                        <a href="lists.html">Lists</a>
                    </li>
                    <li>
                        <a href="typography.html">Typography</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-hdd"></i>
                    </span>
                    <span class="title">Components</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="accordion.html">Accordion</a>
                    </li>
                    <li>
                        <a href="carousel.html">Carousel</a>
                    </li>
                    <li>
                        <a href="dropdown.html">Dropdown</a>
                    </li>
                    <li>
                        <a href="modals.html">Modals</a>
                    </li>
                    <li>
                        <a href="toasts.html">Toasts</a>
                    </li>
                    <li>
                        <a href="popover.html">Popover</a>
                    </li>
                    <li>
                        <a href="slider-progress.html">Slider & Progress</a>
                    </li>
                    <li>
                        <a href="tabs.html">Tabs</a>
                    </li>
                    <li>
                        <a href="tooltips.html">Tooltips</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-form"></i>
                    </span>
                    <span class="title">Forms</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="form-elements.html">Form Elements</a>
                    </li>
                    <li>
                        <a href="form-layouts.html">Form Layouts</a>
                    </li>
                    <li>
                        <a href="form-validation.html">Form Validation</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-table"></i>
                    </span>
                    <span class="title">Tables</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="basic-table.html">Basic Table</a>
                    </li>
                    <li>
                        <a href="data-table.html">Data Table</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-pie-chart"></i>
                    </span>
                    <span class="title">Charts</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="chartist.html">Chartist</a>
                    </li>
                    <li>
                        <a href="chartjs.html">ChartJs</a>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-file"></i>
                    </span>
                    <span class="title">Pages</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="profile.html">Profile</a>
                    </li>
                    <li>
                        <a href="invoice.html">Invoice</a>
                    </li>
                    <li>
                        <a href="members.html">Members</a>
                    </li>
                    <li>
                        <a href="pricing.html">Pricing</a>
                    </li>
                    <li>
                        <a href="setting.html">Setting</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a href="javascript:void(0);">
                            <span>Blog</span>
                            <span class="arrow">
                                <i class="arrow-icon"></i>
                            </span>
                        </a>
                        <ul class="dropdown-menu">
                            <li>
                                <a href="blog-grid.html">Blog Grid</a>
                            </li>
                            <li>
                                <a href="blog-list.html">Blog List</a>
                            </li>
                            <li>
                                <a href="blog-post.html">Blog Post</a>
                            </li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-lock"></i>
                    </span>
                    <span class="title">Authentication</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="login-1.html">Login 1</a>
                    </li>
                    <li>
                        <a href="login-2.html">Login 2</a>
                    </li>
                    <li>
                        <a href="login-3.html">Login 3</a>
                    </li>
                    <li>
                        <a href="sign-up-1.html">Sign Up 1</a>
                    </li>
                    <li>
                        <a href="sign-up-2.html">Sign Up 2</a>
                    </li>
                    <li>
                        <a href="sign-up-3.html">Sign Up 3</a>
                    </li>
                    <li>
                        <a href="error-1.html">Error 1</a>
                    </li>
                    <li>
                        <a href="error-2.html">Error 2</a>
                    </li>
                </ul>
            </li>
        -->
        </ul>
    </div>
</div>
<!-- Side Nav END -->