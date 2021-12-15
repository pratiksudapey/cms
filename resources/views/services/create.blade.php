@extends('templates.dashboard')
@section('title')
  Service
@endsection

@section('location')
  Create
@endsection

@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <h2 class="text-center">Add Service </h2><br>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <form action="/service" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Service Name</label>
                          <input id="name" class="form-control" type="text" name="name" placeholder="new service">
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Submit</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

