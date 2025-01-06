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
                        Infirmier libéral
                    </div>
                    <p>
                        +30 thèmes de formation pour valider vos obligations DPC, mieux prendre en charge vos patients et côter vos actes plus sereinement
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-2.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Pharmacien
                    </div>
                    <p>
                        Développer votre activité grâce à des formations pensées pour le titulaire et toute l’équipe officinale
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
                <div class="categorie-box">
                    <img src="{{ asset('assets/svg/medecin-2.svg') }}" alt="" class="cat-img">
                    <div class="cat-title">
                        Préparateur en pharmacie
                    </div>
                    <p>
                        Améliorer vos connaissances pour mieux conseiller au comptoir et développer l'activité officinale
                    </p>
                    <a href="" class="cat-link">
                        Voir les formations
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- doctors  -->
@livewire('doctors')

<!-- Faq's  -->
@livewire('faq')


@stop