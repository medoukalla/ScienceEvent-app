@extends('template')

@section('content')

<div class="formation-header">
    <div class="w-layout-blockcontainer container w-container">
        <div class="formation-header-wrapper">
            <div class="f-header-content">
                <div class="path-map">
                    <div class="map">
                        <div class="path-name">Les formations</div>
                    </div>
                </div>
                <div class="f-h-title">
                    La formation DPC du médecin généraliste en eLearning vidéo
                </div>
                <p>
                    Nos formations sont co-construites par les experts français les plus reconnus et par des
                    médecins généralistes de terrain, à travers +100 cas cliniques concrets et des formats
                    pédagogiques variés (tables rondes, consultations en cabinet, etc). Nos formations de
                    qualité
                    cinématographique sont entièrement prises en charge par les financeurs.
                </p>
                <div class="btn-org">
                    Télécharger le catalogue
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

@livewire('all-formations', ['formations' => $formations, 'categories' => $categories, 'doctors' => $doctors])



@stop