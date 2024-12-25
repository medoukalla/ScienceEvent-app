@extends('template')

@section('content')

<section class="hero-section off-white-bg-color">
    <div class="container-fluid">
        <div data-w-id="c8543492-6040-37c1-7cf1-d258e6d21213" class="hero-wrap-two">
            <img
                src="{{ asset('storage/'.$last_formation->cover) }}" loading="lazy" class="hero-main-image-two" />
            <img
                src="{{ asset('storage/'.$last_formation->cover) }}"
                loading="lazy" alt="Hero Image Two For Small Device" class="hero-image-two-for-small-device" />
            <div class="hero-overly">

            </div>
            <div class="hero-content-wrap hero-content-wrap-position">
                <div data-w-id="9638eb20-94e1-2c0e-e378-7ea27a920df5" style="opacity:0;" class="hero-subtitle primary-color">
                    {{ $last_formation->category->name }}
                </div>
                <h1 data-w-id="9638eb20-94e1-2c0e-e378-7ea27a920df7" style="opacity:0" class="hero-title white">
                    {{ $last_formation->title }}
                </h1>
                <p data-w-id="9638eb20-94e1-2c0e-e378-7ea27a920df9" style="opacity:0" class="hero-excerpt white">Améliorez
                    {{ $last_formation->brief }}
                </p>
                <div data-w-id="9638eb20-94e1-2c0e-e378-7ea27a920dfb" style="opacity:0" class="hero-button-and-video-wrap mb-zero">
                    <a href="{{ route('frontend.formation', $last_formation) }}">
                        <div class="btn-org">
                            Plus de détails
                        </div>
                    </a>
                </div>
            </div>
            <div
                style="-webkit-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0%, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);display:block"
                class="hero-on-scroll-overly">
            </div>
        </div>
    </div>
</section>

<section id="Why-Choose-Us"
    class="why-choose-us-section section-padding-top-125 section-padding-bottom-130 off-white-bg-color">
    <div class="w-layout-blockcontainer container w-container">
        <div class="why-us-wrap">
            <div class="cat-wrap">
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-1.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Médecin généraliste
                    </div>
                    <p>
                        Des cas cliniques en vidéo et quiz, pensés pour votre pratique quotidienne tout en élargissant votre champ de compétences
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-4.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Médecin généraliste
                    </div>
                    <p>
                        Des cas cliniques en vidéo et quiz, pensés pour votre pratique quotidienne tout en élargissant votre champ de compétences
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-2.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Médecin généraliste
                    </div>
                    <p>
                        Des cas cliniques en vidéo et quiz, pensés pour votre pratique quotidienne tout en élargissant votre champ de compétences
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-2.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Médecin généraliste
                    </div>
                    <p>
                        Des cas cliniques en vidéo et quiz, pensés pour votre pratique quotidienne tout en élargissant votre champ de compétences
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>


<!-- Formations -->
@livewire('formations')

<!-- doctors  -->
@livewire('doctors')

<!-- Faq's  -->
@livewire('faq')


@stop