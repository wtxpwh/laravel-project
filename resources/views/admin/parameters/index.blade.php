@extends('masters.admin')

@section('content')
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header">Parameters</div>
                    <div class="card-body">
                        <a href="{{ url('/admin/parameters/create') }}" class="btn btn-success btn-sm" title="Add New Parameter">
                            <i class="fa fa-plus" aria-hidden="true"></i> Add New
                        </a>

                        {!! Form::open(['method' => 'GET', 'url' => '/admin/parameters', 'class' => 'form-inline my-2 my-lg-0 float-right', 'role' => 'search'])  !!}
                        <div class="input-group">
                            <input type="text" class="form-control" name="search" placeholder="Search..." value="{{ request('search') }}">
                            <span class="input-group-append">
                                <button class="btn btn-secondary" type="submit">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        {!! Form::close() !!}

                        <br/>
                        <br/>
                        <div class="table-responsive">
                            <table class="table tabulator table-sm table-hover">
                                <thead>
                                    <tr>
                                        <th  tabulator-width="50">ID</th>
                                        <th>Name</th>
                                        <th>Value</th>
                                        <th>Decription</th>
                                        <!-- <th tabulator-formatter="html">Code</th> -->
                                        <th tabulator-formatter="html">Actions</th>
                                    </tr>
                                </thead>
                                <tbody>
                                @foreach($parameters as $item)
                                    <tr>
                                        <td>{{ $item->id }}</td>
                                        <td>{{ $item->name }}</td>
                                        <td>{{ $item->value }}</td>
                                        <td>{{ $item->description }}</td>
                                        <!-- <td>
                                            <small class="text-danger">
                                                parameter('{{$item->name}}');
                                            </small>
                                        </td> -->
                                        <td>
                                            <a href="{{ url('/admin/parameters/' . $item->id) }}" title="View Parameter"><button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i></button></a>
                                            <a href="{{ url('/admin/parameters/' . $item->id . '/edit') }}" title="Edit Parameter"><button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i></button></a>
                                            {!! Form::open([
                                                'method' => 'DELETE',
                                                'url' => ['/admin/parameters', $item->id],
                                                'style' => 'display:inline'
                                            ]) !!}
                                                {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i>', array(
                                                        'type' => 'button',
                                                        'class' => 'btn btn-danger btn-sm',
                                                        'title' => 'Delete Parameter',
                                                        'onclick'=>'confirmDelete(this)'
                                                )) !!}
                                            {!! Form::close() !!}
                                        </td>
                                    </tr>
                                @endforeach
                                </tbody>
                            </table>
                            <div class="pagination-wrapper"> {!! $parameters->appends(['search' => Request::get('search')])->render() !!} </div>
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
