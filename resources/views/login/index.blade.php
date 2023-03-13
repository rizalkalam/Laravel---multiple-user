@extends('layouts.main')
@section('content')
<div class="con-form-login">
  <h1 class="title-form-login"><img src="/assets/login/icon-jurnal-login.svg" alt="" class="icon-jurnal-login"> JURNAL RUS</h1>
      <div class="con-desc">
          <p class="desc-form-login">Masukkan akun anda terlebih dahulu untuk masuk!</p>
      </div>
  <form action="/auth/authenticate" method="POST" class="form-login">
    @csrf
      <div class="con-form-username">
          <img src="/assets/login/user-icon.svg" alt="">
          <input type="text" name="email" id="email" placeholder="example@gmail.com" class="input-username">
      </div>
      <div class="con-form-password">
          <img src="/assets/login/pass-icon.svg" alt="">
          <input type="password" name="password" id="password" placeholder="*******" class="input-password">
          <button type="button" onclick="togglePassword()" class="btn-mata"><img src="/assets/login/icon-mata.svg" alt=""></button>
      </div>
      <button type="submit" class="btn-login">Masuk</button>
  </form>
</div>
@endsection