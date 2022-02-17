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
                        <h4>{{ucwords(trans('file.Update User'))}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        {!! Form::open(['route' => ['user.update', $lims_user_data->id], 'method' => 'put', 'files' => true]) !!}
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.UserName'))}} *</strong></label>
                                        <input type="text" name="name" required class="form-control" value="{{$lims_user_data->name}}">
                                        @if($errors->has('name'))
                                       <span>
                                           <strong>{{ $errors->first('name') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Change Password'))}}</strong></label>
                                        <div class="input-group">
                                            <input type="password" name="password" class="form-control">
                                            <div class="input-group-append">
                                                <button id="genbutton" type="button" class="btn btn-default">{{trans('file.Generate')}}</button>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><strong>{{ucwords(trans('file.Email'))}} *</strong></label>
                                        <input type="email" name="email" placeholder="example@example.com" required class="form-control" value="{{$lims_user_data->email}}">
                                        @if($errors->has('email'))
                                       <span>
                                           <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                        @endif
                                    </div>
                                    <div class="form-group mt-3">
                                        <label><strong>{{ucwords(trans('file.Phone Number'))}} *</strong></label>
                                        <input type="text" name="phone" required class="form-control" value="{{$lims_user_data->phone}}">
                                    </div>
                                    <div class="form-group">
                                        @if($lims_user_data->is_active)
                                        <input class="mt-2" type="checkbox" name="is_active" value="1" checked>
                                        @else
                                        <input class="mt-2" type="checkbox" name="is_active" value="1">
                                        @endif
                                        <label class="mt-2"><strong>{{ucwords(trans('file.Active'))}}</strong></label>
                                    </div>
                                    <div class="form-group text-right">
                                        <input type="submit" value="{{ucwords(trans('file.submit'))}}" class="btn btn-primary btn-md-block">
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Company Name'))}}</strong></label>
                                        <input type="text" name="company_name" class="form-control" value="{{$lims_user_data->company_name}}">
                                    </div>
                                    <div class="form-group">
                                        <label><strong>{{ucwords(trans('file.Role'))}} *</strong></label>
                                        <input type="hidden" name="role_id_hidden" value="{{$lims_user_data->role_id}}">
                                        <select name="role_id" required class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Role...">
                                          @foreach($lims_role_list as $role)
                                              <option value="{{$role->id}}">{{$role->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" id="biller-id">
                                        <label><strong>{{ucwords(trans('file.Biller'))}} *</strong></label>
                                        <input type="hidden" name="biller_id_hidden" value="{{$lims_user_data->biller_id}}">
                                        <select name="biller_id" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Biller...">
                                          @foreach($lims_biller_list as $biller)
                                              <option value="{{$biller->id}}">{{$biller->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    <div class="form-group" id="warehouseId">
                                        <label><strong>{{ucwords(trans('file.Warehouse'))}} *</strong></label>
                                        <input type="hidden" name="warehouse_id_hidden" value="{{$lims_user_data->warehouse_id}}">
                                        <select name="warehouse_id" class="selectpicker form-control" data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                          @foreach($lims_warehouse_list as $warehouse)
                                              <option value="{{$warehouse->id}}">{{$warehouse->name}}</option>
                                          @endforeach
                                        </select>
                                    </div>
                                    {{-- <div class="form-group" id="warehouseIdTax">
                                        @foreach($lims_warehouse_list_tax_in as $key => $warehouse)
                                            <div class="checkbox">
                                                <input type="checkbox" value="{{$warehouse->id}}" id="{{$warehouse->name}}" name="warehouse_check[]}" checked>
                                                <label for="{{$warehouse->name}}" class="padding05">{{$warehouse->name}}</label>
                                            </div>
                                        @endforeach
                                        @foreach($lims_warehouse_list_tax_not as $key => $warehouse)
                                            <div class="checkbox">
                                                <input type="checkbox" value="{{$warehouse->id}}" id="{{$warehouse->name}}" name="warehouse_check[]}">
                                                <label for="{{$warehouse->name}}" class="padding05">{{$warehouse->name}}</label>
                                            </div>
                                        @endforeach
                                    </div> --}}
                                    <div class="form-group" id="warehouseIdTax">
                                        <label><strong>{{ucwords(trans('file.Warehouse'))}} *</strong></label>
                                        <select name="warehouse_check[]" required class="selectpicker form-control" multiple="multiple" data-live-search="true" data-live-search-style="begins" title="Select Warehouse...">
                                        {{-- @foreach($lims_warehouse_list as $key => $warehouse) --}}
                                            @foreach ($lims_warehouse_list_tax_in as $key => $warehouse_in)
                                                <option value="{{$warehouse_in->id}}" selected>{{$warehouse_in->name}}</option>
                                            @endforeach
                                            @foreach ($lims_warehouse_list_tax_not as $key => $warehouse_notin)
                                                <option value="{{$warehouse_notin->id}}">{{$warehouse_notin->name}}</option>
                                            @endforeach
                                        {{-- @endforeach --}}
                                        </select>
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
    $('#biller-id').hide();
    $('#warehouseId').hide();
    $('#warehouseIdTax').hide();

    $('select[name=role_id]').val($("input[name='role_id_hidden']").val());
    if($('select[name=role_id]').val() > 2 && $('select[name=role_id]').val() != 7 ){
        $('#warehouseId').show();
        $('select[name=warehouse_id]').val($("input[name='warehouse_id_hidden']").val());
        $('#biller-id').show();
        $('select[name=biller_id]').val($("input[name='biller_id_hidden']").val());
    }else if ($('select[name=role_id]').val() == 7) {
        $('#warehouseId').hide();
        $('#biller-id').hide();
        $('#warehouseIdTax').show();
    }
    $('.selectpicker').selectpicker('refresh');

    $('select[name="role_id"]').on('change', function() {
        if($(this).val() > 2 && $(this).val() != 7){
            $('select[name="warehouse_id"]').prop('required',true);
            $('select[name="biller_id"]').prop('required',true);
            $('select[name="warehouseIdTax"]').prop('required',false);
            $('#biller-id').show();
            $('#warehouseId').show();
            $('#warehouseIdTax').hide();
        }
        else if($(this).val() == 7){
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('select[name="warehouseIdTax"]').prop('required',true);
            $('#biller-id').hide();
            $('#warehouseId').hide();
            $('#warehouseIdTax').show();
        }
        else{
            $('select[name="warehouse_id"]').prop('required',false);
            $('select[name="biller_id"]').prop('required',false);
            $('select[name="warehouseIdTax"]').prop('required',false);
            $('#biller-id').hide();
            $('#warehouseId').hide();
            $('#warehouseIdTax').hide();
        }
    });

    $('#genbutton').on("click", function(){
      $.get('../genpass', function(data){
        $("input[name='password']").val(data);
      });
    });

</script>
@endsection