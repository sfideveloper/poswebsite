@extends('layout.main') @section('content')
@if(session()->has('create_message'))
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('create_message') }}</div> 
@endif
@if(session()->has('edit_message'))
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('edit_message') }}</div> 
@endif
@if(session()->has('import_message'))
    <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('import_message') }}</div> 
@endif
@if(session()->has('not_permitted'))
    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
@if(session()->has('message'))
    <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div> 
@endif

<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right">
                <a href="{{route('products.create')}}" class="btn btn-info p-3 mb-3"><i class="dripicons-plus"></i> {{ucfirst(__('file.add_stock'))}}</a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="stock-data-table" class="table" style="width: 100%">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th>{{ucfirst(trans('file.Image'))}}</th>
                                        <th>{{ucfirst(trans('file.name'))}}</th>
                                        <th>{{ucfirst(trans('file.Code'))}}</th>
                                        <th>{{ucfirst(trans('file.Brand'))}}</th>
                                        <th>{{ucfirst(trans('file.category'))}}</th>
                                        <th>{{ucfirst(trans('file.Quantity'))}}</th>
                                        <th>{{ucfirst(trans('file.Unit'))}}</th>
                                        <th>{{ucfirst(trans('file.Price'))}}</th>
                                        <th class="not-exported">{{ucfirst(trans('file.action'))}}</th>
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
@endsection