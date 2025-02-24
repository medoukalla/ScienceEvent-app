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
                    <a href="{{ route('frontend.formation', $formation->id) }}">
                        <img src="{{ asset('storage/'.$formation->cover) }}" alt="" style="width: 100%; height: auto;">
                    </a>
                @endif
            </div>
            <div class="access-formations-details">
                <div class="class-details-content-and-instructor-wrap">
                    <!-- Formation / Comments / Resources -->
                    <div class="class-details-content-wrap">
                        <div class="formation-tab">
                            <div class="f-tab formation selected" id="chat-button">Chat</div>
                            <div class="f-tab comments" id="comments-button"> <small>({{ $number_of_comments }})</small> Commentaires</div>
                            <div class="f-tab resources" id="resources-button"> <small>({{ $number_of_resources }})</small> Ressources</div>
                        </div>


                        <!-- Chat -->
                        <div class="formation-component-wrapper" id="chat-section" >
                            <div class="comment-section">

                                <div class="comments-counts">

                                    @livewire('formation-chat',['formationId' => $formation->id])

                                </div>
                            </div>
                        </div>

                        <!-- Commenters -->
                        <div class="formation-component-wrapper" id="comments-section" style="display: none;">
                        @livewire('comments',['formationId' => $formation->id])
                        </div>

                        <!-- Resources -->
                        <div class="formation-component-wrapper" id="resources-section" style="display: none;">
                            <div class="comment-section">

                                <div class="comments-counts">

                                    <section class="resources-section section-padding">
                                        <div class="container">
                                            <div class="resources-header">
                                                <h3 class="section-title">Ressources du formation</h3>
                                                <p class="section-subtitle">Accédez aux ressources disponibles pour ce formation</p>
                                            </div>

                                            <!-- Resources List -->
                                            <div class="resources-list">
                                                @foreach($formation->resources as $resource)
                                                    @php
                                                        $resource_info = json_decode($resource->file_path);
                                                    @endphp
                                                    <div class="resource-item">
                                                        <div class="resource-icon">
                                                            @if (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['png', 'jpg', 'jpeg','gif', 'webp']))
                                                                <i class="ti ti-photo"></i>
                                                            @elseif (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['pdf']))
                                                                <i class="ti ti-file-type-pdf"></i>
                                                            @elseif (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['docx', 'doc']))
                                                                <i class="ti ti-brand-office"></i>
                                                            @elseif (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['xlsx', 'xls']))
                                                                <i class="ti ti-file-excel"></i>
                                                            @elseif (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['pptx', 'ppt']))
                                                                <i class="ti ti-presentation"></i>
                                                            @elseif (in_array(substr(strrchr($resource_info[0]->download_link, '.'), 1), ['mp4', 'webm', 'mov', 'avi']))
                                                                <i class="ti ti-video"></i>
                                                            
                                                            @else
                                                                <i class="ti ti-file-text"></i>
                                                            @endif
                                                        </div>
                                                        <div class="resource-details">
                                                            <h4 class="resource-title">{{ $resource->file_name }}</h4>
                                                            <p class="resource-type">Type : {{ ucfirst(pathinfo($resource_info[0]->download_link, PATHINFO_EXTENSION)) }}</p>
                                                        </div>
                                                        <a href="{{ Storage::url($resource_info[0]->download_link) }}" download class="resource-download-btn">
                                                            Télécharger
                                                        </a>
                                                    </div>
                                                @endforeach
                                                
                                            </div>
                                        </div>
                                    </section>


                                </div>
                            </div>
                        </div>


                    </div>

                </div>
                <div class="class-information-right-side">
                    <div class="class-informations-title">
                        <span>Découvrez</span> notre sélection de formations
                        <p>Un large choix de formations pour répondre à vos besoins.</p>
                    </div>
                    <div class="funfact-wrap">

                        @foreach ( $last_formations as $last_formation )
                            <a href="{{ route('frontend.formation', $last_formation) }}">
                                <div class="s-info">
                                @if (!empty($last_formation) && isset($last_formation[0]->download_link))
                                    <video style="width: 100%; height: auto;" controlslist="nodownload nofullscreen noplaybackrate" disablepictureinpicture loop autoplay muted playsinline>
                                        <source src="{{ asset('storage/' . $last_formation[0]->download_link) }}" type="video/mp4">
                                        Votre navigateur ne prend pas en charge la balise vidéo.
                                    </video>
                                @else
                                    <img src="{{ asset('storage/'.$last_formation->cover) }}" alt="Similar Video">
                                    <div class="vid-infos">
                                        <div class="vid-title">{{ substr($last_formation->title, 0, 13) }}...</div>
                                        <img src="{{ asset('assets/svg/video-icon.svg') }}" alt="Video Icon" class="vid-icon">
                                    </div>
                                @endif
                                    
                                </div>
                            </a>
                        @endforeach
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
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
        
        // scroll chat to botton on page load
        $('#chat-messages').animate({ scrollTop: $('#chat-messages').prop('scrollHeight') }, 500);
        $('#send-message-btn').click(() => $('#chat-messages').animate({ scrollTop: $('#chat-messages').prop('scrollHeight') }, 800));
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
        color: #ff5b00;
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
        background-color: #ff5b00;
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
        color: #ff5b00;
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