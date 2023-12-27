<div class="sidebar sidebar-dark bg-light-orange sidebar-main sidebar-expand-md">


    <!-- Sidebar mobile toggler -->
    <div class="sidebar-mobile-toggler text-center">
        <a href="#" class="sidebar-mobile-main-toggle">
            <i class="icon-arrow-left8"></i>
        </a>
        Navigation
        <a href="#" class="sidebar-mobile-expand">
            <i class="icon-screen-full"></i>
            <i class="icon-screen-normal"></i>
        </a>
    </div>
    <!-- /sidebar mobile toggler -->

    <!-- Sidebar content -->
    <div class="sidebar-content">

        <!-- User menu -->
        <div class="sidebar-user">
            <div class="card-body">
                <div class="media">
                    <!-- <div class="mr-3">
                        <a href="{{ route('my_account') }}"><img src="{{ Auth::user()->photo }}" width="38" height="38" class="rounded-circle" alt="photo"></a>
                    </div> -->

                    <div class="media-body">
                        <div class="media-title font-weight-semibold">{{ Auth::user()->name }}</div>
                        <div class="font-size-xs opacity-50">
                            <i class="icon-user font-size-sm"></i> &nbsp;{{ ucwords(str_replace('_', ' ', Auth::user()->user_type == 'teacher' ? 'guest' : Auth::user()->user_type)) }}
                        </div>
                    </div>

                    <div class="ml-3 align-self-center">
                        <a href="{{ route('my_account') }}" class="text-white"><i class="icon-cog3"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <!-- /user menu -->

        <!-- Main navigation -->
        <div class="card card-sidebar-mobile">
            <ul class="nav nav-sidebar" data-nav-type="accordion">

                <!-- Main -->
                <li class="nav-item">
                    <a href="{{ route('dashboard') }}" class="nav-link {{ (Route::is('dashboard')) ? 'active' : '' }}">
                        <i class="icon-home4"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                {{--Timetable/Budgeting--}}
                @if(Qs::userIsAcademic())
                <li class="nav-item {{ Route::currentRouteName() == 'tt.index' ? 'active' : '' }}">
                    <a href="{{ route('tt.index') }}" class="nav-link"><i class="icon-calculator"></i> <span>Budgeting</span></a>
                </li>

                @if (auth()->user()->user_type == 'super_admin' || auth()->user()->user_type == 'admin')

                @else
                    <li class="nav-item {{ Route::currentRouteName() == 'places.index' ? 'active' : '' }}">
                        <a href="{{ route('showplaces') }}" class="nav-link"><i class="icon-home"></i> <span>Places</span></a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'places.favorites' ? 'active' : '' }}">
                        <a href="{{ route('favorites') }}" class="nav-link"><i class="icon-pin"></i> <span>Favourite</span></a>
                    </li>
                    <li class="nav-item {{ Route::currentRouteName() == 'places.add_review' ? 'active' : '' }}">
                        <a href="{{route('comments.index') }}" class="nav-link"><i class="icon-comment"></i> <span>Comments</span></a>
                    </li>
                @endif

                @endif

                @if(Qs::userIsTeamSA())
                    {{--Manage Users--}}
                    <li class="nav-item">
                        <a href="{{ route('users.index') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['users.index', 'users.show', 'users.edit']) ? 'active' : '' }}"><i class="icon-users4"></i> <span> Users</span></a>
                    </li>

                    {{--Manage Places--}}
                    <li class="nav-item">
                        <a href="{{ route('places.index') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['places.index','places.edit']) ? 'active' : '' }}"><i class="icon-home9"></i> <span> Places</span></a>
                    </li>

                    {{--Manage Comments--}}
                    <li class="nav-item {{ Route::currentRouteName() == 'places.add_review' ? 'active' : '' }}">
                        <a href="{{route('comments.index') }}" class="nav-link"><i class="icon-comment"></i> <span>Comments</span></a>
                    </li>

                    <li class="nav-item">
                        <a href="{{ route('sections.index') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['sections.index','sections.edit',]) ? 'active' : '' }}"><i class="icon-calendar"></i> <span>Calender Events</span></a>
                    </li>


                @endif

                @include('pages.'.Qs::getUserType().'.menu')

                {{--Manage Account--}}
                <li class="nav-item">
                    <a href="{{ route('my_account') }}" class="nav-link {{ in_array(Route::currentRouteName(), ['my_account']) ? 'active' : '' }}"><i class="icon-user"></i> <span>My Account</span></a>
                </li>

                {{--Log Out--}}
                <li class="nav-item {{ Route::currentRouteName() == 'logout' ? 'active' : '' }}">
                    <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();" class="nav-link"><i class="icon-switch2"></i><span> Logout</span></a>
                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                </li>


                </ul>
            </div>
        </div>
</div>
