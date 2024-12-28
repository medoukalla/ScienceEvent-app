@extends('template')

@section('content')

<div class="hero-video-animation">
    <div class="w-layout-blockcontainer container w-container">
        <div class="hero-v-content-wrapper">
            <div class="hero-v-content">
                <div class="hero-v-title">
                    La formation e-learning
                        que les soignants méritent
                </div>
                <p>Améliorez la prise en charge de vos patients à l’hôpital ou en libéral grâce à nos formations agréées DPC, conçues par les meilleurs experts européens.</p>
                <div class="btn-org">
                    Télécharger le catalogue
                </div>
            </div>
            <div class="video-parts">
                <div class="sticker-tage video-sticker">
                    <img src="{{ asset('assets/svg/video.svg') }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">Video</div>
                        <p>Nouvelle réponse d’un expert</p>
                    </div>
                </div>
                <div class="sticker-tage chat-sticker">
                    <img src="{{ asset('assets/svg/chat.svg') }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">Forum</div>
                        <p>Nouvelle réponse d’un expert</p>
                    </div>
                </div>
                <div class="sticker-tage ressource-sticker">
                    <img src="{{ asset('assets/svg/ressource.svg') }}" alt="Video icon">
                    <div class="content-wrapper">
                        <div class="sticker-title">Ressource</div>
                        <p>Nouvelle réponse d’un expert</p>
                    </div>
                </div>
                <div class="v-part v-part-left">
                    <div class="video-container">
                        <video src="https://www.santeacademie.com/videos/Webm_Site_2024_gauche_vlongue.webm" autoplay loop muted width="600"></video>
                    </div>
                </video>
                </div>
                <div class="v-part v-part-midle">
                    <div class="video-container">
                        <video src="https://www.santeacademie.com/videos/Webm_Site_2024_milieu_vlongue.webm" autoplay loop muted width="600"></video>
                    </div>
                </video>
                </div>
                <div class="v-part v-part-right">
                   <div class="video-container">
                    <video src="https://www.santeacademie.com/videos/Webm_Site_2024_droite_vlongue.webm" autoplay loop muted width="600"></video>
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