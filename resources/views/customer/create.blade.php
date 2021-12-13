@extends('templates.dashboard')
@section('title')
  Customer Form Fillup Page
@endsection

@section('location')
  Create
@endsection

@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <h2 class="text-center">Customer Details Form</h2><br>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <form action="/customer" method="post" enctype="multipart/form-data">
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
                      <button type="submit" class="btn btn-primary mt-3"> Submit</button>
                  </form>
                </div>
            </div>

        </div>
      </div>
</div>
@endsection

