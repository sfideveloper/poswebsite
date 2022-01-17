 <?php $__env->startSection('content'); ?>
<?php if(session()->has('create_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('create_message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('edit_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('edit_message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('import_message')): ?>
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('import_message')); ?></div> 
<?php endif; ?>
<?php if(session()->has('not_permitted')): ?>
    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<?php if(session()->has('message')): ?>
    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="<?php echo e(route('products.create')); ?>" class="btn btn-info p-3 mb-3"><i class="dripicons-plus"></i> <?php echo e(ucfirst(__('file.add_stock'))); ?></a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="product-data-table" class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th><?php echo e(ucfirst(trans('file.Image'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.name'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Code'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Brand'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.category'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Quantity'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Unit'))); ?></th>
                                        <th><?php echo e(ucfirst(trans('file.Price'))); ?></th>
                                        <th class="not-exported"><?php echo e(ucfirst(trans('file.action'))); ?></th>
                                    </tr>
                                </thead>
                                
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Redesign Ureka\resources\views/product/index.blade.php ENDPATH**/ ?>