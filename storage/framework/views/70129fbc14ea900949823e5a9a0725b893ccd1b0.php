 <?php $__env->startSection('content'); ?>
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 mb-4">
                <div class="card">
                    <div class="card-body">
                    <?php echo e(Form::open(['route' => 'report.bestSellerByWarehouse', 'method' => 'post', 'id' => 'report-form'])); ?>

                    <input type="hidden" name="warehouse_id_hidden" value="<?php echo e($warehouse_id); ?>">
                    <div class="d-flex justify-content-between">
                        <h4 ><?php echo e(ucwords(trans('file.Best Seller'))); ?> <?php echo e(ucwords(trans('file.From'))); ?> <?php echo e($start_month.' - '.date("F Y")); ?> &nbsp;&nbsp;</h4>
                        <select class="selectpicker" id="warehouse_id" name="warehouse_id">
                            <option value="0"><?php echo e(trans('file.All Warehouse')); ?></option>
                            <?php $__currentLoopData = $lims_warehouse_list; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $warehouse): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <option value="<?php echo e($warehouse->id); ?>"><?php echo e($warehouse->name); ?></option>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </select>
                    </div>
                    <?php echo e(Form::close()); ?>

                        <?php
                            if($general_setting->theme == 'default.css'){
                                $color = '#964aad';
                                $color_rgba = 'rgba(115, 54, 134, 0.8)';
                            }
                            elseif($general_setting->theme == 'green.css'){
                                $color = '#2ecc71';
                                $color_rgba = 'rgba(46, 204, 113, 0.8)';
                            }
                            elseif($general_setting->theme == 'blue.css'){
                                $color = '#3498db';
                                $color_rgba = 'rgba(52, 152, 219, 0.8)';
                            }
                            elseif($general_setting->theme == 'dark.css'){
                                $color = '#34495e';
                                $color_rgba = 'rgba(52, 73, 94, 0.8)';
                            }
                        ?>
                    
                        <canvas id="bestSeller" data-color="<?php echo e($color); ?>" data-color_rgba="<?php echo e($color_rgba); ?>" data-product = "<?php echo e(json_encode($product)); ?>" data-sold_qty="<?php echo e(json_encode($sold_qty)); ?>" ></canvas>
                    
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

	$("ul#report").siblings('a').attr('aria-expanded','true');
    $("ul#report").addClass("show");
    $("ul#report #best-seller-report-menu").addClass("active");

	$('#warehouse_id').val($('input[name="warehouse_id_hidden"]').val());
	$('.selectpicker').selectpicker('refresh');

	$('#warehouse_id').on("change", function(){
		$('#report-form').submit();
	});
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH E:\Redesign Ureka\resources\views/report/best_seller.blade.php ENDPATH**/ ?>