<section class="team-section off-white-bg-color">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="1b37800c-f132-1c28-2bf1-90b746977dbf"
            style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            class="section-title-block center width-637-section-title-block mb-80">
            <div class="section-subtitle primary-color">our instructors</div>
            <h2 class="section-title">We are here to transform your life</h2>
        </div>
    </div>
    <!-- Swiper -->
    <div class="swiper mySwiper doctor-swiper-wrapper">
        <div class="swiper-wrapper doctor-swiper" >
            @foreach( $doctors as $doctor )
                <div class="swiper-slide dr-block">
                    <a href="{{ route('frontend.doctor', [$doctor, $doctor->name]) }}">
                        <div class="dr-block-name">{{ $doctor->name }}</div>
                        <div class="dr-block-overlay"></div>
                        <img src="{{ asset('storage/'.$doctor->avatar) }}" alt="">
                    </a>
                </div>
            @endforeach
        </div>
        <div class="swiper-pagination"></div>
    </div>
</section>