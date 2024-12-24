@extends('template')

@section('content')

<section class="classes-details-section">
    <div class="w-layout-blockcontainer container w-container">
        <div class="classes-details-wrap">
            <!-- Information video -->
            <div class="formation-main-video">
                @php
                $videos = json_decode($formation->video);
                @endphp

                @if (!empty($videos) && isset($videos[0]->download_link))
                <video controls crossorigin playsinline poster="{{ asset('storage/' . $formation->cover) }}">
                    <source src="{{ asset('storage/' . $videos[0]->download_link) }}" type="video/mp4" size="576">
                </video>
                @else
                <p>Aucune vidéo disponible.</p>
                @endif
            </div>
            <div class="class-details-content-and-instructor-wrap">
                <!-- Formation / Comments / Resources -->
                <div class="class-details-content-wrap">
                    <div class="formation-tab">
                        <div class="f-tab formation" id="chat-button">Chat</div>
                        <div class="f-tab comments selected" id="comments-button">Commentaires</div>
                        <div class="f-tab resources" id="resources-button">Ressources</div>
                    </div>


                    <!-- Chat -->
                    <div class="formation-component-wrapper" id="chat-section" style="display: none;">
                        <div class="comment-section">

                            <div class="comments-counts">

                                @livewire('formation-chat',['formationId' => $formation->id])

                            </div>
                        </div>
                    </div>

                    <!-- Commenters -->
                    <div class="formation-component-wrapper" id="comments-section">
                        <div class="comment-section">
                            <!-- Comment -->
                            <div class="comments-counts">
                                25 Commentairs ...
                            </div>
                            <div class="comment">
                                <div class="comment-header">
                                    <img src="{{ asset('assets/images/comment-image-5.png') }}" alt="User 1"
                                        class="comment-avatar">
                                    <span class="comment-name">Sophia .B</span>
                                    <div class="you-tage">Vous</div>
                                </div>
                                <div class="comment-content">
                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Non qui excepturi
                                    fuga cumque ipsa dolores vitae quaerat officia. Laboriosam, labore.
                                </div>
                                <div class="comment-footer">
                                    <div class="like-inline">
                                        <span class="like-icon" data-liked="true">❤</span>
                                        <span class="likes" data-increase="true">2 likes</span>
                                        <span class="reply">Répondre</span>
                                    </div>
                                    <div class="comment-date">
                                        ill ya 1 mois
                                    </div>
                                </div>
                            </div>
                            <!-- Reply -->
                            <div class="reply">
                                <div class="top-reply-contnet">répondre les commentaires ...</div>
                                <div class="comment-header">
                                    <img src="{{ asset('assets/images/reply-image.png') }}" alt="User 2"
                                        class="comment-avatar">
                                    <span class="comment-name">Ella .B</span>
                                    <div class="you-tage author">Author</div>
                                </div>
                                <div class="comment-content">
                                    This is a reply to the comment.
                                </div>
                                <div class="comment-footer">
                                    <div class="like-inline">
                                        <span class="like-icon" data-liked="true">❤</span>
                                        <span class="likes" data-increase="true">10 likes</span>
                                        <span class="comment-reply">Répondre</span>
                                    </div>
                                    <div class="comment-date">
                                        ill ya 1 mois
                                    </div>
                                </div>
                            </div>
                            <!-- Reply -->
                            <div class="reply">
                                <div class="comment-header">
                                    <img src="{{ asset('assets/images/comment-image-5.png') }}" alt="User 2"
                                        class="comment-avatar">
                                    <span class="comment-name">Sophia .B</span>
                                    <div class="you-tage">Vous</div>
                                </div>
                                <div class="comment-content">
                                    This is a reply to the comment.
                                </div>
                                <div class="comment-footer">
                                    <div class="like-inline">
                                        <span class="like-icon" data-liked="false">❤</span>
                                        <span class="likes" data-increase="false">0 likes</span>
                                        <span class="reply">Répondre</span>
                                    </div>
                                    <div class="comment-date">
                                        ill ya 1 mois
                                    </div>
                                </div>
                            </div>
                        </div>


                        <!-- Add new comment input  -->
                        <input style="width:300px; height:50px; border-radius: 10px; outline: none; border:none;" type="text" name="comment" placeholder="Ajouter un commentaire..." class="comment-input">
                        <button style="height: 50px;" type="button" class="comment-button">Envoyer</button>


                    </div>

                    <!-- Resources -->
                    <div class="formation-component-wrapper" id="resources-section" style="display: none;">
                        <div class="comment-section">

                            <div class="comments-counts">

                                <section class="resources-section section-padding">
                                    <div class="container">
                                        <div class="resources-header">
                                            <h3 class="section-title">Ressources du cours</h3>
                                            <p class="section-subtitle">Accédez aux ressources disponibles pour ce cours</p>
                                        </div>

                                        <!-- Resources List -->
                                        <div class="resources-list">
                                            <!-- Resource: PDF -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-file-text"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Document PDF - Introduction au cours</h4>
                                                    <p class="resource-type">Type : PDF</p>
                                                </div>
                                                <a href="/path-to-resource.pdf" download class="resource-download-btn">
                                                    Télécharger
                                                </a>
                                            </div>

                                            <!-- Resource: Image -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-photo"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Image - Diagramme de processus</h4>
                                                    <p class="resource-type">Type : Image</p>
                                                </div>
                                                <a href="/path-to-image.jpg" download class="resource-download-btn">
                                                    Télécharger
                                                </a>
                                            </div>

                                            <!-- Resource: Word -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-file"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Document Word - Plan du cours</h4>
                                                    <p class="resource-type">Type : Document Word</p>
                                                </div>
                                                <a href="/path-to-document.docx" download class="resource-download-btn">
                                                    Télécharger
                                                </a>
                                            </div>

                                            <!-- Resource: Excel -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-chart-bar"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Feuille Excel - Données du cours</h4>
                                                    <p class="resource-type">Type : Feuille Excel</p>
                                                </div>
                                                <a href="/path-to-excel.xlsx" download class="resource-download-btn">
                                                    Télécharger
                                                </a>
                                            </div>

                                            <!-- Resource: Video -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-video"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Vidéo - Introduction au chapitre 1</h4>
                                                    <p class="resource-type">Type : Vidéo</p>
                                                </div>
                                                <a href="/path-to-video.mp4" download class="resource-download-btn">
                                                    Télécharger
                                                </a>
                                            </div>

                                            <!-- Resource: Link -->
                                            <div class="resource-item">
                                                <div class="resource-icon">
                                                    <i class="ti ti-link"></i>
                                                </div>
                                                <div class="resource-details">
                                                    <h4 class="resource-title">Lien - Article recommandé</h4>
                                                    <p class="resource-type">Type : Lien externe</p>
                                                </div>
                                                <a href="https://example.com" target="_blank" class="resource-download-btn">
                                                    Accéder
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </section>


                            </div>
                        </div>
                    </div>


                </div>

            </div>
        </div>
    </div>
