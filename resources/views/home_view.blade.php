<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>SneakerHeaven</title>
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
      rel="stylesheet"
    />
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-SgOJa3DmI69IUzQ2PVdRZhwQ+dy64/BUtbMJw1MZ8t5HZApcHrRKUc4W0kG879m7"
      crossorigin="anonymous"
    />
    <script src="https://unpkg.com/feather-icons"></script>
    <link rel="stylesheet" href="{{ url('css/home_view.css') }}">

   
  </head>
  <body>
    <header>
      <nav class="me-navbar">
        <a href="#" class="me-navbar-logo">SneakersHeaven</a>

        <div class="me-navbar-nav">
          <a href="#home">Home</a>
          <a href="#about">About Us</a>
          <a href="#service">Service</a>
          <a href="#product">Product</a>
          <a href="#contact">Location</a>
        </div>

        <div class="user-dropdown" id="dropdownToggle">
        <div class="user-avatar">
            <img src="{{ url('storage/profile.jpg') }}" alt="Profile" />
        </div>
        <span class="user-name">Halo, {{$user->name}}</span>
        <i data-feather="chevron-down" class="arrow-down"></i>

        <div class="dropdown-menu">
        <form action="{{route('profile_view')}}" method="GET">
        @csrf
        <button type="submit" class="dropdown-item btn btn-link" style="text-align: left; width: 100%; padding: 0.25rem 1.5rem; color: #212529;">
            Profile
        </button>
    </form>

    <form action="{{ route('show_cart') }}" method="GET">
        @csrf
        <button type="submit" class="dropdown-item btn btn-link" style="text-align: left; width: 100%; padding: 0.25rem 1.5rem; color: #212529;">
            Carts
        </button>
    </form>

    <form action="{{ route('show_order') }}" method="GET">
        @csrf
        <button type="submit" class="dropdown-item btn btn-link" style="text-align: left; width: 100%; padding: 0.25rem 1.5rem; color: #212529;">
            History
        </button>
    </form>

    <form action="{{ route('logout') }}" method="POST">
        @csrf
        <button type="submit" class="dropdown-item btn btn-link" style="text-align: left; width: 100%; padding: 0.25rem 1.5rem; color: #212529;">
            Logout
        </button>
    </form>
