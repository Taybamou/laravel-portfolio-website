@extends('layout.app')
@section('title','Services')


@section('content')

<div class="container mb=5 mt=5">
 <div class="row">
  <div class="col-md-6">
  <form>
  <div class="mb-3">
    <label for="exampleInputEmail1" class="form-label">ID</label>
    <input type="ID" class="form-control" id="exampleInputID" aria-describedby="IDHelp">
    <div id="IDHelp" class="form-text">We'll never share your ID with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-block btn-primary">Submit</button>
</form>




  </div>

  <div class="col-md-6">
    <h5>Address</h5>
    <p>408/1, Kuratoli, Khilkhet,Dhaka 1229, Bangladesh</p>
     <p>08164842</p>
    </div>


</div>
</div> 



@endsection