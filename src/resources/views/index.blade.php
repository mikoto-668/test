@extends('layouts.app')

@section('css')
<link rel="stylesheet" href="{{ asset('css/sanitize.css') }}" />
<link rel="stylesheet" href="{{ asset('css/common.css') }}" />
<link rel="stylesheet" href="{{ asset('css/index.css') }}" />
@endsection

@section('content')

<div class="contact-form__content">
  <div class="contact-form__heading">
    <h2>Contact</h2>
  </div>
  <form class="form" action="/confirm" method="post">
    @csrf
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お名前</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="text" name="first-name" placeholder="例：山田" value="{{ old('first-name') }}" />
          <input type="text" name="last-name" placeholder="例：太郎" value="{{ old('last-name') }}" />
        </div>
        <div class="form__error">
          @error('first-name')
          {{ $message }}
          @enderror
          @error('last-name')
          {{ $message }}
          @enderror
        </div>
      </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">性別</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="男性" id="sex01" {{ old("gender") == 1 ? "checked" : "" }} />
      <label class="form-check-label" for="category1">男性</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="女性" id="sex02" {{ old("gender") == 2 ? "checked" : "" }} />
      <label class="form-check-label" for="category2">女性</label>
      </div>
      <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="gender" value="その他" id="sex03" {{ old("gender") == 3 ? "checked" : "" }} />
      <label class="form-check-label" for="category3">その他</label>
      </div>
      </div>
      <div class="form__error">
          @error('gender')
          {{ $message }}
          @enderror
    </div>
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">メールアドレス</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="email" name="email" placeholder="test@example.com" value="{{ old('email') }}" />
        </div>
        </div>
      </div>
        <div class="form__error">
          @error('email')
          {{ $message }}
          @enderror
        </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">電話番号</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--text">
          <input type="tel" name="tel-1" placeholder="090" value="{{ old('tel-1') }}" />
          <P>-</P>
          <input type="tel" name="tel-2" placeholder="1234" value="{{ old('tel-2') }}" />
          <P>-</P>
          <input type="tel" name="tel-3" placeholder="5678" value="{{ old('tel-3') }}" />
        </div>
        </div>
      </div>
        <div class="form__error">
          @error('tel-1')
          {{ $message }}
          @enderror
          @error('tel-2')
          {{ $message }}
          @enderror
          @error('tel-3')
          {{ $message }}
          @enderror
      </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">住所</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="address" placeholder="例）東京都渋谷区千駄ケ谷1-2-3">{{ old('address') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__error">
    @error('address')
          {{ $message }}
          @enderror
    </div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">建物
        </span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="building" placeholder="例）千駄ケ谷マンション101">{{ old('building') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__group">
    <div class="form__group-title">
    <span class="form__label--item">お問い合わせの種類
    <span class="form__label--required">※</span>
    </div>
    <div class="form__group-content">
    <select name="category">
<option value="">カテゴリ</option>
<option value="商品のお届けについて">商品お届けについて</option>
<option value="商品の交換について">商品の交換について</option>
<option value="商品トラブル">商品トラブル</option>
<option value="ショップへの問い合わせ">ショップへの問い合わせ</option>
<option value="その他">その他</option>
    </select>
</div>
<div class="form__error">
    @error('category')
          {{ $category }}
          @enderror
    </div>
</div>
    <div class="form__group">
      <div class="form__group-title">
        <span class="form__label--item">お問い合わせ内容</span>
        <span class="form__label--required">※</span>
      </div>
      <div class="form__group-content">
        <div class="form__input--textarea">
          <textarea name="content" placeholder="資料をいただきたいです">{{ old('content') }}</textarea>
        </div>
      </div>
    </div>
    <div class="form__error">
    @error('content')
          {{ $content }}
          @enderror
    <div class="form__button">
      <button class="form__button-submit" type="submit">送信</button>
    </div>
  </form>
</div>
@endsection