<section class="team-section off-white-bg-color section-padding-top-125">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="1b37800c-f132-1c28-2bf1-90b746977dbf"
            style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            class="section-title-block center width-637-section-title-block mb-80">
            <div class="section-subtitle primary-color">our instructors</div>
            <h2 class="section-title">We are here to transform your life</h2>
        </div>
    </div>
    <div class="team-wrap">
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
                                    <div class="team-content-wrap"><a href="{{ route('frontend.doctor', [$doctor, $doctor->name]) }}""
                                        class="team-name-link-block w-inline-block">
                                        <h3 class="team-name">{{ $doctor->name }}</h3>
                                        </a>
                                        <div class="team-designation">{{ $doctor->speciality }}</div>
                                    </div>
                                    <div class="team-social-area">
                                        <div class="team-social-wrap">
                                            <a href="{{ $doctor->facebook }}" target="_blank"
                                                class="team-social-share-link w-inline-block">
                                                <div class="team-social-share-icon w-embed"><svg viewBox="0 0 9 16" fill="currentColor"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M5.88398 16V8.70218H8.33257L8.69993 5.85725H5.88398V4.04118C5.88398 3.21776 6.11169 2.65661 7.29381 2.65661L8.79904 2.65599V0.111384C8.53873 0.0775563 7.64518 0 6.60519 0C4.43351 0 2.94674 1.32557 2.94674 3.75942V5.85725H0.490723V8.70218H2.94674V16H5.88398Z"
                                                    fill="currentColor" />
                                                </svg></div>
                                            </a>
                                            <a href="{{ $doctor->twitter }}" target="_blank" class="team-social-share-link w-inline-block">
                                                <div class="team-social-share-icon twitter w-embed"><svg viewBox="0 0 17 14"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M16.5725 2.039C15.9775 2.3 15.3435 2.473 14.6825 2.557C15.3625 2.151 15.8815 1.513 16.1255 0.744C15.4915 1.122 14.7915 1.389 14.0455 1.538C13.4435 0.897 12.5855 0.5 11.6495 0.5C9.83351 0.5 8.37151 1.974 8.37151 3.781C8.37151 4.041 8.39351 4.291 8.44751 4.529C5.72051 4.396 3.30751 3.089 1.68651 1.098C1.40351 1.589 1.23751 2.151 1.23751 2.756C1.23751 3.892 1.82251 4.899 2.69451 5.482C2.16751 5.472 1.65051 5.319 1.21251 5.078C1.21251 5.088 1.21251 5.101 1.21251 5.114C1.21251 6.708 2.34951 8.032 3.84051 8.337C3.57351 8.41 3.28251 8.445 2.98051 8.445C2.77051 8.445 2.55851 8.433 2.35951 8.389C2.78451 9.688 3.99051 10.643 5.42451 10.674C4.30851 11.547 2.89151 12.073 1.35751 12.073C1.08851 12.073 0.83051 12.061 0.57251 12.028C2.02551 12.965 3.74751 13.5 5.60451 13.5C11.6405 13.5 14.9405 8.5 14.9405 4.166C14.9405 4.021 14.9355 3.881 14.9285 3.742C15.5795 3.28 16.1265 2.703 16.5725 2.039Z"
                                                    fill="currentColor" />
                                                </svg></div>
                                            </a>
                                            <a href="{{ $doctor->linkedin }}" target="_blank"
                                                class="team-social-share-link w-inline-block">
                                                <div class="team-social-share-icon linkedin w-embed"><svg viewBox="0 0 13 14"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M12.9002 13.4002V8.71219C12.9002 6.40819 12.4042 4.64819 9.71617 4.64819C8.42017 4.64819 7.55617 5.35219 7.20417 6.02419H7.17217V4.85619H4.62817V13.4002H7.28417V9.16019C7.28417 8.04019 7.49217 6.96819 8.86818 6.96819C10.2282 6.96819 10.2442 8.23219 10.2442 9.22419V13.3842H12.9002V13.4002Z"
                                                    fill="currentColor" />
                                                    <path d="M0.308105 4.8562H2.96411V13.4002H0.308105V4.8562Z" fill="currentColor" />
                                                    <path
                                                    d="M1.6361 0.600098C0.788098 0.600098 0.100098 1.2881 0.100098 2.1361C0.100098 2.9841 0.788098 3.6881 1.6361 3.6881C2.4841 3.6881 3.1721 2.9841 3.1721 2.1361C3.1721 1.2881 2.4841 0.600098 1.6361 0.600098Z"
                                                    fill="currentColor" />
                                                </svg></div>
                                            </a>
                                            <a href="{{ $doctor->youtube }}" target="_blank"
                                                class="team-social-share-link w-inline-block">
                                                <div class="team-social-share-icon youtube w-embed"><svg viewBox="0 0 17 12"
                                                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M13.1045 0.339111H3.75049C1.91524 0.339111 0.42749 1.82687 0.42749 3.66211V8.33812C0.42749 10.1734 1.91524 11.6611 3.75049 11.6611H13.1045C14.9397 11.6611 16.4275 10.1734 16.4275 8.33812V3.66211C16.4275 1.82687 14.9397 0.339111 13.1045 0.339111ZM10.8572 6.22762L6.482 8.31431C6.36542 8.36991 6.23076 8.28492 6.23076 8.15577V3.85195C6.23076 3.72097 6.36896 3.63608 6.48579 3.69529L10.861 5.91241C10.991 5.97832 10.9888 6.16487 10.8572 6.22762Z"
                                                    fill="currentColor" />
                                                </svg></div>
                                            </a>
                                        <div class="team-social-share"><img
                                            src="https://cdn.prod.website-files.com/667cd9f8b1766578e6b4dfd1/66938fa613172d499e058ac0_social-share.png"
                                            loading="lazy" alt="Team Social Share Image" class="team-social-share-image" /></div>
                                        </div>
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
    </div>
</section>