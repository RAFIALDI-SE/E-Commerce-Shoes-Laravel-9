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

   <style>
        * {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
    outline: none;
    border: none;
    text-decoration: none;
}

body {
    font-family: "Poppins", sans-serif;
    color: #010101;
    background: #020024;
    background: linear-gradient(
        90deg,
        rgba(2, 0, 36, 1) 0%,
        rgba(9, 9, 121, 1) 35%,
        rgba(0, 212, 255, 1) 100%
    );
    font-size: 16px;
    min-height: 100vh
}

html {
    scroll-behavior: smooth;
}

.me-navbar {
    display: flex;
    opacity: 90%;
    justify-content: space-between;
    align-items: center;
    padding: 1.4rem 7%;
    background-color: #fff;
    border-bottom: 1px solid #4e453c;
    position: fixed;
    top: 0;
    left: 0;
    right: 0;
    z-index: 999999;
}

.me-navbar .me-navbar-logo {
    font-size: 2rem;
    font-weight: 700;
    color: rgba(1, 1, 1, 0.8);
    font-style: italic;
    text-decoration: none;
    animation: bounceIn 1s;
}

.me-navbar .me-navbar-nav a {
    position: relative;
    display: inline-block;
    color: rgba(1, 1, 1, 0.8);
    padding: 0.7rem 1rem;
    font-size: 1.2rem;
    text-decoration: none;
    overflow: hidden;
}

.me-navbar .me-navbar-nav a::after {
    content: "";
    position: absolute;
    bottom: 0;
    left: 50%;
    width: 0%;
    height: 2px;
    background-color: #4e453c;
    transition: all 0.3s ease;
    transform: translateX(-50%);
}

.me-navbar .me-navbar-nav a:hover::after {
    width: 100%;
}




   </style>
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
      </nav>
    </header>

    <main class="py-4">
            @yield('content')
        </main>

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
