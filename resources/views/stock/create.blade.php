@extends('layout.main')

@section('content')
<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header d-flex align-items-center">
                        <h4>{{ucwords(trans('file.add_product'))}}</h4>
                    </div>
                    <div class="card-body">
                        <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                        <form id="product-form">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ucwords(trans('file.Product Name'))}} *</strong> </label>
                                        <input type="text" name="name" class="form-control" id="name" aria-describedby="name" required>
                                        <span class="validation-msg" id="name-error"></span>
                                    </div>
                                </div>
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label>{{ucwords(trans('file.Product Qty'))}} *</strong> </label>
                                        <input type="text" name="name" class="form-control" id="qty" aria-describedby="name" required>
                                        <span class="validation-msg" id="aty"></span>
                                    </div>
                                </div>
                                
                            </div>
                            <div class="form-group text-right">
                                <input type="button" value="{{ucfirst(trans('file.submit'))}}" id="submit-btn" class="btn btn-primary btn-md-block mt-3">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection