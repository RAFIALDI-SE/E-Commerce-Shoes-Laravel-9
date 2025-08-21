<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SneakersHeaven</title>

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

    <link rel="stylesheet" href="{{ url('css/index.css') }}" />
</head>
<body>
<header>
      <nav class="me-navbar">
        <a href="#" class="me-navbar-logo">SneakersHeaven</a>

        

        <div class="me-navbar-icons">
            <div class="me-navbar-nav">
            <a href="{{route('login')}}" >Login</a>
            <a href="{{route('register')}}" >Register</a>
            </div>
                <a href="#" id="hb-menu"><i data-feather="menu"></i></a>
            </div>
         
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

      <div class="d-flex justify-content-center mt-5">
        <a href="{{route('login')}}" id="get-all" class="btn px-4 py-2">Get More Info</a>
      </div>




      <script
      src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.5/dist/js/bootstrap.bundle.min.js"
      integrity="sha384-k6d4wzSIapyDyv1kpU366/PK5hCdSbCRGRCMv+eplOQJWyd1fbcAu9OCUj5zNLiq"
      crossorigin="anonymous"
    ></script>

    <script>
      feather.replace();
    </script>
</body>
</html>





