<!DOCTYPE html>

<html data-wf-domain="" data-wf-page="667ce01dba8466d4d83f6229" data-wf-site="667cd9f8b1766578e6b4dfd1" lang="fr">

<head>
  <meta charset="utf-8" />
  <title>@yield('page_title', setting('site.title') )</title>

  <meta content="width=device-width, initial-scale=1" name="viewport" />
  <meta content="Webflow" name="generator" />
  <link href="{{ asset('assets/style.css') }}" rel="stylesheet" type="text/css" />

  @livewireStyles

</head>

<body>

    <div class="page-wrapper">
    
        <!-- Header Section -->
        @livewire('header')
        
        

        @yield('content')



        <footer class="footer-section">
            <div class="w-layout-blockcontainer container w-container">
            <div class="footer-wrap">
                <div class="footer-top-wrap">
                <div class="footer-about"><a href="/home-pages/home-one" class="footer-logo-link w-inline-block"><img
                        src="{{ asset('storage/'.setting('site.logo')) }}"
                        loading="lazy" alt="Footer Logo" class="footer-logo" /></a>
                    <p class="footer-excerpt">
                        {{ setting('site.description') }}
                    </p>
                </div>
                <div class="footer-social-wrap">
                    <div class="footer-social-title">Follow us</div>
                    <div class="footer-social-icon-wrap">
                    <a href="{{ setting('reseaux-sociaux.facebook') }}" target="_blank"
                        class="footer-social-icon-inner w-inline-block">
                        <div class="footer-social-icon facebook w-embed"><svg viewBox="0 0 9 16" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M5.88398 16V8.70218H8.33257L8.69993 5.85725H5.88398V4.04118C5.88398 3.21776 6.11169 2.65661 7.29381 2.65661L8.79904 2.65599V0.111384C8.53873 0.0775563 7.64518 0 6.60519 0C4.43351 0 2.94674 1.32557 2.94674 3.75942V5.85725H0.490723V8.70218H2.94674V16H5.88398Z"
                            fill="currentColor" />
                        </svg></div>
                    </a>
                    <a href="{{ setting('reseaux-sociaux.twitter') }}" target="_blank" class="footer-social-icon-inner w-inline-block">
                        <div class="footer-social-icon twitter w-embed"><svg viewBox="0 0 17 14" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M16.5725 2.039C15.9775 2.3 15.3435 2.473 14.6825 2.557C15.3625 2.151 15.8815 1.513 16.1255 0.744C15.4915 1.122 14.7915 1.389 14.0455 1.538C13.4435 0.897 12.5855 0.5 11.6495 0.5C9.83351 0.5 8.37151 1.974 8.37151 3.781C8.37151 4.041 8.39351 4.291 8.44751 4.529C5.72051 4.396 3.30751 3.089 1.68651 1.098C1.40351 1.589 1.23751 2.151 1.23751 2.756C1.23751 3.892 1.82251 4.899 2.69451 5.482C2.16751 5.472 1.65051 5.319 1.21251 5.078C1.21251 5.088 1.21251 5.101 1.21251 5.114C1.21251 6.708 2.34951 8.032 3.84051 8.337C3.57351 8.41 3.28251 8.445 2.98051 8.445C2.77051 8.445 2.55851 8.433 2.35951 8.389C2.78451 9.688 3.99051 10.643 5.42451 10.674C4.30851 11.547 2.89151 12.073 1.35751 12.073C1.08851 12.073 0.83051 12.061 0.57251 12.028C2.02551 12.965 3.74751 13.5 5.60451 13.5C11.6405 13.5 14.9405 8.5 14.9405 4.166C14.9405 4.021 14.9355 3.881 14.9285 3.742C15.5795 3.28 16.1265 2.703 16.5725 2.039Z"
                            fill="currentColor" />
                        </svg></div>
                    </a>
                    <a href="{{ setting('reseaux-sociaux.linkedin') }}" target="_blank" class="footer-social-icon-inner w-inline-block">
                        <div class="footer-social-icon linkedin w-embed"><svg viewBox="0 0 13 14" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M12.9002 13.4002V8.71219C12.9002 6.40819 12.4042 4.64819 9.71617 4.64819C8.42017 4.64819 7.55617 5.35219 7.20417 6.02419H7.17217V4.85619H4.62817V13.4002H7.28417V9.16019C7.28417 8.04019 7.49217 6.96819 8.86818 6.96819C10.2282 6.96819 10.2442 8.23219 10.2442 9.22419V13.3842H12.9002V13.4002Z"
                            fill="currentColor" />
                            <path d="M0.308105 4.8562H2.96411V13.4002H0.308105V4.8562Z" fill="currentColor" />
                            <path
                            d="M1.6361 0.600098C0.788098 0.600098 0.100098 1.2881 0.100098 2.1361C0.100098 2.9841 0.788098 3.6881 1.6361 3.6881C2.4841 3.6881 3.1721 2.9841 3.1721 2.1361C3.1721 1.2881 2.4841 0.600098 1.6361 0.600098Z"
                            fill="currentColor" />
                        </svg></div>
                    </a>
                    <a href="{{ setting('reseaux-sociaux.youtube') }}" target="_blank" class="footer-social-icon-inner w-inline-block">
                        <div class="footer-social-icon youtube w-embed"><svg viewBox="0 0 17 12" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M13.1045 0.339111H3.75049C1.91524 0.339111 0.42749 1.82687 0.42749 3.66211V8.33812C0.42749 10.1734 1.91524 11.6611 3.75049 11.6611H13.1045C14.9397 11.6611 16.4275 10.1734 16.4275 8.33812V3.66211C16.4275 1.82687 14.9397 0.339111 13.1045 0.339111ZM10.8572 6.22762L6.482 8.31431C6.36542 8.36991 6.23076 8.28492 6.23076 8.15577V3.85195C6.23076 3.72097 6.36896 3.63608 6.48579 3.69529L10.861 5.91241C10.991 5.97832 10.9888 6.16487 10.8572 6.22762Z"
                            fill="currentColor" />
                        </svg></div>
                    </a></div>
                </div>
                </div>
                <div class="footer-middle-wrap">
                <div class="footer-widget">
                    <h3 class="footer-title">Address</h3>
                    <div class="footer-contact-info-wrap">
                    <p class="footer-contact-info-content width-230">{{ setting('site.adresse') }}</p>
                    <div class="single-footer-contact-info-content">
                        <div class="footer-contact-info-icon w-embed"><svg viewBox="0 0 24 24" fill="none"
                            xmlns="http://www.w3.org/2000/svg">
                            <path d="M7 8.5L9.94202 10.2394C11.6572 11.2535 12.3428 11.2535 14.058 10.2394L17 8.5"
                            stroke="currentColor" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round" />
                            <path
                            d="M2.01577 13.4756C2.08114 16.5411 2.11383 18.0739 3.24496 19.2093C4.37609 20.3448 5.95034 20.3843 9.09884 20.4634C11.0393 20.5122 12.9607 20.5122 14.9012 20.4634C18.0497 20.3843 19.6239 20.3448 20.755 19.2093C21.8862 18.0739 21.9189 16.5411 21.9842 13.4756C22.0053 12.4899 22.0053 11.51 21.9842 10.5244C21.9189 7.45886 21.8862 5.92609 20.755 4.79066C19.6239 3.65523 18.0497 3.61568 14.9012 3.53657C12.9607 3.48781 11.0393 3.48781 9.09882 3.53656C5.95034 3.61566 4.37609 3.65521 3.24496 4.79065C2.11383 5.92608 2.08114 7.45885 2.01577 10.5243C1.99474 11.51 1.99474 12.4899 2.01577 13.4756Z"
                            stroke="currentColor" stroke-width="1.5" stroke-linejoin="round" />
                        </svg></div>
                        <p class="footer-contact-info-content mb-zero">{{ setting('site.phone') }}</p>
                    </div>
                    <div class="single-footer-contact-info-content mb-zero">
                        <div class="footer-contact-info-icon w-embed"><svg viewBox="0 0 24 24" fill="currentColor"
                            xmlns="http://www.w3.org/2000/svg">
                            <path
                            d="M5.31726 1.28657C5.88395 1.40369 6.33524 1.78443 6.61564 2.28746L7.50885 3.88991C7.83786 4.48011 8.11473 4.9768 8.29554 5.40857C8.48735 5.86658 8.60126 6.31824 8.54919 6.8176C8.49711 7.31696 8.29246 7.7354 8.01029 8.14399C7.74428 8.52917 7.37088 8.95804 6.92718 9.46767L5.61417 10.9759C5.37889 11.2461 5.26124 11.3812 5.25049 11.5501C5.23974 11.719 5.33616 11.8633 5.529 12.1518C7.17259 14.6109 9.38773 16.8268 11.8488 18.4718C12.1374 18.6647 12.2816 18.7611 12.4505 18.7503C12.6194 18.7396 12.7546 18.6219 13.0248 18.3866L14.5331 17.0736C15.0427 16.6299 15.4716 16.2565 15.8568 15.9905C16.2653 15.7083 16.6838 15.5036 17.1831 15.4516C17.6825 15.3995 18.1342 15.5134 18.5922 15.7052C19.0239 15.886 19.5206 16.1629 20.1107 16.4918L21.7133 17.3851C22.2163 17.6655 22.5971 18.1168 22.7142 18.6835C22.8325 19.2561 22.658 19.8316 22.2724 20.3047C20.8735 22.021 18.6322 23.1139 16.281 22.6396C14.8358 22.348 13.4098 21.8623 11.6851 20.8732C8.2197 18.8858 5.11263 15.777 3.12755 12.3157C2.13843 10.591 1.65272 9.165 1.36118 7.71974C0.886878 5.36852 1.97971 3.12724 3.69608 1.72833C4.16911 1.34279 4.74466 1.16822 5.31726 1.28657Z"
                            fill="currentColor" />
                        </svg></div>
                        <p class="footer-contact-info-content">{{ setting('site.email') }}</p>
                    </div>
                    </div>
                </div>
                <div class="footer-widget footer-widget-ml-one">
                    <h3 class="footer-title">Quick links</h3>
                    <div class="footer-list-wrap">
                    <div class="footer-list-item"><a href="#" class="footer-list">Home</a></div>
                    <div class="footer-list-item"><a href="#" class="footer-list">About us</a></div>
                    <div class="footer-list-item"><a href="#" class="footer-list">Services</a></div>
                    <div class="footer-list-item mb-zero"><a href="#" class="footer-list">Teams</a></div>
                    <div class="footer-list-item mb-zero"><a href="#" class="footer-list">Classes</a></div>
                    </div>
                </div>
                <div class="footer-widget footer-widget-ml-two">
                    <h3 class="footer-title">Utility pages</h3>
                    <div class="footer-list-wrap">
                    <div class="footer-list-item"><a href="#" class="footer-list">Password
                        protected</a></div>
                    <div class="footer-list-item"><a href="#" class="footer-list">404 not
                        found</a></div>
                    <div class="footer-list-item"><a href="#" class="footer-list">Style guide</a>
                    </div>
                    <div class="footer-list-item"><a href="#" class="footer-list">Licenses</a></div>
                    <div class="footer-list-item mb-zero"><a href="#" class="footer-list">Changelog</a>
                    </div>
                    </div>
                </div>
                <div class="footer-widget">
                    <h3 class="footer-title">Opening hours</h3>
                    <div class="opening-hours-content-wrap">
                    <div class="opening-hours-content">Mon - Wed : 9AM - 4PM</div>
                    <div class="opening-hours-content">Mon - Wed : 9AM - 4PM</div>
                    <div class="opening-hours-content mb-zero">Mon - Wed : 9AM - 4PM</div>
                    </div>
                </div>
                </div>
                <div class="footer-bottom">
                <div id="w-node-_2873a121-65b0-7763-f38d-6f77f9a9ad21-f9a9accc" class="copyright-link-wrap">Copyright ©
                    {{ setting('site.title') }} | Designed by <a href="#" target="_blank"
                    class="copyright-link">agency</a> 
                </div>
                </div>
            </div>
            </div>
        </footer>

    </div>

    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=667cd9f8b1766578e6b4dfd1"
    type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0="
    crossorigin="anonymous"></script>
    <script src="https://cdn.prod.website-files.com/667cd9f8b1766578e6b4dfd1/js/webflow.e2eb9be86.js"
    type="text/javascript"></script>

    @livewireScripts

</body>
    
</html>