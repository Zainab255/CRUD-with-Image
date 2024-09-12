<div class="container">
  <table class="table my-3">
    <a href="{{ route('index') }}" class="btn btn-sm btn-success mt-2 sticky-top me-5">Product</a>
    <a href="{{ route('emptycard') }}" class="btn btn-sm btn-danger mt-2 sticky-top ms-5">Empty Cart</a>
    <thead>
      <tr class="text-center">
        <th>S.no</th>
        <th>Product Name</th>
        <th>Image</th>
        <th>Quantity</th>
        <th>Price</th>
        <th>Subtotal</th>
        <th colspan="2">Action</th>
      </tr>
    </thead>

    <tbody>
      @php
        $totalAmount = 0; // Initialize totalAmount outside the 'if' block
      @endphp

      @if (session()->has('cart'))
        @php
          $i = 1;
        @endphp

        @foreach (session('cart') as $pro_id => $cart)
          @php
            $qty = $cart['qty'];
            $price = $cart['price']; // Use the entered price from session data
            $subtotal = $qty * $price;
            $totalAmount += $subtotal;
          @endphp

          <tr class="text-center">
            <td>{{ $i }} #</td>
            <td>Product {{ $pro_id }}</td>
            <td><img src="{{ asset('pic/food' . $pro_id . '.jpeg') }}" alt="Product Image" style="width: 100px; height: 100px;"></td>
            <td>
              <form action="{{ route('updatecard') }}" method="POST">
                @csrf
                <input type="number" value="{{ $qty }}" name="qty" min="1">
                <input type="hidden" name="upid" value="{{ $pro_id }}">
            </td>
            <td>${{ $price }}</td>
            <td>${{ $subtotal }}</td>
            <td>
              <input type="submit" name="update" value="Update" class="btn btn-sm btn-warning">
            </td>
            </form>
            <td><a class="btn btn-sm btn-danger" href="{{ route('removecartitem', ['id' => $pro_id]) }}">Remove</a></td>
          </tr>
          @php
            $i++;
          @endphp
        @endforeach
      @endif
    </tbody>
  </table>

  <h3 class="mt-3">Total Amount: ${{ $totalAmount }}</h3>
</div>

