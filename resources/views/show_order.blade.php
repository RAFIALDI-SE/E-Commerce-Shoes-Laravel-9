<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Order Details</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background: linear-gradient(
                90deg,
                rgba(2, 0, 36, 1) 0%,
                rgba(9, 9, 121, 1) 35%,
                rgba(0, 212, 255, 1) 100%
            );
            color: white;
        }

        .container {
            margin-top: 50px;
        }

        .order-card {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            border: 1px solid rgba(255, 255, 255, 0.2);
            padding: 20px;
            margin-bottom: 20px;
            color: white;
        }

        .order-header h4 {
            margin: 0;
            color: #f0f0f0;
        }

        .order-status .badge {
            padding: 8px 12px;
            font-size: 14px;
            font-weight: bold;
        }

        .bg-success {
            background-color: #28a745 !important;
        }

        .bg-warning {
            background-color: #ffc107 !important;
            color: black;
        }

        .btn-link {
            color: #00cfff;
            text-decoration: none;
        }

        .btn-link:hover {
            text-decoration: underline;
        }

        .btn-primary {
            background-color: #00cfff;
            border: none;
        }

        .btn-primary:hover {
            background-color: #009fd0;
        }

        .payment-receipt-btn {
            background-color: #00cfff;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.3s ease;
            display: inline-block;
        }

        .payment-receipt-btn:hover {
            background-color: #009fd0;
            transform: translateY(-2px);
        }

        .payment-receipt-btn:active {
            transform: translateY(1px);
        }

        .btn-kembali {
            margin-bottom: 20px;
        }
    </style>
</head>
<body>
    <div class="container">
    @if (!Auth::user()->is_admin)
        <div class="btn-kembali">
            <a href="{{ route('home') }}" class="btn btn-outline-light">Kembali</a>
        </div>
    @endif


        <h1 class="text-center mb-5">Order Details</h1>

        @foreach ($orders as $order)
            <div class="order-card">
                <div class="order-header d-flex justify-content-between mb-3">
                    <a href="{{ route('show_order_detail', $order) }}" class="text-white text-decoration-underline"><h4>Order ID: {{ $order->id }}</h4></a>
                    <p><strong>Placed On:</strong> {{ $order->created_at }}</p>
                </div>
                
                <p><strong>User:</strong> {{ $order->user->name }}</p>

                <div class="order-status mb-3">
                    @if ($order->is_paid)
                        <span class="badge bg-success">Paid</span>
                    @else
                        <span class="badge bg-warning">Unpaid</span>

                        @if ($order->payment_receipt)
                            <div>
                                <form action="{{ url('storage/', $order->payment_receipt) }}" method="get" style="display:inline;">
                                    <button type="submit" class="payment-receipt-btn">Show Payment Receipt</button>
                                </form>
                            </div>
                        @endif

                        @if(Auth::user()->is_admin)
                            <form action="{{ route('confrim_payment', $order) }}" method="post" class="mt-3">
                                @csrf
                                <button type="submit" class="btn btn-primary">Confirm Payment</button>
                            </form>
                        @endif
                    @endif
                </div>
            </div>
        @endforeach
    </div>
</body>
</html>
