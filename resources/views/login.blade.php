@extends('master')
@section("content")
<br><br><br><br><br>
<center>
  
<div class="container custom-login">
    <div class="row">

            <form action="login" method="POST" >
                <div class="form-group">
                    @csrf
                <label for="exampleInputEmail1">Email address</label>
                <input type="email" name="email" style="width : 300px" class="form-control" id="exampleInputEmail1" placeholder="Email">
                </div>
                <br>
                <div class="form-group">
                <label for="exampleInputPassword1">Password</label>
                <input type="password" style="width : 300px" name="password" class="form-control" id="exampleInputPassword1" placeholder="Password">
                </div>
                <br>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

</div>
</center>
@endsection