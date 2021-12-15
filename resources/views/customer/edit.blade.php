@extends('admin.app')
@section('title')
  Customer Details Edit Page
@endsection

@section('location')
  Edit
@endsection

@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <h2 class="text-center">Edit Customer Details</h2>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <form action="/customer/{{$customer->id}}/edit" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                        <label for="customer_name">Customer Name</label>
                        <input id="customer_name" class="form-control" type="text" name="customer_name" placeholder=" Enter customer name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="company_name">Company Name</label>
                        <input id="company_name" class="form-control" type="text" name="company_name" placeholder="Enter company name">
                    </div>
                    <div class="form-group mt-3">
                        <label for="phone_number">Mobile Number</label>
                        <input id="phone_number" class="form-control" type="number" name="phone_number" placeholder="Enter phone number">
                    </div>
                    <div class="form-group mt-3">
                        <label for="address">Address</label>
                        <input id="address" class="form-control" type="text" name="address" placeholder="Enter address">
                    </div>
                    <div class="form-group mt-3">
                      <label for="email">Email</label>
                      <input id="email" class="form-control" type="email" name="email" placeholder="enter your email">
                  </div>
                   <div class="form-group mt-3">
                        <label for="service">Service</label>
                       <select name="service" id="service" class="form-control">
                           @foreach ($service as $services)
                           <option value="{{$services->id}}">{{$services->name}}</option>
                           @endforeach
                       </select>
                    </div>
                      <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
                </div>
            </div>

        </div>
      </div>
</div>
@endsection
