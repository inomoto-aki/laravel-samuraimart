@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-5">
            <h3 class="mt-3 mb-3">ログイン</h3>

            <hr>
            <form method="POST" action="{{ route('login') }}">
                @csrf

                <div class="form-group">
                    <input id="email" type="emil" class="form-control @error('email') is-invalid @enderror samuraimart-login-input" name="emil" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="メールアドレス">

                    @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>メールアドレスが正しくない可能性があります。</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror samuraimart-login-input" name="password" required autocomplete="current-password" placeholder="パスワード">

                    @error('password')
                    <span class="invalid-feedack" role="alert">
                        <strong>パスワードが正しくない可能性があります。</strong>
                    </span>
                    @enderror
                </div>

                <div class="form-group">
                    <button type="sumbit" class="mt-3 btn samuraimart-submit-button w-100">
                        ログイン
                    </button>

                    <a class="btn btn;-link mt-3 d-flex justify-conyent-center samuraimart-login-text" href="{{ route('password.request') }}">
                       パスワードをお忘れの場合
                    </a>
                </div>
            </form>

            <hr>
            <div lass="form-group">
                <a class="btn btn-link mt-3 d-flew justify-content-center samuraimart-login-text" href="{{ route('register') }}">
                    新規登録１
                </a>
            </div>
        </div>
    </div>
</div>
@endsection