<div class="sidebar-item tags">
    <div class="sidebar-heading">
      <h2>Tag Clouds</h2>
    </div>
    <div class="content">
      <ul>
        @foreach($tags as $tag)
        <li><a href="{{ $tag->slug }}">{{ $tag->title }}</a></li>
        @endforeach
      </ul>
    </div>
</div>