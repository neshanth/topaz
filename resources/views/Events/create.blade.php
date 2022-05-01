@extends("Dashboard.dashboard")

@section("content")
<div class="col-md-6">
    <!-- general form elements -->
    <div class="card card-primary">
        <div class="card-header">
            <h3 class="card-title">New Event</h3>
        </div>
        <!-- /.card-header -->
        <!-- form start -->
        <form>
            <div class="card-body">
                <div class="form-group">
                    <label for="event_name">Event Name</label>
                    <input type="text" class="form-control" name="evebt_name" id="event_name" placeholder="Enter event name">
                </div>
                <div class="form-group">
                    <label for="category">Category</label>
                    <input type="text" class="form-control" id="category" name="category" placeholder="Category">
                </div>
                <div class="form-group">
                    <label for="total_donation">Total Donation Amount</label>
                    <input type="text" class="form-control" id="total_donation" name="total_donation" placeholder="Total Donation">
                </div>
                <div class="form-group">
                    <label for="donation_received">Donation Received</label>
                    <input type="text" class="form-control" id="donation_received" name="donation_received" placeholder="Donation Received">
                </div>
                <div class="form-group">
                    <label for="donation_received">Event Description</label>
                    <textarea id="topaz-editor" name="event_desc"></textarea>
                </div>

                <div class="form-group">
                    <label for="event_image">Event Image</label>
                    <div class="input-group">
                        <div class="custom-file">
                            <input type="file" name="event_image" class="custom-file-input" id="event_image">
                            <label class="custom-file-label" for="event_image">Choose file</label>
                        </div>
                    </div>
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