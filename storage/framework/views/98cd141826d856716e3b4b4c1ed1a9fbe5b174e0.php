 <?php $__env->startSection('content'); ?>

<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                          <table id="cash-register-table" class="table">
                              <thead>
                                  <tr>
                                      <th class="not-exported"></th>
                                      <th><?php echo e(ucfirst(trans('file.User'))); ?></th>
                                      <th><?php echo e(ucfirst(trans('file.Warehouse'))); ?></th>
                                      <th><?php echo e(ucfirst(trans('file.Cash in Hand'))); ?></th>
                                      <th><?php echo e(ucfirst(trans('file.Opened at'))); ?></th>
                                      <th><?php echo e(ucfirst(trans('file.Closed at'))); ?></th>
                                      <th><?php echo e(ucfirst(trans('file.Status'))); ?></th>
                                      <th class="not-exported"><?php echo e(ucfirst(trans('file.action'))); ?></th>
                                  </tr>
                              </thead>
                              <tbody>
                                  <?php $__currentLoopData = $lims_cash_register_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$cash_register): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                  <tr data-id="<?php echo e($cash_register->id); ?>">
                                      <td><?php echo e($key); ?></td>
                                      <td><?php echo e($cash_register->user->name); ?></td>
                                      <td><?php echo e($cash_register->warehouse->name); ?></td>
                                      <td><?php echo e($cash_register->cash_in_hand); ?></td>
                                      <td><?php echo e(date($general_setting->date_format . " h:i:s", strtotime($cash_register->created_at))); ?></td>
                                      <?php if($cash_register->status): ?>
                                          <td>N/A</td>
                                          <td><div class="badge badge-success"><?php echo e(ucfirst(trans('file.Active'))); ?></div></td>
                                      <?php else: ?>
                                          <td><?php echo e(date($general_setting->date_format . " h:i:s", strtotime($cash_register->updated_at))); ?></td>
                                          <td><div class="badge badge-danger"><?php echo e(ucfirst(trans('file.Closed'))); ?></div></td>
                                      <?php endif; ?>
                                      <td>
                                          <div class="btn-group">
                                              <button type="button" data-id="<?php echo e($cash_register->id); ?>" class="register-details-btn btn btn-sm btn-info" data-toggle="modal" data-target="#register-details-modal" title="<?php echo e(ucfirst(trans('file.View'))); ?>"><i class="dripicons-preview"></i></button>
                                          </div>
                                      </td>
                                  </tr>
                                  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                              </tbody>
                          </table>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<div id="register-details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title"><?php echo e(ucwords(trans('file.Cash Register Details'))); ?></h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                            class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p><?php echo e(trans('file.Please review the transaction and payments.')); ?></p>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Cash in Hand'))); ?>:</td>
                                    <td id="cash_in_hand" class="text-right">100</td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Total Sale Amount'))); ?>:</td>
                                    <td id="total_sale_amount" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Total Payment'))); ?>:</td>
                                    <td id="total_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Cash Payment'))); ?>:</td>
                                    <td id="cash_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Credit Card Payment'))); ?>:</td>
                                    <td id="credit_card_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Cheque Payment'))); ?>:</td>
                                    <td id="cheque_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Gift Card Payment'))); ?>:</td>
                                    <td id="gift_card_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Paypal Payment'))); ?>:</td>
                                    <td id="paypal_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Total Sale Return'))); ?>:</td>
                                    <td id="total_sale_return" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><?php echo e(ucwords(trans('file.Total Expense'))); ?>:</td>
                                    <td id="total_expense" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><strong><?php echo e(ucwords(trans('file.Total Cash'))); ?>:</strong></td>
                                    <td id="total_cash" class="text-right"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12" id="closing-section">
                        <form action="<?php echo e(route('cashRegister.close')); ?>" method="POST">
                            <?php echo csrf_field(); ?>
                            <input type="hidden" name="cash_register_id">
                            <div class="text-right">
                              <button type="submit" class="btn btn-primary btn-md-block"
                                onclick="return confirmClose()"><?php echo e(ucfirst(trans('file.Close Register'))); ?></button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function confirmClose() {
      if (confirm("Are you sure want to close?")) {
          return true;
      }
      return false;
    }

  $(".register-details-btn").on("click", function (e) {
      id = $(this).data('id');
      $.ajax({
          url: 'cash-register/getDetails/'+id,
          type: "GET",
          success:function(data) {
              if(data['status'])
                $("#register-details-modal #closing-section").removeClass('d-none');
              else
                $("#register-details-modal #closing-section").addClass('d-none');

              $('#register-details-modal #cash_in_hand').text(data['cash_in_hand']);
              $('#register-details-modal #total_sale_amount').text(data['total_sale_amount']);
              $('#register-details-modal #total_payment').text(data['total_payment']);
              $('#register-details-modal #cash_payment').text(data['cash_payment']);
              $('#register-details-modal #credit_card_payment').text(data['credit_card_payment']);
              $('#register-details-modal #cheque_payment').text(data['cheque_payment']);
              $('#register-details-modal #gift_card_payment').text(data['gift_card_payment']);
              $('#register-details-modal #paypal_payment').text(data['paypal_payment']);
              $('#register-details-modal #total_sale_return').text(data['total_sale_return']);
              $('#register-details-modal #total_expense').text(data['total_expense']);
              $('#register-details-modal #total_cash').text(data['total_cash']);
              $('#register-details-modal input[name=cash_register_id]').val(id);
          }
      });
  });

    $('#cash-register-table').DataTable( {
        "order": [],
        'language': {
            'lengthMenu': '_MENU_ <?php echo e(trans("file.records per page")); ?>',
             "info":      '<small><?php echo e(trans("file.Showing")); ?> _START_ - _END_ (_TOTAL_)</small>',
            "search":  '<?php echo e(trans("file.Search")); ?>',
            'paginate': {
                    'previous': '<i class="dripicons-chevron-left"></i>',
                    'next': '<i class="dripicons-chevron-right"></i>'
            }
        },
        'columnDefs': [
            {
                "orderable": false,
                'targets': [0, 7]
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
                text: '<?php echo e(ucfirst(trans("file.PDF"))); ?>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'csv',
                text: '<?php echo e(ucfirst(trans("file.CSV"))); ?>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'print',
                text: '<?php echo e(ucfirst(trans("file.Print"))); ?>',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'colvis',
                text: '<?php echo e(ucfirst(trans("file.Column visibility"))); ?>',
                columns: ':gt(0)'
            },
        ],
    } );
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Redesign Ureka\resources\views/cash_register/index.blade.php ENDPATH**/ ?>