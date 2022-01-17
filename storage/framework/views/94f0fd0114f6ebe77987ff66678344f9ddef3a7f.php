<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <link rel="icon" type="image/png" href="<?php echo e(url('logo', $general_setting->site_logo)); ?>" />
    <title><?php echo e($general_setting->site_title); ?></title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('vendor/mdi/css/materialdesignicons.min.css') ?>">
    <!-- Drip icon font-->
    <link rel="stylesheet" href="<?php echo asset('vendor/dripicons/webfont.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- virtual keybord stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('vendor/keyboard/css/keyboard.css') ?>" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('vendor/daterange/css/daterangepicker.min.css') ?>" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('css/dropzone.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('css/style.css') ?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery/jquery.timepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/popper.js/umd/popper.min.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/keyboard/js/jquery.keyboard.js') ?>"></script>  
    <script type="text/javascript" src="<?php echo asset('vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery.cookie/jquery.cookie.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('vendor/chart.js/Chart.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/charts-custom.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/front.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/daterange/js/daterangepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('js/dropzone.js') ?>"></script>
    
    <!-- table sorter js-->
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/pdfmake.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/vfs_fonts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.buttons.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.colVis.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.html5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/buttons.print.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo asset('vendor/datatable/sum().js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script> 
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('css/custom-default.css')?>" type="text/css" id="custom-style">
    <link rel="stylesheet" href="<?php echo asset('css/custom.css')?>" type="text/css" id="custom-style">
  </head>
  
  <body onload="myFunction()">
    <div id="loader"></div>
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <div class="side-navbar-wrapper">
          <!-- Sidebar Navigation Menus-->
          <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
              <li class="nav-category">Utama</li>
              <li class="nav-item <?php echo e(Request::is('/') ? 'active' : ''); ?>"><a href="<?php echo e(url('/')); ?>"> <i class="mdi mdi-view-dashboard menu-icon"></i><span>Dashboard</span></a></li>
              <?php
                  $role = DB::table('roles')->find(Auth::user()->role_id);
                  $category_permission_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'category'],
                        ['role_id', $role->id] ])->first();
                  $index_permission = DB::table('permissions')->where('name', 'products-index')->first();
                  $index_permission_active = DB::table('role_has_permissions')->where([
                      ['permission_id', $index_permission->id],
                      ['role_id', $role->id]
                  ])->first();

                  $print_barcode = DB::table('permissions')->where('name', 'print_barcode')->first();
                      $print_barcode_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $print_barcode->id],
                          ['role_id', $role->id]
                      ])->first();

                  $stock_count = DB::table('permissions')->where('name', 'stock_count')->first();
                      $stock_count_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $stock_count->id],
                          ['role_id', $role->id]
                      ])->first();

                    $adjustment = DB::table('permissions')->where('name', 'adjustment')->first();
                    $adjustment_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $adjustment->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
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
              <?php if($add_permission_active): ?>
              <li class="nav-item blink_me <?php echo e(Request::is('/pos') ? 'active' : ''); ?>"><a href="<?php echo e(route('sale.pos')); ?>"> <i class="mdi mdi-tablet menu-icon"></i><span>POS</span></a></li>
              <?php endif; ?>

              <!--<li class="nav-item"><a href=""> <i class="mdi mdi-box-shadow menu-icon"></i><span>Stock</span></a></li>-->

              <?php if($category_permission_active || $index_permission_active || $print_barcode_active || $stock_count_active || $adjustment_active): ?>
              <li class="nav-item <?php echo e(Request::is('products/*')|| Request::is('products') || Request::is('category') ? 'active' : ''); ?>"><a href="#product" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-tags"></i><span><?php echo e(__('file.product')); ?></span><span></a>
                <ul id="product" class="collapse list-unstyled ">
                  <?php if($category_permission_active): ?>
                  <li id="category-menu"><a href="<?php echo e(route('category.index')); ?>"><?php echo e(__('file.category')); ?></a></li>
                  <?php endif; ?>
                  <?php if($index_permission_active): ?>
                  <li id="product-list-menu"><a href="<?php echo e(route('products.index')); ?>"><?php echo e(__('file.product_list')); ?></a></li>
                  <?php 
                    $add_permission = DB::table('permissions')->where('name', 'products-add')->first();
                    $add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($add_permission_active): ?>
                  <li id="product-create-menu"><a href="<?php echo e(route('products.create')); ?>"><?php echo e(__('file.add_product')); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                  <?php if($print_barcode_active): ?>
                  <li id="printBarcode-menu"><a href="<?php echo e(route('product.printBarcode')); ?>"><?php echo e(__('file.print_barcode')); ?></a></li>
                  <?php endif; ?>
                  <?php if($adjustment_active): ?>
                    <li id="adjustment-list-menu"><a href="<?php echo e(route('qty_adjustment.index')); ?>"><?php echo e(trans('file.Adjustment List')); ?></a></li>
                    <li id="adjustment-create-menu"><a href="<?php echo e(route('qty_adjustment.create')); ?>"><?php echo e(trans('file.Add Adjustment')); ?></a></li>
                  <?php endif; ?>
                  <?php if($stock_count_active): ?>
                    <li id="stock-count-menu"><a href="<?php echo e(route('stock-count.index')); ?>"><?php echo e(trans('file.Stock Count')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php 
                $index_permission = DB::table('permissions')->where('name', 'purchases-index')->first();
                  $index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_permission->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
              <li class="nav-category">Laporan</li>
              <?php if($index_permission_active): ?>
              <li><a href="#purchase" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-card"></i><span><?php echo e(trans('file.Purchase')); ?></span></a>
                <ul id="purchase" class="collapse list-unstyled ">
                  <li id="purchase-list-menu"><a href="<?php echo e(route('purchases.index')); ?>"><?php echo e(trans('file.Purchase List')); ?></a></li>
                  <?php 
                    $add_permission = DB::table('permissions')->where('name', 'purchases-add')->first();
                    $add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($add_permission_active): ?>
                  <li id="purchase-create-menu"><a href="<?php echo e(route('purchases.create')); ?>"><?php echo e(trans('file.Add Purchase')); ?></a></li>
                  <li id="purchase-import-menu"><a href="<?php echo e(url('purchases/purchase_by_csv')); ?>"><?php echo e(trans('file.Import Purchase By CSV')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php 
                $sale_index_permission = DB::table('permissions')->where('name', 'sales-index')->first();
                $sale_index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $sale_index_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $gift_card_permission = DB::table('permissions')->where('name', 'gift_card')->first();
                $gift_card_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $gift_card_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $coupon_permission = DB::table('permissions')->where('name', 'coupon')->first();
                $coupon_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $coupon_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $delivery_permission_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'delivery'],
                        ['role_id', $role->id] ])->first();

                $sale_add_permission = DB::table('permissions')->where('name', 'sales-add')->first();
                $sale_add_permission_active = DB::table('role_has_permissions')->where([
                    ['permission_id', $sale_add_permission->id],
                    ['role_id', $role->id]
                ])->first();
              ?>
              <?php if($sale_index_permission_active || $gift_card_permission_active || $coupon_permission_active || $delivery_permission_active): ?>
              <li><a href="#sale" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-cart"></i><span><?php echo e(trans('file.Sale')); ?></span></a>
                <ul id="sale" class="collapse list-unstyled ">
                  <?php if($sale_index_permission_active): ?>
                  <li id="sale-list-menu"><a href="<?php echo e(route('sales.index')); ?>"><?php echo e(trans('file.Sale List')); ?></a></li>
                    <?php if($sale_add_permission_active): ?>
                    <li id="sale-create-menu"><a href="<?php echo e(route('sales.create')); ?>"><?php echo e(trans('file.Add Sale')); ?></a></li>
                    <li id="sale-import-menu"><a href="<?php echo e(url('sales/sale_by_csv')); ?>"><?php echo e(trans('file.Import Sale By CSV')); ?></a></li>
                    <?php endif; ?>
                  <?php endif; ?>

                  <?php if($gift_card_permission_active): ?>
                  <li id="gift-card-menu"><a href="<?php echo e(route('gift_cards.index')); ?>"><?php echo e(trans('file.Gift Card List')); ?></a> </li>
                  <?php endif; ?>
                  <?php if($coupon_permission_active): ?>
                  <li id="coupon-menu"><a href="<?php echo e(route('coupons.index')); ?>"><?php echo e(trans('file.Coupon List')); ?></a> </li>
                  <?php endif; ?>
                  <?php if($delivery_permission_active): ?>
                  <li id="delivery-menu"><a href="<?php echo e(route('delivery.index')); ?>"><?php echo e(trans('file.Delivery List')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>

              <?php 
                $index_permission = DB::table('permissions')->where('name', 'expenses-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_permission->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
              <?php if($index_permission_active): ?>
              <li><a href="#expense" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-wallet"></i><span><?php echo e(trans('file.Expense')); ?></span></a>
                <ul id="expense" class="collapse list-unstyled ">
                  <li id="exp-cat-menu"><a href="<?php echo e(route('expense_categories.index')); ?>"><?php echo e(trans('file.Expense Category')); ?></a></li>
                  <li id="exp-list-menu"><a href="<?php echo e(route('expenses.index')); ?>"><?php echo e(trans('file.Expense List')); ?></a></li>
                  <?php 
                    $add_permission = DB::table('permissions')->where('name', 'expenses-add')->first();
                    $add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php 
                $index_permission = DB::table('permissions')->where('name', 'quotes-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_permission->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
              <?php if($index_permission_active): ?>
              <li><a href="#quotation" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document"></i><span><?php echo e(trans('file.Quotation')); ?></span><span></a>
                <ul id="quotation" class="collapse list-unstyled ">
                  <li id="quotation-list-menu"><a href="<?php echo e(route('quotations.index')); ?>"><?php echo e(trans('file.Quotation List')); ?></a></li>
                  <?php 
                    $add_permission = DB::table('permissions')->where('name', 'quotes-add')->first();
                    $add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($add_permission_active): ?>
                  <li id="quotation-create-menu"><a href="<?php echo e(route('quotations.create')); ?>"><?php echo e(trans('file.Add Quotation')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php 
                $index_permission = DB::table('permissions')->where('name', 'transfers-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_permission->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
              <?php if($index_permission_active): ?>
              <li><a href="#transfer" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-export"></i><span><?php echo e(trans('file.Transfer')); ?></span></a>
                <ul id="transfer" class="collapse list-unstyled ">
                  <li id="transfer-list-menu"><a href="<?php echo e(route('transfers.index')); ?>"><?php echo e(trans('file.Transfer List')); ?></a></li>
                  <?php 
                    $add_permission = DB::table('permissions')->where('name', 'transfers-add')->first();
                    $add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($add_permission_active): ?>
                  <li id="transfer-create-menu"><a href="<?php echo e(route('transfers.create')); ?>"><?php echo e(trans('file.Add Transfer')); ?></a></li>
                  <li id="transfer-import-menu"><a href="<?php echo e(url('transfers/transfer_by_csv')); ?>"><?php echo e(trans('file.Import Transfer By CSV')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>
              
              <?php 
                $sale_return_index_permission = DB::table('permissions')->where('name', 'returns-index')->first();
                
                $sale_return_index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $sale_return_index_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                
                $purchase_return_index_permission = DB::table('permissions')->where('name', 'purchase-return-index')->first();
                
                $purchase_return_index_permission_active = DB::table('role_has_permissions')->where([
                            ['permission_id', $purchase_return_index_permission->id],
                            ['role_id', $role->id]
                        ])->first();
              ?>
              <?php if($sale_return_index_permission_active || $purchase_return_index_permission_active): ?>
              <li><a href="#return" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-return"></i><span>Return</span></a>
                <ul id="return" class="collapse list-unstyled ">
                  <?php if($sale_return_index_permission_active): ?>
                  <li id="sale-return-menu"><a href="<?php echo e(route('return-sale.index')); ?>"><?php echo e(trans('file.Sale')); ?></a></li>
                  <?php endif; ?>
                  <?php if($purchase_return_index_permission_active): ?>
                  <li id="purchase-return-menu"><a href="<?php echo e(route('return-purchase.index')); ?>"><?php echo e(trans('file.Purchase')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>
              <?php 
                $index_permission = DB::table('permissions')->where('name', 'account-index')->first();
                $index_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $money_transfer_permission = DB::table('permissions')->where('name', 'money-transfer')->first();
                $money_transfer_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $money_transfer_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $balance_sheet_permission = DB::table('permissions')->where('name', 'balance-sheet')->first();
                $balance_sheet_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $balance_sheet_permission->id],
                        ['role_id', $role->id]
                    ])->first();

                $account_statement_permission = DB::table('permissions')->where('name', 'account-statement')->first();
                $account_statement_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $account_statement_permission->id],
                        ['role_id', $role->id]
                    ])->first();

              ?>
              <?php if($index_permission_active || $balance_sheet_permission_active || $account_statement_permission_active): ?>
              <li class=""><a href="#account" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-briefcase"></i><span><?php echo e(trans('file.Accounting')); ?></span></a>
                <ul id="account" class="collapse list-unstyled ">
                  <?php if($index_permission_active): ?>
                  <li id="account-list-menu"><a href="<?php echo e(route('accounts.index')); ?>"><?php echo e(trans('file.Account List')); ?></a></li>
                  <?php endif; ?>
                  <?php if($money_transfer_permission_active): ?>
                  <li id="money-transfer-menu"><a href="<?php echo e(route('money-transfers.index')); ?>"><?php echo e(trans('file.Money Transfer')); ?></a></li>
                  <?php endif; ?>
                  <?php if($balance_sheet_permission_active): ?>
                  <li id="balance-sheet-menu"><a href="<?php echo e(route('accounts.balancesheet')); ?>"><?php echo e(trans('file.Balance Sheet')); ?></a></li>
                  <?php endif; ?>
                  <?php if($account_statement_permission_active): ?>
                  <li id="account-statement-menu"><a id="account-statement" href=""><?php echo e(trans('file.Account Statement')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>

              <?php
                $profit_loss_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'profit-loss'],
                        ['role_id', $role->id] ])->first();
                $best_seller_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'best-seller'],
                        ['role_id', $role->id] ])->first();
                $warehouse_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'warehouse-report'],
                        ['role_id', $role->id] ])->first();
                $warehouse_stock_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'warehouse-stock-report'],
                        ['role_id', $role->id] ])->first();
                $product_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'product-report'],
                        ['role_id', $role->id] ])->first();
                $daily_sale_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'daily-sale'],
                        ['role_id', $role->id] ])->first();
                $monthly_sale_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'monthly-sale'],
                        ['role_id', $role->id]])->first();
                $daily_purchase_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'daily-purchase'],
                        ['role_id', $role->id] ])->first();
                $monthly_purchase_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'monthly-purchase'],
                        ['role_id', $role->id] ])->first();
                $purchase_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'purchase-report'],
                        ['role_id', $role->id] ])->first();
                $sale_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'sale-report'],
                        ['role_id', $role->id] ])->first();
                $payment_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'payment-report'],
                        ['role_id', $role->id] ])->first();
                $product_qty_alert_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'product-qty-alert'],
                        ['role_id', $role->id] ])->first();
                $user_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'user-report'],
                        ['role_id', $role->id] ])->first();

                $customer_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'customer-report'],
                        ['role_id', $role->id] ])->first();
                $supplier_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'supplier-report'], 
                        ['role_id', $role->id] ])->first();
                $due_report_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'due-report'],
                        ['role_id', $role->id] ])->first();
              ?>
              <?php if($profit_loss_active || $best_seller_active || $warehouse_report_active || $warehouse_stock_report_active || $product_report_active || $daily_sale_active || $monthly_sale_active || $daily_purchase_active || $monthly_purchase_active || $purchase_report_active || $sale_report_active || $payment_report_active || $product_qty_alert_active || $user_report_active || $customer_report_active || $supplier_report_active || $due_report_active): ?>
              <li><a href="#report" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-document-remove"></i><span><?php echo e(trans('file.Reports')); ?></span></a>
                <ul id="report" class="collapse list-unstyled ">
                  <?php if($profit_loss_active): ?>
                  <li id="profit-loss-report-menu">
                    <?php echo Form::open(['route' => 'report.profitLoss', 'method' => 'post', 'id' => 'profitLoss-report-form']); ?>

                    <input type="hidden" name="start_date" value="<?php echo e(date('Y-m').'-'.'01'); ?>" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <a id="profitLoss-link" href=""><?php echo e(trans('file.Summary Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                  <?php if($best_seller_active): ?>
                  <li id="best-seller-report-menu">
                    <a href="<?php echo e(url('report/best_seller')); ?>"><?php echo e(trans('file.Best Seller')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($product_report_active): ?>
                  <li id="product-report-menu">
                    <?php echo Form::open(['route' => 'report.product', 'method' => 'post', 'id' => 'product-report-form']); ?>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <input type="hidden" name="warehouse_id" value="0" />
                    <a id="report-link" href=""><?php echo e(trans('file.Product Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                  <?php if($daily_sale_active): ?>
                  <li id="daily-sale-report-menu">
                    <a href="<?php echo e(url('report/daily_sale/'.date('Y').'/'.date('m'))); ?>"><?php echo e(trans('file.Daily Sale')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($monthly_sale_active): ?>
                  <li id="monthly-sale-report-menu">
                    <a href="<?php echo e(url('report/monthly_sale/'.date('Y'))); ?>"><?php echo e(trans('file.Monthly Sale')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($daily_purchase_active): ?>
                  <li id="daily-purchase-report-menu">
                    <a href="<?php echo e(url('report/daily_purchase/'.date('Y').'/'.date('m'))); ?>"><?php echo e(trans('file.Daily Purchase')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($monthly_purchase_active): ?>
                  <li id="monthly-purchase-report-menu">
                    <a href="<?php echo e(url('report/monthly_purchase/'.date('Y'))); ?>"><?php echo e(trans('file.Monthly Purchase')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($sale_report_active): ?>
                  <li id="sale-report-menu">
                    <?php echo Form::open(['route' => 'report.sale', 'method' => 'post', 'id' => 'sale-report-form']); ?>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <input type="hidden" name="warehouse_id" value="0" />
                    <a id="sale-report-link" href=""><?php echo e(trans('file.Sale Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                  <?php if($payment_report_active): ?>
                  <li id="payment-report-menu">
                    <?php echo Form::open(['route' => 'report.paymentByDate', 'method' => 'post', 'id' => 'payment-report-form']); ?>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <a id="payment-report-link" href=""><?php echo e(trans('file.Payment Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                  <?php if($purchase_report_active): ?>
                  <li id="purchase-report-menu">
                    <?php echo Form::open(['route' => 'report.purchase', 'method' => 'post', 'id' => 'purchase-report-form']); ?>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <input type="hidden" name="warehouse_id" value="0" />
                    <a id="purchase-report-link" href=""><?php echo e(trans('file.Purchase Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                  <?php if($warehouse_report_active): ?>
                  <li id="warehouse-report-menu">
                    <a id="warehouse-report-link" href=""><?php echo e(trans('file.Warehouse Report')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($warehouse_stock_report_active): ?>
                  <li id="warehouse-stock-report-menu">
                    <a href="<?php echo e(route('report.warehouseStock')); ?>"><?php echo e(trans('file.Warehouse Stock Chart')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($product_qty_alert_active): ?>
                  <li id="qtyAlert-report-menu">
                    <a href="<?php echo e(route('report.qtyAlert')); ?>"><?php echo e(trans('file.Product Quantity Alert')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($user_report_active): ?>
                  <li id="user-report-menu">
                    <a id="user-report-link" href=""><?php echo e(trans('file.User Report')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($customer_report_active): ?>
                  <li id="customer-report-menu">
                    <a id="customer-report-link" href=""><?php echo e(trans('file.Customer Report')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($supplier_report_active): ?>
                  <li id="supplier-report-menu">
                    <a id="supplier-report-link" href=""><?php echo e(trans('file.Supplier Report')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($due_report_active): ?>
                  <li id="due-report-menu">
                    <?php echo Form::open(['route' => 'report.dueByDate', 'method' => 'post', 'id' => 'due-report-form']); ?>

                    <input type="hidden" name="start_date" value="1988-04-18" />
                    <input type="hidden" name="end_date" value="<?php echo e(date('Y-m-d')); ?>" />
                    <a id="due-report-link" href=""><?php echo e(trans('file.Due Report')); ?></a>
                    <?php echo Form::close(); ?>

                  </li>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>

              <li class="nav-category">SDM</li>
              <?php 
                $department = DB::table('permissions')->where('name', 'department')->first();
                $department_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $department->id],
                        ['role_id', $role->id]
                    ])->first();
                $index_employee = DB::table('permissions')->where('name', 'employees-index')->first();
                $index_employee_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $index_employee->id],
                        ['role_id', $role->id]
                    ])->first();
                $attendance = DB::table('permissions')->where('name', 'attendance')->first();
                $attendance_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $attendance->id],
                        ['role_id', $role->id]
                    ])->first();
                $payroll = DB::table('permissions')->where('name', 'payroll')->first();
                $payroll_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $payroll->id],
                        ['role_id', $role->id]
                    ])->first();
              ?>
              <?php if(Auth::user()->role_id != 5): ?>
              <li class=""><a href="#hrm" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user-group"></i><span>HRM</span></a>
                <ul id="hrm" class="collapse list-unstyled ">
                  <?php if($department_active): ?>
                  <li id="dept-menu"><a href="<?php echo e(route('departments.index')); ?>"><?php echo e(trans('file.Department')); ?></a></li>
                  <?php endif; ?>
                  <?php if($index_employee_active): ?>
                  <li id="employee-menu"><a href="<?php echo e(route('employees.index')); ?>"><?php echo e(trans('file.Employee')); ?></a></li>
                  <?php endif; ?>
                  <?php if($attendance_active): ?>
                  <li id="attendance-menu"><a href="<?php echo e(route('attendance.index')); ?>"><?php echo e(trans('file.Attendance')); ?></a></li>
                  <?php endif; ?>
                  <?php if($payroll_active): ?>
                  <li id="payroll-menu"><a href="<?php echo e(route('payroll.index')); ?>"><?php echo e(trans('file.Payroll')); ?></a></li>
                  <?php endif; ?>
                  <li id="holiday-menu"><a href="<?php echo e(route('holidays.index')); ?>"><?php echo e(trans('file.Holiday')); ?></a></li>
                </ul>
              </li>
              <?php endif; ?>
              
              <?php 
                  $user_index_permission_active = DB::table('permissions')
                      ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                      ->where([
                        ['permissions.name', 'users-index'],
                        ['role_id', $role->id] ])->first();

                  $customer_index_permission = DB::table('permissions')->where('name', 'customers-index')->first();
                  
                  $customer_index_permission_active = DB::table('role_has_permissions')->where([
                            ['permission_id', $customer_index_permission->id],
                            ['role_id', $role->id]
                        ])->first();

                  $biller_index_permission = DB::table('permissions')->where('name', 'billers-index')->first();
                  
                  $biller_index_permission_active = DB::table('role_has_permissions')->where([
                            ['permission_id', $biller_index_permission->id],
                            ['role_id', $role->id]
                        ])->first();

                  $supplier_index_permission = DB::table('permissions')->where('name', 'suppliers-index')->first();
                  
                  $supplier_index_permission_active = DB::table('role_has_permissions')->where([
                            ['permission_id', $supplier_index_permission->id],
                            ['role_id', $role->id]
                        ])->first();
              ?>
              <?php if($user_index_permission_active || $customer_index_permission_active || $biller_index_permission_active || $supplier_index_permission_active): ?>
              <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user"></i><span><?php echo e(trans('file.User')); ?></span></a>
                <ul id="people" class="collapse list-unstyled ">
                  
                  <?php if($user_index_permission_active): ?>
                  <li id="user-list-menu"><a href="<?php echo e(route('user.index')); ?>"><?php echo e(trans('file.User List')); ?></a></li>
                  <?php $user_add_permission_active = DB::table('permissions')
                        ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                        ->where([
                          ['permissions.name', 'users-add'],
                          ['role_id', $role->id] ])->first();
                  ?>
                  <?php if($user_add_permission_active): ?>
                  <li id="user-create-menu"><a href="<?php echo e(route('user.create')); ?>"><?php echo e(trans('file.Add User')); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                  
                  <?php if($customer_index_permission_active): ?>
                  <li id="customer-list-menu"><a href="<?php echo e(route('customer.index')); ?>"><?php echo e(trans('file.Customer List')); ?></a></li>
                  <?php 
                    $customer_add_permission = DB::table('permissions')->where('name', 'customers-add')->first();
                    $customer_add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $customer_add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($customer_add_permission_active): ?>
                  <li id="customer-create-menu"><a href="<?php echo e(route('customer.create')); ?>"><?php echo e(trans('file.Add Customer')); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                  
                  <?php if($biller_index_permission_active): ?>
                  <li id="biller-list-menu"><a href="<?php echo e(route('biller.index')); ?>"><?php echo e(trans('file.Biller List')); ?></a></li>
                  <?php 
                    $biller_add_permission = DB::table('permissions')->where('name', 'billers-add')->first();
                    $biller_add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $biller_add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($biller_add_permission_active): ?>
                  <li id="biller-create-menu"><a href="<?php echo e(route('biller.create')); ?>"><?php echo e(trans('file.Add Biller')); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                  
                  <?php if($supplier_index_permission_active): ?>
                  <li id="supplier-list-menu"><a href="<?php echo e(route('supplier.index')); ?>"><?php echo e(trans('file.Supplier List')); ?></a></li>
                  <?php 
                    $supplier_add_permission = DB::table('permissions')->where('name', 'suppliers-add')->first();
                    $supplier_add_permission_active = DB::table('role_has_permissions')->where([
                        ['permission_id', $supplier_add_permission->id],
                        ['role_id', $role->id]
                    ])->first();
                  ?>
                  <?php if($supplier_add_permission_active): ?>
                  <li id="supplier-create-menu"><a href="<?php echo e(route('supplier.create')); ?>"><?php echo e(trans('file.Add Supplier')); ?></a></li>
                  <?php endif; ?>
                  <?php endif; ?>
                </ul>
              </li>
              <?php endif; ?>

              <li class="nav-category">Pengaturan</li>

              <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-gear"></i><span><?php echo e(trans('file.settings')); ?></span></a>
                <ul id="setting" class="collapse list-unstyled ">
                  <?php
                      $send_notification_permission = DB::table('permissions')->where('name', 'send_notification')->first();
                      $send_notification_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $send_notification_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $warehouse_permission = DB::table('permissions')->where('name', 'warehouse')->first();
                      $warehouse_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $warehouse_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $customer_group_permission = DB::table('permissions')->where('name', 'customer_group')->first();
                      $customer_group_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $customer_group_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $brand_permission = DB::table('permissions')->where('name', 'brand')->first();
                      $brand_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $brand_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $unit_permission = DB::table('permissions')->where('name', 'unit')->first();
                      $unit_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $unit_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $currency_permission = DB::table('permissions')->where('name', 'currency')->first();
                      $currency_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $currency_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $tax_permission = DB::table('permissions')->where('name', 'tax')->first();
                      $tax_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $tax_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $general_setting_permission = DB::table('permissions')->where('name', 'general_setting')->first();
                      $general_setting_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $general_setting_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $backup_database_permission = DB::table('permissions')->where('name', 'backup_database')->first();
                      $backup_database_permission_active = DB::table('role_has_permissions')->where([
                                  ['permission_id', $backup_database_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                      $mail_setting_permission = DB::table('permissions')->where('name', 'mail_setting')->first();
                      $mail_setting_permission_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $mail_setting_permission->id],
                          ['role_id', $role->id]
                      ])->first();

                      $sms_setting_permission = DB::table('permissions')->where('name', 'sms_setting')->first();
                      $sms_setting_permission_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $sms_setting_permission->id],
                          ['role_id', $role->id]
                      ])->first();

                      $create_sms_permission = DB::table('permissions')->where('name', 'create_sms')->first();
                      $create_sms_permission_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $create_sms_permission->id],
                          ['role_id', $role->id]
                      ])->first();

                      $pos_setting_permission = DB::table('permissions')->where('name', 'pos_setting')->first();
                      $pos_setting_permission_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $pos_setting_permission->id],
                          ['role_id', $role->id]
                      ])->first();

                      $hrm_setting_permission = DB::table('permissions')->where('name', 'hrm_setting')->first();
                      $hrm_setting_permission_active = DB::table('role_has_permissions')->where([
                          ['permission_id', $hrm_setting_permission->id],
                          ['role_id', $role->id]
                      ])->first();
                  ?>
                  <?php if($role->id <= 2): ?>
                  <li id="role-menu"><a href="<?php echo e(route('role.index')); ?>"><?php echo e(trans('file.Role Permission')); ?></a></li>
                  <?php endif; ?>
                  <?php if($send_notification_permission_active): ?>
                  <li id="notification-menu">
                    <a href="" id="send-notification"><?php echo e(trans('file.Send Notification')); ?></a>
                  </li>
                  <?php endif; ?>
                  <?php if($warehouse_permission_active): ?>
                  <li id="warehouse-menu"><a href="<?php echo e(route('warehouse.index')); ?>"><?php echo e(trans('file.Warehouse')); ?></a></li>
                  <?php endif; ?>
                  <?php if($customer_group_permission_active): ?>
                  <li id="customer-group-menu"><a href="<?php echo e(route('customer_group.index')); ?>"><?php echo e(trans('file.Customer Group')); ?></a></li>
                  <?php endif; ?>
                  <?php if($brand_permission_active): ?>
                  <li id="brand-menu"><a href="<?php echo e(route('brand.index')); ?>"><?php echo e(trans('file.Brand')); ?></a></li>
                  <?php endif; ?>
                  <?php if($unit_permission_active): ?>
                  <li id="unit-menu"><a href="<?php echo e(route('unit.index')); ?>"><?php echo e(trans('file.Unit')); ?></a></li>
                  <?php endif; ?>
                  <?php if($currency_permission_active): ?>
                  <li id="currency-menu"><a href="<?php echo e(route('currency.index')); ?>"><?php echo e(trans('file.Currency')); ?></a></li>
                  <?php endif; ?>
                  <?php if($tax_permission_active): ?>
                  <li id="tax-menu"><a href="<?php echo e(route('tax.index')); ?>"><?php echo e(trans('file.Tax')); ?></a></li>
                  <?php endif; ?>
                  <li id="user-menu"><a href="<?php echo e(route('user.profile', ['id' => Auth::id()])); ?>"><?php echo e(trans('file.User Profile')); ?></a></li>
                  <?php if($create_sms_permission_active): ?>
                  <li id="create-sms-menu"><a href="<?php echo e(route('setting.createSms')); ?>"><?php echo e(trans('file.Create SMS')); ?></a></li>
                  <?php endif; ?>
                  <?php if($backup_database_permission_active): ?>
                  <li><a href="<?php echo e(route('setting.backup')); ?>"><?php echo e(trans('file.Backup Database')); ?></a></li>
                  <?php endif; ?>
                  <?php if($general_setting_permission_active): ?>
                  <li id="general-setting-menu"><a href="<?php echo e(route('setting.general')); ?>"><?php echo e(trans('file.General Setting')); ?></a></li>
                  <?php endif; ?>
                  <?php if($mail_setting_permission_active): ?>
                  <li id="mail-setting-menu"><a href="<?php echo e(route('setting.mail')); ?>"><?php echo e(trans('file.Mail Setting')); ?></a></li>
                  <?php endif; ?>
                  <?php if($sms_setting_permission_active): ?>
                  <li id="sms-setting-menu"><a href="<?php echo e(route('setting.sms')); ?>"><?php echo e(trans('file.SMS Setting')); ?></a></li>
                  <?php endif; ?>
                  <?php if($pos_setting_permission_active): ?>
                  <li id="pos-setting-menu"><a href="<?php echo e(route('setting.pos')); ?>"><?php echo e(trans('file.POS Setting')); ?></a></li>
                  <?php endif; ?>
                  <?php if($hrm_setting_permission_active): ?>
                  <li id="hrm-setting-menu"><a href="<?php echo e(route('setting.hrm')); ?>"> <?php echo e(trans('file.HRM Setting')); ?></a></li>
                  <?php endif; ?>
                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar-->
      <?php echo $__env->make('partials.navbar', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    <div class="page">

      <div style="display:none" id="content" class="animate-bottom">
          <?php echo $__env->yieldContent('content'); ?>
      </div>

      <?php echo $__env->make('partials.footer', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
      <?php echo $__env->make('partials.modal', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?>
    </div>
    <?php echo $__env->yieldContent('scripts'); ?>
    <script type="text/javascript">
      
      var alert_product = <?php echo json_encode($alert_product) ?>;

      if ($(window).outerWidth() > 1199) {
          $('nav.side-navbar').removeClass('shrink');
      }
      function myFunction() {
          setTimeout(showPage, 150);
      }
      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }

      $("div.alert").delay(3000).slideUp(750);

      function confirmDelete() {
          if (confirm("Are you sure want to delete?")) {
              return true;
          }
          return false;
      }

      $("li#notification-icon").on("click", function (argument) {
          $.get('notifications/mark-as-read', function(data) {
              $("span.notification-number").text(alert_product);
          });
      });
      
      $("a#add-expense").click(function(e){
        e.preventDefault();
        $('#expense-modal').modal();
      });

      $("a#send-notification").click(function(e){
        e.preventDefault();
        $('#notification-modal').modal();
      });

      $("a#add-account").click(function(e){
        e.preventDefault();
        $('#account-modal').modal();
      });

      $("a#account-statement").click(function(e){
        e.preventDefault();
        $('#account-statement-modal').modal();
      });

      $("a#profitLoss-link").click(function(e){
        e.preventDefault();
        $("#profitLoss-report-form").submit();
      });

      $("a#report-link").click(function(e){
        e.preventDefault();
        $("#product-report-form").submit();
      });

      $("a#purchase-report-link").click(function(e){
        e.preventDefault();
        $("#purchase-report-form").submit();
      });

      $("a#sale-report-link").click(function(e){
        e.preventDefault();
        $("#sale-report-form").submit();
      });

      $("a#payment-report-link").click(function(e){
        e.preventDefault();
        $("#payment-report-form").submit();
      });

      $("a#warehouse-report-link").click(function(e){
        e.preventDefault();
        $('#warehouse-modal').modal();
      });

      $("a#user-report-link").click(function(e){
        e.preventDefault();
        $('#user-modal').modal();
      });

      $("a#customer-report-link").click(function(e){
        e.preventDefault();
        $('#customer-modal').modal();
      });

      $("a#supplier-report-link").click(function(e){
        e.preventDefault();
        $('#supplier-modal').modal();
      });

      $("a#due-report-link").click(function(e){
        e.preventDefault();
        $("#due-report-form").submit();
      });

      $(".daterangepicker-field").daterangepicker({
          callback: function(startDate, endDate, period){
            var start_date = startDate.format('YYYY-MM-DD');
            var end_date = endDate.format('YYYY-MM-DD');
            var title = start_date + ' To ' + end_date;
            $(this).val(title);
            $('#account-statement-modal input[name="start_date"]').val(start_date);
            $('#account-statement-modal input[name="end_date"]').val(end_date);
          }
      });

      $('.selectpicker').selectpicker({
          style: 'btn-link',
      });
    </script>
  </body>
</html><?php /**PATH /home/customer/www/pos.halalexportindonesia.com/project-files/resources/views/layout/main.blade.php ENDPATH**/ ?>