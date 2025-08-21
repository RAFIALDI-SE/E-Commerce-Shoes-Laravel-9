

@extends('template')

@section('content')
  
 <link rel="stylesheet" href="{{ url('css/login.css') }}">
  <div class="container">
    <a href="{{ url('/') }}" class="back-arrow">&#8592; Kembali</a>
    <h2>Form Login</h2>

    <form method="POST" action="{{ route('login') }}">
      @csrf
      <label for="email">Email</label>
      <input type="email" name="email" id="email" placeholder="Masukkan email" required value="{{ old('email') }}" />

      <label for="password">Password</label>
      <input type="password" name="password" id="password" placeholder="Masukkan password" required />

      <button type="submit">Masuk</button>
    </form>

    <p class="login-link">
      Belum punya akun?
      <a href="{{ route('register') }}">Register</a>
    </p>
  </div>
@endsection
