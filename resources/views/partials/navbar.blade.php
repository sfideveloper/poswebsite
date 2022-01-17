<header class="header fixed-top flex-row">
    <div class="container-fluid">
    <nav class="navbar d-flex align-items-center justify-content-between">
        <div>
            <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>
            <span class="brand-big">
                @if($general_setting->site_logo)
                <img src="{{url('logo', $general_setting->site_logo)}}" height="50">&nbsp;&nbsp;
                @else
                <a href="{{url('/')}}">
                    <h1 class="d-inline">{{$general_setting->site_title}}</h1>
                </a>
                @endif
            </span>
        </div>

        <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">
            <?php 
                  $add_permission = DB::table('permissions')->where('name', 'sales-add')->first();
                  $add_permission_active = DB::table('role_has_permissions')->where([
                      ['permission_id', $add_permission->id],
                      ['role_id', $role->id]
                  ])->first();

                  $empty_database_permission = DB::table('permissions')->where('name', 'empty_database')->first();
                  $empty_database_permission_active = DB::table('role_has_permissions')->where([
                      ['permission_id', $empty_database_permission->id],
                      ['role_id', $role->id]
                  ])->first();
                    ?>
            <li class="nav-item"><a id="btnFullscreen"><i class="mdi mdi-fullscreen menu-icon"></i></a></li>
            @if(\Auth::user()->role_id <= 2) <li class="nav-item"><a href="{{route('cashRegister.index')}}"
                    title="{{trans('file.Cash Register List')}}"><i class="mdi mdi-briefcase menu-icon"></i></a></li>
                @endif
                @if($product_qty_alert_active)
                @if(($alert_product + count(\Auth::user()->unreadNotifications)) > 0)
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="mdi mdi-bell menu-icon"></i><span
                            class="badge badge-danger notification-number">{{$alert_product + count(\Auth::user()->unreadNotifications)}}</span>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications"
                        user="menu">
                        <li class="notifications">
                            <a href="{{route('report.qtyAlert')}}" class="btn btn-link"> {{$alert_product}}
                                peringatan kuantitas stok</a>
                        </li>
                        @foreach(\Auth::user()->unreadNotifications as $key => $notification)
                        <li class="notifications">
                            <a href="#" class="btn btn-link">{{ $notification->data['message'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @elseif(count(\Auth::user()->unreadNotifications) > 0)
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span
                            class="badge badge-danger notification-number">{{count(\Auth::user()->unreadNotifications)}}</span>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications"
                        user="menu">
                        @foreach(\Auth::user()->unreadNotifications as $key => $notification)
                        <li class="notifications">
                            <a href="#" class="btn btn-link">{{ $notification->data['message'] }}</a>
                        </li>
                        @endforeach
                    </ul>
                </li>
                @endif
                @endif
                <li class="nav-item">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="mdi mdi-earth menu-icon"></i>
                        <span>{{ucfirst(__('file.language'))}}</span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                        <li>
                            <a href="{{ url('language_switch/en') }}" class="btn btn-link"> English</a>
                        </li>
                        <li>
                            <a href="{{ url('language_switch/id') }}" class="btn btn-link"> Indonesia</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i>
                        <span>{{ucfirst(Auth::user()->name)}}</span> <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                        <li>
                            <a href="{{route('user.profile', ['id' => Auth::id()])}}"><i class="dripicons-user"></i>
                                {{ucfirst(trans('file.profile'))}}</a>
                        </li>
                        @if($general_setting_permission_active)
                        <li>
                            <a href="{{route('setting.general')}}"><i class="dripicons-gear"></i>
                                {{ucfirst(trans('file.settings'))}}</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{url('my-transactions/'.date('Y').'/'.date('m'))}}"><i class="dripicons-swap"></i>
                                {{ucfirst(trans('file.My Transaction'))}}</a>
                        </li>
                        @if(Auth::user()->role_id != 5)
                        <li>
                            <a href="{{url('holidays/my-holiday/'.date('Y').'/'.date('m'))}}"><i
                                    class="dripicons-vibrate"></i> {{ucfirst(trans('file.My Holiday'))}}</a>
                        </li>
                        @endif
                        @if($empty_database_permission_active)
                        <li>
                            <a onclick="return confirm('Are you sure want to delete? If you do this all of your data will be lost.')"
                                href="{{route('setting.emptyDatabase')}}"><i class="dripicons-stack"></i>
                                {{ucfirst(trans('file.Empty Database'))}}</a>
                        </li>
                        @endif
                        @if(Auth::user()->role_id != 5)
                        <li>
                            <a href="{{ url('read_me') }}"  target="_blank"><i
                                        class="dripicons-information"></i> {{ucfirst(trans('file.Help'))}}</a>
                        </li>
                        @endif
                        <li>
                            <a href="{{ route('logout') }}" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i
                                    class="dripicons-power"></i>
                                {{ucfirst(trans('file.logout'))}}
                            </a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                @csrf
                            </form>
                        </li>
                    </ul>
                </li>
        </ul>
    </nav>
    </div>
</header>
