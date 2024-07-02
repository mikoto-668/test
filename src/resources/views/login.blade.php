@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/login.css') }}">
@endsection

@section('content')
<div class="form__button">
<form class="form" action="/register" method="get">
<button class="form__button-submit" type="submit">Register</button>
        </div>
      </form>
<div class="contact-form__content">
      <div class="contact-form__heading">
        <h2>Login</h2>
      </div>
      <form class="form" action="/admin" method="post">
      @csrf
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">メールアドレス</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
              <input type="email" name="email" placeholder="test@example.com" />
            </div>
            <div class="form__error">
            @error('email')
            {{ $email }}
            @enderror
            </div>
          </div>
        </div>
        <div class="form__group">
          <div class="form__group-title">
            <span class="form__label--item">パスワード</span>
          </div>
          <div class="form__group-content">
            <div class="form__input--text">
            <input type="password" name="password" placeholder="coachtech1106" value="{{ old('password') }}" />
            </div>
            <div class="form__error">
            @error('password')
            {{ $password }}
            @enderror
            </div>
          </div>
        </div>
        <div class="form__button">
          <button class="form__button-submit" type="submit">ログイン</button>
        </div>
      </form>
    </div>
@endsection
