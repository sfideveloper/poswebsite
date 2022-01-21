 <?php $__env->startSection('content'); ?>

<?php if($errors->has('name')): ?>
<div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e($errors->first('name')); ?></div>
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right mb-4">
                <button type="button" class="btn btn-info p-3" data-toggle="modal" data-target="#createModal"><i class="dripicons-plus"></i> <?php echo e(ucfirst(trans('file.Add Department'))); ?></button>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="department-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th><?php echo e(ucfirst(trans('file.Department'))); ?></th>
                                        <th class="not-exported"><?php echo e(ucfirst(trans('file.action'))); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $lims_department_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$department): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-id="<?php echo e($department->id); ?>">
                                        <td><?php echo e($key); ?></td>
                                        <td><?php echo e($department->name); ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(ucfirst(trans('file.action'))); ?>

                                                <span class="caret"></span>
                                                <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                    <li>
                                                        <button type="button" data-id="<?php echo e($department->id); ?>" data-name="<?php echo e($department->name); ?>" class="edit-btn btn btn-link" data-toggle="modal" data-target="#editModal" ><i class="dripicons-document-edit"></i>  <?php echo e(ucfirst(trans('file.edit'))); ?></button>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <?php echo e(Form::open(['route' => ['departments.destroy', $department->id], 'method' => 'DELETE'] )); ?>

                                                    <li>
                                                    <button type="submit" class="btn btn-link" onclick="return confirmDelete()"><i class="dripicons-trash"></i> <?php echo e(ucfirst(trans('file.delete'))); ?></button> 
                                                    </li>
                                                    <?php echo e(Form::close()); ?>

                                                </ul>
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
<!-- Create Modal -->
<div id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
      <div class="modal-content">
        <?php echo Form::open(['route' => 'departments.store', 'method' => 'post']); ?>

        <div class="modal-header">
          <h5 id="exampleModalLabel" class="modal-title"><?php echo e(ucwords(trans('file.Add Department'))); ?></h5>
          <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
        </div>
        <div class="modal-body">
          <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
          <form>
            <div class="form-group">
                <label><?php echo e(ucwords(trans('file.name'))); ?> *</label>
                <?php echo e(Form::text('name',null,array('required' => 'required', 'class' => 'form-control', 'placeholder' => 'Type department name...'))); ?>

            </div>               
            <div class="form-group">       
              <input type="submit" value="<?php echo e(ucfirst(trans('file.submit'))); ?>" class="btn btn-primary">
            </div>
          </form>
        </div>
        <?php echo e(Form::close()); ?>

      </div>
    </div>
</div>
<!-- Edit Modal -->
<div id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
  <div role="document" class="modal-dialog">
    <div class="modal-content">
        <?php echo e(Form::open(['route' => ['departments.update', 1], 'method' => 'PUT'] )); ?>

      <div class="modal-header">
        <h5 id="exampleModalLabel" class="modal-title"><?php echo e(ucwords(trans('file.Update Department'))); ?></h5>
        <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
      </div>
      <div class="modal-body">
        <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
            <div class="form-group">
                <label><?php echo e(ucwords(trans('file.name'))); ?> *</label>
                <?php echo e(Form::text('name',null, array('required' => 'required', 'class' => 'form-control'))); ?>

            </div>
            <input type="hidden" name="department_id">
            <div class="form-group">       
                <input type="submit" value="<?php echo e(ucfirst(trans('file.submit'))); ?>" class="btn btn-primary">
              </div>
            </div>
      <?php echo e(Form::close()); ?>

    </div>
  </div>
</div>

<script type="text/javascript">
    $("ul#hrm").siblings('a').attr('aria-expanded','true');
    $("ul#hrm").addClass("show");
    $("ul#hrm #dept-menu").addClass("active");

    var department_id = [];
    var user_verified = <?php echo json_encode(env('USER_VERIFIED')) ?>;
    
    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    function confirmDelete() {
      if (confirm("Are you sure want to delete?")) {
          return true;
      }
      return false;
    }
$(document).ready(function() {
    $('.edit-btn').on('click', function(){
        $("#editModal input[name='department_id']").val($(this).data('id'));
        $("#editModal input[name='name']").val($(this).data('name'));
    });
});

    $('#department-table').DataTable( {
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
                'targets': [0, 2]
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
                text: '<?php echo e(ucfirst(trans("file.delete"))); ?>',
                className: 'buttons-delete',
                action: function ( e, dt, node, config ) {
                    if(user_verified == '1') {
                        department_id.length = 0;
                        $(':checkbox:checked').each(function(i){
                            if(i){
                                department_id[i-1] = $(this).closest('tr').data('id');
                            }
                        });
                        if(department_id.length && confirm("Are you sure want to delete?")) {
                            $.ajax({
                                type:'POST',
                                url:'departments/deletebyselection',
                                data:{
                                    departmentIdArray: department_id
                                },
                                success:function(data){
                                    alert(data);
                                }
                            });
                            dt.rows({ page: 'current', selected: true }).remove().draw(false);
                        }
                        else if(!department_id.length)
                            alert('No department is selected!');
                    }
                    else
                        alert('This feature is disable for demo!');
                }
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
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/customer/www/pos.halalexportindonesia.com/project-files/resources/views/department/index.blade.php ENDPATH**/ ?>