</section>


<section class="classes-section secondary-bg-color section-padding-top-125 section-padding-bottom-130">
    <div class="w-layout-blockcontainer container w-container">
        <div data-w-id="bfedbb28-c412-a79e-dad2-2b4c2923ba46"
            style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
            class="section-title-block center mb-80">
            <div class="section-subtitle primary-color">Classes</div>
            <div class="class-by-team-name-wrap">
                <div class="class-by-team-name-label">Classes by</div>
                <h2 class="class-by-team-name">Marvin Patel</h2>
            </div>
        </div>
        <div class="collection-grid-wrapper-classes w-dyn-list">
            <div role="list" class="collection-grid-classes w-dyn-items">
                <div role="listitem" class="collection-grid-item-classes w-dyn-item">
                    <div data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbe98" class="single-class-grid-card">
                        <div class="class-grid-image-wrap"><a href="/classes/blissful-balance-yoga"
                                class="class-grid-image-link-block w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668cbbef87ec06edef1b2b79_thumbnail-grid-6.png"
                                    loading="lazy"
                                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="Class Grid Thumbnail Image" class="class-grid-thumbnail-image" />
                                <div style="opacity:0.5;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    class="on-scroll-overly-top-to-bottom"></div>
                            </a></div>
                        <div class="class-grid-content-wrap">
                            <div class="class-grid-instructor-image-wrap"><a
                                    href="/classes/blissful-balance-yoga"
                                    class="class-grid-instructor-image-link-block w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668ba420a086fd4316d9b9b0_instructor-thumbnail-2.png"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Class Grid Instructor Image"
                                        class="class-grid-instructor-image" /></a></div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-day">Sat-Tues</div><a
                                style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                href="/classes/blissful-balance-yoga"
                                class="class-grid-title-link-block w-inline-block">
                                <h3 class="class-grid-title">Blissful balance yoga</h3>
                            </a>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-feature-list-wrap">
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 25 25"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 22.5C18.0228 22.5 22.5 18.0228 22.5 12.5C22.5 6.97715 18.0228 2.5 12.5 2.5C6.97715 2.5 2.5 6.97715 2.5 12.5C2.5 18.0228 6.97715 22.5 12.5 22.5Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path d="M12.5 8.5V12.5L14.5 14.5" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">12.00-12.50 P.M.</div>
                                </div>
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6665 9.33331V6.66665C14.6665 4.15249 14.6665 2.89541 13.8854 2.11436C13.1044 1.33331 11.8473 1.33331 9.33317 1.33331H7.99984C5.48568 1.33331 4.2286 1.33331 3.44755 2.11436C2.6665 2.89541 2.6665 4.15249 2.6665 6.66665V9.33331C2.6665 11.8474 2.6665 13.1046 3.44755 13.8856C4.2286 14.6666 5.48568 14.6666 7.99984 14.6666H9.33317C11.8473 14.6666 13.1044 14.6666 13.8854 13.8856C14.6665 13.1046 14.6665 11.8474 14.6665 9.33331Z"
                                                stroke="currentColor" />
                                            <path d="M3.3335 4H1.3335M3.3335 8H1.3335M3.3335 12H1.3335"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.6667 4.66669H9M10.3333 7.33335H9" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 14.6666V1.33331" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">24 Lessons</div>
                                </div>
                            </div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-price-and-button-wrap">
                                <div class="class-grid-price">$270.00</div>
                                <div class="class-grid-button-wrap"><a
                                        data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbead"
                                        href="/classes/blissful-balance-yoga"
                                        class="button-primary button-small w-inline-block">
                                        <div class="button-primary-text button-font-size-16">Learn More</div>
                                        <div style="width:100%;height:100%" class="button-primary-hover"></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="collection-grid-item-classes w-dyn-item">
                    <div data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbe98" class="single-class-grid-card">
                        <div class="class-grid-image-wrap"><a href="/classes/peaceful-warrior-yoga"
                                class="class-grid-image-link-block w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668cbb2bcda7c5bf8bf3abf6_thumbnail-grid-5.png"
                                    loading="lazy"
                                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="Class Grid Thumbnail Image" class="class-grid-thumbnail-image" />
                                <div style="opacity:0.5;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    class="on-scroll-overly-top-to-bottom"></div>
                            </a></div>
                        <div class="class-grid-content-wrap">
                            <div class="class-grid-instructor-image-wrap"><a
                                    href="/classes/peaceful-warrior-yoga"
                                    class="class-grid-instructor-image-link-block w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668ba4cb973ca8c26c6502d0_instructor-thumbnail-6.png"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Class Grid Instructor Image"
                                        class="class-grid-instructor-image" /></a></div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-day">Sun-Wed</div><a
                                style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                href="/classes/peaceful-warrior-yoga"
                                class="class-grid-title-link-block w-inline-block">
                                <h3 class="class-grid-title">Peaceful warrior yoga</h3>
                            </a>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-feature-list-wrap">
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 25 25"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 22.5C18.0228 22.5 22.5 18.0228 22.5 12.5C22.5 6.97715 18.0228 2.5 12.5 2.5C6.97715 2.5 2.5 6.97715 2.5 12.5C2.5 18.0228 6.97715 22.5 12.5 22.5Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path d="M12.5 8.5V12.5L14.5 14.5" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">10.00-11.50 A.M.</div>
                                </div>
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6665 9.33331V6.66665C14.6665 4.15249 14.6665 2.89541 13.8854 2.11436C13.1044 1.33331 11.8473 1.33331 9.33317 1.33331H7.99984C5.48568 1.33331 4.2286 1.33331 3.44755 2.11436C2.6665 2.89541 2.6665 4.15249 2.6665 6.66665V9.33331C2.6665 11.8474 2.6665 13.1046 3.44755 13.8856C4.2286 14.6666 5.48568 14.6666 7.99984 14.6666H9.33317C11.8473 14.6666 13.1044 14.6666 13.8854 13.8856C14.6665 13.1046 14.6665 11.8474 14.6665 9.33331Z"
                                                stroke="currentColor" />
                                            <path d="M3.3335 4H1.3335M3.3335 8H1.3335M3.3335 12H1.3335"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.6667 4.66669H9M10.3333 7.33335H9" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 14.6666V1.33331" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">10 Lessons</div>
                                </div>
                            </div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-price-and-button-wrap">
                                <div class="class-grid-price">$250.00</div>
                                <div class="class-grid-button-wrap"><a
                                        data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbead"
                                        href="/classes/peaceful-warrior-yoga"
                                        class="button-primary button-small w-inline-block">
                                        <div class="button-primary-text button-font-size-16">Learn More</div>
                                        <div style="width:100%;height:100%" class="button-primary-hover"></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div role="listitem" class="collection-grid-item-classes w-dyn-item">
                    <div data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbe98" class="single-class-grid-card">
                        <div class="class-grid-image-wrap"><a href="/classes/gentle-stretch-yoga"
                                class="class-grid-image-link-block w-inline-block"><img
                                    src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668cba2efddc63d8647163cb_thumbnail-grid-4.png"
                                    loading="lazy"
                                    style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    alt="Class Grid Thumbnail Image" class="class-grid-thumbnail-image" />
                                <div style="opacity:0.5;-webkit-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1, 1, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                    class="on-scroll-overly-top-to-bottom"></div>
                            </a></div>
                        <div class="class-grid-content-wrap">
                            <div class="class-grid-instructor-image-wrap"><a href="/classes/gentle-stretch-yoga"
                                    class="class-grid-instructor-image-link-block w-inline-block"><img
                                        src="https://cdn.prod.website-files.com/6684dfa44d6d74cd48e33a4b/668ba478bb2ce262e1839a9b_instructor-thumbnail-4.png"
                                        loading="lazy"
                                        style="-webkit-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 0, 0) scale3d(1.2, 1.2, 1) rotateX(0) rotateY(0) rotateZ(0) skew(0, 0)"
                                        alt="Class Grid Instructor Image"
                                        class="class-grid-instructor-image" /></a></div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-day">Mon-Fri</div><a
                                style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                href="/classes/gentle-stretch-yoga"
                                class="class-grid-title-link-block w-inline-block">
                                <h3 class="class-grid-title">Gentle stretch yoga</h3>
                            </a>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-feature-list-wrap">
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 25 25"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M12.5 22.5C18.0228 22.5 22.5 18.0228 22.5 12.5C22.5 6.97715 18.0228 2.5 12.5 2.5C6.97715 2.5 2.5 6.97715 2.5 12.5C2.5 18.0228 6.97715 22.5 12.5 22.5Z"
                                                stroke="currentColor" stroke-width="1.5" />
                                            <path d="M12.5 8.5V12.5L14.5 14.5" stroke="currentColor"
                                                stroke-width="1.5" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">12.00-12.50 P.M. </div>
                                </div>
                                <div class="single-class-grid-feature-list-wrap">
                                    <div class="class-grid-feature-list-icon w-embed"><svg viewBox="0 0 16 16"
                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                            <path
                                                d="M14.6665 9.33331V6.66665C14.6665 4.15249 14.6665 2.89541 13.8854 2.11436C13.1044 1.33331 11.8473 1.33331 9.33317 1.33331H7.99984C5.48568 1.33331 4.2286 1.33331 3.44755 2.11436C2.6665 2.89541 2.6665 4.15249 2.6665 6.66665V9.33331C2.6665 11.8474 2.6665 13.1046 3.44755 13.8856C4.2286 14.6666 5.48568 14.6666 7.99984 14.6666H9.33317C11.8473 14.6666 13.1044 14.6666 13.8854 13.8856C14.6665 13.1046 14.6665 11.8474 14.6665 9.33331Z"
                                                stroke="currentColor" />
                                            <path d="M3.3335 4H1.3335M3.3335 8H1.3335M3.3335 12H1.3335"
                                                stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" />
                                            <path d="M11.6667 4.66669H9M10.3333 7.33335H9" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                            <path d="M6 14.6666V1.33331" stroke="currentColor"
                                                stroke-linecap="round" stroke-linejoin="round" />
                                        </svg></div>
                                    <div class="class-grid-feature-list-content">15 Lessons</div>
                                </div>
                            </div>
                            <div style="-webkit-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-moz-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);-ms-transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform:translate3d(0, 50%, -20px) scale3d(1, 1, 1) rotateX(90deg) rotateY(0) rotateZ(0) skew(0, 0);transform-style:preserve-3d;opacity:0"
                                class="class-grid-price-and-button-wrap">
                                <div class="class-grid-price">$230.00</div>
                                <div class="class-grid-button-wrap"><a
                                        data-w-id="73d73a32-2a0a-aa11-a724-d9aadc0fbead"
                                        href="/classes/gentle-stretch-yoga"
                                        class="button-primary button-small w-inline-block">
                                        <div class="button-primary-text button-font-size-16">Learn More</div>
                                        <div style="width:100%;height:100%" class="button-primary-hover"></div>
                                    </a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<script>
    $(document).ready(function() {
        $("#chat-button").click(function() {
            $("#chat-section").show();
            $("#comments-section").hide();
            $("#resources-section").hide();
            $(".f-tab").removeClass("selected");
            $("#chat-button").addClass("selected");
        });
        $("#comments-button").click(function() {
            $("#chat-section").hide();
            $("#comments-section").show();
            $("#resources-section").hide();
            $(".f-tab").removeClass("selected");
            $("#comments-button").addClass("selected");
        });
        $("#resources-button").click(function() {
            $("#chat-section").hide();
            $("#comments-section").hide();
            $("#resources-section").show();
            $(".f-tab").removeClass("selected");
            $("#resources-button").addClass("selected");
        });
    });
