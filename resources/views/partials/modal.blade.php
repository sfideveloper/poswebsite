      <!-- notification modal -->
      <div id="notification-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Send Notification'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'notifications.store', 'method' => 'post']) !!}
                      <div class="row">
                          <?php 
                              $lims_user_list = DB::table('users')->where([
                                ['is_active', true],
                                ['id', '!=', \Auth::user()->id]
                              ])->get();
                          ?>
                          <div class="col-md-6 form-group">
                              <label>{{ucwords(trans('file.User'))}} *</label>
                              <select name="user_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select user...">
                                  @foreach($lims_user_list as $user)
                                  <option value="{{$user->id}}">{{$user->name . ' (' . $user->email. ')'}}</option>
                                  @endforeach
                              </select>
                          </div>
                          <div class="col-md-12 form-group">
                              <label>{{ucwords(trans('file.Message'))}} *</label>
                              <textarea rows="5" name="message" class="form-control" required></textarea>
                          </div>
                      </div>
                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- expense modal -->
      <div id="expense-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Add Expense'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'expenses.store', 'method' => 'post']) !!}
                    <?php 
                      $lims_expense_category_list = DB::table('expense_categories')->where('is_active', true)->get();
                      if(Auth::user()->role_id > 2)
                        $lims_warehouse_list = DB::table('warehouses')->where([
                          ['is_active', true],
                          ['id', Auth::user()->warehouse_id]
                        ])->get();
                      else
                        $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                      $lims_account_list = \App\Account::where('is_active', true)->get();
                    
                    ?>
                      <div class="row">
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Expense Category'))}} *</label>
                            <select name="expense_category_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Expense Category...">
                                @foreach($lims_expense_category_list as $expense_category)
                                <option value="{{$expense_category->id}}">{{$expense_category->name . ' (' . $expense_category->code. ')'}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Warehouse'))}} *</label>
                            <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                @foreach($lims_warehouse_list as $warehouse)
                                <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Amount'))}} *</label>
                            <input type="number" name="amount" step="any" required class="form-control">
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Account'))}}</label>
                            <select class="form-control selectpicker" name="account_id">
                            @foreach($lims_account_list as $account)
                                @if($account->is_default)
                                <option selected value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                @else
                                <option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                                @endif
                            @endforeach
                            </select>
                        </div>
                      </div>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Note'))}}</label>
                          <textarea name="note" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- account modal -->
      <div id="account-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Add Account'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'accounts.store', 'method' => 'post']) !!}
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Account No'))}} *</label>
                          <input type="text" name="account_no" required class="form-control">
                      </div>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.name'))}} *</label>
                          <input type="text" name="name" required class="form-control">
                      </div>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Initial Balance'))}}</label>
                          <input type="number" name="initial_balance" step="any" class="form-control">
                      </div>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Note'))}}</label>
                          <textarea name="note" rows="3" class="form-control"></textarea>
                      </div>
                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- account statement modal -->
      <div id="account-statement-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Account Statement'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'accounts.statement', 'method' => 'post']) !!}
                      <div class="row">
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Account'))}}</label>
                            <select class="form-control selectpicker" name="account_id">
                            @foreach($lims_account_list as $account)
                                <option value="{{$account->id}}">{{$account->name}} [{{$account->account_no}}]</option>
                            @endforeach
                            </select>
                        </div>
                        <div class="col-md-6 form-group">
                            <label>{{ucwords(trans('file.Type'))}}</label>
                            <select class="form-control selectpicker" name="type">
                                <option value="0">{{trans('file.All')}}</option>
                                <option value="1">{{trans('file.Debit')}}</option>
                                <option value="2">{{trans('file.Credit')}}</option>
                            </select>
                        </div>
                        <div class="col-md-12 form-group">
                            <label>{{ucwords(trans('file.Choose Your Date'))}}</label>
                            <div class="input-group">
                                <input type="text" class="daterangepicker-field form-control" required />
                                <input type="hidden" name="start_date" />
                                <input type="hidden" name="end_date" />
                            </div>
                        </div>
                      </div>
                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- warehouse modal -->
      <div id="warehouse-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Warehouse Report'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.warehouse', 'method' => 'post']) !!}
                    <?php 
                      $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Warehouse'))}} *</label>
                          <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                            <option value="all">All Warehouse</option>
                              @foreach($lims_warehouse_list as $warehouse)
                              <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                              @endforeach
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- user modal -->
      <div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.User Report'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.user', 'method' => 'post']) !!}
                    <?php 
                      $lims_user_list = DB::table('users')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.User'))}} *</label>
                          <select name="user_id" class="selectpicker form-control" required data-live-search="true" id="user-id" data-live-search-style="begins" title="Select user...">
                              @foreach($lims_user_list as $user)
                              <option value="{{$user->id}}">{{$user->name . ' (' . $user->phone. ')'}}</option>
                              @endforeach
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- customer modal -->
      <div id="customer-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Customer Report'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.customer', 'method' => 'post']) !!}
                    <?php 
                      $lims_customer_list = DB::table('customers')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.customer'))}} *</label>
                          <select name="customer_id" class="selectpicker form-control" required data-live-search="true" id="customer-id" data-live-search-style="begins" title="Select customer...">
                              @foreach($lims_customer_list as $customer)
                              <option value="{{$customer->id}}">{{$customer->name . ' (' . $customer->phone_number. ')'}}</option>
                              @endforeach
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- supplier modal -->
      <div id="supplier-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Supplier Report'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.supplier', 'method' => 'post']) !!}
                    <?php 
                      $lims_supplier_list = DB::table('suppliers')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Supplier'))}} *</label>
                          <select name="supplier_id" class="selectpicker form-control" required data-live-search="true" id="supplier-id" data-live-search-style="begins" title="Select Supplier...">
                              @foreach($lims_supplier_list as $supplier)
                              <option value="{{$supplier->id}}">{{$supplier->name . ' (' . $supplier->phone_number. ')'}}</option>
                              @endforeach
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>

      <!-- biller modal -->
      <div id="biller-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Biller Report'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.biller', 'method' => 'post']) !!}
                    <?php
                      $lims_biller_list = DB::table('billers')->where('is_active', true)->get();
                      $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Biller'))}} *</label>
                          <select name="biller_id" class="selectpicker form-control" required data-live-search="true" id="biller-id" data-live-search-style="begins" title="Select Biller...">
                              @foreach($lims_biller_list as $biller)
                              <option value="{{$biller->id}}">{{$biller->name . ' (' . $biller->name. ')'}}</option>
                              @endforeach
                          </select>
                          <label>{{ucwords(trans('file.Warehouse'))}} *</label>
                          <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" id="warehouse-id" data-live-search-style="begins" title="Select Warehouse...">
                              <option value="all">All Warehouse</option>
                              @foreach($lims_warehouse_list as $warehouse)
                              <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                              @endforeach
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>
      
      <!-- tax modal -->
      <div id="tax-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Tax Report Sale'))}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
                <div class="modal-body">
                  <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                    {!! Form::open(['route' => 'report.tax', 'method' => 'post']) !!}
                    <?php 
                      $lims_warehouse_list = DB::table('warehouses')->where('is_active', true)->get();
                    ?>
                      <div class="form-group">
                          <label>{{ucwords(trans('file.Warehouse'))}} *</label>
                          <select name="warehouse_id" class="selectpicker form-control" required data-live-search="true" id="warehouse-id" data-live-search-style="begins" title="Select warehouse...">
                            @if (Auth::user()->role->name == 'Perpajakan')
                              @foreach($lims_warehouse_list as $warehouse)
                              @php
                                $warehouse_id_tax = DB::table('users')->where('id', Auth::user()->id)->get('warehouse_id_tax')->first();
                                $warehouse_id_tax_get = explode(',', $warehouse_id_tax->warehouse_id_tax);
                              @endphp
                                @foreach ($warehouse_id_tax_get as $item)
                                    @if ($warehouse->id == $item)
                                    <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                    @endif
                                @endforeach
                              @endforeach
                            @else
                            <option value="all">All Warehouse</option>
                              @foreach($lims_warehouse_list as $warehouse)
                                <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                              @endforeach
                            @endif
                          </select>
                      </div>

                      <input type="hidden" name="start_date" value="1988-04-18" />
                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />

                      <div class="form-group text-right">
                          <button type="submit" class="btn btn-primary btn-md-block">{{ucfirst(trans('file.submit'))}}</button>
                      </div>
                    {{ Form::close() }}
                </div>
            </div>
        </div>
      </div>