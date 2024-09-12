@php
session_start();
if ($_SERVER['REQUEST_METHOD'] === 'POST') {  
    if (isset($_POST['update'])) {
        $upid = $_POST['upid'];
        $updatedQty = (int)$_POST['qty'];
        if ($upid && $updatedQty >= 0) {
            if (isset($_SESSION['cart'][$upid])) {
                $_SESSION['cart'][$upid]['qty'] = $updatedQty;
            }
        }
    }
}
header("location: {{('carts.card')}}");
exit;
@endphp
