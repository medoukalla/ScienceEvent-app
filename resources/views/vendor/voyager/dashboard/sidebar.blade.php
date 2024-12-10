<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" >

          
    <div class="app-brand demo ">
      <a href="{{ route('voyager.dashboard') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
            <?php $admin_logo_img = Voyager::setting('site.logo', ''); ?>
            @if($admin_logo_img == '')
                <img src="{{ voyager_asset('images/logo-icon-light.png') }}" alt="Logo Icon" style="width:100%;">
            @else
                <img src="{{ Voyager::image($admin_logo_img) }}" alt="Logo Icon" style="width:100%;">
            @endif

        </span>
              {{-- <span class="app-brand-text demo menu-text fw-bold">{{ setting('site.title') }}</span> --}}
            </a>

            <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto nav-itemnav-link">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a>
          </div>

          <div class="menu-inner-shadow"></div>

          
          

            @php
                $menu = menu('admin', '_json');
            @endphp
            @foreach ( $menu as $item )
                @if ( count( $item->children ) == 0 )
                    <li class="menu-item">
                        <a href="@if ( !is_null($item->route ) ) {{ route($item->route) }} @else {{ $item->url }} @endif" class="menu-link" target="{{ $item->target }}">
                        <i class="menu-icon ti ti-{!! $item->icon_class !!}"></i>
                        <div data-i18n="Email">{{ $item->title }}</div>
                        </a>
                    </li>
                @else
                <li class="menu-item">
                    
                    
                    <a href="javascript:void(0);" class="menu-link menu-toggle">
                        <i class="menu-icon ti ti-{!! $item->icon_class !!}"></i>
                        <div data-i18n="{{ $item->title }}">{{ $item->title }}</div>
                        {{-- <div class="badge bg-primary rounded-pill ms-auto">5</div> --}}
                    </a>

                    <ul class="menu-sub">

                        @foreach ( $item->children  as  $itemChilds )

                            @if ( count( $itemChilds->children ) == 0 )
                                <li class="menu-item">
                                    <a href="{{ route($itemChilds->route) }}" class="menu-link">
                                    <i class="menu-icon ti ti-{!! $itemChilds->icon_class !!}"></i>
                                    <div data-i18n="{{ $itemChilds->title }}">{{ $itemChilds->title }}</div>
                                    </a>
                                </li>
                            @else

                            {{-- <li class="menu-item">
                                <a href="javascript:void(0);" class="menu-link menu-toggle">
                                <i class="menu-icon ti ti-{!! $itemChilds->icon_class !!}"></i>
                                <div data-i18n="{{ $itemChilds->title }}">{{ $itemChilds->title }}</div>
                                </a>

                                <ul class="menu-sub">
                                @foreach ( $itemChilds->children as $smallChild )
                                    <li class="menu-item">
                                    <a href="@if ( !is_null($smallChild->route ) ) {{ route($smallChild->route) }} @endif" target="{{ $smallChild->target }}" class="menu-link">
                                        <div data-i18n="Analytics">{{ $smallChild->title }}</div>
                                    </a>
                                    </li>
                                @endforeach
                                </ul>

                            </li> --}}

                            @endif

                        @endforeach
                        
                    </ul>

                    
                </li>
                @endif
            @endforeach

          

</aside>
<!-- Add jQuery CDN if it's not already included -->
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  $(document).ready(function() {
    // Click on the menu-toggle to toggle submenus
    $('.menu-link.menu-toggle').on('click', function(e) {
      e.preventDefault(); // Prevent default link action

      var $submenu = $(this).next('.menu-sub'); // Get the submenu (next sibling)

      // Toggle the submenu visibility
      $submenu.slideToggle(); // Use slideToggle for a smooth transition
    });

        $('.nav-item.nav-link').on('click', function (e) {
            e.preventDefault(); // Prevent the default action (e.g., page navigation)
            $('.layout-menu').toggle(); // Toggles the visibility of the <aside> element
        });

  });
</script>

