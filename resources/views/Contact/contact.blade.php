@extends("Layout.layout")

@section("content")
<div class="container" style="min-height: 50vh;">
    <div class="row">
        <h2 class="contact-header text-center my-4">Connect with us today</h2>
        <div class="col-md-6">
            <div class="contact-desc">
                Lorem ipsum, dolor sit amet consectetur adipisicing elit. Repellendus molestiae minus, assumenda tempore unde amet?
            </div>
            <div class="phone d-flex align-items-baseline">
                <i class="fa fa-phone"></i>
                <p class="px-2">1234567890</p>
            </div>
            <div class="email d-flex align-items-baseline">
                <i class="fa fa-envelope"></i>
                <p class="px-2">example@example.com</p>
            </div>
        </div>
        <div class="col-md-6">
            <form action="/contact" method="post">
                @csrf
                <input type="text" class="form-control mb-2" name="name" placeholder="Name" required>
                <input type="email" class="form-control mb-2" name="email" placeholder="Email" required>
                <input type="text" class="form-control mb-2" name="subject" placeholder="Subject" required>
                <input type="text" class="form-control mb-2" name="phone" placeholder="Phone" required>
                <textarea class="form-control mb-2" name="body" id="body" placeholder="Message" required></textarea>
                <div class="d-flex mb-3 justify-content-center">
                    <button class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
</div>


@endsection