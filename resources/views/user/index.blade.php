@extends('layout.main') @section('content')
@if(session()->has('message1'))
        <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{!! session()->get('message1') !!}</div> 
@endif
@if(session()->has('message2'))
        <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message2') }}</div> 
@endif
@if(session()->has('message3'))
        <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message3') }}</div> 
@endif
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right mb-4">
                @if(in_array("users-add", $all_permission))
                    <a href="{{route('user.create')}}" class="btn btn-info"><i class="dripicons-plus"></i> {{ucfirst(trans('file.Add User'))}}</a>
                @endif
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="user-table" class="table">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th>{{ucfirst(trans('file.UserName'))}}</th>
                                        <th>{{ucfirst(trans('file.Email'))}}</th>
                                        <th>{{ucfirst(trans('file.Company Name'))}}</th>
                                        <th>{{ucfirst(trans('file.Phone Number'))}}</th>
                                        <th>{{ucfirst(trans('file.Role'))}}</th>
                                        <th>{{ucfirst(trans('file.Status'))}}</th>
                                        <th class="not-exported">{{ucfirst(trans('file.action'))}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lims_user_list as $key=>$user)
                                    <tr data-id="{{$user->id}}">
                                        <td>{{$key}}</td>
                                        <td>{{ $user->name }}</td>
                                        <td>{{ $user->email}}</td>
                                        <td>{{ $user->company_name}}</td>
                                        <td>{{ $user->phone}}</td>
                                        <?php $role = DB::table('roles')->find($user->role_id);?>
                                        <td>{{ $role->name }}</td>
                                        @if($user->is_active)
                                        <td><div class="badge badge-success">Active</div></td>
                                        @else
                                        <td><div class="badge badge-danger">Inactive</div></td>
                                        @endif
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ucfirst(trans('file.action'))}}
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                    @if(in_array("users-edit", $all_permission))
                                                    <li>
                                                        <a href="{{ route('user.edit', $user->id) }}" class="btn btn-link"><i class="dripicons-document-edit"></i> {{ucfirst(trans('file.edit'))}}</a>
                                                    </li>
                                                    @endif
                                                    <li class="divider"></li>
                                                    @if(in_array("users-delete", $all_permission))
                                                    {{ Form::open(['route' => ['user.destroy', $user->id], 'method' => 'DELETE'] ) }}
                                                    <li>
                                                        <button type="submit" class="btn btn-link" onclick="return confirmDelete()"><i class="dripicons-trash"></i> {{ucfirst(trans('file.delete'))}}</button>
                                                    </li>
                                                    {{ Form::close() }}
                                                    @endif
                                                </ul>
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

<script type="text/javascript">

    $("ul#people").siblings('a').attr('aria-expanded','true');
    $("ul#people").addClass("show");
    $("ul#people #user-list-menu").addClass("active");

    var user_id = [];
    var user_verified = <?php echo json_encode(env('USER_VERIFIED')) ?>;
    var all_permission = <?php echo json_encode($all_permission) ?>;

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

	function confirmDelete() {
	    if (confirm("Are you sure want to delete?")) {
	        return true;
	    }
	    return false;
	}

    $('#user-table').DataTable( {
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
                text: '{{ucfirst(trans("file.delete"))}}',
                className: 'buttons-delete',
                action: function ( e, dt, node, config ) {
                    if(user_verified == '1') {
                        user_id.length = 0;
                        $(':checkbox:checked').each(function(i){
                            if(i){
                                user_id[i-1] = $(this).closest('tr').data('id');
                            }
                        });
                        if(user_id.length && confirm("Are you sure want to delete?")) {
                            $.ajax({
                                type:'POST',
                                url:'user/deletebyselection',
                                data:{
                                    userIdArray: user_id
                                },
                                success:function(data){
                                    alert(data);
                                }
                            });
                            dt.rows({ page: 'current', selected: true }).remove().draw(false);
                        }
                        else if(!user_id.length)
                            alert('No user is selected!');
                    }
                    else
                        alert('This feature is disable for demo!');
                }
            },
            {
                extend: 'colvis',
                text: '{{ucfirst(trans("file.Column visibility"))}}',
                columns: ':gt(0)'
            },
        ],
    } );

    if(all_permission.indexOf("users-delete") == -1)
        $('.buttons-delete').addClass('d-none');
</script>
@endsection