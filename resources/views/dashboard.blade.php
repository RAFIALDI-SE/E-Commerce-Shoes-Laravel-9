<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Dashboard Admin</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <script src="https://cdn.jsdelivr.net/npm/feather-icons@4.28.0/dist/feather.min.js"></script>

    <style>
        body {
            font-family: 'Segoe UI', sans-serif;
            background: linear-gradient(135deg, #a0c4ff, #4dabf7);
            min-height: 100vh;
            margin: 0;
        }

        .sidebar {
            min-height: 100vh;
            background: linear-gradient(160deg, #3b82f6, #2563eb);
            color: white;
            padding-top: 30px;
            box-shadow: 2px 0 12px rgba(0, 0, 0, 0.1);
        }

        .sidebar h4 {
            font-weight: bold;
            margin-bottom: 30px;
            text-align: center;
        }

        .sidebar a {
            display: block;
            color: white;
            text-decoration: none;
            padding: 12px 20px;
            margin: 10px 20px;
            border-radius: 12px;
            transition: all 0.3s ease;
            background-color: rgba(255, 255, 255, 0.1);
        }

        .sidebar a:hover {
            background-color: rgba(255, 255, 255, 0.3);
            transform: translateX(5px);
        }

        .header-bar {
            background-color: rgba(255, 255, 255, 0.8);
            backdrop-filter: blur(10px);
            padding: 20px 30px;
            border-bottom: 1px solid rgba(0, 0, 0, 0.1);
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
        }

        .header-bar h3 {
            margin: 0;
            color: #1e3a8a;
            font-weight: 600;
        }

        iframe {
            width: 100%;
            height: calc(100vh - 80px);
            border: none;
        }

        @media (max-width: 768px) {
            .sidebar {
                height: auto;
                padding: 20px 10px;
            }
        }
    </style>
</head>
<body>

<div class="container-fluid">
    <div class="row">

        <nav class="col-md-3 col-lg-2 d-md-block sidebar">
            <div class="position-sticky">
                <h4><i data-feather="settings"></i> Admin Panel</h4>
                <a href="{{route('create_view')}}" target="mainFrame">
                    <i data-feather="plus-circle"></i> Tambah Produk
                </a>
                <a href="{{route('all_product')}}" target="mainFrame">
                    <i data-feather="box"></i> Daftar Produk
                </a>
                <a href="{{route('show_order')}}" target="mainFrame">
                    <i data-feather="check"></i> Validasi Order
                </a>
                <form action="{{ route('logout') }}" method="POST" style="margin: 10px 20px;">
                    @csrf
                    <button type="submit" class="btn w-100 text-start" style="
                        background-color: rgba(255, 255, 255, 0.1);
                        border: none;
                        color: white;
                        padding: 12px 20px;
                        border-radius: 12px;
                        transition: all 0.3s ease;
                    " onmouseover="this.style.backgroundColor='rgba(255,255,255,0.3)'; this.style.transform='translateX(5px)';"
                    onmouseout="this.style.backgroundColor='rgba(255,255,255,0.1)'; this.style.transform='translateX(0)';">
                        <i data-feather="log-out"></i> Logout
                    </button>
                </form>

            </div>
        </nav>


        <div class="col-md-9 ms-sm-auto col-lg-10 px-0">
            <div class="header-bar">
                <h3><i data-feather="home"></i>  Dashboard Admin</h3>
            </div>
            <iframe name="mainFrame" src="{{route('all_product')}}"></iframe>
        </div>
    </div>
</div>


<script>
    feather.replace();  
</script>


<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
