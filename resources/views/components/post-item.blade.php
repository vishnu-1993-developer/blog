<div class="col-lg-12">
    <div class="blog-post">
      <div class="blog-thumb">
        <img src="{{ $post->thumbnail }}" alt="{{ $post->title }}">
      </div>
      <div class="down-content">
        @foreach($post->categories as $category)
        <span>{{ $category->title }}</span>
        @endforeach
        <a href="{{ $post->url() }}"><h4>{{ $post->title }}</h4></a>
        <ul class="post-info">
          <li><a href="#">{{$post->user->name}}</a></li>
          <li><a href="{{ $post->url() }}">{{ $post->published_at }}</a></li>
          {{-- <li><a href="#">12 Comments</a></li> --}}
        </ul>
        <p>{{ $post->shortBody() }}</p>
        <div class="post-options">
          <div class="row">
            <div class="col-6">
              <ul class="post-tags">
                <li><i class="fa fa-tags"></i></li>
                @foreach($post->tags as $tag)
                <li><a href="{{$tag->url()}}">{{$tag->title}}</a>,</li>
                @endforeach
              </ul>
            </div>
            {{-- <div class="col-6">
              <ul class="post-share">
                <li><i class="fa fa-share-alt"></i></li>
                <li><a href="#">Facebook</a>,</li>
                <li><a href="#"> Twitter</a></li>
              </ul>
            </div> --}}
          </div>
        </div>
      </div>
    </div>
  </div>