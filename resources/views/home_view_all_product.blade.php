<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Semua Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      background: linear-gradient(
        90deg,
        rgba(2, 0, 36, 1) 0%,
        rgba(9, 9, 121, 1) 35%,
        rgba(0, 212, 255, 1) 100%
      );
      color: white;
      min-height: 100vh;
    }

    .card {
      border-radius: 15px;
      overflow: hidden;
      box-shadow: 0 4px 8px rgba(0,0,0,0.3);
    }

    .card img {
      object-fit: cover;
      height: 200px;
    }

    .card-body {
      background-color: white;
      color: #000;
    }

    .navbar-search {
      background-color: rgba(255, 255, 255, 0.9);
      padding: 10px 20px;
      position: sticky;
      top: 0;
      z-index: 1000;
      box-shadow: 0 2px 5px rgba(0,0,0,0.1);
    }

    .form-control {
      border-radius: 10px;
    }

    .btn-primary {
      border-radius: 10px;
    }

    .btn-kembali {
      margin-right: 10px;
    }

    .judul-produk {
      font-weight: bold;
      font-size: 1.5rem;
      margin: 0 20px 0 0;
      white-space: nowrap;
    }

    @media (max-width: 768px) {
      .navbar-search {
        flex-direction: column-reverse;
      }

      .judul-produk {
        margin-bottom: 10px;
        text-align: center;
      }

      .form-search {
        width: 100%;
      }
    }
  </style>
</head>
<body>

 
  <div class="navbar-search d-flex align-items-center justify-content-between flex-wrap">
    <a href="{{ route('home') }}" class="btn btn-outline-primary me-3">Kembali</a>
    <div class="d-flex align-items-center">
      <div class="judul-produk text-dark">Semua Produk</div>
    </div>
    <form action="{{route('home_view_all_product')}}" method="GET" class="d-flex form-search" style="flex-grow: 1; max-width: 400px;">
      <input
        type="text"
        name="search"
        class="form-control me-2"
        placeholder="Cari produk..."
        value="{{ request('search') }}"
      />
      <button class="btn btn-primary" type="submit">Cari</button>
    </form>
  </div>

 
  <section class="py-5">
    <div class="container">
      <div class="row g-4">
        @forelse ($products as $product)
          <div class="col-md-4">
            <div class="card h-100">
              <img src="/gambar/{{ $product->image }}" class="card-img-top" alt="{{ $product->name }}">
              <div class="card-body">
                <h5 class="card-title">{{ $product->name }}</h5>
                <p class="card-text text-muted">Rp. {{ $product->price }}</p>
                <a href="{{ route('home_view_detail', $product->id) }}" class="btn btn-primary">Lihat Detail</a>
              </div>
            </div>
          </div>
        @empty
          <div class="col-12">
            <p class="text-center text-white">Produk tidak ditemukan.</p>
          </div>
        @endforelse
      </div>
    </div>
  </section>

  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
