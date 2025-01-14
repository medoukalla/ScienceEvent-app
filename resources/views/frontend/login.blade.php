@extends('template')

@section('content')
    

<!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

<div class="utility-page-wrap section-padding-bottom-130 gray-bg-color">
  <div class="utility-page-content  w-form">
    <form action="{{ route('voyager.postlogin') }}" method="post" class="utility-page-form ">
      @csrf

      <div class="w-layout-blockcontainer container w-container">
        <div class="utility-page-form-wrap">
          <div data-w-id="2dc45f07-8b73-cc01-e7bc-96f74d81301f" style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="password-protected-content-wrap">
            <h2 class="password-protected-title">Connectez-vous</h2>

            <input class="password-protected-text-field  w-input" autofocus="true" maxlength="256" name="email" data-name="field" placeholder="Votre email" type="email" id="email" value="{{ old('email') }}" required autofocus />
            
            <input class="password-protected-text-field  w-input" autofocus="true" maxlength="256" name="password" data-name="field" placeholder="Mote de pass" type="password" id="pass" required />

            @if(!$errors->isEmpty())
              <div class="alert alert-red">
                    @foreach($errors->all() as $err)
                        <p>{{ __($err) }}</p><br>
                    @endforeach
              </div>
            @endif
            
            <button type="submit" class="btn-org" style="min-width: 100%;">Connecter</button>

          </div>


          <div style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="password-protected-image-wrap">
            <img src="{{ asset('assets/svg/login-bg.svg') }}" alt="Login Svg" class="password-protected-image" />
          </div>
        </div>
      </div>

      

    </form>
  </div>
</div>

<style>
  .alert.alert-red p {
      background-color: #ff5b0099;
      padding: 3px 15px;
      border-radius: 21px;
      line-height: 30px;
      color: white;
      font-size: 16px;
      text-align: center;
  }
</style>
@endsection
