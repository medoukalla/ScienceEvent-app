@extends('template')

@section('content')


    <!-- Notre Mission Section -->
    <section class="section-padding-top-125 section-padding-bottom-130 off-white-bg-color">
        <div class="w-layout-blockcontainer container w-container">
            <div class="why-choose-us-wrap">
                <div class="why-choose-us-section-info-wrap">
                    <div data-w-id="mission-section" class="section-title-block">
                        <div class="section-subtitle primary-color">Notre Mission</div>
                        <h2 class="section-title">Façonner l'Avenir des Soins de Santé</h2>
                        <p class="section-description">
                            Chez {{ setting('site.title') }}, nous nous engageons à fournir une formation médicale continue 
                            de la plus haute qualité. Notre mission est de permettre aux professionnels de santé d'accéder 
                            à des connaissances actualisées et pertinentes pour améliorer la qualité des soins.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>

@endsection