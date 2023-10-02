<x-app-layout :title="' - Home'">
<!-- Page Content -->
    <!-- Banner Starts Here -->
    <div class="main-banner header-text">
      <div class="container-fluid">
        <div class="owl-banner owl-carousel">
          @foreach($featuredPosts as $featuredPost)
          <x-slider-post-item :featuredPost="$featuredPost"> </x-slider-post-item>
          @endforeach
        </div>
      </div>
    </div>
    <!-- Banner Ends Here -->

    {{-- <section class="call-to-action">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="main-content">
              <div class="row">
                <div class="col-lg-8">
                  <span>Stand Blog HTML5 Template</span>
                  <h4>Creative HTML Template For Bloggers!</h4>
                </div>
                <div class="col-lg-4">
                  <div class="main-button">
                    <a rel="nofollow" href="https://templatemo.com/tm-551-stand-blog" target="_parent">Download Now!</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section> --}}

    <section class="blog-posts">
      <div class="container">
        <div class="row">
          <div class="col-lg-8">
            <div class="all-blog-posts">
              <div class="row">
                @foreach($posts as $post)
                <x-post-item :post="$post"></x-post-item>
                @endforeach
                <div class="col-lg-12">
                  <div class="main-button">
                    <a href="blog.html">View All Posts</a>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4">
            <div class="sidebar">
              <div class="row">
                <div class="col-lg-12">
                  <div class="sidebar-item search">
                    <form id="search_form" name="gs" method="GET" action="#">
                      <input type="text" name="q" class="searchText" placeholder="type to search..." autocomplete="on">
                    </form>
                  </div>
                </div>
                <div class="col-lg-12">
                  <div class="sidebar-item recent-posts">
                    <div class="sidebar-heading">
                      <h2>Recent Posts</h2>
                    </div>
                    <div class="content">
                      <ul>
                        @foreach($recentPosts as $post)
                        <li>
                          <a href="{{$post->url()}}">
                            <h5>{{ $post->title }}</h5>
                            <span>{{ $post->published_at }}</span>
                          </a>
                        </li>
                        @endforeach
                      </ul>
                    </div>
                  </div>
                </div>
                <div class="col-lg-12">
                  <x-categories :categories="$categories"></x-categories>
                </div>
                <div class="col-lg-12">
                  <x-tags :tags="$tags"></x-tags>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

  </x-app-layout>