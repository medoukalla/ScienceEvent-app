@extends('template')

@section('content')

{{-- Top section --}}
<div class="formation-header section-padding-top-50">
    <div class="w-layout-blockcontainer container w-container">
        <div class="formation-header-wrapper about-us">
            <div class="f-header-content">
                <div class="path-map">
                    <div class="map">
                        <div class="path-name">À propos de nous</div>
                    </div>
                </div>
                <div class="f-h-title">
                    Empouvoir la prochaine génération de professionnels de la santé
                </div>
                <p>
                    Notre mission est d’accompagner les étudiants en médecine en leur offrant un soutien personnalisé par des experts. Grâce à notre plateforme, nous leur offrons des opportunités d’apprentissage innovantes pour les aider à exceller et à devenir les leaders de demain dans le domaine de la santé.
                </p>
                <div class="btn-org">
                    Rejoignez la communauté
                </div>
            </div>
            <div class="f-header-image">
                <video controls crossorigin playsinline
                    poster="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.jpg">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                        type="video/mp4" size="576">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-720p.mp4"
                        type="video/mp4" size="720">
                    <source src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-1080p.mp4"
                        type="video/mp4" size="1080">

                    <!-- Caption files -->
                    <track kind="captions" label="English" srclang="en"
                        src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.en.vtt" default>
                    <track kind="captions" label="Français" srclang="fr"
                        src="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-HD.fr.vtt">
                    <!-- Fallback for browsers that don't support the <video> element -->
                    <a href="https://cdn.plyr.io/static/demo/View_From_A_Blue_Moon_Trailer-576p.mp4"
                        download>Download</a>
                </video>
            </div>
        </div>
    </div>
</div>

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

@endsection