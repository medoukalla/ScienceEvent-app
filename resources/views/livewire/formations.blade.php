<section class="classes-section secondary-bg-color section-padding-top-125 section-padding-bottom-130">
      <div class="w-layout-blockcontainer container w-container">
            <div data-w-id="5fc3460f-5850-3652-132a-37b925fb21e3"
              style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
              class="section-title-block center mb-80">
              <div class="section-subtitle primary-color">Informations</div>
              <h2 class="section-title">Découvrez nos informations</h2>
            </div>
            <div class="collection-grid-wrapper-classes w-dyn-list">
              <div role="list" class="collection-grid-classes w-dyn-items">
                @foreach ( $formations as $formation )
                    <div role="listitem" class="collection-grid-item-classes w-dyn-item">
                    <div class="information-wrap">
                        <div class="i-img-wrap">
                            <a href="{{ route('frontend.formation',$formation->id) }}">
                                <img src="{{ asset('storage/'.$formation->cover) }}" alt="{{ $formation->title }}">
                            </a>
                        </div>
                        <div class="cat-tagge">
                        <a href="{{ route('frontend.formation',$formation->id) }}">{{ $formation->category->name }}</a>
                        </div>
                        <div class="i-title">
                            <a href="{{ route('frontend.formation',$formation->id) }}">{{ $formation->title }}</a>
                        </div>
                        <div class="i-planning">
                        <div class="i-date">
                            <img src="{{ asset('assets/svg/i-date.svg') }}" alt="information date">
                            <span>{{ $formation->date }}</span>
                        </div>
                        <div class="i-profile">
                            <img src="{{ asset('assets/svg/user.svg') }}" alt="information date">
                            <span>{{ $formation->doctor->name }}</span>
                        </div>
                        </div>
                        <a href="{{ route('frontend.formation',$formation->id) }}">
                            <div class="primary-btn">
                                Voir plus
                            </div>
                        </a>
                    </div>
                    </div>
                @endforeach
                
              </div>
            </div>
          </div>
      </div>
</section>