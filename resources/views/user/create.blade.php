@extends('layout.main') @section('content')

@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{ucwords(trans('file.Add User'))}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => 'user.store', 'method' => 'post', 'files' => true]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.UserName'))}} *</strong></label>
                                        <input type="text" name="name" required class="form-control">
                                        @if($errors->has('name'))
                                       <span>
                                           <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Password'))}} *</strong></label>
                                        <div class="input-group">
                                            <input type="password" name="password" required class="form-control">
                                            <div class="input-group-append">
                                                <button id="genbutton" type="button" class="btn btn-default">{{trans('file.Generate')}}</button>
                                            </div>
                                            @if($errors->has('password'))
                                            <span>
                                               <strong>{{ $errors->first('password') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Email'))}} *</strong></label>
                                        <input type="email" name="email" placeholder="example@example.com" required class="form-control">
                                        @if($errors->has('email'))
                                       <span>
                                           <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Phone Number'))}} *</strong></label>
                                        <input type="text" name="phone_number" required class="form-control">
                                        @if($errors->has('phone_number'))
                                            <span>
                                               <strong>{{ $errors->first('phone_number') }}</strong>
                                            </span>
                                        @endif
                                    </div>
                                    <div class="customer-section">
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.Address'))}} *</strong></label>
                                            <input type="text" name="address" class="form-control customer-input">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.State'))}}</strong></label>
                                            <input type="text" name="state" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.Country'))}}</strong></label>
                                            <input type="text" name="country" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <input class="mt-2" type="checkbox" name="is_active" value="1" checked>
                                        <label class="mt-2"><strong>{{ucwords(trans('file.Active'))}}</strong></label>
                                    </div>
                                    <div class="form-grou text-right">
                                        <input type="submit" value="{{ucfirst(trans('file.submit'))}}" class="btn btn-primary btn-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Company Name'))}}</strong></label>
                                        <input type="text" name="company_name" class="form-control">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Role'))}} *</strong></label>
                                        <select name="role_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Role...">
                                          @foreach($lims_role_list as $role)
                                              <option value="{{$role->id}}">{{$role->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="customer-section">
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.Customer Group'))}} *</strong></label>
                                            <select name="customer_group_id" class="selectpicker form-control customer-input" data-live-search="true" data-live-search-style="begins" title="Select customer_group...">
                                              @foreach($lims_customer_group_list as $customer_group)
                                                  <option value="{{$customer_group->id}}">{{$customer_group->name}}</option>
                                              @endforeach
                                            </select>
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.name'))}} *</strong></label>
                                            <input type="text" name="customer_name" class="form-control customer-input">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.Tax Number'))}}</strong></label>
                                            <input type="text" name="tax_number" class="form-control">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.City'))}} *</strong></label>
                                            <input type="text" name="city" class="form-control customer-input">
                                        </div>
                                        <div class="form-group">
                                            <label><strong>{{ucwords(trans('file.Postal Code'))}}</strong></label>
                                            <input type="text" name="postal_code" class="form-control">
                                        </div>
                                    </div>
                                    <div class="form-group" id="biller-id">
                                        <label><strong>{{ucwords(trans('file.Biller'))}} *</strong></label>
                                        <select name="biller_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Biller...">
                                          @foreach($lims_biller_list as $biller)
                                              <option value="{{$biller->id}}">{{$biller->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" id="warehouseId">
                                        <label><strong>{{ucwords(trans('file.Warehouse'))}} *</strong></label>
                                        <select name="warehouse_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                          @foreach($lims_warehouse_list as $warehouse)
                                              <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group" id="warehouseIdTax">
                                        <div aria-checked="false" aria-disabled="false">
                                            @foreach($lims_warehouse_list as $key => $warehouse)
                                            <div class="checkbox">
                                                <input type="checkbox" value="{{$warehouse->id}}" id="{{$warehouse->name}}" name="warehouse_check[]">
                                                <label for="{{$warehouse->name}}" class="padding05">{{$warehouse->name}}</label>
                                            </div>
                                            @endforeach
                                        </div>
                                    </div> --}}
                                    <div class="form-group" id="warehouseIdTax">
                                        <div aria-checked="false" aria-disabled="false">
                                            <select name="warehouse_check[]" required class="multipicker form-control" multiple="multiple" data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                            @foreach($lims_warehouse_list as $key => $warehouse)
                                                <option value="{{ $warehouse->id }}">{{ $warehouse->name }}</option>
                                            @endforeach
                                            </select>
                                        </div>
                                    </div>
                                </div>                              
                            </div>
                        {!! Form::close() !!}
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<script type="text/javascript">

    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #user-create-menu").addClass("active");

    $('#warehouseId').hide();
    $('#biller-id').hide();
    $('#warehouseIdTax').hide();
    $('.customer-section').hide();

    $(document).ready(function() {
        $('.multipicker').multiselect();
    });
    
    $('.selectpicker').selectpicker({
      style: 'btn-link',
    });
    
    $('#genbutton').on("click", function(){
      $.get('genpass', function(data){
        $("input[name='password']").val(data);
      });
    });

    $('select[name="role_id"]').on('change', function() {
        if($(this).val() == 5) {
            $('#biller-id').hide(300);
            $('#warehouseId').hide(300);
            $('#warehouseIdTax').hide(300);
            $('.customer-section').show(300);
            $('.customer-input').prop('required',true);
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
        }
        else if($(this).val() > 2 && $(this).val() != 5 && $(this).val() != 7) {
            $('select[name="warehouse_id"]').prop('required',true);
            $('select[name="biller_id"]').prop('required',true);
            $('select[name="warehouseIdTax"]').prop('required',false);
            $('#biller-id').show(300);
            $('#warehouseId').show(300);
            $('#warehouseIdTax').hide(300);
            $('.customer-section').hide(300);
            $('.customer-input').prop('required',false);
        }
        else if($(this).val() == 7) {
            $('select[name="warehouseIdTax"]').prop('required',true);
            $('#warehouseIdTax').show(300);
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('#biller-id').hide(300);
            $('#warehouseId').hide(300);
            $('.customer-section').hide(300);
            $('.customer-input').prop('required',false);
        }
        else {
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('select[name="warehouseIdTax"]').prop('required',false);
            $('#biller-id').hide(300);
            $('#warehouseId').hide(300);
            $('#warehouseIdTax').hide(300);
            $('.customer-section').hide(300);
            $('.customer-input').prop('required',false);
        }
    });
</script>
@endsection