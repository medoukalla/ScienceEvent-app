<section class="faq-section section-padding-top-125 section-padding-bottom-120">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="5fc3460f-5850-3652-132a-37b925fb21e3"
            style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            class="section-title-block center mb-80">
            <div class="section-subtitle primary-color">FAQS</div>
            <h2 class="section-title">Frequently asked questions</h2>
        </div>
        <ul class="accordion">      
            @foreach ($faqs as $faq)
                <li>
                    <input type="radio" name="accordion" id="question-{{ $faq->id }}">
                    <label for="question-{{ $faq->id }}">
                        <span>{{ $faq->question }}</span>
                        <img src="{{ asset('assets/svg/faq-arrow.svg') }}" alt="">
                    </label>
                    <div class="co-content">
                    <p>{{ $faq->answer }}</p>
                </div>
            </li>
        @endforeach
        </ul>
    </div>
</section>