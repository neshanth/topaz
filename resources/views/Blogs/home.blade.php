@extends("Layout.layout")

@section("content")
<div class="container" style="min-height: 50vh;">
    <div class="row px-3 my-3">
        <h2 class="text-center py-3">Blogs</h2>
        @foreach ($blogs as $blog)
        <a href="{{ route("blogs.show",[$blog->id]) }}">
            <div class="col-md-3 my-3">
                <div class="blog card">
                    <img src="{{ asset("storage/blog/".$blog->blog_image) }}" class="d-block w-100 card-img-top" alt={{ $blog->blog_title }} />
                    <div class="card-body">
                        <p class="blog-author">Admin <i class="fa fa-crown"></i></p>
                        <p class="blog-info">
                            <span>{{ $blog->created_at->format('M d') }}</span> . <span class="blog-reading"><?= strlen($blog->blog_body) > 200 ? ceil(strlen($blog->blog_body) / 200) : 1  ?> min</span>
                        </p>
                        <h4 class="blog-title">
                            <a href="{{ route("blogs.show",[$blog->id]) }}">{{ $blog->blog_title }}</a>
                        </h4>
                        <div class="blog-details">
                            {!! substr(strip_tags($blog->blog_body),0, 100) !!}
                            ....
                        </div>
                    </div>
                </div>
            </div>
        </a>
        @endforeach
    </div>

</div>

@endsection