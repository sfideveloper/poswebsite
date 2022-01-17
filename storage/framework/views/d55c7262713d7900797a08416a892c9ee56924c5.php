 <?php $__env->startSection('content'); ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo session()->get('message'); ?></div> 
<?php endif; ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right mb-4">
                <?php if(in_array("suppliers-add", $all_permission)): ?>
                    <a href="<?php echo e(route('supplier.create')); ?>" class="btn btn-info p-3"><i class="dripicons-plus"></i> <?php echo e(ucfirst(trans('file.Add Supplier'))); ?></a>
                    <a href="#" data-toggle="modal" data-target="#importSupplier" class="btn btn-primary p-3"><i class="dripicons-copy"></i> <?php echo e(ucfirst(trans('file.Import Supplier'))); ?></a>
                <?php endif; ?>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="supplier-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th><?php echo e(ucfirst(trans('file.Image'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.name'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Company Name'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.VAT Number'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Email'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Phone Number'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Address'))); ?></th>
                                        <th class="not-exported"><?php echo e(ucfirst(trans('file.action'))); ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $__currentLoopData = $lims_supplier_all; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$supplier): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <tr data-id="<?php echo e($supplier->id); ?>">
                                        <td><?php echo e($key); ?></td>
                                        <?php if($supplier->image): ?>
                                        <td> <img src="<?php echo e(url('images/supplier',$supplier->image)); ?>" height="80" width="80">
                                        </td>
                                        <?php else: ?>
                                        <td>No Image</td>
                                        <?php endif; ?>
                                        <td><?php echo e($supplier->name); ?></td>
                                        <td><?php echo e($supplier->company_name); ?></td>
                                        <td><?php echo e($supplier->vat_number); ?></td>
                                        <td><?php echo e($supplier->email); ?></td>
                                        <td><?php echo e($supplier->phone_number); ?></td>
                                        <td><?php echo e($supplier->address); ?>

                                                <?php if($supplier->city): ?><?php echo e(', '.$supplier->city); ?><?php endif; ?>
                                                <?php if($supplier->state): ?><?php echo e(', '.$supplier->state); ?><?php endif; ?>
                                                <?php if($supplier->postal_code): ?><?php echo e(', '.$supplier->postal_code); ?><?php endif; ?>
                                                <?php if($supplier->country): ?><?php echo e(', '.$supplier->country); ?><?php endif; ?></td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"><?php echo e(ucfirst(trans('file.action'))); ?>

                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                    <?php if(in_array("suppliers-edit", $all_permission)): ?>
                                                    <li>
                                                        <a href="<?php echo e(route('supplier.edit', $supplier->id)); ?>" class="btn btn-link"><i class="dripicons-document-edit"></i> <?php echo e(ucfirst(trans('file.edit'))); ?></a>
                                                    </li>
                                                    <?php endif; ?>
                                                    <li class="divider"></li>
                                                    <?php if(in_array("suppliers-delete", $all_permission)): ?>
                                                    <?php echo e(Form::open(['route' => ['supplier.destroy', $supplier->id], 'method' => 'DELETE'] )); ?>

                                                    <li>
                                                        <button type="submit" class="btn btn-link" onclick="return confirmDelete()"><i class="dripicons-trash"></i> <?php echo e(ucfirst(trans('file.delete'))); ?></button>
                                                    </li>
                                                    <?php echo e(Form::close()); ?>

                                                    <?php endif; ?>
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

<div id="importSupplier" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
	<div role="document" class="modal-dialog">
	  <div class="modal-content">
	  	<?php echo Form::open(['route' => 'supplier.import', 'method' => 'post', 'files' => true]); ?>

	    <div class="modal-header">
	      <h5 id="exampleModalLabel" class="modal-title"><?php echo e(ucwords(trans('file.Import Supplier'))); ?></h5>
	      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
	    </div>
	    <div class="modal-body">
	      <p class="italic"><small><?php echo e(trans('file.The field labels marked with * are required input fields')); ?>.</small></p>
	       <p><?php echo e(trans('file.The correct column order is')); ?> (name*, image, company_name*, vat_number, email*, phone_number*, address*, city*,state, postal_code, country) <?php echo e(trans('file.and you must follow this')); ?>.</p>
           <p><?php echo e(trans('file.To display Image it must be stored in')); ?> images/supplier <?php echo e(trans('file.directory')); ?></p>
	        <div class="row">
                <div class="col-md-6">
                    <div class="form-group">
                        <label><?php echo e(ucwords(trans('file.Upload CSV File'))); ?> *</label>
                        <?php echo e(Form::file('file', array('class' => 'form-control','required'))); ?>

                    </div>
                </div>
                <div class="col-md-6">
                    <div class="form-group">
                        <label><?php echo e(ucwords(trans('file.Sample File'))); ?></label>
                        <a href="sample_file/sample_supplier.csv" class="btn btn-info btn-block btn-md"><i class="dripicons-download"></i> <?php echo e(ucfirst(trans('file.Download'))); ?></a>
                    </div>
                </div>
            </div>
	        <div class="text-right">
                <input type="submit" value="<?php echo e(ucfirst(trans('file.submit'))); ?>" class="btn btn-primary btn-md-block" id="submit-button">
            </div>
		</div>
		<?php echo Form::close(); ?>

	  </div>
	</div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Redesign Ureka\resources\views/supplier/index.blade.php ENDPATH**/ ?>