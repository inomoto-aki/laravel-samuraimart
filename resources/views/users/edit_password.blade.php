@extends('layouts.app')

@section('content')
<div class="container">
  <form method="post" action="{{route('mypage.update_password')}}">
    @csrf
    <input type="hidden" name="_method" value="PUT">
    <div class="form-group row mb-3">
      <label for="password" class="col-mb-3 col-form-label text-md-right">新しいパスワード</label>

      <div class="col-mb-7">
        <input id="password" type="passeord" class="form-control @error('passowrd') is-invalid @enderror" name="password" required autocpmplete="new-password">

        @error('password')
        <span class="invaild-feedback" role="alert">
          <strong>{{ $message }}</strong>
        </span>
        @enderror
      </div>
    </div>

    <div class="form-group row mb-3">
      <label for="password-confirm" class="col-md-3 col-form-label text-md-right">確認用</label>

      <div class="col-md-7">
        <input id="passord-confim" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
      </div>
    </div>

    <div class="form-group d-flex justify-content-center">
      <button type="submit" class="btn btn-danger w-25">
        パスワード更新
      </button>
    </div>
  </form>
</div>
@endsection