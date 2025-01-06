<section class="team-section off-white-bg-color">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="1b37800c-f132-1c28-2bf1-90b746977dbf"
            style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            class="section-title-block center width-637-section-title-block mb-80">
            <div class="section-subtitle primary-color">our instructors</div>
            <h2 class="section-title">We are here to transform your life</h2>
        </div>
    </div>
    {{-- <div class="team-wrap">
        <div data-delay="2000" data-animation="slide" class="team-slider w-slider" data-autoplay="true" data-easing="ease"
            data-hide-arrows="false" data-disable-swipe="false" data-autoplay-limit="0" data-nav-spacing="3"
            data-duration="700" data-infinite="true">
            <div class="team-mask w-slider-mask">
                
                @foreach( $doctors as $doctor )
                    <div class="team-slide w-slide">
                        <div class="collection-list-wrapper-team w-dyn-list">
                            <div role="list" class="collection-list-team w-dyn-items">
                                <div role="listitem" class="collection-item-team w-dyn-item">
                                <div class="single-team-card"><a href="{{ route('frontend.doctor', [$doctor, $doctor->name]) }}"
                                    class="team-image-link-block w-inline-block"><img
                                        src="{{ asset('storage/'.$doctor->avatar) }}" loading="lazy"
                                        alt="Team Image" class="team-image" />
                                    <div class="team-image-overly"></div>
                                    </a>
                                    <div class="team-content-and-social-wrap">
                                        <div class="team-content-wrap">
                                            <a href="{{ route('frontend.doctor', [$doctor, $doctor->name]) }}""
                                            class="team-name-link-block w-inline-block">
                                            <h3 class="team-name">{{ $doctor->name }}</h3>
                                            </a>
                                            <div class="team-designation">{{ $doctor->speciality }}</div>
                                        </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>

            <div class="team-left-arrow w-slider-arrow-left">
                <div class="w-icon-slider-left"></div>
            </div>
            <div class="team-right-arrow w-slider-arrow-right">
                <div class="w-icon-slider-right"></div>
            </div>
            <div class="team-slide-nav w-slider-nav w-round w-num"></div>
        </div>
    </div> --}}
      <!-- Swiper -->
    <div class="swiper mySwiper doctor-swiper-wrapper">
        <div class="swiper-wrapper doctor-swiper">
            <div class="swiper-slide dr-block">
                <div class="dr-block-name">Dr. James Whitaker</div>
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr1.jpg') }}" alt="">
            </div>
            <div class="swiper-slide dr-block">
                <div class="dr-block-name">Dr. Michael Anderson</div>
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr2.jpg') }}" alt="">
            </div>
            <div class="swiper-slide dr-block">
                <div class="dr-block-name">Dr. David Mitchell</div>
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr6.jpg') }}" alt="">
            </div>
            <div class="swiper-slide dr-block">
                <div class="dr-block-name">Dr. Robert Carter</div>
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr4.jpg') }}" alt="">
            </div>
            <div class="swiper-slide dr-block">
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr5.jpg') }}" alt="">
                <div class="dr-block-name">Dr. William Brooks</div>
            </div>
            <div class="swiper-slide dr-block">
                <div class="dr-block-name">Dr. Emily Harris</div>
                <div class="dr-block-overlay"></div>
                <img src="{{ asset('assets/images/dr3.jpg') }}" alt="">
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>