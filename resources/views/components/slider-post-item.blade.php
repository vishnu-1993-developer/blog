<div class="item">
    <img src="{{ $featuredPost->thumbnail }}" alt="">
    <div class="item-content">
      <div class="main-content">
        <div class="meta-category">
            @foreach($featuredPost->categories as $category)
            <span>{{ $category }}</span>
            @endforeach
        </div>
        <a href="{{ $featuredPost->url() }}"><h4>{{ $featuredPost->title }}</h4></a>
        <ul class="post-info">
          <li><a href="#">{{ $featuredPost->user->name }}</a></li>
          <li><a href="{{ $featuredPost->url() }}">{{ $featuredPost->published_at }}</a></li>
          {{-- <li><a href="#">12 Comments</a></li> --}}
        </ul>
      </div>
    </div>
  </div>