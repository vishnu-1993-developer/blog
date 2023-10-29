<div class="sidebar-item categories">
    <div class="sidebar-heading">
        <h2>Categories</h2>
    </div>
    <div class="content">
        <ul>
            @foreach($categories as $category)
            <li><a href="#">- {{$category->title}}</a></li>
            @endforeach
        </ul>
    </div>
</div>