@extends('master')
@section("content")

<br><br><br>
<center>
      <div class="trending-wrapper">
        <h3>Productos más vendidos</h3>
        <br><br>
        @foreach($products as $item)
        
        <div class="trening-item">
          <a href="detail/{{$item['id']}}">
          <div class="">
            <h3>{{$item['name']}}</h3>
          </div>
          <img class="trending-image" src="{{$item['gallery']}}" width="500" height="500">
          <hr width=70% color="black">
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