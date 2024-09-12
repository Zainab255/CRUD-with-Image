@php
session_start();

unset($_SESSION['cart']);

header("location: {{route('carts.card')}}");
@endphp