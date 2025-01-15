@extends('template')

@section('content')

<div class="utility-page-wrap section-padding-top-130 section-padding-bottom-130 gray-bg-color">
    <div class="utility-page-content">
        <div class="w-layout-blockcontainer container w-container">
            <div class="error-wrap">
                <div data-w-id="f27aa740-baa8-2b4a-3f06-5f7f76629b98" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="error-image-wrap">
                    <img src="{{ asset('assets/images/error_404.png') }}" alt="" class="error-image">
                </div>
                <div data-w-id="de00b685-69a8-b5b3-063c-aceea85beb31" style="transform: translate3d(0px, 0px, 0px) scale3d(1, 1, 1) rotateX(0deg) rotateY(0deg) rotateZ(0deg) skew(0deg, 0deg); opacity: 1; transform-style: preserve-3d;" class="error-content-wrap">
                    <h2 class="error-title">Délai d'authentification expiré</h2>
                    <div class="error-excerpt">Votre session a expiré. Veuillez actualiser la page.</div>
                    <div class="error-button-wrap">
                        <a href="{{ route('frontend.index') }}" class="primary-btn">Retour à l'accueil</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection