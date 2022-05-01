@extends("Layout.layout")

@section("content")

<div class="container">
    <div class="row px-3 my-3">
        <h2 class="text-center py-3">Login</h2>
        <form action="/login" method="POST">
            @csrf
            <div class="mb-3">
                <label for="email" class="form-label">Email address</label>
                <input type="email" class="form-control" name="email" id="email" placeholder="name@example.com">
                @if($errors->has('email'))
                <p class="text-danger my-3">{{ $errors->first('email') }}</p>
                @endif
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password</label>
                <input class="form-control" type="password" name="password" id="password" />
                @if($errors->has('password'))
                <p class="text-danger my-3">{{ $errors->first('password') }}</p>
                @endif
            </div>
            <div class="mb-3 d-flex justify-content-center">
                <button class="btn btn-custom">Login</button>
            </div>
        </form>
    </div>
</div>

@endsection