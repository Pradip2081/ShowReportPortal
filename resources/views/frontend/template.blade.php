@php
    $tempItem = $temps->first(); // for meta tags
@endphp

<x-frontend-layout
    title="Template"
    :meta_title="$about->meta_title ?? 'default title'"
    :meta_keyword="$about->meta_keyword ?? 'default keywords'"
    :meta_description="$about->meta_description ?? 'default description'"
    :meta_image="$about->meta_image ?? 'default meta_image'"
    :og_type="$about->og_type ?? 'default og_type'"
    :canonical_url="$about->canonical_url ?? 'default canonical_url'"
    >


<section class="section_design_a margin-top_twenty">

    <div class="row">
        <div class="col-l-12">
            <div class="search_content">
                <input type="text" id="searchInput" placeholder="Search template...">
            </div>
        </div>

        @if(isset($temps) && $temps->count())
            @foreach($temps as $tempItem)
                <div class="col-s-12 col-m-6 col-l-6">
                    <div class="template_body div_anim bottom">
                        <div class="template_content">
                            <img src="{{ asset($tempItem->image) }}" alt="Template">
                        </div>
                        <div class="template_details">
                            <p>Theme Name: {{ $tempItem->title }}</p>
                            <!-- Proper button linking -->
                            <a href="{{ $tempItem->temp_url }}" class="view_btn">View</a>
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <p>No data found</p>
        @endif

    </div> <!-- end row -->

</section>
</x-frontend-layout>
