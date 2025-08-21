<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Detail Produk</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;600;700&display=swap" rel="stylesheet" />
  <style>
    body {
      background: #020024;
        background: linear-gradient(
        90deg,
        rgba(2, 0, 36, 1) 0%,
        rgba(9, 9, 121, 1) 35%,
        rgba(0, 212, 255, 1) 100%
  );
      font-family: 'Poppins', sans-serif;
      color: #333;
      padding: 2rem 0;
    }

    .book-detail-card {
      background-color: #ffffff;
      border-radius: 16px;
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
      padding: 2rem;
      max-width: 960px;
      margin: auto;
    }

    .book-img {
      width: 100%;
      border-radius: 12px;
      object-fit: cover;
      height: auto;
      max-height: 400px;
      box-shadow: 0 5px 20px rgba(0, 0, 0, 0.1);
    }

    .book-title {
      font-size: 1.8rem;
      font-weight: 700;
      color: #2c3e50;
    }

    .book-meta, .text-muted {
      font-size: 1rem;
      color: #6c757d;
    }

    .price-tag {
      font-size: 1.5rem;
      font-weight: 700;
      color: #28a745;
      margin: 1rem 0;
    }

    .btn-outline-secondary {
      border-radius: 8px;
    }

    .btn-outline-primary {
      border-radius: 8px;
      padding: 0.6rem 1.2rem;
    }

    .form-control {
      border-radius: 8px;
    }

    hr {
      border-top: 1px solid #e0e0e0;
    }

    .back-btn {
      margin-top: 2rem;
    }

    @media (max-width: 768px) {
      .book-img {
        max-height: 300px;
      }

      .book-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>

  <div class="container">
    <div class="book-detail-card">
      <div class="row g-4 align-items-center">
        <div class="col-md-5 text-center">
          <img src="/gambar/{{$products->image}}" alt="Cover Produk" class="book-img" />
        </div>

        <div class="col-md-7">
          <h2 class="book-title">{{$products->name}}</h2>
          <p class="book-meta">Stok tersedia: <strong>{{$products->stock}}</strong></p>
          <p class="price-tag">Rp {{ number_format($products->price, 0, ',', '.') }}</p>

          <hr />
          <p><strong>Deskripsi:</strong></p>
          <p class="text-muted">{{$products->description}}</p>

          <form action="{{ route('add_to_cart', $products) }}" method="post">
            @csrf
            <div class="input-group mb-3">
              <input type="number" name="amount" class="form-control" value="1" min="1" max="{{ $products->stock }}" required>
              <button class="btn btn-outline-secondary" type="submit">Tambah ke Keranjang</button>
            </div>
          </form>
        </div>
      </div>

      <div class="text-center back-btn">
        <a href="{{route('home')}}" class="btn btn-outline-primary">← Kembali ke Halaman Utama</a>
      </div>
    </div>
  </div>

</body>
</html>
