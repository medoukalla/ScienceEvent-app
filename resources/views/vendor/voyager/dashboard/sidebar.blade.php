<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme" style=" position: fixed; height: 100%; " >

          
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

            <!-- <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto nav-itemnav-link">
              <i class="ti menu-toggle-icon d-none d-xl-block align-middle"></i>
              <i class="ti ti-x d-block d-xl-none ti-md align-middle"></i>
            </a> -->
          </div>

          <div class="menu-inner-shadow"></div>

          
          

            @php
                $menu = menu('admin', '_json');
            @endphp
            @foreach ($menu as $item)
                @php
                    // Determine if the current item or its children are active
                    $isActiveMenu = Route::is(str_replace('.index', '.*', $item->route)) || collect($item->children)->contains(function ($child) {
                        return Route::is(str_replace('.index', '.*', $child->route));
                    });

                @endphp

                @if (count($item->children) == 0)
                    @php
                        $item_slug =  explode('.', $item->route)[1];
                        $current_slug = explode('.', \Request::route()->getName())[1];
                    @endphp
                    <li class="menu-item {{ $isActiveMenu ? 'active' : '' }} @if ( $item_slug == $current_slug) active @endif" >
                        <a href="@if (!is_null($item->route)) {{ route($item->route) }} @else {{ $item->url }} @endif" 
                        class="menu-link" target="{{ $item->target }}">
                            <i class="menu-icon ti ti-{!! $item->icon_class !!}"></i>
                            <div data-i18n="{{ $item->title }}">{{ $item->title }}</div>
                        </a>
                    </li>
                @else
                    <li class="menu-item {{ $isActiveMenu ? 'open' : '' }}">
                        <a href="javascript:void(0);" class="menu-link menu-toggle">
                            <i class="menu-icon ti ti-{!! $item->icon_class !!}"></i>
                            <div data-i18n="{{ $item->title }}">{{ $item->title }}</div>
                        </a>
                        <ul class="menu-sub" style="display: {{ $isActiveMenu ? 'block' : 'none' }};">
                            @foreach ($item->children as $child)
                                @php
                                    $isChildActive = Route::is($child->route);
                                    $item_slug =  explode('.', $child->route)[1];
                                    $current_slug = explode('.', \Request::route()->getName())[1];
                                @endphp
                                <li class="menu-item {{ $isChildActive ? 'active' : '' }} @if ( $item_slug == $current_slug) active @endif">
                                    <a href="{{ route($child->route) }}" class="menu-link">
                                        <i class="menu-icon ti ti-{!! $child->icon_class !!}"></i>
                                        <div data-i18n="{{ $child->title }}">{{ $child->title }}</div>
                                    </a>
                                </li>
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

