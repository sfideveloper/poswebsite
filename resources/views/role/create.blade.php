@extends('layout.main') @section('content')

@if($errors->has('name'))
<div class="alert alert-danger alert-dismissible text-center">
    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ $errors->first('name') }}</div>
@endif
@if(session()->has('message'))
  <div class="alert alert-success alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('message') }}</div> 
@endif
@if(session()->has('not_permitted'))
  <div class="alert alert-danger alert-dismissible text-center"><button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>{{ session()->get('not_permitted') }}</div> 
@endif
<section>
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12 text-right mb-4">
                <a href="#" data-toggle="modal" data-target="#createModal" class="btn btn-info btn-md-block"><i class="dripicons-plus"></i> {{ucfirst(trans('file.Add Role'))}} </a>
            </div>
            <div class="col-md-12">
                <div class="card">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table id="role-table" class="table table-hover">
                                <thead>
                                    <tr>
                                        <th class="not-exported"></th>
                                        <th>{{ucfirst(trans('file.name'))}}</th>
                                        <th>{{ucfirst(trans('file.Description'))}}</th>
                                        <th class="not-exported">{{ucfirst(trans('file.action'))}}</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($lims_role_all as $key=>$role)
                                    <tr>
                                        <td>{{$key}}</td>
                                        <td>{{ $role->name }}</td>
                                        <td>{{ $role->description }}</td>
                                        <td>
                                            <div class="btn-group">
                                                <button type="button" class="btn btn-default btn-sm dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">{{ucfirst(trans('file.action'))}}
                                                    <span class="caret"></span>
                                                    <span class="sr-only">Toggle Dropdown</span>
                                                </button>
                                                <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                                                    <li>
                                                        <button type="button" data-id="{{$role->id}}" class="open-EditroleDialog btn btn-link" data-toggle="modal" data-target="#editModal"><i class="dripicons-document-edit"></i> {{ucfirst(trans('file.edit'))}}
                                                    </button>
                                                    </li>
                                                    <li class="divider"></li>
                                                    <li>
                                                        <a href="{{ route('role.permission', ['id' => $role->id]) }}" class="btn btn-link"><i class="dripicons-lock-open"></i> {{ucfirst(trans('file.Change Permission'))}}</a>
                                                    </li>
                                                    @if($role->id > 2 && $role->id != 5)
                                                    {{ Form::open(['route' => ['role.destroy', $role->id], 'method' => 'DELETE'] ) }}
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

<div id="createModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
    <div role="document" class="modal-dialog">
        <div class="modal-content">
            {!! Form::open(['route' => 'role.store', 'method' => 'post']) !!}
            <div class="modal-header">
                <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Add Role'))}}</h5>
                <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
            </div>
            <div class="modal-body">
                <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
                <form>
                    <div class="form-group">
                    <label>{{ucwords(trans('file.name'))}} *</label>
                    {{Form::text('name',null,array('required' => 'required', 'class' => 'form-control'))}}
                    </div>
                    <div class="form-group">
                        <label>{{ucwords(trans('file.Description'))}}</label>
                        {{Form::textarea('description',null,array('rows'=> 5, 'class' => 'form-control'))}}
                    </div>
                    <input type="hidden" name="is_active" value="1">
                    <input type="hidden" name="guard_name" value="web">
                    <div class="text-right">
                        <input type="submit" value="{{ucfirst(trans('file.submit'))}}" class="btn btn-primary btn-md-block">
                    </div>
            	</form>
        	</div>
        {{ Form::close() }}
    	</div>
	</div>
</div>

<div id="editModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
	<div role="document" class="modal-dialog">
		  <div class="modal-content">
		    {!! Form::open(['route' => ['role.update',1], 'method' => 'put']) !!}
		    <div class="modal-header">
		      <h5 id="exampleModalLabel" class="modal-title">{{ucwords(trans('file.Update Role'))}}</h5>
		      <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
		    </div>
		    <div class="modal-body">
		      <p class="italic"><small>{{trans('file.The field labels marked with * are required input fields')}}.</small></p>
		        <form>
		            <input type="hidden" name="role_id">
		            <div class="form-group">
		                <label>{{ucwords(trans('file.name'))}} *</label>
		                {{Form::text('name',null,array('required' => 'required', 'class' => 'form-control'))}}
		            </div>
		            <div class="form-group">
		                <label>{{ucwords(trans('file.Description'))}}</label>
		                {{Form::textarea('description',null,array('rows'=> 5, 'class' => 'form-control'))}}
		            </div>
                    <div class="text-right">
    		            <input type="submit" value="{{ucfirst(trans('file.submit'))}}" class="btn btn-primary btn-md-block">
                    </div>
		        </form>
		    </div>
		    {{ Form::close() }}
		  </div>
	</div>
</div>

<script type="text/javascript">

    $("ul#setting").siblings('a').attr('aria-expanded','true');
    $("ul#setting").addClass("show");
    $("ul#setting #role-menu").addClass("active");

	 function confirmDelete() {
        if (confirm("Are you sure want to delete?")) {
            return true;
        }
        return false;
    }

    $(document).ready(function() {
    $('.open-EditroleDialog').on('click', function() {
        var url = "role/"
        var id = $(this).data('id').toString();
        url = url.concat(id).concat("/edit");

        $.get(url, function(data) {
            $("input[name='name']").val(data['name']);
            $("textarea[name='description']").val(data['description']);
            $("input[name='role_id']").val(data['id']);
        });
    });

    $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $('#role-table').DataTable( {
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
                'targets': [0, 3]
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
            },
        ],
    } );
});
</script>

@endsection