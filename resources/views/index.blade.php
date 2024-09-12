<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <title>Simple Cart</title>
</head>

<body>
<div class="container">
  <h1 class="my-4">Our Restaurant Menu</h1>
  <div class="d-flex sticky-top float-end">
    <a class="btn btn-outline-success" href="{{ route('card') }}">Card
      @if(session('cart'))
        {{ count(session('cart')) }}
      @endif
    </a>
  </div>
  <div class="row">
    @foreach($items as $item)
    <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
      <div class="card" style="width: 330px;">
        <img src="pic/{{ $item['image'] }}" class="card-img-top" style="width: 330px; height:350px">
        <div class="card-body">
          <h5 class="card-title">{{ $item['title'] }} : {{ $item['price'] }}$</h5>
          <p class="card-text">{{ $item['description'] }}</p>
          <a href="{{ route('carts.addToCart', ['pro_id' => $item['pro_id'], 'price' => $item['price']]) }}" class="btn btn-success">Add to Cart</a>
        </div>
      </div>
    </div>
    @endforeach
  </div>
</div>
</body>
</html>
