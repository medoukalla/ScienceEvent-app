@extends('template')

@section('content')
    

<!-- <link href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css" rel="stylesheet"> -->

<!-- <div class="utility-page-wrap section-padding-bottom-130 gray-bg-color">
  <div class="utility-page-content w-password-page w-form">
    <form action="{{ route('voyager.postlogin') }}" method="post" class="utility-page-form w-password-page">
      @csrf

      <div class="w-layout-blockcontainer container w-container">
        <div class="utility-page-form-wrap">
          <div data-w-id="2dc45f07-8b73-cc01-e7bc-96f74d81301f" style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="password-protected-content-wrap">
            <h2 class="password-protected-title">Connectez-vous</h2>

            <input class="password-protected-text-field w-password-page w-input" autofocus="true" maxlength="256" name="email" data-name="field" placeholder="Votre email" type="email" id="email" value="{{ old('email') }}" required autofocus />
            
            <input class="password-protected-text-field w-password-page w-input" autofocus="true" maxlength="256" name="password" data-name="field" placeholder="Mote de pass" type="password" id="pass" required />
            
            <button type="submit" class="btn-org" style="min-width: 100%;">Connecter</button>

          </div>


          <div style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1" class="password-protected-image-wrap">
            <img src="{{ asset('assets/svg/login-bg.svg') }}" alt="Login Svg" class="password-protected-image" />
          </div>
        </div>
      </div>
      @if ($errors->has('email') || $errors->has('password'))
        <div class="w-password-page w-form-fail">
            <div>{{ __('voyager::auth.failed') }}</div>
        </div>
      @endif

    </form>
  </div>
</div> -->

<section class="bg-gray-200 h-screen flex flex-col">
    <div class="container mx-auto p-4 flex flex-1 items-center justify-center">
        <div class="w-full max-w-md">

            <h1 class="text-2xl font-bold mb-6 text-center">Connexion</h1>

            <form class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4" method="POST" action="{{ route('voyager.postlogin') }}">
                @csrf
                <div class="mb-4">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="email">
                        Email
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="email" type="email" name="email" value="{{ old('email') }}" required autofocus>
                </div>
                <div class="mb-6">
                    <label class="block text-gray-700 text-sm font-bold mb-2" for="password">
                        Mot de passe
                    </label>
                    <input class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 mb-3 leading-tight focus:outline-none focus:shadow-outline" id="password" type="password" name="password" required>
                </div>

                @if ($errors->has('email') || $errors->has('password'))
                    <div class="bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded relative mb-4" role="alert">
                        <p>{{ __('voyager::auth.failed') }}</p>
                    </div>
                @endif

                <div class="flex items-center justify-between">
                    <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline" type="submit">
                        Se connecter
                    </button>
                    <a class="inline-block align-baseline font-bold text-sm text-blue-500 hover:text-blue-800" href="{{ route('frontend.register') }}">
                        S'inscrire
                    </a>
                </div>
            </form>
        </div>
    </div>
</section>

@endsection
