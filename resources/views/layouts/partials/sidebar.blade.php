<aside class="col-lg-4 col-xl-3">
    <!-- Search ========= -->
    <form method="get" action="{{ route('search') }}" class="d-inline">
        <div class="input-group shadow-sm mb-4">
            <input class="form-control shadow-none border-0 pr-0" type="search" id="search-input" placeholder="Search"
                name="query" value="">
            <div class="input-group-append">
                <span class="input-group-text bg-white border-0 p-0">
                    <button class="btn text-muted shadow-none px-3 border-0" type="submit" />
                    <i class="fa fa-search"></i></button>
                </span>
            </div>
        </div>
    </form>


    <!-- Recent Posts ====== -->
    @if ($blade !== 'index')
        <div class="bg-white shadow-sm rounded p-3 mb-4">
            <h4 class="text-5">Recent Posts</h4>
            <hr class="mx-n3">
            <div class="side-post">
                @foreach ($recentPosts as $post)
                    <div class="item-post">
                        <div class="img-thumb">
                            <a href="{{ route('post', $post) }}">
                                <img class="rounded w-100" src="{{$post->image }}" title=""
                                    alt="">
                            </a>
                        </div>
                        <div class="captions"> <a class="text-dark"
                                href="{{ route('post', $post) }}">{{ $post->title }}</a>
                            {{-- <p class="date-post">{{ $post->updated_at->format('Y-m-d') }}</p> --}}
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    @endif

    <!-- Popular Posts ====== -->
    <div class="bg-white shadow-sm rounded p-3 mb-4">
        <h4 class="text-5">Popular Posts</h4>
        <hr class="mx-n3">
        <div class="side-post">
            @foreach ($popularPosts as $post)
                <div class="item-post">
                    <div class="img-thumb">
                        <a href="{{ route('post', $post) }}">
                            <img class="rounded w-100" src="{{$post->image }}" title=""
                                alt="">
                        </a>
                    </div>
                    <div class="captions"> <a class="text-dark"
                            href="{{ route('post', $post) }}">{{ $post->title }}</a>
                        {{-- <p class="date-post">{{ $post->updated_at->format('Y-m-d') }}</p> --}}
                    </div>
                </div>
            @endforeach
        </div>
    </div>

    <!-- Categories ========== -->
    <div class="bg-white shadow-sm rounded p-3 mb-4">
        <h4 class="text-5">Categories</h4>
        <hr class="mx-n3">
        <ul class="list-item">
            @if ($categoriesHasPost->isNotEmpty())
                @foreach ($categoriesHasPost as $category)
                    <li>
                        <a href="{{ route('category', $category) }}">
                            {{ $category->name }}<span class="">{{ $category->posts->count() }}</span>
                        </a>
                    </li>
                @endforeach
            @endif
        </ul>
    </div>


    <!-- Popular Tags ======= -->
    {{-- <div class="bg-white shadow-sm rounded p-3 mb-4">
        <h4 class="text-5">Popular Tags</h4>
        <hr class="mx-n3">
        <div class="tags"> <a href="#">Recharge</a> <a href="#">Tips</a> <a href="#">2021</a> <a
                href="#">Booking</a> <a href="#">Marketing</a> <a href="#">Bill</a> <a href="#">How To</a>
            <a href="#">Payment</a> <a href="#">Offers</a>
        </div>
    </div> --}}
</aside>
