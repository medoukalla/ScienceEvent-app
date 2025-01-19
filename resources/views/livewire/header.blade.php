<header class="header off-white-bg-color">
  <div class="w-layout-blockcontainer container w-container">
    <div data-animation="over-left" data-collapse="medium" data-duration="400" data-easing="ease"
      data-easing2="ease" role="banner" class="navbar-container w-nav">
      <div class="navbar-wrapper">
        {{-- <a href="{{ route('frontend.index') }}" class="navbar-brand w-nav-brand"><img
            loading="lazy" src="{{ asset('storage/'.setting('site.logo')) }}" alt="Brand Logo" class="brand-logo" /></a> --}}

        <nav role="navigation" class="nav-menu-wrapper w-nav-menu">
          <ul role="list" class="nav-menu w-list-unstyled">
            <li class="nav-mobile-brand">
              <a href="{{ route('frontend.index') }}" class="navbar-brand w-nav-brand"><img
                  loading="lazy"
                  src="{{ asset('storage/'.setting('site.logo')) }}"
                  alt="Brand Logo" class="brand-logo" />
              </a>
              <div class="close-btn">
                <img src="{{ asset('assets/svg/close.svg') }}" alt="">
              </div>
            </li>
            <li class="nav-menu-list">
              <div class="nav-menu-link-wrapper">
                <a href="{{ route('frontend.index') }}" class="nav-menu-link hover">Accueil</a>
                <div class="nav-menu-link-shape"></div>
              </div>
            </li>
            <li class="nav-menu-list">
              <div data-delay="500" data-hover="false" data-w-id="b209fa0f-e639-eccc-0896-595290f492c0"
                class="nav-dropdown w-dropdown">
                <div class="nav-dropdown-toggle w-dropdown-toggle">
                  <div>Formations</div>
                  <div class="nav-dropdown-icon w-embed">
                    <svg viewBox="0 0 14 9" fill="none"
                      xmlns="http://www.w3.org/2000/svg">
                      <path d="M13 1.50005C13 1.50005 8.5811 7.5 7 7.5C5.4188 7.5 1 1.5 1 1.5" stroke="currentColor"
                        stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                    </svg>
                  </div>
                  <div class="nav-menu-link-shape dropdown"></div>
                </div>
                @livewire('hero-section')
                <nav class="nav-dropdown-list w-dropdown-list nav-mobile-list">
                  <div class="nav-dropdown-link-wrapper"><a href="/home-pages/home-one"
                  data-w-id="b209fa0f-e639-eccc-0896-595290f492c8"
                  class="nav-dropdown-link-block w-inline-block">
                  <div class="nav-dropdown-shape"></div>
                  <div class="nav-dropdown-link-text">Allergologue</div>
                  </a><a href="/home-pages/home-two"
                  data-w-id="b209fa0f-e639-eccc-0896-595290f492cc" aria-current="page"
                  class="nav-dropdown-link-block w-inline-block w--current">
                  <div class="nav-dropdown-shape"></div>
                  <div class="nav-dropdown-link-text">Anesthésiste reanimateur</div>
                  </a>
                  </div>
                </nav>
              </div>
            </li>
            <li class="nav-menu-list">
              <div class="nav-menu-link-wrapper">
                <a href="{{ route('frontend.about') }}" class="nav-menu-link">Apropos de nous</a>
                <div class="nav-menu-link-shape"></div>
              </div>
            </li>
            <li class="nav-menu-list">
              <div class="nav-menu-link-wrapper">
                <a href="{{ route('frontend.contact') }}" class="nav-menu-link">Contact</a>
                <div class="nav-menu-link-shape"></div>
              </div>
            </li>
          </ul>
        </nav>
        <div class="auth">
          @auth
            <a href="{{ route('frontend.profile') }}" >
              <div class="auth-button">
                <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                  <path
                    d="M7.75 0C6.75544 0 5.80161 0.395088 5.09835 1.09835C4.39509 1.80161 4 2.75544 4 3.75C4 4.74456 4.39509 5.69839 5.09835 6.40165C5.80161 7.10491 6.75544 7.5 7.75 7.5C8.74456 7.5 9.69839 7.10491 10.4017 6.40165C11.1049 5.69839 11.5 4.74456 11.5 3.75C11.5 2.75544 11.1049 1.80161 10.4017 1.09835C9.69839 0.395088 8.74456 0 7.75 0ZM3.75 9.5C2.75544 9.5 1.80161 9.89509 1.09835 10.5983C0.395088 11.3016 0 12.2554 0 13.25V14.438C0 15.192 0.546 15.834 1.29 15.955C5.568 16.654 9.932 16.654 14.21 15.955C14.5698 15.8958 14.897 15.7108 15.1332 15.4331C15.3694 15.1553 15.4994 14.8027 15.5 14.438V13.25C15.5 12.2554 15.1049 11.3016 14.4017 10.5983C13.6984 9.89509 12.7446 9.5 11.75 9.5H11.41C11.2233 9.50067 11.042 9.52933 10.866 9.586L10 9.869C8.53797 10.3463 6.96203 10.3463 5.5 9.869L4.634 9.586C4.45847 9.5297 4.27534 9.50069 4.091 9.5H3.75Z"
                    fill="#185085" />
                </svg>
                Profile
              </div>
            </a>
          @endauth

          @guest
          <a href="{{ route('frontend.login') }}" >
            <div class="auth-button">
              <svg width="16" height="17" viewBox="0 0 16 17" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path
                  d="M7.75 0C6.75544 0 5.80161 0.395088 5.09835 1.09835C4.39509 1.80161 4 2.75544 4 3.75C4 4.74456 4.39509 5.69839 5.09835 6.40165C5.80161 7.10491 6.75544 7.5 7.75 7.5C8.74456 7.5 9.69839 7.10491 10.4017 6.40165C11.1049 5.69839 11.5 4.74456 11.5 3.75C11.5 2.75544 11.1049 1.80161 10.4017 1.09835C9.69839 0.395088 8.74456 0 7.75 0ZM3.75 9.5C2.75544 9.5 1.80161 9.89509 1.09835 10.5983C0.395088 11.3016 0 12.2554 0 13.25V14.438C0 15.192 0.546 15.834 1.29 15.955C5.568 16.654 9.932 16.654 14.21 15.955C14.5698 15.8958 14.897 15.7108 15.1332 15.4331C15.3694 15.1553 15.4994 14.8027 15.5 14.438V13.25C15.5 12.2554 15.1049 11.3016 14.4017 10.5983C13.6984 9.89509 12.7446 9.5 11.75 9.5H11.41C11.2233 9.50067 11.042 9.52933 10.866 9.586L10 9.869C8.53797 10.3463 6.96203 10.3463 5.5 9.869L4.634 9.586C4.45847 9.5297 4.27534 9.50069 4.091 9.5H3.75Z"
                  fill="#185085" />
              </svg>
              Se connecter
            </div>
          </a>
          @endguest
        </div>
        <div class="menu-button w-nav-button">
          <span></span>
          <span></span>
          <span></span>
        </div>
      </div>
    </div>
  </div>
</header>