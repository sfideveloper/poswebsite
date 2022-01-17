@extends('layout.main')
@section('content')
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
@if(session()->has('message'))
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div> 
@endif
      <div class="row">
        <div class="container-fluid">
          <div class="col-md-12 border-bottom">
            <div class="filter-toggle btn-group">
              <button class="btn btn-light date-btn" data-start_date="{{date('Y-m-d')}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.Today')}}</button>
              <button class="btn btn-light date-btn" data-start_date="{{date('Y-m-d', strtotime(' -7 day'))}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.Last 7 Days')}}</button>
              <button class="btn btn-light date-btn active" data-start_date="{{date('Y').'-'.date('m').'-'.'01'}}" data-end_date="{{date('Y-m-d')}}">{{trans('file.This Month')}}</button>
              <button class="btn btn-light date-btn" data-start_date="{{date('Y').'-01'.'-01'}}" data-end_date="{{date('Y').'-12'.'-31'}}">{{trans('file.This Year')}}</button>
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
                    <h1 class="welcome text-white mb-4">{{ucwords(trans('file.welcome'))}}, <span>{{Auth::user()->name}}</span> </h1>
                    <h4 class="date mb-2 text-white" id="myDate">18 Juli 2021</h4>
                    <h1 class="time text-white" id="myTime">09.41</h1>
                </div>
            </div>
            </div>
            <div class="col-md-12 form-group">
              <div class="row">
                <!-- Count item widget-->
                <div class="col-sm-3">
                  <div class="name text-secondary">{{ucfirst(trans('file.revenue'))}}</div>
                  <div class="count-number revenue-data">{{$currency->code}} {{number_format((float)$revenue, 0, '', '.')}}</div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary">{{ucfirst(trans('file.Sale Return'))}}</div>
                    <div class="count-number return-data">{{$currency->code}} {{number_format((float)$return, 0, '.', '.')}}</div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary">{{ucfirst(trans('file.Purchase Return'))}}</div>
                    <div class="count-number purchase_return-data">{{$currency->code}} {{number_format((float)$purchase_return, 0, '', '.')}}</div>
                </div>
                <!-- Count item widget-->
                <div class="col-sm-3">
                    <div class="name text-secondary">{{ucfirst(trans('file.profit'))}}</div>
                    <div class="count-number profit-data">{{$currency->code}} {{number_format((float)$profit, 0, ',', '.')}}</div>
                </div>
              </div>
            </div>
            <div class="col-md-7 mt-4">
              <div class="card line-chart-example">
                <div class="card-header d-flex align-items-center">
                  <h4>{{ucwords(trans('file.Cash Flow'))}}</h4>
                </div>
                <div class="card-body">
                  @php
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
                  @endphp
                  <canvas id="cashFlow" data-color = "{{$color}}" data-color_rgba = "{{$color_rgba}}" data-recieved = "{{json_encode($payment_recieved)}}" data-sent = "{{json_encode($payment_sent)}}" data-month = "{{json_encode($month)}}" data-label1="{{trans('file.Payment Recieved')}}" data-label2="{{trans('file.Payment Sent')}}"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-5 mt-4">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>{{date('F')}} {{date('Y')}}</h4>
                </div>
                <div class="card-body">
                  <div class="pie-chart">
                      <canvas id="transactionChart" data-color = "{{$color}}" data-color_rgba = "{{$color_rgba}}" data-revenue={{$revenue}} data-purchase={{$purchase}} data-expense={{$expense}} data-label1="{{ucfirst(trans('file.Purchase'))}}" data-label2="{{ucfirst(trans('file.revenue'))}}" data-label3="{{ucfirst(trans('file.Expense'))}}" height="225%"> </canvas>
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
                  <h4>{{ucwords(trans('file.yearly report'))}}</h4>
                </div>
                <div class="card-body">
                  <canvas id="saleChart" data-sale_chart_value = "{{json_encode($yearly_sale_amount)}}" data-purchase_chart_value = "{{json_encode($yearly_purchase_amount)}}" data-label1="{{trans('file.Purchased Amount')}}" data-label2="{{trans('file.Sold Amount')}}"></canvas>
                </div>
              </div>
            </div>
            <div class="col-md-7">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>{{ucwords(trans('file.Recent Transaction'))}}</h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2">{{ucfirst(trans('file.latest'))}} 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <ul class="nav nav-tabs" role="tablist">
                    <li class="nav-item">
                      <a class="nav-link active" href="#sale-latest" role="tab" data-toggle="tab">{{ucfirst(trans('file.Sale'))}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#purchase-latest" role="tab" data-toggle="tab">{{ucfirst(trans('file.Purchase'))}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#quotation-latest" role="tab" data-toggle="tab">{{ucfirst(trans('file.Quotation'))}}</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#payment-latest" role="tab" data-toggle="tab">{{ucfirst(trans('file.Payment'))}}</a>
                    </li>
                  </ul>

                  <div class="tab-content">
                    <div role="tabpanel" class="tab-pane fade show active" id="sale-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>{{ucfirst(trans('file.date'))}}</th>
                                <th>{{ucfirst(trans('file.reference'))}}</th>
                                <th>{{ucfirst(trans('file.customer'))}}</th>
                                <th>{{ucfirst(trans('file.status'))}}</th>
                                <th>{{ucfirst(trans('file.grand total'))}}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($recent_sale as $sale)
                              <?php $customer = DB::table('customers')->find($sale->customer_id); ?>
                              <tr>
                                <td>{{ date($general_setting->date_format, strtotime($sale->created_at->toDateString())) }}</td>
                                <td>{{$sale->reference_no}}</td>
                                <td>{{$customer->name}}</td>
                                @if($sale->sale_status == 1)
                                <td><div class="badge badge-success">{{trans('file.Completed')}}</div></td>
                                @elseif($sale->sale_status == 2)
                                <td><div class="badge badge-danger">{{trans('file.Pending')}}</div></td>
                                @else
                                <td><div class="badge badge-warning">{{trans('file.Draft')}}</div></td>
                                @endif
                                <td>Rp {{number_format((float)$sale->grand_total, 0, '', '.')}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="purchase-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>{{ucfirst(trans('file.date'))}}</th>
                                <th>{{ucfirst(trans('file.reference'))}}</th>
                                <th>{{ucfirst(trans('file.Supplier'))}}</th>
                                <th>{{ucfirst(trans('file.status'))}}</th>
                                <th>{{ucfirst(trans('file.grand total'))}}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($recent_purchase as $purchase)
                              <?php $supplier = DB::table('suppliers')->find($purchase->supplier_id); ?>
                              <tr>
                                <td>{{date($general_setting->date_format, strtotime($purchase->created_at->toDateString())) }}</td>
                                <td>{{$purchase->reference_no}}</td>
                                @if($supplier)
                                  <td>{{$supplier->name}}</td>
                                @else
                                  <td>N/A</td>
                                @endif
                                @if($purchase->status == 1)
                                <td><div class="badge badge-success">Recieved</div></td>
                                @elseif($purchase->status == 2)
                                <td><div class="badge badge-success">Partial</div></td>
                                @elseif($purchase->status == 3)
                                <td><div class="badge badge-danger">Pending</div></td>
                                @else
                                <td><div class="badge badge-danger">Ordered</div></td>
                                @endif
                                <td>Rp {{number_format((float)$purchase->grand_total, 0, '', '.')}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="quotation-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>{{ucfirst(trans('file.date'))}}</th>
                                <th>{{ucfirst(trans('file.reference'))}}</th>
                                <th>{{ucfirst(trans('file.customer'))}}</th>
                                <th>{{ucfirst(trans('file.status'))}}</th>
                                <th>{{ucfirst(trans('file.grand total'))}}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($recent_quotation as $quotation)
                              <?php $customer = DB::table('customers')->find($quotation->customer_id); ?>
                              <tr>
                                <td>{{date($general_setting->date_format, strtotime($quotation->created_at->toDateString())) }}</td>
                                <td>{{$quotation->reference_no}}</td>
                                <td>{{$customer->name}}</td>
                                @if($quotation->quotation_status == 1)
                                <td><div class="badge badge-danger">Pending</div></td>
                                @else
                                <td><div class="badge badge-success">Sent</div></td>
                                @endif
                                <td>Rp {{number_format((float)$quotation->grand_total, 0, '', '.')}}</td>
                              </tr>
                              @endforeach
                            </tbody>
                          </table>
                        </div>
                    </div>
                    <div role="tabpanel" class="tab-pane fade" id="payment-latest">
                        <div class="table-responsive">
                          <table class="table">
                            <thead>
                              <tr>
                                <th>{{ucfirst(trans('file.date'))}}</th>
                                <th>{{ucfirst(trans('file.reference'))}}</th>
                                <th>{{ucfirst(trans('file.Amount'))}}</th>
                                <th>{{ucfirst(trans('file.Paid By'))}}</th>
                              </tr>
                            </thead>
                            <tbody>
                              @foreach($recent_payment as $payment)
                              <tr>
                                <td>{{date($general_setting->date_format, strtotime($payment->created_at->toDateString())) }}</td>
                                <td>{{$payment->payment_reference}}</td>
                                <td>Rp {{number_format((float)$payment->amount, 0, '', '.')}}</td>
                                <td>{{$payment->paying_method}}</td>
                              </tr>
                              @endforeach
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
                  <h4>{{ucwords(trans('file.Best Seller').' '.date('F'))}}</h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2">{{ucfirst(trans('file.top'))}} 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th>{{ucfirst(trans('file.Product Details'))}}</th>
                            <th>{{ucfirst(trans('file.qty'))}}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($best_selling_qty as $key=>$sale)
                          <?php $product = DB::table('products')->find($sale->product_id); ?>
                          <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$product->name}}<br>[{{$product->code}}]</td>
                            <td>{{$sale->sold_qty}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>{{ucwords(trans('file.Best Seller').' '.date('Y'). '('.trans('file.qty')).')'}}</h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2">{{ucfirst(trans('file.top'))}} 5</div>
                  </div>
                </div>
                <div class="card-body">
                  <div class="table-responsive">
                      <table class="table">
                        <thead>
                          <tr>
                            <th>SL No</th>
                            <th>{{trans('file.Product Details')}}</th>
                            <th>{{trans('file.qty')}}</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach($yearly_best_selling_qty as $key => $sale)
                          <?php $product = DB::table('products')->find($sale->product_id); ?>
                          <tr>
                            <td>{{$key + 1}}</td>
                            <td>{{$product->name}}<br>[{{$product->code}}]</td>
                            <td style="text-transform:capitalize">{{$sale->sold_qty}}</td>
                          </tr>
                          @endforeach
                        </tbody>
                      </table>
                    </div>
                </div>
              </div>
            </div>
            <div class="col-md-6">
              <div class="card">
                <div class="card-header d-flex justify-content-between align-items-center">
                  <h4>{{ucwords(trans('file.Best Seller').' '.date('Y') . '('.trans('file.price')).')'}}</h4>
                  <div class="right-column">
                    <div class="badge badge-primary p-2">{{ucfirst(trans('file.top'))}} 5</div>
                  </div>
                </div>
                <div class="card-body">
                <div class="table-responsive">
                    <table class="table">
                      <thead>
                        <tr>
                          <th>SL No</th>
                          <th>{{trans('file.Product Details')}}</th>
                          <th style="text-transform:capitalize">{{trans('file.grand total')}}</th>
                        </tr>
                      </thead>
                      <tbody>
                        @foreach($yearly_best_selling_price as $key => $sale)
                        <?php $product = DB::table('products')->find($sale->product_id); ?>
                        <tr>
                          <td>{{$key + 1}}</td>
                          <td>{{$product->name}}<br>[{{$product->code}}]</td>
                          <td>Rp {{number_format((float)$sale->total_price, 0, '', '.')}}</td>
                        </tr>
                        @endforeach
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

    let currency = {!! json_encode($currency) !!}
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
@endsection

