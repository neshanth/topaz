@extends("Layout.layout")


@section("content")

<div class="container">
    <div class="row py-3 px-2">
        <h2 class="text-center my-5 blog-title">{{ $blog->blog_title }}</h2>
        <img src="{{ asset("storage/blog/".$blog->blog_image) }}" class="d-block w-100" alt={{ $blog->blog_title }} />
        <div class="blog-single-info d-flex my-2 justify-content-center">
            <p class="blog-author mx-2">Admin <i class="fa fa-crown"></i></p>
            <p class="blog-info mx-2">
                <span>{{ $blog->created_at->format('M d') }}</span> <span>.</span> <span class="blog-reading"><?= strlen($blog->blog_body) > 200 ? ceil(strlen($blog->blog_body) / 200) : 1  ?> min read</span>
            </p>
        </div>
        <div class="col-md-12  mx-auto my-5 blog-details-single">
            {!! $blog->blog_body !!}
        </div>
    </div>
</div>

@endsection