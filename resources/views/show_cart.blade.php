<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Shopping Cart</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(
                90deg,
                rgba(2, 0, 36, 1) 0%,
                rgba(9, 9, 121, 1) 35%,
                rgba(0, 212, 255, 1) 100%
            );
            color: #fff;
        }

        .cart-card {
            background-color: rgba(255, 255, 255, 0.1);
            border: 1px solid rgba(255, 255, 255, 0.2);
            border-radius: 12px;
            backdrop-filter: blur(10px);
        }

        .cart-details h5 {
            margin-bottom: 10px;
            color: #fff;
        }

        .btn-sm {
            padding: 6px 12px;
        }

        .form-control {
            border-radius: 6px;
            background-color: rgba(255, 255, 255, 0.9);
        }

        .img-thumbnail {
            border-radius: 10px;
            object-fit: cover;
            background-color: #fff;
        }

        .fw-bold {
            font-weight: 600;
        }

        .checkout-section {
            border-top: 2px dashed rgba(255, 255, 255, 0.4);
            padding-top: 20px;
        }

        .checkout-section button {
            font-size: 1.1rem;
        }

        .text-muted {
            color: #e0e0e0 !important;
        }

        .alert {
            background-color: rgba(255, 0, 0, 0.1);
            border: 1px solid red;
            color: #fff;
        }

        .btn-outline-secondary,
        .btn-outline-danger {
            color: #fff;
            border-color: #fff;
        }

        .btn-outline-secondary:hover,
        .btn-outline-danger:hover {
            background-color: #fff;
            color: #000;
        }

        .btn-cyan {
            background-color: #00d4ff;
            color: #000;
        }

        .btn-cyan:hover {
            background-color: #00b6e6;
            color: #fff;
        }

        .text-cyan {
            color: #00d4ff;
        }
    </style>
</head>
<body>

<div class="container mt-5">
    <!-- Tombol kembali -->
    <div class="mb-4">
        <a href="{{ route('home')}}" class="btn btn-outline-light">Kembali</a>
    </div>


    <h1 class="text-center mb-5">🛒 Your Shopping Cart</h1>

    @if ($errors->any())
        <div class="alert alert-danger">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
    @endif

    @php
        $totalPrice = 0;
    @endphp

    @forelse ($carts as $cart)
        <div class="cart-card d-flex align-items-center mb-4 p-4 shadow rounded">
            <img src="/gambar/{{$cart->product->image}}" alt="{{ $cart->product->name }}"
                 class="img-thumbnail" style="max-height: 120px; max-width: 120px;">

            <div class="cart-details ms-4 flex-grow-1">
                <h5>{{ $cart->product->name }}</h5>
                <p class="text-muted mb-1">Price: <span class="text-cyan">Rp {{ number_format($cart->product->price, 0, ',', '.') }}</span></p>

                <form action="{{ route('update_cart', $cart) }}" method="post"
                      class="d-flex align-items-center mb-3">
                    @csrf
                    @method('patch')
                    <label for="amount" class="me-2">Qty:</label>
                    <input type="number" name="amount" value="{{ $cart->amount }}" class="form-control w-25 me-2"
                           min="1">
                    <button type="submit" class="btn btn-primary">Update</button>
                </form>

                <div class="cart-actions">
                    <form action="{{ route('delete_cart', $cart) }}" method="post" class="d-inline">
                        @csrf
                        @method('delete')
                        <button type="submit" class="btn btn-outline-danger btn-sm">Delete</button>
                    </form>

                    <form action="{{ route('home_view_detail', $cart->product->id) }}" method="get" class="d-inline ms-2">
                        <button type="submit" class="btn btn-outline-secondary btn-sm">Details</button>
                    </form>
                </div>
            </div>
        </div>

        @php
            $totalPrice += $cart->product->price * $cart->amount;
        @endphp
    @empty
        <div class="text-center text-light mt-5">
            <h4>🛒 Keranjang kamu kosong.</h4>
            <p>Yuk cari produk yang kamu butuhkan!</p>
        </div>
    @endforelse

    @if ($totalPrice > 0)
        <div class="checkout-section text-end mt-5">
            <h4 class="fw-bold">Total Price: <span class="text-white">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span></h4>

            <form action="{{ route('chekout') }}" method="post" class="mt-3">
                @csrf
                <button type="submit" class="btn btn-primary btn-lg px-5">🛍️ Order Sekarang</button>
            </form>
        </div>
    @endif
</div>

</body>
</html>
