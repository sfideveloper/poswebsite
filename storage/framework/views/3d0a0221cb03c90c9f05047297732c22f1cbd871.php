 
<?php $__env->startSection('content'); ?>
<section class="forms">
    <div class="container-fluid">
        <div class="card">
            <div class="card-header mt-2">
                <h3 class="text-center"><?php echo e(ucwords(trans('file.Tax Report Sale'))); ?></h3>
            </div>
            <?php echo Form::open(['route' => 'report.tax', 'method' => 'post']); ?>

            <div class="row mb-3">
                <div class="col-md-5 offset-md-1 mt-3">
                    <div class="form-group row">
                        <label class="d-tc mt-2"><strong><?php echo e(ucwords(trans('file.Choose Your Date'))); ?></strong> &nbsp;</label>
                        <div class="d-tc">
                            <div class="input-group">
                                <input type="text" class="daterangepicker-field form-control" value="<?php echo e($start_date); ?> To <?php echo e($end_date); ?>" required />
                                <input type="hidden" name="start_date" value="<?php echo e($start_date); ?>" />
                                <input type="hidden" name="end_date" value="<?php echo e($end_date); ?>" />
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 mt-3">
                    <div class="form-group row">
                        <label class="d-tc mt-2"><strong><?php echo e(ucwords(trans('file.Choose Warehouse'))); ?></strong> &nbsp;</label>
                        <div class="d-tc">
                            <input type="hidden" name="warehouse_id_hidden" value="<?php echo e($warehouse_id); ?>" />
                            <select id="warehouse_id" name="warehouse_id" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins">
                                <?php if(Auth::user()->role->name == 'Perpajakan'): ?>
                                    <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <?php $__currentLoopData = $warehouse_id_tax_get; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <?php if($warehouse->id == $item): ?>
                                            <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                                            <?php endif; ?>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    <?php else: ?>
                                    <option value="all">All Warehouse</option>
                                    <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                <?php endif; ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="col-md-2 mt-3">
                    <div class="form-group text-right">
                        <button class="btn btn-primary" type="submit"><?php echo e(ucfirst(trans('file.submit'))); ?></button>
                    </div>
                </div>
            </div>
            <input type="hidden" name="warehouse_id_hidden" value="<?php echo e($warehouse_id); ?>" />
            <?php echo Form::close(); ?>


    
        </div>
    </div>
    <ul class="nav nav-tabs ml-4 mt-3" role="tablist">

    <?php if(Auth::user()->role_id =='7'): ?>         
        <li class="nav-item">
            <a class="nav-link active" href="#warehouse-tax" role="tab" data-toggle="tab"><?php echo e(trans('file.Sale')); ?></a>
        </li>
    <?php else: ?>
        <!-- <li class="nav-item">
            <a class="nav-link" href="#warehouse-notax" role="tab" data-toggle="tab"><?php echo e(trans('file.No Tax')); ?></a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link active" href="#warehouse-tax" role="tab" data-toggle="tab"><?php echo e(trans('file.Sale')); ?></a>
        </li>
        <li class="nav-item">
            <a class="nav-link" href="#warehouse-all" role="tab" data-toggle="tab"><?php echo e(trans('file.All')); ?></a>
        </li>    
    <?php endif; ?>

        
        
    </ul>

    <div class="tab-content">
        <div role="tabpanel" class="tab-pane fade show active" id="warehouse-tax">
            <div class="table-responsive mb-4">
                <table id="tax-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="not-exported-sale"></th>
                            <th><?php echo e(ucfirst(trans('file.Date'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.reference'))); ?> No</th>
                            <th><?php echo e(ucfirst(trans('file.customer'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.product'))); ?> (<?php echo e(ucfirst(trans('file.qty'))); ?>)</th>
                            <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                            
                            
                            
                            <th><?php echo e(ucfirst(trans('file.Status'))); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lims_sale_data_tax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key); ?></td>
                            <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString())) . ' '. $sale->created_at->toTimeString()); ?></td>
                            <td><?php echo e($sale->reference_no); ?></td>
                            <td><?php echo e($sale->customer_name); ?></td>
                            <td>
                                <?php 
                                    $product = App\Product::select('name')->find($sale->product_id);
                                    if($sale->variant_id) {
                                        $variant = App\Variant::find($sale->variant_id);
                                        $product->name .= ' ['.$variant->name.']';
                                    }
                                    $unit = App\Unit::find($sale->sale_unit_id);
                                ?>
                                <?php if($unit): ?>
                                    <?php echo e($product->name.' ('.$sale->qty.' '.$unit->unit_name.')'); ?>

                                <?php else: ?>
                                    <?php echo e($product->name.' ('.$sale->qty.')'); ?>

                                <?php endif; ?>
                                <br>
                            </td>
                            <td><?php echo e("Rp " . number_format($sale->total, 2, ',', '.')); ?></td>
                            <?php if($sale->sale_status == 1): ?>
                            <td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
                            <?php else: ?>
                            <td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot class="tfoot active">
                        <tr>
                            <th></th>
                            <th>Total:</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                            
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="warehouse-notax">
            <div class="table-responsive mb-4">
                <table id="notax-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="not-exported-sale"></th>
                            <th><?php echo e(ucfirst(trans('file.Date'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.reference'))); ?> No</th>
                            <th><?php echo e(ucfirst(trans('file.customer'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.product'))); ?> (<?php echo e(ucfirst(trans('file.qty'))); ?>)</th>
                            <th><?php echo e(ucfirst(trans('file.Price'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.Tax'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                            
                            
                            <th><?php echo e(ucfirst(trans('file.Status'))); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lims_sale_data_notax; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key); ?></td>
                            <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString())) . ' '. $sale->created_at->toTimeString()); ?></td>
                            <td><?php echo e($sale->reference_no); ?></td>
                            <td><?php echo e($sale->customer_name); ?></td>
                            <td>
                                <?php $__currentLoopData = $lims_product_sale_data_notax[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_sale_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $product = App\Product::select('name')->find($product_sale_data->product_id);
                                    if($product_sale_data->variant_id) {
                                        $variant = App\Variant::find($product_sale_data->variant_id);
                                        $product->name .= ' ['.$variant->name.']';
                                    }
                                    $unit = App\Unit::find($product_sale_data->sale_unit_id);
                                ?>
                                <?php if($unit): ?>
                                    <?php echo e($product->name.' ('.$product_sale_data->qty.' '.$unit->unit_name.')'); ?>

                                <?php else: ?>
                                    <?php echo e($product->name.' ('.$product_sale_data->qty.')'); ?>

                                <?php endif; ?>
                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e($sale->net_unit_price); ?></td>
                            <td><?php echo e($sale->tax_rate); ?> %</td>
                            <td><?php echo e($sale->total); ?></td>
                            
                            
                            <?php if($sale->sale_status == 1): ?>
                            <td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
                            <?php else: ?>
                            <td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot class="tfoot active">
                        <tr>
                            <th></th>
                            <th>Total:</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                            
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>

        <div role="tabpanel" class="tab-pane fade" id="warehouse-all">
            <div class="table-responsive mb-4">
                <table id="all-table" class="table table-hover">
                    <thead>
                        <tr>
                            <th class="not-exported-sale"></th>
                            <th><?php echo e(ucfirst(trans('file.Date'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.reference'))); ?> No</th>
                            <th><?php echo e(ucfirst(trans('file.customer'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.product'))); ?> (<?php echo e(ucfirst(trans('file.qty'))); ?>)</th>
                            <th><?php echo e(ucfirst(trans('file.Price'))); ?></th>
                            
                            <th><?php echo e(ucfirst(trans('file.Total'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                            
                            <th><?php echo e(ucfirst(trans('file.Status'))); ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $__currentLoopData = $lims_sale_data_taxall; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <tr>
                            <td><?php echo e($key); ?></td>
                            <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString())) . ' '. $sale->created_at->toTimeString()); ?></td>
                            <td><?php echo e($sale->reference_no); ?></td>
                            <td><?php echo e($sale->customer_name); ?></td>
                            <td>
                                <?php $__currentLoopData = $lims_product_sale_data_taxall[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_sale_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $product = App\Product::select('name')->find($product_sale_data->product_id);
                                    if($product_sale_data->variant_id) {
                                        $variant = App\Variant::find($product_sale_data->variant_id);
                                        $product->name .= ' ['.$variant->name.']';
                                    }
                                    $unit = App\Unit::find($product_sale_data->sale_unit_id);
                                ?>
                                <?php if($unit): ?>
                                    <?php echo e($product->name.' ('.$product_sale_data->qty.' '.$unit->unit_name.')'); ?>

                                <?php else: ?>
                                    <?php echo e($product->name.' ('.$product_sale_data->qty.')'); ?>

                                <?php endif; ?>
                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            
                            <td>
                                <?php $__currentLoopData = $lims_product_sale_data_taxall[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_sale_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $product = App\Product::select('name')->find($product_sale_data->product_id);
                                    if($product_sale_data->variant_id) {
                                        $variant = App\Variant::find($product_sale_data->variant_id);
                                        $product->name .= ' ['.$variant->name.']';
                                    }
                                    $unit = App\Unit::find($product_sale_data->sale_unit_id);
                                ?>
                                <?php if($unit): ?>
                                    <?php echo e("Rp " . number_format($product_sale_data->net_unit_price), 2, ',', '.'); ?>

                                <?php else: ?>
                                    <?php echo e("Rp " . number_format($product_sale_data->net_unit_price), 2, ',', '.'); ?>

                                <?php endif; ?>
                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            
                            <td>
                                <?php $__currentLoopData = $lims_product_sale_data_taxall[$key]; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $product_sale_data): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <?php 
                                    $product = App\Product::select('name')->find($product_sale_data->product_id);
                                    if($product_sale_data->variant_id) {
                                        $variant = App\Variant::find($product_sale_data->variant_id);
                                        $product->name .= ' ['.$variant->name.']';
                                    }
                                    $unit = App\Unit::find($product_sale_data->sale_unit_id);
                                ?>
                                <?php if($unit): ?>
                                <?php echo e("Rp " . number_format($product_sale_data->total), 2, ',', '.'); ?>

                                <?php else: ?>
                                <?php echo e("Rp " . number_format($product_sale_data->total), 2, ',', '.'); ?>

                                <?php endif; ?>
                                <br>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </td>
                            <td><?php echo e("Rp " . number_format($sale->grand_total), 2, ',', '.'); ?></td>
                            
                            <?php if($sale->sale_status == 1): ?>
                            <td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
                            <?php else: ?>
                            <td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
                            <?php endif; ?>
                        </tr>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </tbody>
                    <tfoot class="tfoot active">
                        <tr>
                            <th></th>
                            <th>Total:</th>
                            <th></th>
                            <th></th>
                            <th></th>
                            
                            
                            <th></th>
                            <th></th>
                            <th></th>
                        </tr>
                    </tfoot>
                </table>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">
    $("ul#report").siblings('a').attr('aria-expanded','true');
    $("ul#report").addClass("show");
    $("ul#report #tax-report-menu").addClass("active");

    $('#warehouse_id').val($('input[name="warehouse_id_hidden"]').val());
    $('.selectpicker').selectpicker('refresh');

    $('#tax-table').DataTable( {
        "order": [],
        'columnDefs': [
            {
                "orderable": false,
                'targets': 0
            },
            {
                'render': function(data, type, row, meta){
                    if(type === 'display'){
                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                    }

                   return data;
                },
                'checkboxes': {
                   'selectRow': true,
                   'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                },
                'targets': [0]
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_tax(dt, true);
                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_tax(dt, false);
                },
                footer:true
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_tax(dt, true);
                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_tax(dt, false);
                },
                footer:true
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_tax(dt, true);
                    $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                    datatable_sum_tax(dt, false);
                },
                footer:true
            },
            {
                extend: 'colvis',
                columns: ':gt(0)'
            }
        ],
        drawCallback: function () {
            var api = this.api();
            datatable_sum_tax(api, false);
        }
    } );

    function datatable_sum_tax(dt_selector, is_calling_first) {
        if (dt_selector.rows( '.selected' ).any() && is_calling_first) {
            var rows = dt_selector.rows( '.selected' ).indexes();

            // $( dt_selector.column( 5 ).footer() ).html(dt_selector.cells( rows, 5, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.cells( rows, 6, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.cells( rows, 6, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 8 ).footer() ).html(dt_selector.cells( rows, 8, { page: 'current' } ).data().sum().toFixed(2));
        }
        else {
            // $( dt_selector.column( 5 ).footer() ).html(dt_selector.column( 5, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.column( 6, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.column( 6, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.column( 7, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 8 ).footer() ).html(dt_selector.cells( rows, 8, { page: 'current' } ).data().sum().toFixed(2));
        }
    }

    $('#notax-table').DataTable( {
        "order": [],
        'columnDefs': [
            {
                "orderable": false,
                'targets': 0
            },
            {
                'render': function(data, type, row, meta){
                    if(type === 'display'){
                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                    }

                   return data;
                },
                'checkboxes': {
                   'selectRow': true,
                   'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                },
                'targets': [0]
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_notax(dt, true);
                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_notax(dt, false);
                },
                footer:true
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_notax(dt, true);
                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_notax(dt, false);
                },
                footer:true
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_notax(dt, true);
                    $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                    datatable_sum_notax(dt, false);
                },
                footer:true
            },
            {
                extend: 'colvis',
                columns: ':gt(0)'
            }
        ],
        drawCallback: function () {
            var api = this.api();
            datatable_sum_notax(api, false);
        }
    } );

    function datatable_sum_notax(dt_selector, is_calling_first) {
        if (dt_selector.rows( '.selected' ).any() && is_calling_first) {
            var rows = dt_selector.rows( '.selected' ).indexes();

            $( dt_selector.column( 5 ).footer() ).html(dt_selector.cells( rows, 5, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.cells( rows, 6, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.cells( rows, 6, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
             $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
        }
        else {
            $( dt_selector.column( 5 ).footer() ).html(dt_selector.column( 5, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.column( 6, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.column( 6, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
             $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
        }
    }

    $('#all-table').DataTable( {
        "order": [],
        'columnDefs': [
            {
                "orderable": false,
                'targets': 0
            },
            {
                'render': function(data, type, row, meta){
                    if(type === 'display'){
                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                    }

                   return data;
                },
                'checkboxes': {
                   'selectRow': true,
                   'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                },
                'targets': [0]
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_all(dt, true);
                    $.fn.dataTable.ext.buttons.pdfHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_all(dt, false);
                },
                footer:true
            },
            {
                extend: 'csv',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_all(dt, true);
                    $.fn.dataTable.ext.buttons.csvHtml5.action.call(this, e, dt, button, config);
                    datatable_sum_all(dt, false);
                },
                footer:true
            },
            {
                extend: 'print',
                exportOptions: {
                    columns: ':visible:Not(.not-exported-sale)',
                    rows: ':visible'
                },
                action: function(e, dt, button, config) {
                    datatable_sum_all(dt, true);
                    $.fn.dataTable.ext.buttons.print.action.call(this, e, dt, button, config);
                    datatable_sum_all(dt, false);
                },
                footer:true
            },
            {
                extend: 'colvis',
                columns: ':gt(0)'
            }
        ],
        drawCallback: function () {
            var api = this.api();
            datatable_sum_all(api, false);
        }
    } );

    function datatable_sum_all(dt_selector, is_calling_first) {
        if (dt_selector.rows( '.selected' ).any() && is_calling_first) {
            var rows = dt_selector.rows( '.selected' ).indexes();

            // $( dt_selector.column( 5 ).footer() ).html(dt_selector.cells( rows, 5, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.cells( rows, 6, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 8 ).footer() ).html(dt_selector.cells( rows, 8, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 8 ).footer() ).html(dt_selector.cells( rows, 8, { page: 'current' } ).data().sum().toFixed(2));
        }
        else {
            // $( dt_selector.column( 5 ).footer() ).html(dt_selector.column( 5, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 6 ).footer() ).html(dt_selector.column( 6, {page:'current'} ).data().sum().toFixed(2));
            // $( dt_selector.column( 7 ).footer() ).html(dt_selector.cells( rows, 7, { page: 'current' } ).data().sum().toFixed(2));
            // $( dt_selector.column( 8 ).footer() ).html(dt_selector.column( 8, {page:'current'} ).data().sum().toFixed(2));
            //  $( dt_selector.column( 8 ).footer() ).html(dt_selector.cells( rows, 8, { page: 'current' } ).data().sum().toFixed(2));
        }
    }
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\Laravel project\poswebsite\resources\views/report/tax_report.blade.php ENDPATH**/ ?>