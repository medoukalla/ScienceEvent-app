@extends('template')

@section('content')


<section class="contact-us-form-section gray-bg-color section-padding-top-125 section-padding-bottom-130">
    <div class="w-layout-blockcontainer container w-container">
        <div class="contact-us-form-area">
            <div id="w-node-a2d18aac-24ff-8031-2ad6-982e9ad5607f-3aa7fe38" class="contact-us-form-wrap">
                <div data-w-id="eb142543-74be-225a-aeef-82843f00c778" class="section-title-block contact-us-section-title-block">
                    <div class="section-subtitle primary-color">Contactez-nous</div>
                    <h2 class="section-title contact-us-section-title">Vous avez des questions !</h2>
                </div>
                @livewire('contact')
            </div>
            <div class="contact-us-info-wrap">
                <div data-w-id="922ab6f7-3e2a-6cbb-389c-d752ea868bdf" class="contact-us-info-area">
                    <img src="https://cdn.prod.website-files.com/667cd9f8b1766578e6b4dfd1/66a60e5471a7cb236a93697a_contact-info-img.jpg" loading="lazy" alt="Image des informations de contact" class="contact-us-info-image">
                    <div class="contact-us-info-inner">
                        <div class="single-contact-us-info-wrap">
                            <div class="contact-us-info-icon-wrap">
                                <div class="contact-us-info-icon w-embed">
                                    <i class="menu-icon ti ti-phone"></i>
                                </div>
                            </div>
                            <p class="contact-us-info-content">{{ setting('site.phone') }}</p>
                        </div>
                        <div class="single-contact-us-info-wrap">
                            <div class="contact-us-info-icon-wrap">
                                <div class="contact-us-info-icon mail w-embed">
                                    <i class="menu-icon ti ti-mail"></i>
                                </div>
                            </div>
                            <p class="contact-us-info-content">{{ setting('site.email') }}</p>
                        </div>
                        <div class="single-contact-us-info-wrap mb-zero">
                            <div class="contact-us-info-icon-wrap">
                                <div class="contact-us-info-icon location w-embed">
                                    <i class="menu-icon ti ti-map-pin"></i>
                                </div>
                            </div>
                            <p class="contact-us-info-content">{{ setting('site.adresse') }}</p>
                        </div>
                    </div>
                    <div class="on-scroll-overlay"></div>
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
