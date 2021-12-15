@extends('templates.dashboard')
@section('title')
  Service
@endsection

@section('location')
  Edit
@endsection

@section('content')
<div class="container">
    <div class="row mt-3" style="display: flex; justify-content: center">
        <h2 class="text-center">Edit Service </h2><br>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                </div>
                <div class="card-body">
                  <form action="/service" method="post" enctype="multipart/form-data">
                      @csrf
                      <div class="form-group">
                          <label for="name">Service Name</label>
                          <input id="name" class="form-control" type="text" name="name" placeholder="edit service name">
                      </div>
                      <button type="submit" class="btn btn-primary mt-3">Update</button>
                  </form>
                </div>
            </div>
        </div>
      </div>
</div>
@endsection

