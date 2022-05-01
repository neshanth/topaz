@extends("Dashboard.dashboard")

@section("content")
<div class="col-md-6">
    @if(session('success'))
    <p class="text-success text-center" style="font-size: 1.5rem;">{{ session('success') }}</p>
    @endif
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">

            <h3 class="card-title">New Event</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form action="{{ route("events.store") }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="card-body">
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" class="form-control" name="event_name" id="event_name" placeholder="Enter event name" value="{{ old('event_name') }}" required>
                    @error('event_name')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" value="{{ old('category') }}" placeholder="Category" required>
                    @error('category')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="total_donation">Total Donation Amount</label>
                    <input type="text" class="form-control" id="total_donation" value="{{ old('total_donation') }}" name="total_donation" placeholder="Total Donation" required>
                    <small class="text-danger">Enter number without any commas</small>
                    @error('total_donation')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="donation_received">Donation Received</label>
                    <input type="text" class="form-control" id="donation_received" value="{{ old('donation_received') }}" name="donation_received" placeholder="Donation Received" required>
                    <small class="text-danger">Enter number without any commas</small>
                    @error('donation_received')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
                <div class="form-group">
                    <label for="donation_received">Event Description</label>
                    <textarea id="topaz-editor" class="form-control" value="{{ old('event_desc') }}" name="event_desc"></textarea>
                    @error('event_desc')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>

                <div class="form-group">
                    <label for="event_image">Event Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="event_image" class="custom-file-input" id="event_image" required>
                            <label class="custom-file-label" for="event_image">Choose file</label>
                        </div>
                    </div>
                    @error('event_image')
                    <p class="text-danger my-3">{{ $message }}</p>
                    @enderror
                </div>
            </div>
            <!-- /.card-body -->

            <div class="card-footer">
                <button type="submit" class="btn btn-primary">Add Event</button>
            </div>
        </form>
    </div>
</div>

@endsection