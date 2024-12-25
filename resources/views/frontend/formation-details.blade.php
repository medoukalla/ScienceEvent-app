@extends('template')

@section('content')


<section class="classes-details-section">
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
                        <span>{{ $formation->category->name }}</span>
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
                        <p>Aucune vidéo disponible.</p>
                        @endif
                        <div class="formation-heading">
                            <h3><span>Résumé</span> de la formation</h3>
                        </div>
                        <p>{!! $formation->other_details !!}</p>

                        <ul role="list">
                            <li>Accès à vie et documents à distribuer, cahiers d'exercices</li>
                            <li>Intégrer la pleine conscience dans la vie quotidienne</li>
                            <li>Cours en direct sur Zoom et accès à vie</li>
                        </ul>
                    </div>
                    <br>
                    <!-- Unfloded -->
                    <div class="unfolded">
                        <h3>Déroulé</h3>
                        <div class="unfolded-tage">
                            E-learning
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
                    <!-- information targets -->
                    <div class="formation-target">
                        <h3><span>Objectifs</span> de la formation</h3>
                        {!! $formation->objective !!}

                    </div>
                    <!-- Similar informations -->
                    <div class="similar-informations">
                        <h3><span>Découvrez</span> des extraits</h3>
                        <p>
                            {{ $formation->program   }}
                        </p>

                        @if ( count( $formation->extraits ) > 0 )
                        @foreach ( $formation->extraits as $extrait )
                        <div class="funfact-wrap">
                            <a href="#">
                                <div class="s-info">
                                    <img src="{{ asset('storage/' . $extrait->thumbnail ) }}" alt="Similar Video">
                                    <div class="vid-infos">
                                        <div class="vid-title">{{ $extrait->title }}</div>
                                        <img src="{{ asset('assets/svg/video-icon.svg') }}" alt="Video Icon"
                                            class="vid-icon">
                                    </div>
                                </div>
                            </a>
                        </div>
                        @endforeach
                        @endif
                    </div>
                </div>

                <!-- Right section  -->
                @livewire('formation-details', ['formation' => $formation])
            </div>
        </div>
    </div>
</section>


@stop