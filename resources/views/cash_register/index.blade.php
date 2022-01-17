@extends('layout.main') @section('content')

@if(session()->has('message'))
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div> 
@endif
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                      <div class="table-responsive">
                          <table id="cash-register-table" class="table">
                              <thead>
                                  <tr>
                                      <th class="not-exported"></th>
                                      <th>{{ucfirst(trans('file.User'))}}</th>
                                      <th>{{ucfirst(trans('file.Warehouse'))}}</th>
                                      <th>{{ucfirst(trans('file.Cash in Hand'))}}</th>
                                      <th>{{ucfirst(trans('file.Opened at'))}}</th>
                                      <th>{{ucfirst(trans('file.Closed at'))}}</th>
                                      <th>{{ucfirst(trans('file.Status'))}}</th>
                                      <th class="not-exported">{{ucfirst(trans('file.action'))}}</th>
                                  </tr>
                              </thead>
                              <tbody>
                                  @foreach($lims_cash_register_all as $key=>$cash_register)
                                  <tr data-id="{{$cash_register->id}}">
                                      <td>{{$key}}</td>
                                      <td>{{ $cash_register->user->name }}</td>
                                      <td>{{ $cash_register->warehouse->name }}</td>
                                      <td>{{ $cash_register->cash_in_hand }}</td>
                                      <td>{{ date($general_setting->date_format . " h:i:s", strtotime($cash_register->created_at)) }}</td>
                                      @if($cash_register->status)
                                          <td>N/A</td>
                                          <td><div class="badge badge-success">{{ucfirst(trans('file.Active'))}}</div></td>
                                      @else
                                          <td>{{ date($general_setting->date_format . " h:i:s", strtotime($cash_register->updated_at)) }}</td>
                                          <td><div class="badge badge-danger">{{ucfirst(trans('file.Closed'))}}</div></td>
                                      @endif
                                      <td>
                                          <div class="btn-group">
                                              <button type="button" data-id="{{$cash_register->id}}" class="register-details-btn btn btn-sm btn-info" data-toggle="modal" data-target="#register-details-modal" title="{{ucfirst(trans('file.View'))}}"><i class="dripicons-preview"></i></button>
                                          </div>
                                      </td>
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


<div id="register-details-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true"
    class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Cash Register Details'))}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i
                            class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p>{{trans('file.Please review the transaction and payments.')}}</p>
                <div class="row">
                    <div class="col-md-12">
                        <table class="table table-hover">
                            <tbody>
                                <tr>
                                    <td>{{ucwords(trans('file.Cash in Hand'))}}:</td>
                                    <td id="cash_in_hand" class="text-right">100</td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Total Sale Amount'))}}:</td>
                                    <td id="total_sale_amount" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Total Payment'))}}:</td>
                                    <td id="total_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Cash Payment'))}}:</td>
                                    <td id="cash_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Credit Card Payment'))}}:</td>
                                    <td id="credit_card_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Cheque Payment'))}}:</td>
                                    <td id="cheque_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Gift Card Payment'))}}:</td>
                                    <td id="gift_card_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Paypal Payment'))}}:</td>
                                    <td id="paypal_payment" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Total Sale Return'))}}:</td>
                                    <td id="total_sale_return" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td>{{ucwords(trans('file.Total Expense'))}}:</td>
                                    <td id="total_expense" class="text-right"></td>
                                </tr>
                                <tr>
                                    <td><strong>{{ucwords(trans('file.Total Cash'))}}:</strong></td>
                                    <td id="total_cash" class="text-right"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="col-md-12" id="closing-section">
                        <form action="{{route('cashRegister.close')}}" method="POST">
                            @csrf
                            <input type="hidden" name="cash_register_id">
                            <div class="text-right">
                              <button type="submit" class="btn btn-primary btn-md-block"
                                onclick="return confirmClose()">{{ucfirst(trans('file.Close Register'))}}</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script type="text/javascript">

    function confirmClose() {
      if (confirm("Are you sure want to close?")) {
          return true;
      }
      return false;
    }

  $(".register-details-btn").on("click", function (e) {
      id = $(this).data('id');
      $.ajax({
          url: 'cash-register/getDetails/'+id,
          type: "GET",
          success:function(data) {
              if(data['status'])
                $("#register-details-modal #closing-section").removeClass('d-none');
              else
                $("#register-details-modal #closing-section").addClass('d-none');

              $('#register-details-modal #cash_in_hand').text(data['cash_in_hand']);
              $('#register-details-modal #total_sale_amount').text(data['total_sale_amount']);
              $('#register-details-modal #total_payment').text(data['total_payment']);
              $('#register-details-modal #cash_payment').text(data['cash_payment']);
              $('#register-details-modal #credit_card_payment').text(data['credit_card_payment']);
              $('#register-details-modal #cheque_payment').text(data['cheque_payment']);
              $('#register-details-modal #gift_card_payment').text(data['gift_card_payment']);
              $('#register-details-modal #paypal_payment').text(data['paypal_payment']);
              $('#register-details-modal #total_sale_return').text(data['total_sale_return']);
              $('#register-details-modal #total_expense').text(data['total_expense']);
              $('#register-details-modal #total_cash').text(data['total_cash']);
              $('#register-details-modal input[name=cash_register_id]').val(id);
          }
      });
  });

    $('#cash-register-table').DataTable( {
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
                'targets': [0, 7]
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
                footer:true
            },
            {
                extend: 'csv',
                text: '{{ucfirst(trans("file.CSV"))}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'print',
                text: '{{ucfirst(trans("file.Print"))}}',
                exportOptions: {
                    columns: ':visible:Not(.not-exported)',
                    rows: ':visible'
                },
                footer:true
            },
            {
                extend: 'colvis',
                text: '{{ucfirst(trans("file.Column visibility"))}}',
                columns: ':gt(0)'
            },
        ],
    } );
</script>
@endsection