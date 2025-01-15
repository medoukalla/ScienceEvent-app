@extends('template') @section('content') {{-- Top section --}}
<div class="formation-header section-padding-top-50">
    <div class="w-layout-blockcontainer container w-container">
        <div class="formation-header-wrapper about-us">
            <div class="f-header-content" style="width: 65%">
                <div class="path-map">
                    <div class="map">
                        <div class="path-name">À propos de nous</div>
                    </div>
                </div>
                <div class="f-h-title">
                    {{ setting('a-propos-de-nous.title') }}
                </div>
                <p>{{ setting('a-propos-de-nous.description') }}</p>
                <div class="btn-org"> Rejoignez la communauté </div>
            </div>
            <div class="f-header-image" style="background: transparent; width:30%;height:500px;overflow:hidden;border-radius:15px;display:flex;align-items:center;justify-content:center;">
                <video id="aboutVideo" controls autoplay muted crossorigin playsinline>
                    <source src="{{ asset('storage/' . (optional(json_decode(setting('a-propos-de-nous.video'), true))[0]['download_link'] ?? '')) }}" type="video/mp4" size="576">
                </video>
            </div>
        </div>
    </div>
</div>
{{-- Why choose us --}}
<section id="Why-Choose-Us" class="why-choose-us-section section-padding-top-125 section-padding-bottom-130 off-white-bg-color">
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
<!-- doctors  --> @livewire('doctors')
<!-- Faq's  --> @livewire('faq') @endsection