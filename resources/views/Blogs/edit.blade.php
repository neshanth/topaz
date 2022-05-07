@extends("Dashboard.dashboard")

@section("content")
@foreach ($blog as $b)
<div class="col-md-6">
    @if(session('success'))
    <p class="text-success text-center" style="font-size: 1.5rem;">{{ session('success') }}</p>
    @endif
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">Edit {{ $b->blog_title}}</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route("blogs.update",[$b->id]) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="card-body">
                <div class="form-group">
                    <label for="blog_title">Blog Title</label>
                    <input type="text" class="form-control" name="blog_title" id="blog_title" placeholder="Enter blog name" value="{{ $b->blog_title }}" required>
                    @error('blog_title')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="blog_body">Blog Content</label>
                    <textarea id="topaz-editor" class="form-control" name="blog_body">{{ $b->blog_body }}</textarea>
                    @error('blog_body')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="blog_image">Blog Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="blog_image" class="custom-file-input" id="blog_image" required>
                            <label class="custom-file-label" for="blog_image">Choose file</label>
                        </div>
                    </div>
                    <p id="file-info" class="text-primary" style="margin-top: 1rem ;">No File Uploaded</p>
                    @error('blog_image')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-warning">Update Blog</button>
            </div>
        </form>
    </div>
</div>
@endforeach

@endsection