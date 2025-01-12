@extends('template')

@section('content')

<div class="hero-video-animation">
    <div class="w-layout-blockcontainer container w-container">
        <div class="hero-v-content-wrapper">
            <div class="hero-v-content">

                <div class="hero-v-title">
                    {{ setting('accueil-hero.headline') }}
                </div>

                <p>{{ setting('accueil-hero.description') }}</p>
                
                <a href="{{ asset('storage/' . (optional(json_decode(setting('accueil-hero.catalogue-file'), true))[0]['download_link'] ?? '')) }}" download class="btn-org" style="text-decoration: none;">
                    Télécharger le catalogue
                </a>

            </div>
            <div class="video-parts">
                <div class="sticker-tage video-sticker">
                    <img src="{{ asset('storage/' . setting('accueil-hero.second-popup-icon') ) }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">{{ setting('accueil-hero.second-popup-title') }}</div>
                        <p>{{ setting('accueil-hero.third-popup-title') }}</p>
                    </div>
                </div>
                <div class="sticker-tage chat-sticker">
                    <img src="{{ asset('storage/' . setting('accueil-hero.first-popup-icon') ) }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">{{ setting('accueil-hero.first-popup-title') }}</div>
                        <p>{{ setting('accueil-hero.first-popup-text') }}</p>
                    </div>
                </div>
                <div class="sticker-tage ressource-sticker">
                    <img src="{{ asset('storage/' . setting('accueil-hero.third-popup-icon') ) }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">{{ setting('accueil-hero.second-popup-text') }}</div>
                        <p>{{ setting('accueil-hero.third-popup-text') }}</p>
                    </div>
                </div>
                <div class="v-part v-part-left">
                    <div class="video-container">
                        <video src="{{ asset('storage/' . (optional(json_decode(setting('accueil-hero.video-left'), true))[0]['download_link'] ?? '')) }}" autoplay loop muted width="600"></video>
                    </div>
                </video>
                </div>
                <div class="v-part v-part-midle">
                    <div class="video-container">
                        <video src="{{ asset('storage/' . (optional(json_decode(setting('accueil-hero.video-middle'), true))[0]['download_link'] ?? '')) }}" autoplay loop muted width="600"></video>
                    </div>
                </video>
                </div>
                <div class="v-part v-part-right">
                   <div class="video-container">
                    <video src="{{ asset('storage/' . (optional(json_decode(setting('accueil-hero.video-right'), true))[0]['download_link'] ?? '')) }}" autoplay loop muted width="600"></video>
                    </video>
                   </div>
                </div>
            </div>
        </div>
    </div>
</div>


<!-- Formations -->
@livewire('formations')

{{-- Why choose us --}}
<section id="Why-Choose-Us"
    class="why-choose-us-section section-padding-top-125 section-padding-bottom-130 off-white-bg-color">
    <div class="w-layout-blockcontainer container w-container">
        <div class="why-us-wrap">
            <div class=""></div>
            <div class="cat-wrap">
                @foreach ($categories as $category)
                <div class="categorie-box">
                    <i class="ti ti-{{ $category->icon }} " style="font-size:28px"></i>
                    <div class="cat-title">
                        {{ $category->name }}
                    </div>
                    <p>
                        {{ $category->brief  }}
                    </p>
                    <a href="{{ route('frontend.formations') }}" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>

<!-- doctors  -->
@livewire('doctors')

<!-- Faq's  -->
@livewire('faq')


@stop