<aside class="main-sidebar sidebar-dark-primary elevation-4">
    <!-- Brand Logo -->
    <a href="/home" class="brand-link">
        <img src="@if ($logo) {{ $logo }} @else {{ asset('dashboard/dist/img/AdminLTELogo.png') }} @endif"
            alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
            style="opacity: .8;width: 30px;
        height: 30px;
        object-fit: contain;object-position:center;">
        <span class="brand-text font-weight-light">{{ $name }}</span>
    </a>
    <!-- Sidebar -->
    <div class="sidebar">
        <!-- Sidebar user panel (optional) -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">
            <div class="image">
                @if (Auth()->user()->image)
                    <img src="{{ Auth()->user()->image }}" class="img-circle elevation-2" alt="User Image"
                        style="width: 30px;
                height: 30px;
                object-fit: contain;object-position:center;">
                @else
                    <img src="{{ asset('dashboard/dist/img/user2-160x160.jpg') }}" class="img-circle elevation-2"
                        alt="User Image">
                @endif
            </div>
            <div class="info">
                <a href="#" class="d-block">{{ Auth()->user()->name }}</a>
            </div>
        </div>
        <!-- Sidebar Menu -->
        <nav class="mt-2">
            <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu"
                data-accordion="false">
                <!-- Add icons to the links using the .nav-icon class
               with font-awesome or any other icon font library -->
                <li class="nav-item">
                    <a href="{{ url('home') }}" class="nav-link {{ activeChildNavBar('home') }}">
                        <i class="nav-icon fas fa-tachometer-alt"></i>
                        <p>
                            Dashboard
                        </p>
                    </a>
                </li>

                @canany([config('constants.Permissions.real_estate'), config('constants.Permissions.xml_listing'),
                    config('constants.Permissions.offplan')])
                    <li class="nav-item {{ activeParentNavBar('realEstate', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('realEstate', 'active') }}">
                            <i class="nav-icon fa fa-building"></i>
                            <p>
                                Real Estate
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            @can(config('constants.Permissions.offplan'))
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/projects') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.projects') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Off-Plan</p>
                                    </a>
                                </li>
                            @endcan

                            @can(config('constants.Permissions.xml_listings'))
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/properties') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.properties') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>XML Listings</p>
                                    </a>
                                </li>
                            @endcan
                            @can(config('constants.Permissions.real_estate'))
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/floorPlans') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.floorPlans') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Floor Plans</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/accommodations') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.accommodations') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Accommodations</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/amenities') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.amenities') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Amenities</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('dashboard/offer-types') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.offer-types') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Offer Types</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/developers') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.developers') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Developers</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/completion-statuses') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.completion-statuses') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Completion Status</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/agents') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.agents') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Agents</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('dashboard/categories') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.categories') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Categories</p>
                                    </a>
                                </li>

                                <li class="nav-item">
                                    <a href="{{ url('dashboard/communities') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.communities') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Communities</p>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a href="{{ url('dashboard/subCommunities') }}"
                                        class="nav-link {{ activeChildNavBar('dashboard.subCommunities') }}">
                                        <i class="far fa-circle nav-icon"></i>
                                        <p>Sub Communities</p>
                                    </a>
                                </li>
                            @endcan
                        </ul>
                    </li>
                @endcanany
                </li>
                @can(config('constants.Permissions.leads'))
                    <li class="nav-item {{ activeParentNavBar('leadManagement', 'menu-open') }}">
                        <a class="nav-link  {{ activeParentNavBar('leadManagement', 'active') }}">
                            <i class="nav-icon fa fa-bullhorn"></i>
                            <p>
                                Lead Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/leads') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.leads') }} ">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Lead List</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan

                @can(config('constants.Permissions.tags'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/tags') }}" class="nav-link {{ activeChildNavBar('dashboard.tags') }}">
                            <i class="nav-icon fa fa-tags"></i>
                            <p>Tags</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.awards'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/awards') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.awards') }}">
                            <i class="nav-icon fas fa-award"></i>
                            <p>Awards</p>
                        </a>
                    </li>
                @endcan

                @can(config('constants.Permissions.languages'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/languages') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.languages') }}">
                            <i class="nav-icon fa fa-language"></i>
                            <p>Languages</p>
                        </a>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ url('dashboard/defaultStats') }}"
                        class="nav-link {{ activeChildNavBar('dashboard.defaultStats') }}">
                        <i class="nav-icon fa fa-language"></i>
                        <p>Default Stat Data</p>
                    </a>
                </li>
                @can(config('constants.Permissions.content_management'))
                    <li class="nav-item {{ activeParentNavBar('contentManagement', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('contentManagement', 'active') }}">
                            <i class="nav-icon fa fa-file"></i>
                            <p>
                                Content Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/articles') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.articles') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Articles</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/video-gallery') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.video-gallery') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Video Gallery</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.testimonials'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/testimonials') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.testimonials') }}">
                            <i class="nav-icon fa fa-quote-left"></i>
                            <p>Testimonials</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.services'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/services') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.services') }}">
                            <i class="nav-icon fa fa-handshake"></i>
                            <p>Services</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.career_management'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/careers') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.careers') }}">
                            <i class="nav-icon fa fa-graduation-cap"></i>
                            <p>Career Management</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.seo'))
                    <li class="nav-item {{ activeParentNavBar('SEO', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('SEO', 'active') }}">
                            <i class="nav-icon fas fa-search-plus"></i>
                            <p>
                                SEO
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/page-tags') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.page-tags') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Page Tags</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.page_contents'))
                    <li class="nav-item {{ activeParentNavBar('pageContents', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('pageContents', 'active') }}">

                            <i class="nav-icon  fa fa-file"></i>
                            <p>
                                Pages Contents
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/dynamicPages') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.dynamic-pages') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Dynamic Pages</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/home-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.home-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Home Page</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/about-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.about-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/properties-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.properties-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Properties</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/rent-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.rent-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Rent</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/resale-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.resale-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Resale</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/offPlan-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.offPlan-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Off-Plan</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/developers-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.developers-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Developers</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/communities-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.communities-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Communities</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/whyInvest-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.whyInvest-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Why Invest in Dubai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/aboutDubai-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.aboutDubai-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>About Dubai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/factFigure-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.factFigure-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Facts & Figures</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/buyerGuide-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.buyerGuide-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Buyer`s Guide</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/sellerGuide-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.sellerGuide-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Seller`s Guide</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/relocatingToDubai-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.relocatingToDubai-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Relocating to Dubai</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/termCondition-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.termCondition-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Terms & Conditions </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/privacyPolicy-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.privacyPolicy-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Privacy Policy</p>
                                </a>
                            </li>

                            <li class="nav-item">
                                <a href="{{ url('dashboard/pageContents/faqs-page') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.pageContents.faqs-page') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>FAQS</p>
                                </a>
                            </li>

                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.website_setting'))
                    <li class="nav-item {{ activeParentNavBar('websiteSettings', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('websiteSettings', 'active') }}">
                            <i class="nav-icon fa fa-cogs"></i>
                            <p>
                                Website Settings
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/social-info') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.social-info') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Social Info</p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/basic-info') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.basic-info') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Basic Info</p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                @can(config('constants.Permissions.cronJobs'))
                    <li class="nav-item">
                        <a href="{{ url('dashboard/cronJobs') }}"
                            class="nav-link {{ activeChildNavBar('dashboard.cronJobs') }}">
                            <i class="nav-icon fa fa-tags"></i>
                            <p>Cron Jobs</p>
                        </a>
                    </li>
                @endcan
                @can(config('constants.Permissions.user_management'))
                    <li class="nav-item {{ activeParentNavBar('userManagement', 'menu-open') }}">
                        <a href="#" class="nav-link {{ activeParentNavBar('userManagement', 'active') }}">
                            <i class="nav-icon fa fa-users"></i>
                            <p>
                                User Management
                                <i class="right fas fa-angle-left"></i>
                            </p>
                        </a>
                        <ul class="nav nav-treeview">
                            <li class="nav-item">
                                <a href="{{ url('dashboard/users') }}"
                                    class="nav-link  {{ activeChildNavBar('dashboard.users') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Users </p>
                                </a>
                            </li>
                            <li class="nav-item">
                                <a href="{{ url('dashboard/roles') }}"
                                    class="nav-link {{ activeChildNavBar('dashboard.roles') }}">
                                    <i class="far fa-circle nav-icon"></i>
                                    <p>Roles </p>
                                </a>
                            </li>
                        </ul>
                    </li>
                @endcan
                <li class="nav-item">
                    <a href="{{ url('dashboard/profileSettings') }}"
                        class="nav-link {{ activeChildNavBar('dashboard.profileSettings') }}">
                        <i class="nav-icon fa fa-user-md"></i>
                        <p>Profile Setting</p>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <i class="nav-icon fa fa-times"></i>
                        <p>Logout</p>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST">
                            @csrf
                        </form>
                    </a>
                </li>
            </ul>
        </nav>
        <!-- /.sidebar-menu -->
    </div>
    <!-- /.sidebar -->
</aside>
