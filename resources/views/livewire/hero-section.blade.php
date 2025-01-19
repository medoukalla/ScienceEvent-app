<nav class="nav-dropdown-list w-dropdown-list nav-desktop" wire:ignore.self>
    <div class="nav-dropdown-link-wrapper mega-menu">
        <div class="nav-y">

            @foreach ($categories as $category)
            <a wire:click="changeCategory({{ $category->id }})" href="javascript:void(0)" data-w-id="b209fa0f-e639-eccc-0896-595290f492c8"
                class="nav-dropdown-link-block w-inline-block">
                <div class="nav-dropdown-shape"></div>
                <div class="nav-dropdown-link-text">
                    <i class="ti ti-{{ $category->icon }}"></i>
                    <span>{{ $category->name }}</span>
                </div>
            </a>
            @endforeach


        </div>
        <div class="nav-content">
            <div class="top-mega">
                <div class="a-la-une">
                    <i class="ti ti-{{ $selectedCategory->icon }}"></i>
                    {{ $selectedCategory->name }}
                </div>
            </div>
            <div class="nav-content-wrapper">
                <div class="menu-result">
                    <!-- Main result -->
                    @foreach ( $selectedCategory->formations as $formation )
                    <div class="result-img-wrapper">
                        <a href="{{ route('frontend.formation', $formation->id) }}">
                            <img src="{{ asset('storage/'.$formation->cover) }}" width="92px" height="92px" alt="Result image">
                        </a>
                        <div class="reslut-content">
                            <a href="{{ route('frontend.formation', $formation->id) }}">
                                <div class="result-title">{{ $formation->title }}</div>
                            </a>
                            <div class="result-duration">
                                <div class="formation-content">
                                    <span>{{ $formation->doctor->name }}</span>
                                </div>
                            </div>
                            <div class="result-tags">
                                <div class="r-tag">
                                    @switch($formation->type)
                                    @case(1)
                                    E-learning
                                    @break
                                    @case(2)
                                    Présentiel
                                    @break
                                    @case(3)
                                    Classe Virtuelle
                                    @break
                                    @endswitch
                                </div>
                                <div class="r-tag">{{ \Carbon\Carbon::parse($formation->date)->format('d/m/Y') }}</div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                    <!-- Button more results -->

                    <a href="{{ route('frontend.formations.category', [$selectedCategory,$selectedCategory->name]) }}" class="more-results">
                        <div class="more-btn">
                            Voir tous les formations
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
    <div class="hr"></div>
    <div>
        <div class="similar-wrapper-title">
            Nouvelles formations
        </div>
        <div class="similar-result-wrapper">
            @foreach ( $lastFormations as $lastFormation )
            <div class="similar-result">
                <div class="s-r-img">
                    <a href="{{ route('frontend.formation', $lastFormation->id) }}">
                        <img src="{{ asset('storage/'.$lastFormation->cover) }}" alt="Similar result">
                    </a>
                </div>
                <div class="s-r-content">
                    <div class="s-r-title">
                        <a href="{{ route('frontend.formation', $lastFormation->id) }}">
                            {{ $lastFormation->title }}
                        </a>
                    </div>
                    <div class="s-r-duration">
                        <div class="duration tag">
                            {{ $lastFormation->doctor->name }}
                        </div>
                    </div>
                    <div class="s-r-tags">
                        <div class="r-tag">
                            @switch($lastFormation->type)
                            @case(1)
                            E-learning
                            @break
                            @case(2)
                            Présentiel
                            @break
                            @case(3)
                            Classe Virtuelle
                            @break
                            @endswitch
                        </div>
                        <div class="r-tag">
                            {{ \Carbon\Carbon::parse($lastFormation->date)->format('d/m/Y') }}
                        </div>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </div>
</nav>