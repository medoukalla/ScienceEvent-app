<div class="top-bar-wrapper">
    <div class="w-layout-blockcontainer container w-container">
        <div class="top-bar">
            <a href="{{ route('frontend.index') }}" class="navbar-brand w-nav-brand">
                <img
                loading="lazy" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Brand Logo" class="brand-logo" />
            </a>
            <div class="top-bar-right">
                <div class="search-bar">
                    <input type="text" placeholder="Chercher votre future formation">
                    <div class="search-icon-block">
                        <img class="search-icon" src="{{ asset('assets/svg/search.svg') }}" alt="Search Icon">
                    </div>
                </div>
                <a href="">
                    <div class="call-btn">
                        <img src="{{ asset('assets/svg/call.svg') }}" alt="">
                        <span>Appeler un conseiller</span>
                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
