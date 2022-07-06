@extends('master')
@section("content")
<br><br><br>
<div class="container">
   <div class="row">
       <div class="col-sm-6">
       <img class="detail-img" src="{{$product['gallery']}}" width="500" height="500" alt="">
       </div>
       <div class="col-sm-6">
       <br>
       <h2><b>{{$product['name']}}</b> </h2><br>
       <h3><b>Precio :</b> {{$product['price']}} €</h3><br>
       <h4><b>Detalles:</b> {{$product['description']}}</h4><br>
       <h4><b>Categoría:</b> {{$product['category']}}</h4>
       <br>
       <form action="/add_to_cart" method="POST">
           @csrf
        <input type="hidden" name="product_id" value={{$product['id']}}>
       <button class="btn btn-primary">Añadir al carrito</button>
       </form>
       <br>
       <button class="btn btn-success">Comprar</button>
       <br>
       <br>
       <a href="/">⬅Atrás</a>
    </div>
   </div>
  
</div>
@endsection