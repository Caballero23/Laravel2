@extends('master')
@section("content")



<br><br><br>
<center>
      <div class="trending-wrapper">
        <h1>Productos más vendidos</h1>
        <br><br>
        @foreach($products as $item)
        
        <div class="trening-item">
          <a href="detail/{{$item['id']}}" style=" text-decoration: none;">
          <div class="" >
          <hr width=70% color="black">
            <h3 color="black" >{{$item['name']}}</h3>
          </div>
          <img class="trending-image" src="{{$item['gallery']}}" width="500" height="500">
          <h2 color="black" >Precio:{{$item['price']}}€</h2>
        </a><br><br><br><br>
        </div>
        @endforeach
      </div>
      </div>
</div>
</center>
<style>
  
</style>
@endsection