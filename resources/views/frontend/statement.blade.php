@php
    // Get first statement for meta tags
    $ShowStatement = $ShowStatements->first();
@endphp

<x-frontend-layout
          title="Statement"
    :meta_title="$ShowStatement->meta_title ?? 'default title'"
    :description="$ShowStatement->description ?? 'default title'"
    :meta_keyword="$ShowStatement->meta_keyword ?? 'default keywords'"
    :meta_description="$ShowStatement->meta_description ?? 'default description'">

<section class="section_design_a margin-top_twenty">
  <div class="row">
    <div class="col-l-12">
      <div class="search_content">
        <input type="text" id="searchInput" placeholder="Search posts...">
      </div>
    </div>

    @if($ShowStatements && $ShowStatements->count())
        @foreach ($ShowStatements as $ShowStatement)
            <div class="col-s-12 col-m-6 col-l-6">
                <div class="post_container div_anim bottom">
                    <div class="post_heading">
                        <h3>{{ $ShowStatement->title }}</h3>

                        <button class="toggle-btn">Show</button>
                    </div>
                    <div class="post_content">
                        <p>{!! $ShowStatement->description !!}</p>
                        <div class="article-meta">By {{ $ShowStatement->name }}</div>
                    </div>
                </div>
            </div>
        @endforeach
    @else
        <p class="no-data">No data available</p>
    @endif
  </div>
</section>
</x-frontend-layout>
<script>
  document.addEventListener("DOMContentLoaded", () => {
  document.querySelectorAll('.post_container').forEach(post => {
    const btn = post.querySelector('button');
    const content = post.querySelector('.post_content');

    btn.addEventListener('click', () => {
      content.classList.toggle('show');
      btn.textContent = content.classList.contains('show') ? 'Hide' : 'Show';
    });
  });
});


    const searchInput = document.getElementById('searchInput');
  searchInput.addEventListener('input', () => {
    const query = searchInput.value.toLowerCase();
    document.querySelectorAll('.post_container').forEach(post => {
      const title = post.querySelector('h3').textContent.toLowerCase();
      const content = post.querySelector('.post_content').textContent.toLowerCase();
      if (title.includes(query) || content.includes(query)) {
        post.style.display = '';
      } else {
        post.style.display = 'none';
      }
    });
  });
  </script>