</div>


      </nav>
    </header>
    <main>
      <section id="home" class="container py-5">
        <div class="row align-items-center">
          <div class="col-lg-6 order-1 order-lg-2 mb-4 mb-lg-0">
            <div
              id="shoeCarousel"
              class="carousel slide"
              data-bs-ride="carousel"
            >
              <div class="carousel-inner rounded shadow">
                <div class="carousel-item active">
                  <img
                    src="{{ url('storage/shoes1.jpg') }}"
                    class="d-block w-100"
                    alt="Sepatu 1"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ url('storage/shoes2.jpg') }}"
                    class="d-block w-100"
                    alt="Sepatu 2"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ url('storage/produk6.jpg') }}"
                    class="d-block w-100"
                    alt="Sepatu 3"
                  />
                </div>
                <div class="carousel-item">
                  <img
                    src="{{ url('storage/produk2.jpg') }}"
                    class="d-block w-100"
                    alt="Sepatu 4"
                  />
                </div>
              </div>

              <button
                class="carousel-control-prev"
                type="button"
                data-bs-target="#shoeCarousel"
                data-bs-slide="prev"
              >
                <span
                  class="carousel-control-prev-icon bg-dark rounded-circle"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Previous</span>
              </button>
              <button
                class="carousel-control-next"
                type="button"
                data-bs-target="#shoeCarousel"
                data-bs-slide="next"
              >
                <span
                  class="carousel-control-next-icon bg-dark rounded-circle"
                  aria-hidden="true"
                ></span>
                <span class="visually-hidden">Next</span>
              </button>
            </div>
          </div>

          <div
            class="content-home col-lg-6 order-2 order-lg-1 text-center text-lg-start"
          >
            <h1 class="fw-bold mb-4">Surganya Sepatu SneakersHeaven</h1>
            <p class="lead">
              Langkahkan kaki Anda ke dunia di mana gaya bertemu dengan
              kenyamanan. Di SneakersHeaven, kami percaya bahwa sepatu bukan
              hanya pelengkap, tetapi juga pernyataan. Dengan koleksi terbaru
              dan terlengkap, kami siap membantu Anda menemukan pasangan
              sempurna yang sesuai dengan kepribadian dan gaya hidup Anda.
            </p>
          </div>
        </div>
      </section>

      <a
        href="#about"
        class="text-decoration-none arrow w-100 d-flex align-items-center flex-column mt-5"
      >
        <div class="arow-img text-white mt-0">More Info</div>
        <img
          id="arrow"
          class="mt-2"
          src="{{ url('storage/arrow.svg') }}"
          alt="arrow icon"
        />
      </a>

      <section id="about" class="py-5 bg-light">
        <div class="container">
          <h2 class="text-center fw-bold mb-4">Tentang Kami</h2>
          <div class="row align-items-center">
            <div class="col-md-6 mb-4 mb-md-0">
              <img
                src="{{ url('storage/shoes1.jpg') }}"
                alt="Tentang Kami"
                class="about-image"
              />
            </div>

            <div class="col-md-6">
              <p class="fs-5">
                Kami adalah <span class="highlight">Sneaker Heaven</span>, toko
                sepatu online terpercaya yang berkomitmen menyediakan sepatu
                terbaik dengan kualitas premium dan harga terjangkau.
              </p>
              <p class="text-muted">
                Berdiri sejak tahun 2024, kami telah melayani ribuan pelanggan
                dari seluruh Indonesia. Setiap produk kami dipilih dengan cermat
                untuk memastikan kenyamanan, gaya, dan daya tahan terbaik.
              </p>
              <p class="text-muted">
                Kami percaya bahwa sepatu bukan hanya pelengkap fashion, tapi
                juga cerminan gaya hidup aktif dan percaya diri Anda.
              </p>
            </div>
          </div>

          <div class="row mt-5">
            <div class="col-md-6">
              <h4 class="fw-semibold">Visi Kami</h4>
              <p class="text-muted">
                Menjadi toko sepatu online terdepan di Indonesia yang dikenal
                karena kualitas, pelayanan, dan inovasi terbaik dalam dunia
                fashion alas kaki.
              </p>
            </div>
            <div class="col-md-6">
              <h4 class="fw-semibold">Misi Kami</h4>
              <ul class="text-muted">
                <li>
                  Menyediakan produk sepatu berkualitas dengan harga bersaing
                </li>
                <li>
                  Memberikan pengalaman belanja yang mudah dan menyenangkan
                </li>
                <li>Menjaga kepercayaan dan kepuasan pelanggan</li>
              </ul>
            </div>
          </div>
        </div>
      </section>

      <section id="service" class="py-5 bg-light">
        <div class="container text-center">
          <h2 class="mb-4 fw-bold">Layanan Kami</h2>
          <p class="mb-5 text-muted">
            Kami menawarkan berbagai layanan terbaik untuk kenyamanan belanja
            sepatu Anda.
          </p>

          <div class="row g-4">
            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_delivery.jpg') }}"
                  class="service-img"
                  alt="Pengiriman"
                />
                <h5 class="fw-semibold">Pengiriman Cepat</h5>
                <p class="text-muted">
                  Kami menyediakan layanan pengiriman ke seluruh Indonesia
                  dengan estimasi 1–3 hari kerja.
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_warrantly.jpg') }}"
                  class="service-img"
                  alt="Garansi"
                />
                <h5 class="fw-semibold">Garansi Produk</h5>
                <p class="text-muted">
                  Sepatu rusak? Tenang, garansi penukaran produk dalam 7 hari
                  setelah pembelian.
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_suport.jpg') }}"
                  class="service-img"
                  alt="Customer Service"
                />
                <h5 class="fw-semibold">Customer Service 24/7</h5>
                <p class="text-muted">
                  Tim kami siap membantu Anda kapan saja melalui chat, telepon,
                  atau email.
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_pay.jpg') }}"
                  class="service-img"
                  alt="Pembayaran Mudah"
                />
                <h5 class="fw-semibold">Pembayaran Mudah</h5>
                <p class="text-muted">
                  Menerima pembayaran melalui transfer bank, e-wallet, dan kartu
                  kredit.
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_stock.jpg') }}"
                  class="service-img"
                  alt="Stok Terjamin"
                />
                <h5 class="fw-semibold">Stok Terjamin</h5>
                <p class="text-muted">
                  Semua produk yang tampil ready stock dan langsung diproses
                  setelah pesanan diterima.
                </p>
              </div>
            </div>

            <div class="col-md-4">
              <div class="p-4 bg-white rounded service-card h-100">
                <img
                  src="{{ url('storage/service_return.jpg') }}"
                  class="service-img"
                  alt="Retur Mudah"
                />
                <h5 class="fw-semibold">Retur Mudah</h5>
                <p class="text-muted">
                  Pengembalian produk sangat mudah jika tidak sesuai ukuran atau
                  model.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <section id="product" class="py-6 bg-light">
        <div class="container">
          <h2 class="text-center mb-5 fw-bold">Produk Kami</h2>
          <div class="row g-4">
            @foreach ($products as $product)
              <div class="col-md-4">
                <div class="card card-product h-100">
                  <img
                    src="/gambar/{{$product->image}}"
                    class="card-img-top"
                    alt="Sepatu 1"
                  />
                  <div class="card-body">
                    <h5 class="card-title">{{$product->name}}</h5>
                    <p class="card-text text-muted">Rp. {{$product->price}}</p>
                    <a href="{{route('home_view_detail', $product->id)}}" class="btn btn-primary">Lihat details</a>
                  </div>
                </div>
              </div>
            @endforeach
          </div>

          <div class="text-center mt-5">
            <a href="{{route('home_view_all_product')}}" class="btn btn-outline-primary btn-lg">
              View All Products
            </a>
          </div>
        </div>
      </section>


      <section id="contact" class="contact-section">
        <div class="container">
          <h2 class="text-center fw-bold mb-5">Informasi Lokasi</h2>
          <div class="row g-4">
            <div class="col-md-6">
              <div class="location-info">
                <h4 class="fw-bold">Alamat Kami</h4>
                <p>Jl. Abadi Rafi No.123, Kota Kotaku, Provinsi Jawa Timur, 1945</p>

                <h5 class="fw-bold mt-4">Jam Operasional</h5>
                <ul class="list-unstyled">
                  <li>Senin - Jumat: 08.00 - 17.00</li>
                  <li>Sabtu: 08.00 - 13.00</li>
                  <li>Minggu: Libur</li>
                </ul>

                <h5 class="fw-bold mt-4">Kontak</h5>
                <p>Email: RafiBusinnes14@gmail.com</p>
                <p>Telepon: +62 12345678</p>
              </div>
            </div>

            <div class="col-md-6">
              <iframe
                src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d31636.063746748256!2d112.33525759999999!3d-7.6283904!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sid!2sid!4v1745633099927!5m2!1sid!2sid"
                width="600"
                height="450"
                style="border: 0"
                allowfullscreen=""
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
              ></iframe>
            </div>
          </div>
        </div>
      </section>

    </main>

    <footer>
      <p>© 2024 Kota Malang. Follow Us in:</p>
      <div class="social-icons">
        <a href="#"><i data-feather="twitter"></i></a>
        <a href="#"><i data-feather="instagram"></i></a>
        <a href="#"><i data-feather="facebook"></i></a>
      </div>
      <div class="links">
        <a href="#home">Home</a>
        <a href="#about">AboutUs</a>
        <a href="#service">Service</a>
        <a href="#product">Product</a>
        <a href="#contact">Location</a>
      </div>
    </footer>

    <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>
    <script>
      feather.replace();
    </script>
    <script>
      document.addEventListener("DOMContentLoaded", () => {
        const toggle = document.getElementById("dropdownToggle");

        document.addEventListener("click", function (e) {
          const isClickInside = toggle.contains(e.target);

          if (isClickInside) {
            toggle.classList.toggle("show");
          } else {
            toggle.classList.remove("show");
          }
        });
      });
    </script>
    
  </body>
</html>
