@extends('templates.dashboard')
@section('title')
Service Details
@endsection
@section('location')
service details
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route("service.create")}}" class="btn btn-primary lg">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-stripped table-bordered">
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>Service</th>
                          <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($service as $key=>$value)
                          <tr>
                            <th>{{$value->id}}</th>
                            <th>{{$value->name}}</th>
                            <th>
                              <a href="{{route("customer.edit",["customer"=>$value->id])}}" class="btn btn-primary">Edit</a>
                              {!! Form::open(['method' => 'DELETE', 'route' => ['customer.destroy', $value->id]]) !!}
                              {{Form::submit('Delete',[ "class" => "submit-btn btn btn-danger" ])}}
                              {!! Form::close() !!}
                              {{-- <button data-confirm="Are you sure?" data-method="delete"  href="{{route("customer.destroy",["customer"=>$value->id])}}" class="btn btn-danger">Delete</button> --}}
                            </th>
                          </tr>
                        @endforeach
                        </tbody>
                        {{-- <div class="center">
                          {{ $data->links() }}
                        </div> --}}
                      </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
