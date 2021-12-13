@extends('templates.dashboard')
@section('title')
Customer Details
@endsection
@section('location')
customer details
@endsection
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header">
                    <a href="{{route("customer.create")}}" class="btn btn-primary lg">Create</a>
                </div>
                <div class="card-body">
                    <table class="table table-sm table-stripped table-bordered">
                        <thead>
                        <tr>
                          <th>id</th>
                          <th>Customer Name</th>
                          <th>Company Name</th>
                          <th>Address</th>
                          <th>Service</th>
                          <th>Email</th>
                          <th>Contact</th>
                          <th>Start Date</th>
                          <th>Expiry Date</th>
                          <th>Action</th>
                          {{-- <th><a href="" class="btn btn-success btn-sm">Edit</a></th>
                          <th><a href="" class="btn btn-danger btn-sm">Delete</a></th> --}}
                        </tr>
                        </thead>
                        <tbody>
                        @foreach($customer as $key=>$value)
                          <tr>
                            <th>{{$value->id}}</th>
                            <th>{{$value->customer_name}}</th>
                            <th>{{$value->company_name}}</th>
                            <th>{{$value->address}}</th>
                            <th>Service</th>
                            <th>{{$value->Contact}}</th>
                            <th>start</th>
                            <th>expiry</th>
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
