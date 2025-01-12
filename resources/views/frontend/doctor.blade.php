@extends('template')

@section('content')


<div class="profile-bio section-padding-bottom-130">
    <div class="w-layout-blockcontainer container w-container">
        <div class="class-details-content-and-instructor-wrap">
            <div class="class-details-content-wrap">
                <div data-w-id="316ed8d2-66d5-d21f-f414-3781cc3a9386"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1"
                    class="class-details-summary-wrap w-richtext">
                    <h3>{{ $doctor->name }}</h3>
                    
                    @php
                        $lines = explode("\n", $doctor->bio);
                    @endphp

                    @foreach ($lines as $line)
                        @php $line = trim($line); @endphp

                        @if (str_starts_with($line, '-'))
                            <ul style="margin-bottom: 0px !important;">
                                <li style="margin-bottom: 0px !important;">{{ ltrim($line, '-') }}</li>
                            </ul>
                        @elseif (str_starts_with($line, '*'))
                            <p>{{ ltrim($line, '*') }}</p>
                        @endif
                    @endforeach

                    <div class="more-info-by-title">
                        Formation par : <span>{{ $doctor->name }}</span>
                    </div>
                    <div class="more-info-flex">
                        @foreach ( $doctor->formations as $formation) 
                            <div class="more-info-wrap">
                                <div class="more-info-img">
                                    @php
                                        $videos = json_decode($formation->video);
                                    @endphp
                                    
                                    @if (!empty($videos) && isset($videos[0]->download_link))
                                        <a href="{{ route('frontend.formation', $formation->id) }}">
                                            <video style="width: 100%; height: auto;" controlslist="nodownload nofullscreen noplaybackrate" disablepictureinpicture autoplay muted playsinline>
                                                <source src="{{ asset('storage/' . $videos[0]->download_link) }}" type="video/mp4">
                                                Votre navigateur ne prend pas en charge la balise vidéo.
                                            </video>
                                        </a>
                                    @else
                                        <p>Aucune vidéo disponible.</p>
                                    @endif
                                </div>
                                <div class="more-info-title">
                                    <a href="{{ route('frontend.formation', $formation->id) }}">
                                        <span>{{ $formation->category->name }}</span>
                                        <p>{{ $formation->title }}</p>
                                    </a>
                                </div>
                                <div class="more-info-date">
                                    <a href="{{ route('frontend.formation', $formation->id) }}">
                                        <p>
                                            {{ $formation->brief }} <span>à : {{ \Carbon\Carbon::parse($formation->created_at)->format('d F Y') }}</span>
                                        </p>
                                    </a>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="class-details-instructor-wrap">
                <div data-w-id="6ae58209-ab24-01db-849c-b47225314b04"
                    style="-webkit-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 70px, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);opacity:1"
                    class="class-details-instructor-inner">
                    <div class="class-details-instructor-image-wrap"><img
                            src="{{ asset('storage/'.$doctor->avatar) }}"
                            loading="lazy" alt="Instructor Image" class="class-details-instructor-image" />
                    </div>
                    <div class="class-details-instructor-content-wrap">
                        <div class="class-details-instructor-name">{{ $doctor->name }}</div>
                        <div class="class-details-instruction-designation">{{ $doctor->speciality }}</div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection