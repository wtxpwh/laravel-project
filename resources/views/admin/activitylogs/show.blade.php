@extends('masters.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Activity {{ $activitylog->id }}</div>
                    <div class="card-body">

                        <a href="{{ url('/admin/activitylogs') }}" title="Back"><button class="btn btn-warning btn-sm"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['admin/activitylogs', $activitylog->id],
                            'style' => 'display:inline'
                        ]) !!}
                        @if(parameter('admin.delete_log',0) == 1)
                        {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-danger btn-sm',
                                'title' => 'Delete Activity',
                                'onclick'=>'return confirm("Confirm delete?")'
                        ))!!}
                        @endif
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-sm table-hover ">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $activitylog->id }}</td>
                                    </tr>
                                    <tr>
                                        <th> Activity </th><td> {{ $activitylog->description }} </td>
                                    </tr>
                                    <tr>
                                        <th> Actor </th>
                                        <td >
                                            @if ($activitylog->causer)
                                                <a href="{{ url('/admin/users/' . $activitylog->causer->id) }}">{{ $activitylog->causer->name }}</a>
                                            @else
                                                -
                                            @endif
                                        </td>
                                    </tr>
                                    <tr>
                                        <th> Date </th><td> {{ $activitylog->created_at }} </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection