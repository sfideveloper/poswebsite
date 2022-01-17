<?php $__env->startSection('content'); ?>
<?php if(session()->has('not_permitted')): ?>
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('not_permitted')); ?></div> 
<?php endif; ?>
<?php if(session()->has('message')): ?>
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button><?php echo e(session()->get('message')); ?></div> 
<?php endif; ?>
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12 border-bottom">
            <div class="filter-toggle btn-group">
              <button class="btn btn-light date-btn" data-start_date="<?php echo e(date('Y-m-d')); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Today')); ?></button>
              <button class="btn btn-light date-btn" data-start_date="<?php echo e(date('Y-m-d', strtotime(' -7 day'))); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.Last 7 Days')); ?></button>
              <button class="btn btn-light date-btn active" data-start_date="<?php echo e(date('Y').'-'.date('m').'-'.'01'); ?>" data-end_date="<?php echo e(date('Y-m-d')); ?>"><?php echo e(trans('file.This Month')); ?></button>
              <button class="btn btn-light date-btn" data-start_date="<?php echo e(date('Y').'-01'.'-01'); ?>" data-end_date="<?php echo e(date('Y').'-12'.'-31'); ?>"><?php echo e(trans('file.This Year')); ?></button>
            </div>
          </div>
        </div>
      </div>
      <!-- Counts Section -->
      <section class="dashboard-counts">
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card greeting card-rounded">
                <div class="card-body pb-0 pb-4 ">
                    <h1 class="welcome text-white mb-4"><?php echo e(ucwords(trans('file.welcome'))); ?>, <span><?php echo e(Auth::user()->name); ?></span> </h1>
                    <h4 class="date mb-2 text-white" id="myDate">18 Juli 2021</h4>
                    <h1 class="time text-white" id="myTime">09.41</h1>
                </div>
            </div>
            </div>
            <div class="col-md-12 form-group">
              <div class="row">
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="name text-secondary"><?php echo e(ucfirst(trans('file.revenue'))); ?></div>
                  <div class="count-number revenue-data"><?php echo e($currency->code); ?> <?php echo e(number_format((float)$revenue, 0, '', '.')); ?></div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary"><?php echo e(ucfirst(trans('file.Sale Return'))); ?></div>
                    <div class="count-number return-data"><?php echo e($currency->code); ?> <?php echo e(number_format((float)$return, 0, '.', '.')); ?></div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary"><?php echo e(ucfirst(trans('file.Purchase Return'))); ?></div>
                    <div class="count-number purchase_return-data"><?php echo e($currency->code); ?> <?php echo e(number_format((float)$purchase_return, 0, '', '.')); ?></div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary"><?php echo e(ucfirst(trans('file.profit'))); ?></div>
                    <div class="count-number profit-data"><?php echo e($currency->code); ?> <?php echo e(number_format((float)$profit, 0, ',', '.')); ?></div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(ucwords(trans('file.Cash Flow'))); ?></h4>
                </div>
                <div class="card-body">
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
                  <canvas id="cashFlow" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-recieved = "<?php echo e(json_encode($payment_recieved)); ?>" data-sent = "<?php echo e(json_encode($payment_sent)); ?>" data-month = "<?php echo e(json_encode($month)); ?>" data-label1="<?php echo e(trans('file.Payment Recieved')); ?>" data-label2="<?php echo e(trans('file.Payment Sent')); ?>"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(date('F')); ?> <?php echo e(date('Y')); ?></h4>
                </div>
                <div class="card-body">
                  <div class="pie-chart">
                      <canvas id="transactionChart" data-color = "<?php echo e($color); ?>" data-color_rgba = "<?php echo e($color_rgba); ?>" data-revenue=<?php echo e($revenue); ?> data-purchase=<?php echo e($purchase); ?> data-expense=<?php echo e($expense); ?> data-label1="<?php echo e(ucfirst(trans('file.Purchase'))); ?>" data-label2="<?php echo e(ucfirst(trans('file.revenue'))); ?>" data-label3="<?php echo e(ucfirst(trans('file.Expense'))); ?>" height="225%"> </canvas>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        
        <div class="container-fluid">
          <div class="row">
            <div class="col-md-12">
              <div class="card">
                <div class="card-header d-flex align-items-center">
                  <h4><?php echo e(ucwords(trans('file.yearly report'))); ?></h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "<?php echo e(json_encode($yearly_sale_amount)); ?>" data-purchase_chart_value = "<?php echo e(json_encode($yearly_purchase_amount)); ?>" data-label1="<?php echo e(trans('file.Purchased Amount')); ?>" data-label2="<?php echo e(trans('file.Sold Amount')); ?>"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(ucwords(trans('file.Recent Transaction'))); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2"><?php echo e(ucfirst(trans('file.latest'))); ?> 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab"><?php echo e(ucfirst(trans('file.Sale'))); ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab"><?php echo e(ucfirst(trans('file.Purchase'))); ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab"><?php echo e(ucfirst(trans('file.Quotation'))); ?></a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab"><?php echo e(ucfirst(trans('file.Payment'))); ?></a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th><?php echo e(ucfirst(trans('file.date'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.reference'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.customer'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.status'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $recent_sale; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $customer = DB::table('customers')->find($sale->customer_id); ?>
                              <tr>
                                <td><?php echo e(date($general_setting->date_format, strtotime($sale->created_at->toDateString()))); ?></td>
                                <td><?php echo e($sale->reference_no); ?></td>
                                <td><?php echo e($customer->name); ?></td>
                                <?php if($sale->sale_status == 1): ?>
                                <td><div class="badge badge-success"><?php echo e(trans('file.Completed')); ?></div></td>
                                <?php elseif($sale->sale_status == 2): ?>
                                <td><div class="badge badge-danger"><?php echo e(trans('file.Pending')); ?></div></td>
                                <?php else: ?>
                                <td><div class="badge badge-warning"><?php echo e(trans('file.Draft')); ?></div></td>
                                <?php endif; ?>
                                <td>Rp <?php echo e(number_format((float)$sale->grand_total, 0, '', '.')); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th><?php echo e(ucfirst(trans('file.date'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.reference'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.Supplier'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.status'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $recent_purchase; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $purchase): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $supplier = DB::table('suppliers')->find($purchase->supplier_id); ?>
                              <tr>
                                <td><?php echo e(date($general_setting->date_format, strtotime($purchase->created_at->toDateString()))); ?></td>
                                <td><?php echo e($purchase->reference_no); ?></td>
                                <?php if($supplier): ?>
                                  <td><?php echo e($supplier->name); ?></td>
                                <?php else: ?>
                                  <td>N/A</td>
                                <?php endif; ?>
                                <?php if($purchase->status == 1): ?>
                                <td><div class="badge badge-success">Recieved</div></td>
                                <?php elseif($purchase->status == 2): ?>
                                <td><div class="badge badge-success">Partial</div></td>
                                <?php elseif($purchase->status == 3): ?>
                                <td><div class="badge badge-danger">Pending</div></td>
                                <?php else: ?>
                                <td><div class="badge badge-danger">Ordered</div></td>
                                <?php endif; ?>
                                <td>Rp <?php echo e(number_format((float)$purchase->grand_total, 0, '', '.')); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th><?php echo e(ucfirst(trans('file.date'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.reference'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.customer'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.status'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.grand total'))); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $recent_quotation; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $quotation): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <?php $customer = DB::table('customers')->find($quotation->customer_id); ?>
                              <tr>
                                <td><?php echo e(date($general_setting->date_format, strtotime($quotation->created_at->toDateString()))); ?></td>
                                <td><?php echo e($quotation->reference_no); ?></td>
                                <td><?php echo e($customer->name); ?></td>
                                <?php if($quotation->quotation_status == 1): ?>
                                <td><div class="badge badge-danger">Pending</div></td>
                                <?php else: ?>
                                <td><div class="badge badge-success">Sent</div></td>
                                <?php endif; ?>
                                <td>Rp <?php echo e(number_format((float)$quotation->grand_total, 0, '', '.')); ?></td>
                              </tr>
                              <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th><?php echo e(ucfirst(trans('file.date'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.reference'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.Amount'))); ?></th>
                                <th><?php echo e(ucfirst(trans('file.Paid By'))); ?></th>
                              </tr>
                            </thead>
                            <tbody>
                              <?php $__currentLoopData = $recent_payment; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $payment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                              <tr>
                                <td><?php echo e(date($general_setting->date_format, strtotime($payment->created_at->toDateString()))); ?></td>
                                <td><?php echo e($payment->payment_reference); ?></td>
                                <td>Rp <?php echo e(number_format((float)$payment->amount, 0, '', '.')); ?></td>
                                <td><?php echo e($payment->paying_method); ?></td>
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
            <div class="col-md-5">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(ucwords(trans('file.Best Seller').' '.date('F'))); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2"><?php echo e(ucfirst(trans('file.top'))); ?> 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th><?php echo e(ucfirst(trans('file.Product Details'))); ?></th>
                            <th><?php echo e(ucfirst(trans('file.qty'))); ?></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $best_selling_qty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php $product = DB::table('products')->find($sale->product_id); ?>
                          <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($product->name); ?><br>[<?php echo e($product->code); ?>]</td>
                            <td><?php echo e($sale->sold_qty); ?></td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(ucwords(trans('file.Best Seller').' '.date('Y'). '('.trans('file.qty')).')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2"><?php echo e(ucfirst(trans('file.top'))); ?> 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th><?php echo e(trans('file.Product Details')); ?></th>
                            <th><?php echo e(trans('file.qty')); ?></th>
                          </tr>
                        </thead>
                        <tbody>
                          <?php $__currentLoopData = $yearly_best_selling_qty; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                          <?php $product = DB::table('products')->find($sale->product_id); ?>
                          <tr>
                            <td><?php echo e($key + 1); ?></td>
                            <td><?php echo e($product->name); ?><br>[<?php echo e($product->code); ?>]</td>
                            <td style="text-transform:capitalize"><?php echo e($sale->sold_qty); ?></td>
                          </tr>
                          <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4><?php echo e(ucwords(trans('file.Best Seller').' '.date('Y') . '('.trans('file.price')).')'); ?></h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2"><?php echo e(ucfirst(trans('file.top'))); ?> 5</div>
                  </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th><?php echo e(trans('file.Product Details')); ?></th>
                          <th style="text-transform:capitalize"><?php echo e(trans('file.grand total')); ?></th>
                        </tr>
                      </thead>
                      <tbody>
                        <?php $__currentLoopData = $yearly_best_selling_price; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $sale): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php $product = DB::table('products')->find($sale->product_id); ?>
                        <tr>
                          <td><?php echo e($key + 1); ?></td>
                          <td><?php echo e($product->name); ?><br>[<?php echo e($product->code); ?>]</td>
                          <td>Rp <?php echo e(number_format((float)$sale->total_price, 0, '', '.')); ?></td>
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
      
<script type="text/javascript">
    // Show and hide color-switcher
    $(".color-switcher .switcher-button").on('click', function() {
        $(".color-switcher").toggleClass("show-color-switcher", "hide-color-switcher", 300);
    });

    // Color Skins
    $('a.color').on('click', function() {
        /*var title = $(this).attr('title');
        $('#style-colors').attr('href', 'css/skin-' + title + '.css');
        return false;*/
        $.get('setting/general_setting/change-theme/' + $(this).data('color'), function(data) {
        });
        var style_link= $('#custom-style').attr('href').replace(/([^-]*)$/, $(this).data('color') );
        $('#custom-style').attr('href', style_link);
    });

    $(".date-btn").on("click", function() {
        $(".date-btn").removeClass("active");
        $(this).addClass("active");
        var start_date = $(this).data('start_date');
        var end_date = $(this).data('end_date');
        $.get('dashboard-filter/' + start_date + '/' + end_date, function(data) {
            dashboardFilter(data);
        });
    });

    let currency = <?php echo json_encode($currency); ?>

    function dashboardFilter(data){
        $('.revenue-data').hide();
        $('.revenue-data').html(`${currency.code} ${parseFloat(data[0]).toLocaleString("id-ID")}`);
        $('.revenue-data').show(500);

        $('.return-data').hide();
        $('.return-data').html(`${currency.code} ${parseFloat(data[1]).toLocaleString("id-ID")}`);
        $('.return-data').show(500);

        $('.profit-data').hide();
        $('.profit-data').html(`${currency.code} ${parseFloat(data[2]).toLocaleString("id-ID")}`);
        $('.profit-data').show(500);

        $('.purchase_return-data').hide();
        $('.purchase_return-data').html(`${currency.code} ${parseFloat(data[3]).toLocaleString("id-ID")}`);
        $('.purchase_return-data').show(500);
    }
</script>

<script>
  function showDateTime() {
  var myDate = document.getElementById("myDate");
  var myTime = document.getElementById("myTime");

  var date = new Date();
  var dayList = ["Ahad", "Senin", "Selasa", "Rabu", "Kamis", "Jum'at", "Sabtu"];
  var monthNames = [
    "Januari",
    "Februari",
    "Maret",
    "April",
    "Mei",
    "Juni",
    "Juli",
    "Agustus",
    "September",
    "Oltober",
    "November",
    "Desember"
  ];
  var dayName = dayList[date.getDay()];
  var monthName = monthNames[date.getMonth()];
  var today = `${dayName}, ${date.getDate()} ${monthName} ${date.getFullYear()}`;

  var hour = date.getHours();
  var min = date.getMinutes();
  var sec = date.getSeconds();

  var time = hour + ":" + min + ":" + sec;
  myTime.innerText = time
  myDate.innerText = today
}
setInterval(showDateTime, 1000);
</script>
<?php $__env->stopSection(); ?>


<?php echo $__env->make('layout.main', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /home/u5070271/newureka/resources/views/index.blade.php ENDPATH**/ ?>