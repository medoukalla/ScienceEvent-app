<div class="all-formations">
    <div class="w-layout-blockcontainer container w-container">
        <div class="formations-wrapper">
            <div class="formations-filter">
                <div class="close-bar">
                    <button>
                        <img src="{{ asset('assets/svg/close.svg') }}" alt="">
                    </button>
                </div>
                <div class="formations-filter-wrapper" >
                    <div class="filter job">
                        <div class="filter-drop">
                            <span>Filter</span>
                            <span wire:click="resetFilters">Réinitialiser</span>
                        </div>
                        <div class="filter-options">
                            <div class="filter-type" onclick="$('#categoriesList').toggle(); $('#doctorsList').hide(); $('#typesList').hide();">
                                <span>Specialité</span>
                                <img src="{{ asset('assets/svg/path-arrow.svg') }}" alt="">
                            </div>
                            <ul style="display: none;" id="categoriesList" wire:ignore.self>
                                @foreach ( $categories as $category )       
                                    <li wire:click="setCategory({{ $category->id }})">
                                        <input type="radio" name="category" value="{{ $category->id }}" @if ( $selectedCategory == $category->id ) checked @endif >
                                        <span>{{ $category->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="filter job">
                        <div class="filter-options">
                            <div class="filter-type" onclick="$('#doctorsList').toggle(); $('#categoriesList').hide(); $('#typesList').hide();" >
                                <span>Médecins</span>
                                <img src="{{ asset('assets/svg/path-arrow.svg') }}" alt="">
                            </div>
                            <ul style="display: none;" id="doctorsList" wire:ignore.self>
                                @foreach ( $doctors as $doctor )
                                    <li wire:click="setDoctor({{ $doctor->id }})">
                                        <input type="radio" name="doctor" value="{{ $doctor->id }}" @if ( $selectedDoctor == $doctor->id ) checked @endif>
                                        <span>{{ $doctor->name }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                    <div class="filter job">
                        <div class="filter-options">
                            <div class="filter-type"  onclick="$('#typesList').toggle(); $('#categoriesList').hide(); $('#doctorsList').hide();" >
                                <span>Type de formation</span>
                                <img src="{{ asset('assets/svg/path-arrow.svg') }}" alt="">
                            </div>
                            <ul style="display: none;" id="typesList" wire:ignore.self>
                                @foreach ( ['1' => 'E-learning', '2' => 'Présentiel', '3' => 'Classe Virtuelle'] as $key => $value )
                                    <li wire:click="setType({{ $key }})">
                                        <input type="radio" name="type" value="{{ $key }}" @if ( $selectedType == $key ) checked @endif>
                                        <span>{{ $value }}</span>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mobile-filter-btn">
                <img src="{{ asset('assets/svg/filter.svg') }}" alt="Filter Icon">
                <span>Filter</span>
            </div>
            <div class="formations">
                <div class="collection-grid-wrapper-classes w-dyn-list">
                        @php
                            if ($selectedCategory || $selectedDoctor || $selectedType) {
                                $formations = $formations->filter(function ($formation) use ($selectedCategory, $selectedDoctor, $selectedType) {
                                    $result = true;

                                    if ($selectedDoctor) {
                                        $result = $result && $formation->doctor_id == $selectedDoctor;
                                    }

                                    if ($selectedType) {
                                        $result = $result && $formation->type == $selectedType;
                                    }

                                    if ($selectedCategory) {
                                        // Check if the formation has the selected category
                                        $hasCategory = $formation->categories->contains('id', $selectedCategory);
                                        $result = $result && $hasCategory;
                                    }

                                    return $result;
                                });
                            }
                        @endphp

                        @if ( $formations->count() < 1)
                            {{-- Alert when no tutorial information yet --}}
                            <div role="list" class="collection-grid-classes w-dyn-items" style=" grid: none !important; ">
                                <div class="no-infos-alert">
                                    <p>
                                        Ce tutoriel est en cours de préparation. Revenez bientôt.
                                    </p>
                                </div>
                            </div>
                        @else
                            <div role="list" class="collection-grid-classes w-dyn-items">
                                @foreach ( $formations as $formation )
                                    <div role="listitem" class="collection-grid-item-classes w-dyn-item">
                                        <div class="information-wrap">
                                            <a href="{{ route('frontend.formation', $formation->id) }}">

                                                <div class="i-img-wrap">
                                                    @php
                                                        $videos = json_decode($formation->video);
                                                    @endphp
                                                    
                                                    @if (!empty($videos) && isset($videos[0]->download_link))
                                                        <video style="width: 100%; height: auto;" controlslist="nodownload nofullscreen noplaybackrate" disablepictureinpicture loop autoplay muted playsinline>
                                                            <source src="{{ asset('storage/' . $videos[0]->download_link) }}" type="video/mp4">
                                                            Votre navigateur ne prend pas en charge la balise vidéo.
                                                        </video>
                                                    @else
                                                            <img src="" alt="" style="width: 100%; height: auto;">
                                                    @endif
                                                </div>
                                                <div class="cat-tagge">
                                                    @foreach ($formation->categories as $category)
                                                        <span class="category-tag">{{ $category->name }}</span> @if (!$loop->last), @endif
                                                    @endforeach
                                                </div>
                                                <div class="i-title">
                                                    {{ $formation->title }}
                                                </div>
                                                <div class="i-planning">
                                                    <div class="i-date">
                                                        <img src="{{ asset('assets/svg/i-date.svg') }}" alt="information date">
                                                        <span>{{ $formation->date_details }}</span>
                                                    </div>
                                                    <div class="i-profile">
                                                        <img src="{{ asset('assets/svg/user.svg') }}" alt="information date">
                                                        <span>{{ $formation->doctor->name }}</span>
                                                    </div>
                                                </div>
                                            </a>

                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        @endif
                    
                </div>
            </div>
        </div>
    </div>
</div>