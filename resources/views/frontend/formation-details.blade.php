@extends('template')

@section('content')


<section class="classes-details-section" style="padding-top: 50px">
    <div class="w-layout-blockcontainer container w-container">
        <div class="classes-details-wrap">
            <div class="class-details-content-and-instructor-wrap">
                <div class="class-details-content-wrap">
                    <!-- Pages path -->
                    <div class="path-map">
                        <div class="map">
                            <a href="{{ route('frontend.formations') }}">
                                <div class="path-name">Les formations</div>
                            </a>
                            <img src="{{ asset('assets/svg/path-arrow.svg') }}" alt="Path arrow">
                            <div class="path-name selected">{{ $formation->title }}</div>
                        </div>
                    </div>
                    <!-- Domain tage -->
                    <div class="domain-tage">
                        @foreach ($formation->categories as $category)
                            <span >{{ $category->name }}</span> @if (!$loop->last), @endif
                        @endforeach
                    </div>
                    <div data-w-id="316ed8d2-66d5-d21f-f414-3781cc3a9386"
                        style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1; margin-top: -90px;"
                        class="formation-heading">
                        <h2>{{ $formation->title }}</h2>
                        <p>{{ $formation->brief }}</p>
                    </div>
                    <div data-w-id="6481ae6b-8faa-c180-5d32-6eeed6b317ba"
                        style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1"
                        class="class-details-description-image-with-content w-richtext">

                        @php
                        $videos = json_decode($formation->video);
                        @endphp

                        @if (!empty($videos) && isset($videos[0]->download_link))
                            <video controls class="formation-video">
                                <source src="{{ asset('storage/' . $videos[0]->download_link) }}" type="video/mp4">
                                Votre navigateur ne prend pas en charge la balise vidéo.
                            </video>
                        @else
                            <a href="{{ route('frontend.formation', $formation->id) }}">
                                <img src="{{ asset('storage/'.$formation->cover) }}" alt="" style="width: 100%;max-height: 300px;object-fit: cover;">
                            </a>
                        @endif
                        <div class="formation-heading">
                            <h3><span>Programme</span> de la formation</h3>
                        </div>
                        
                        {!! $formation->other_details !!}

                    </div>
                    <br><br>
                    <!-- information targets -->
                    <div class="formation-target">
                        <h3><span>Objectifs</span> de la formation</h3>
                        {!! $formation->objective !!}

                    </div>
                    <!-- Unfloded -->
                    <div class="unfolded">
                        <h3>Déroulé</h3>
                        <div class="unfolded-tage">
                            @if ( $formation->type == 1 )
                                E-learning
                            @elseif ( $formation->type == 2 )
                                Présentiel
                            @elseif ( $formation->type == 3 )
                                Classe Virtuelle
                            @endif
                        </div>
                        <div class="unfolded-list">
                            <div class="list">
                                <div class="list-circle"></div>
                                <span>Évaluation initiale</span>
                                <p>Auto-évaluez vos connaissances en amont de la formation</p>
                            </div>
                            <div class="list">
                                <div class="list-circle"></div>
                                <span>Formation</span>
                                <p>Améliorez vos connaissances en visionnant des vidéos de qualité
                                    cinématographique, sur mobile, tablette ou PC. Et bénéficiez d'échanges avec
                                    l’expert via le forum pour répondre à toutes vos questions</p>
                            </div>
                            <div class="list">
                                <div class="list-circle"></div>
                                <span>Évaluation finale et satisfaction</span>
                                <p>Mesurez la progression de vos connaissances et évaluez votre satisfaction</p>
                            </div>
                        </div>
                    </div>
                    <!-- End formation -->
                    <div class="formation-ended">
                        <h3>Votre formation est terminée !</h3>
                        <ul>
                            <li>Attestation officielle de participation à la formation.</li>
                            <li>Fiches récapitulatives et ressources à conserver.</li>
                            <li>Accès à la communauté pour continuer l’échange</li>
                        </ul>
                    </div>
                    
                    <!-- Similar informations -->
                    <div class="similar-informations">
                        <h3><span>Découvrez</span> des extraits</h3>
                        <p>
                            {!! $formation->program !!}
                        </p>

                        @if ( count( $formation->extraits ) > 0 )
                            @foreach ( $formation->extraits as $extrait )
                                <div class="funfact-wrap">
                                    <a href="#">
                                        <div class="s-info" style="height:200px !important">
                                            <video controls class="formation-video">
                                                <source src="{{ asset('storage/' . (optional(json_decode( $extrait->video, true))[0]['download_link'] ?? '')) }}" type="video/mp4">
                                                Votre navigateur ne prend pas en charge la balise vidéo.
                                            </video>
                                        </div>
                                    </a>
                                </div>
                            @endforeach
                        @endif
                    </div>
                </div>

                <!-- Right section  -->
                @livewire('formation-details', ['formation' => $formation, 'button_route' => $button_route])
            </div>
        </div>
    </div>
</section>
<div class="sticky-buy-block">
    <div class="sticky-buy-wrap">
        <div class="sticky-buy-title">
            {{ $formation->title }}
            <p>Formation financée à <span class="span-one">100%</span> par le <span class="span-two">DPC</span>. 8h de vidéos + ressources pratiques.</p>
        </div>
        <div class="sticky-help"><b>Besoin d'aide?</b> Contactez-nous au <span>+212 700 443 555</span></div>
        
        @auth
            @if ( is_null( $button_route ) )
                <div class="sticky-buy-button" onclick="$(document).ready(function(){ 
                    $('html, body').animate({
                        scrollTop: $('.class-details-instructor-wrap').offset().top
                    }, 1000);
                });">Acheter maintenant</div>
            @else
            <div class="sticky-buy-button">
                <a href="{{ $button_route }}">
                    Acheter maintenant
                </a>
            </div>
            @endif
        @endauth
        @guest
            <div class="sticky-buy-button" onclick="$(document).ready(function(){ 
                $('html, body').animate({
                    scrollTop: $('.class-details-instructor-wrap').offset().top
                }, 1000);
            });">Acheter maintenant</div>
        @endguest
    </div>

</div>


@stop