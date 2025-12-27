<!-- Home Page Video Section -->
@php
  $ShowVideo = $ShowVideos->first();
@endphp

<x-frontend-layout
title="contact"
:meta_title="$ShowVideo->meta_title"
:meta_keyword="$ShowVideo->meta_keyword"
:meta_description="$ShowVideo->meta_description">

    <section class="background_style_d">
        <div class="row">
            @if(isset($ShowVideos) && $ShowVideos->count())
                @foreach ($ShowVideos as $ShowVideo)
                    <div class="col-s-12 col-4 col-l-4">
                        <div class="box_wrap">
                            <div class="video_box div_anim left">
                                @php

                                    $videoUrl = $ShowVideo->video_url;
                                    $isYouTube = Str::contains($videoUrl, ['youtube.com', 'youtu.be']);
                                @endphp

                                @if ($isYouTube)
                                    @php
                                        // Convert to embeddable YouTube format
                                        $embedUrl = str_replace('watch?v=', 'embed/', $videoUrl);
                                        $embedUrl = str_replace('youtu.be/', 'youtube.com/embed/', $embedUrl);
                                    @endphp
                                    <iframe width="400" height="315"
                                        src="{{ $embedUrl }}"
                                        title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                        allowfullscreen>
                                    </iframe>
                                @else
                                    <video width="400" height="315" controls>
                                        <source src="{{ asset('storage/' . $videoUrl) }}" type="video/mp4">
                                        Your browser does not support the video tag.
                                    </video>
                                @endif
                            </div>


                        </div>
                    </div>
                @endforeach
            @else
                <div class="col-12 text-center">
                    <p>No videos found.</p>
                </div>
            @endif
        </div>
    </section>
</x-frontend-layout>
