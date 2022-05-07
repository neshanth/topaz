@extends("Dashboard.dashboard")

@section("content")
<div class="col-md-12">
    <div class="add-category d-flex justify-content-end my-3">
        <a class="btn btn-custom" href="{{ route('blogs.create') }}">Add Blog <i class="fa fa-plus"></i></a>
    </div>
    <div class="table-responsive">
        <table class="table" id="myTable">
            <thead>
                <tr class="bg-custom">
                    <th scope="col">#</th>
                    <th scope="col">Blog Title</th>
                    <th scope="col">Body</th>
                    <th scope="col">Image</th>
                    <th scope="col">Action</th>
                </tr>
            </thead>
            <tbody class="bg-white">
                @foreach($blogs as $key=>$blog)
                <tr>
                    <th scope="row">{{ $key + 1 }}</th>
                    <td>{{ $blog->blog_title }}</td>
                    <td>{!! substr(strip_tags($blog->blog_body),0,100) !!}</td>
                    <td><img width="100" src="{{ asset("storage/blog/".$blog->blog_image) }}" alt="{{ $blog->blog_image }}"></td>
                    <td class="d-flex align-items-center">
                        <a href="{{ route("blogs.edit",[$blog->id]) }}" class="d-block mx-5">
                            <i class="fas fa-edit text-warning"></i>
                        </a>
                        <form action="{{ route("blogs.destroy", $blog->id) }}" method="post">
                            @csrf
                            @method('DELETE')
                            <button class="btn delete-btn text-danger p-0">
                                <i class="fa fa-trash"></i>
                            </button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>


@endsection