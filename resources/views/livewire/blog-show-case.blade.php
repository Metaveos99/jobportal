<section class="section-box mt-50 mb-50">
    @if ($blogsectioncount > 0)
    <div class="container">
        <div class="text-center">
            <h2 class="section-title mb-10 wow animate__animated animate__fadeInUp">News and Blog</h2>
            <p class="font-lg color-text-paragraph-2 wow animate__animated animate__fadeInUp">Get the latest news,
                updates and tips</p>
        </div>
    </div>
    <div class="container">
        <div class="mt-50">
            <div class="box-swiper style-nav-top">
                <div class="swiper-container swiper-group-3 swiper">
                    <div class="swiper-wrapper pb-70 pt-5">
                        @foreach ($blogsection as $item)
                            <div class="swiper-slide">
                                <div class="card-grid-3 hover-up wow animate__animated animate__fadeIn">
                                    <div class="text-center card-grid-3-image"><a
                                            href='{{ route('blogdetails', ['id' => $item->slug]) }}'>
                                            <figure><img alt="jobBox" src="{{asset('storage/'.$item->blogcover_image)}}" >
                                            </figure>
                                        </a></div>
                                    <div class="card-block-info">
                                        <div class="tags mb-15"><a class='btn btn-tag'
                                                href="{{ route('blog-category', ['id' => $item->category]) }}">{{ $item->category }}</a>
                                        </div>
                                        <h5><a
                                                href='{{ route('blogdetails', ['id' => $item->slug]) }}'>{{ $item->title }}</a>
                                        </h5>
                                        <p class="mt-10 color-text-paragraph font-sm">{{ $item->description }}</p>
                                        <div class="card-2-bottom mt-20">
                                            <div class="row">
                                                <div class="col-lg-6 col-6">
                                                    <div class="d-flex"><img class="img-rounded"
                                                            src="{{ asset('storage/' . $item->getWriter->image) }}"
                                                            alt="jobBox">
                                                        <div class="info-right-img"><span
                                                                class="font-sm font-bold color-brand-1 op-70">{{ $item->getWriter->name }}</span><br><span
                                                                class="font-xs color-text-paragraph-2">{{ $item->created_at->format('d F Y') }}</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
                <div class="swiper-button-next"></div>
                <div class="swiper-button-prev"></div>
            </div>
        </div>
        <div class="text-center"><a class='btn btn-brand-1 btn-icon-load mt--30 hover-up'
                href='{{ route('blog') }}'>Load More Posts</a></div>
    </div>
    @endif
</section>
