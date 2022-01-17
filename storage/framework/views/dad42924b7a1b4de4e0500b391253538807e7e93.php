<header class="header fixed-top flex-row">
    <div class="container-fluid">
    <nav class="navbar d-flex align-items-center justify-content-between">
        <div>
            <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>
            <span class="brand-big">
                <?php if($general_setting->site_logo): ?>
                <img src="<?php echo e(url('logo', $general_setting->site_logo)); ?>" height="50">&nbsp;&nbsp;
                <?php else: ?>
                <a href="<?php echo e(url('/')); ?>">
                    <h1 class="d-inline"><?php echo e($general_setting->site_title); ?></h1>
                </a>
                <?php endif; ?>
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
            <?php if(\Auth::user()->role_id <= 2): ?> <li class="nav-item"><a href="<?php echo e(route('cashRegister.index')); ?>"
                    title="<?php echo e(trans('file.Cash Register List')); ?>"><i class="mdi mdi-briefcase menu-icon"></i></a></li>
                <?php endif; ?>
                <?php if($product_qty_alert_active): ?>
                <?php if(($alert_product + count(\Auth::user()->unreadNotifications)) > 0): ?>
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="mdi mdi-bell menu-icon"></i><span
                            class="badge badge-danger notification-number"><?php echo e($alert_product + count(\Auth::user()->unreadNotifications)); ?></span>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications"
                        user="menu">
                        <li class="notifications">
                            <a href="<?php echo e(route('report.qtyAlert')); ?>" class="btn btn-link"> <?php echo e($alert_product); ?>

                                peringatan kuantitas stok</a>
                        </li>
                        <?php $__currentLoopData = \Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="notifications">
                            <a href="#" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php elseif(count(\Auth::user()->unreadNotifications) > 0): ?>
                <li class="nav-item" id="notification-icon">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-bell"></i><span
                            class="badge badge-danger notification-number"><?php echo e(count(\Auth::user()->unreadNotifications)); ?></span>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default notifications"
                        user="menu">
                        <?php $__currentLoopData = \Auth::user()->unreadNotifications; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $notification): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <li class="notifications">
                            <a href="#" class="btn btn-link"><?php echo e($notification->data['message']); ?></a>
                        </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                </li>
                <?php endif; ?>
                <?php endif; ?>
                <li class="nav-item">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="mdi mdi-earth menu-icon"></i>
                        <span><?php echo e(ucfirst(__('file.language'))); ?></span> <i class="fa fa-angle-down"></i></a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                        <li>
                            <a href="<?php echo e(url('language_switch/en')); ?>" class="btn btn-link"> English</a>
                        </li>
                        <li>
                            <a href="<?php echo e(url('language_switch/id')); ?>" class="btn btn-link"> Indonesia</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true"
                        aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i>
                        <span><?php echo e(ucfirst(Auth::user()->name)); ?></span> <i class="fa fa-angle-down"></i>
                    </a>
                    <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                        <li>
                            <a href="<?php echo e(route('user.profile', ['id' => Auth::id()])); ?>"><i class="dripicons-user"></i>
                                <?php echo e(ucfirst(trans('file.profile'))); ?></a>
                        </li>
                        <?php if($general_setting_permission_active): ?>
                        <li>
                            <a href="<?php echo e(route('setting.general')); ?>"><i class="dripicons-gear"></i>
                                <?php echo e(ucfirst(trans('file.settings'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo e(url('my-transactions/'.date('Y').'/'.date('m'))); ?>"><i class="dripicons-swap"></i>
                                <?php echo e(ucfirst(trans('file.My Transaction'))); ?></a>
                        </li>
                        <?php if(Auth::user()->role_id != 5): ?>
                        <li>
                            <a href="<?php echo e(url('holidays/my-holiday/'.date('Y').'/'.date('m'))); ?>"><i
                                    class="dripicons-vibrate"></i> <?php echo e(ucfirst(trans('file.My Holiday'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if($empty_database_permission_active): ?>
                        <li>
                            <a onclick="return confirm('Are you sure want to delete? If you do this all of your data will be lost.')"
                                href="<?php echo e(route('setting.emptyDatabase')); ?>"><i class="dripicons-stack"></i>
                                <?php echo e(ucfirst(trans('file.Empty Database'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <?php if(Auth::user()->role_id != 5): ?>
                        <li>
                            <a href="<?php echo e(url('read_me')); ?>"  target="_blank"><i
                                        class="dripicons-information"></i> <?php echo e(ucfirst(trans('file.Help'))); ?></a>
                        </li>
                        <?php endif; ?>
                        <li>
                            <a href="<?php echo e(route('logout')); ?>" onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i
                                    class="dripicons-power"></i>
                                <?php echo e(ucfirst(trans('file.logout'))); ?>

                            </a>
                            <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" style="display: none;">
                                <?php echo csrf_field(); ?>
                            </form>
                        </li>
                    </ul>
                </li>
        </ul>
    </nav>
    </div>
</header>
<?php /**PATH /home/u5070271/newureka/resources/views/partials/navbar.blade.php ENDPATH**/ ?>