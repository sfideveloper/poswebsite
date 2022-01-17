@extends('layout.main') @section('content')

<section class="forms">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header mt-2">
                	    <h4 class="">{{ucwords(trans('file.Product Quantity Alert'))}}</h4>
                    </div>
                    <div class="card-body">
                        <div class="table-responsive mb-4">
                            <table id="report-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th>{{ucfirst(trans('file.Image'))}}</th>
                                        <th>{{ucfirst(trans('file.Product Name'))}}</th>
                                        <th>{{ucfirst(trans('file.Product Code'))}}</th>
                                        <th>{{ucfirst(trans('file.Quantity'))}}</th>
                                        <th>{{ucfirst(trans('file.Alert Quantity'))}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lims_product_data as $key=>$product)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>
                                        <?php
                                            $images = explode(",", $product->image);
                                            $product->base_image = $images[0];
                                        ?> 
                                            <img src="{{url('images/product',$product->base_image)}}" height="80" width="80">
                                        </td>
                                        <td>{{$product->name}}</td>
                                        <td>{{$product->code}}</td>
                                        <td>{{number_format((float)($product->qty), 2, '.', '')}}</td>
                                        <td>{{number_format((float)($product->alert_quantity), 2, '.', '')}}</td>
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
    $("ul#report").siblings('a').attr('aria-expanded','true');
    $("ul#report").addClass("show");
    $("ul#report #qtyAlert-report-menu").addClass("active");

    $('#report-table').DataTable( {
        "order": [],
        'language': {
            'lengthMenu': '_MENU_ {{trans("file.records per page")}}',
             "info":      '<small>{{trans("file.Showing")}} _START_ - _END_ (_TOTAL_)</small>',
            "search":  '{{trans("file.Search")}}',
            'paginate': {
                    'previous': '<i class="dripicons-chevron-left"></i>',
                    'next': '<i class="dripicons-chevron-right"></i>'
            }
        },
        'columnDefs': [
            {
                "orderable": false,
                'targets': 0
            },
            {
                'render': function(data, type, row, meta){
                    if(type === 'display'){
                        data = '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>';
                    }

                   return data;
                },
                'checkboxes': {
                   'selectRow': true,
                   'selectAllRender': '<div class="checkbox"><input type="checkbox" class="dt-checkboxes"><label></label></div>'
                },
                'targets': [0]
            }
        ],
        'select': { style: 'multi',  selector: 'td:first-child'},
        'lengthMenu': [[10, 25, 50, -1], [10, 25, 50, "All"]],
        dom: '<"row"lfB>rtip',
        buttons: [
            {
                extend: 'pdf',
                text: '{{ucfirst(trans("file.PDF"))}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'csv',
                text: '{{ucfirst(trans("file.CSV"))}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'print',
                text: '{{ucfirst(trans("file.Print"))}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
            },
            {
                extend: 'colvis',
                text: '{{ucfirst(trans("file.Column visibility"))}}',
                columns: ':gt(0)'
            }
        ],
    } );

</script>
@endsection