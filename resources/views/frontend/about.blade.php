@extends('template')

@section('content')

    <div class="page-wrapper">
        
        {{-- Why choose us --}}
        <section id="Why-Choose-Us"
            class="why-choose-us-section off-white-bg-color">
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
    </div>

@endsection