</script>

<style>
    /* General Chat Section Styles */
    .chat-section {
        background-color: #ffffff;
        border: 1px solid #e6e6e6;
        border-radius: 12px;
        padding: 20px;
        margin-top: 40px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
    }

    .chat-header {
        margin-bottom: 20px;
        text-align: center;
    }

    .chat-header .section-title {
        font-size: 20px;
        font-weight: 600;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .chat-header .section-subtitle {
        font-size: 14px;
        color: #777;
    }

    /* Chat Messages Container */
    .chat-messages {
        max-height: 400px;
        overflow-y: auto;
        padding: 10px;
        background-color: #f8f9fa;
        border-radius: 8px;
        border: 1px solid #ddd;
        margin-bottom: 20px;
    }

    /* Chat Message Bubble */
    .chat-message {
        display: flex;
        align-items: flex-end;
        margin-bottom: 15px;
    }

    .chat-message:last-child {
        margin-bottom: 0;
    }

    .chat-bubble {
        max-width: 70%;
        padding: 10px 15px;
        border-radius: 20px;
        font-size: 14px;
        line-height: 1.5;
        position: relative;
        word-wrap: break-word;
    }

    .chat-bubble p {
        font-family: var(--lato);
        color: var(--paragraph-color);
        margin-bottom: 0;
        font-size: 18px;
        font-weight: 400;
        line-height: 16px;
    }

    /* Sender Message (Blue Background) */
    .chat-message.sender .chat-bubble {
        background-color: #d4edfc;
        color: #333;
        align-self: flex-start;
        margin-right: auto;
        border-bottom-left-radius: 5px;
    }

    /* Receiver Message (Gray Background) */
    .chat-message.receiver .chat-bubble {
        background-color: #e6e6e6;
        color: #333;
        align-self: flex-end;
        margin-left: auto;
        border-bottom-right-radius: 5px;
    }

    /* User Message (Yellow Background) */
    .chat-message.user .chat-bubble {
        background-color: #fff8db;
        color: #333;
        margin-left: auto;
        border-bottom-right-radius: 5px;
    }

    .chat-bubble .chat-timestamp {
        display: block;
        font-size: 12px;
        color: #666;
        margin-top: 5px;
        text-align: right;
    }

    /* Chat Input and Send Button */
    .chat-form {
        margin-top: 10px;
    }

    .input-container {
        display: flex;
        align-items: center;
        gap: 10px;
        width: 100%;
    }

    .chat-input {
        flex: 1;
        resize: none;
        height: 50px;
        padding: 10px 15px;
        border: 1px solid #ddd;
        border-radius: 25px;
        font-size: 14px;
        outline: none;
        overflow: hidden;
    }

    .chat-send-btn {
        display: flex;
        align-items: center;
        justify-content: center;
        background-color: var(--primary-color);
        color: white;
        border: none;
        border-radius: 50%;
        width: 50px;
        height: 50px;
        font-size: 20px;
        cursor: pointer;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }


    /* General Section Styles */
    .resources-section {
        background-color: #f8f9fa;
        border-radius: 10px;
        padding: 30px;
        margin-top: 50px;
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.05);
    }

    .resources-header {
        margin-bottom: 20px;
        text-align: center;
    }

    .resources-header .section-title {
        font-size: 22px;
        font-weight: bold;
        color: var(--primary-color);
        margin-bottom: 5px;
    }

    .resources-header .section-subtitle {
        font-size: 14px;
        color: #666;
    }

    /* Resources List */
    .resources-list {
        display: flex;
        flex-direction: column;
        gap: 20px;
    }

    /* Individual Resource */
    .resource-item {
        display: flex;
        align-items: center;
        background-color: #ffffff;
        padding: 15px;
        border-radius: 8px;
        border: 1px solid #ddd;
        box-shadow: 0px 2px 6px rgba(0, 0, 0, 0.05);
        transition: box-shadow 0.3s ease;
    }

    .resource-item:hover {
        box-shadow: 0px 4px 10px rgba(0, 0, 0, 0.1);
    }

    /* Resource Icon */
    .resource-icon {
        font-size: 28px;
        color: var(--primary-color);
        margin-right: 15px;
        display: flex;
        align-items: center;
        justify-content: center;
        width: 50px;
        height: 50px;
        background-color: #f4f6f8;
        border-radius: 8px;
        text-align: center;
    }

    /* Resource Details */
    .resource-details {
        flex: 1;
    }

    .resource-title {
        font-size: 16px;
        font-weight: bold;
        color: #333;
        margin-bottom: 3px;
    }

    .resource-type {
        font-size: 12px;
        color: #777;
    }

    /* Download Button */
    .resource-download-btn {
        background-color: var(--primary-color);
        color: white;
        border: none;
        padding: 8px 20px;
        border-radius: 20px;
        font-size: 14px;
        text-transform: uppercase;
        font-weight: bold;
        text-decoration: none;
        display: inline-flex;
        align-items: center;
        gap: 5px;
        transition: background-color 0.3s ease;
    }

    .resource-download-btn:hover {
        background-color: var(--primary-color-hover);
    }
</style>
@stop