<div class="top-bar-wrapper">
    <div class="w-layout-blockcontainer container w-container">
        <div class="top-bar">
            <a href="{{ route('frontend.index') }}" class="navbar-brand w-nav-brand">
                <img
                loading="lazy" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Brand Logo" class="brand-logo" />
            </a>
            <div class="top-bar-right">
                <div class="search-bar">
                    <input type="text" placeholder="Chercher votre future formation" wire:model="show_phone">
                    <div class="search-icon-block">
                        <img class="search-icon" src="{{ asset('assets/svg/search.svg') }}"  alt="Search Icon">
                    </div>
                </div>
                <a href="javascript:;" wire:click="togglePhone" >
                    <div class="call-btn">
                        
                        @if ( $show_phone == 'false' )
                            <img src="{{ asset('assets/svg/call.svg') }}" alt="">
                            <span>Appeler un conseiller</span>
                        @else
                            <a href="tel:+{{ setting('site.phone') }}" target="_blank"><span style="color:white !important;">{{ setting('site.phone') }}</span></a>
                        @endif

                    </div>
                </a>
            </div>
        </div>
    </div>
</div>
