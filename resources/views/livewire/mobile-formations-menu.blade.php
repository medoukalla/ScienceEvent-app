<nav class="nav-dropdown-list w-dropdown-list nav-mobile-list" style="border: none;max-height: 300px;overflow: scroll;" wire:ignore.self>
    <div class="nav-dropdown-link-wrapper" style=" border: 1px solid var(--orange-clr); border-radius: 10px; ">
        @foreach ($categories as $category)
            <a href="{{ route('frontend.formations.category', [$category, $category->name]) }}" data-w-id="b209fa0f-e639-eccc-0896-595290f492c8" class="nav-dropdown-link-block w-inline-block">
                <div class="nav-dropdown-link-text">
                    <i class="ti ti-{{ $category->icon }}"></i>
                    <span>{{ $category->name }}</span>
                </div>
            </a>
        @endforeach
    </div>
</nav>