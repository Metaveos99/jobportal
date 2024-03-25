<div class="col-lg-4 col-md-12 col-sm-12 col-12 pl-40 pl-lg-15 mt-lg-30">
    <div class="widget_search mb-40">
      <div class="search-form">
        <form action="{{route('blog-search')}}">
          <input type="text" placeholder="Search…" name="query">
          <button type="submit"><i class="fi-rr-search"></i></button>
        </form>
      </div>
    </div>
    <div class="sidebar-shadow sidebar-news-small">
      <h5 class="sidebar-title">Categories</h5>
      <div class="post-list-small">
        @foreach ($cats as $item)
        <div class="post-list-small-item d-flex align-items-center">
            <h5> <a href="{{route('blog-category',['id'=>$item])}}">{{$item}}</a></h5>                          
        </div>
        @endforeach
      </div>
    </div>
    <div class="sidebar-border-bg bg-right"><span class="text-grey">WE ARE</span><span class="text-hiring">HIRING</span>
      <p class="font-xxs color-text-paragraph mt-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Recusandae architecto</p>
      <div class="mt-15"><a class="btn btn-paragraph-2" href="#">Know More</a></div>
    </div>
</div>