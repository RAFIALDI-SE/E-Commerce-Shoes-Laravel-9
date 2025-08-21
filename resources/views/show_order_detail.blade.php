<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Details</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS (optional) -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">

    <style>
        body {
            background: linear-gradient(
                90deg,
                rgba(2, 0, 36, 1) 0%,
                rgba(9, 9, 121, 1) 35%,
                rgba(0, 212, 255, 1) 100%
            );
            color: #fff;
            font-family: Arial, sans-serif;
            padding: 20px 0;
        }

        .order-card {
            background-color: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(255, 255, 255, 0.15);
            border-radius: 10px;
            backdrop-filter: blur(8px);
            color: #fff;
        }

        .transaction-item {
            background-color: rgba(255, 255, 255, 0.08);
            padding: 10px;
            border-radius: 8px;
            color: #fff;
        }

        .payment-section {
            padding: 15px;
            background-color: rgba(0, 0, 0, 0.3);
            border-radius: 10px;
        }

        .btn-primary {
            padding: 10px 20px;
            background-color: #00d4ff;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .btn-primary:hover {
            background-color: #00b6e6;
            color: white;
        }

        .btn-secondary {
            background-color: transparent;
            border: 1px solid #fff;
            color: white;
            padding: 8px 16px;
            border-radius: 5px;
            transition: 0.3s ease;
            text-decoration: none;
        }

        .btn-secondary:hover {
            background-color: #ffffff22;
        }

        .form-label {
            font-weight: bold;
            color: #fff;
        }

        .form-control {
            border-radius: 5px;
            background-color: rgba(255, 255, 255, 0.95);
        }

        .badge {
            padding: 6px 12px;
            border-radius: 5px;
            font-size: 0.9rem;
        }

        .bg-success {
            background-color: #44dd88 !important;
            color: black !important;
        }

        .bg-danger {
            background-color: #ff6961 !important;
            color: black !important;
        }

        .text-price {
            color: #00eaff;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="container">
        <h1 class="text-center mb-5">Order Details</h1>

        <div class="order-card p-4 mb-4 shadow-sm rounded">
            <h4>Order ID: {{ $order->id }}</h4>
            <p><strong>User:</strong> {{ $order->user->name }}</p>

            <p>
                <strong>Status:</strong>
                @if ($order->is_paid)
                    <span class="badge bg-success">Paid</span>
                @else
                    <span class="badge bg-danger">Unpaid</span>
                @endif
            </p>

            <h5 class="mt-4">Transactions:</h5>
            @php $totalPrice = 0; @endphp
            @foreach ($order->transactions as $transaction)
                <div class="transaction-item mb-3">
                    <p><strong>Product:</strong> {{ $transaction->product->name }}</p>
                    <p><strong>Amount:</strong> {{ $transaction->amount }}</p>
                </div>
                @php
                    $totalPrice += $transaction->product->price * $transaction->amount;
                @endphp
            @endforeach
            <hr>
            <p class="fw-bold">Total Price: <span class="text-price">Rp {{ number_format($totalPrice, 0, ',', '.') }}</span></p>

            <div class="payment-section mt-4">
                @if (!$order->is_paid && !$order->payment_receipt && !Auth::user()->is_admin)
                    <h5>Submit Payment Receipt</h5>
                    <form action="{{ route('submit_payment_receipt', $order) }}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="mb-3">
                            <label for="payment_receipt" class="form-label">Upload your payment receipt</label>
                            <input type="file" class="form-control" name="payment_receipt" id="payment_receipt" required>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit Payment</button>
                    </form>
                @endif
            </div>
            @if (!Auth::user()->is_admin)
            <div class="mt-4">
                <a href="{{route('home')}}" class="btn btn-secondary">Kembali</a>
            </div>
            @endif
        </div>
    </div>
</body>
</html>
