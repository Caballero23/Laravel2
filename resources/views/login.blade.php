@extends('master')
@section("content")
<br><br><br><br>
<center>
<form action="login" method="POST" >
  <div class="mb-3">
      @csrf
    <label for="exampleInputEmail1" class="form-label">Email address</label>
    <input type="email" name="name" style="width : 300px" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">

    <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div>
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" name="password" style="width : 300px" class="form-control" id="exampleInputPassword1">
  </div>
  <button type="submit" class="btn btn-primary">Login</button>

</form>
</center>
<br><br><br><br>

@endsection