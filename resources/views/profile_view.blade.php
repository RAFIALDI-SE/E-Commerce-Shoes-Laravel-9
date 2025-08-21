<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Profil Pengguna</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet" />
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
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
      padding: 2rem;
    }

    .profile-card {
      background: #fff;
      border-radius: 16px;
      box-shadow: 0 10px 25px rgba(0, 0, 0, 0.15);
      padding: 2rem 2.5rem;
      max-width: 600px;
      width: 100%;
    }

    .username {
      font-size: 1.75rem;
      font-weight: 700;
      color: #2c3e50;
    }

    .text-muted {
      font-size: 1rem;
    }

    .info-label {
      font-weight: 600;
      color: #555;
    }

    .form-label {
      margin-top: 1rem;
      font-weight: 500;
    }

    .form-control {
      border-radius: 8px;
    }

    .btn-primary {
      margin-top: 1.5rem;
      border-radius: 8px;
      padding: 0.6rem 1.2rem;
    }

    .btn-outline-primary {
      border-radius: 8px;
    }
  </style>
</head>
<body>

  <div class="profile-card">
    <div class="text-center mb-4">
      <h2 class="username">Profil Pengguna</h2>
      <p class="text-muted">{{$user->name}}</p>
    </div>

    <div class="mb-4">
      <p><span class="info-label">Nama Lengkap:</span> {{$user->name}}</p>
      <p><span class="info-label">Alamat Email:</span> {{$user->email}}</p>
      <p><span class="info-label">Role:</span> {{$user->is_admin == 1 ? 'Admin' : 'Member'}}</p>
    </div>

    <form action="{{ route('edit_profile') }}" method="post">
      @csrf
      <div class="mb-3">
        <label for="name" class="form-label">Nama</label>
        <input type="text" name="name" id="name" value="{{ $user->name }}" class="form-control" required>
      </div>

      <div class="mb-3">
        <label for="password" class="form-label">Kata Sandi Baru</label>
        <input type="password" name="password" id="password" class="form-control">
      </div>

      <div class="mb-3">
        <label for="password_confirmation" class="form-label">Konfirmasi Kata Sandi</label>
        <input type="password" name="password_confirmation" id="password_confirmation" class="form-control">
      </div>

      <button type="submit" class="btn btn-primary w-100">Simpan Perubahan</button>
    </form>

    <div class="text-center mt-4">
      <a href="{{ route('home') }}" class="btn btn-outline-primary">Kembali ke Beranda</a>
    </div>
  </div>

</body>
</html>
