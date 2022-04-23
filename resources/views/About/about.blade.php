@extends("Layout.layout")

@section("content")

<div class="container-fluid">
    <div class="row">
        <div class="col-md-6 about-section">
            <div class="about-container">
                <p class="about-us-heading text-primary">ABOUT US</p>
                <h2 class="about-us-title">For a Better Tomorrow</h2>
                <p class="about-topaz">
                    Lorem ipsum dolor sit, amet consectetur adipisicing elit. Dignissimos, minima maiores. Officiis sit laborum voluptates temporibus reprehenderit. Consequatur, veritatis et?
                </p>
            </div>
        </div>
        <div class="col-md-6 p-0">
            <img src="{{ asset('images/1.jpg') }}" class="d-block w-100" alt="">
        </div>
    </div>
    <div class="row misson-container">
        <div class="col-md-6 mission-goals">
            <h2 class="our-mission">OUR MISSION <span class="text-primary">&</span> GOALS</h2>
            <p class="mission-statement">Lorem ipsum dolor sit amet consectetur adipisicing elit. Exercitationem animi rerum minima dolor? Recusandae, incidunt corporis. Cumque nobis veritatis ullam?</p>
            <div class="row goals container p-0">
                <div class="col-md-6">
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>

                </div>
                <div class="col-md-6">
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>
                    <div class="goal-statement-box">
                        <p class="goal">Homeless Charities</p>
                        <p class="goal-statement">Lorem ipsum dolor sit amet.</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="col-md-6 video-container">
            <h2 class="latest-title">Latest Videos</h2>
            <p class="latest-video-text">
                Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis, nobis quos. Vitae autem pariatur adipisci natus ut, perferendis provident totam.
            </p>
            <video class="d-block w-100" controls>
                <source src="{{ asset('images/People.mp4') }}">
            </video>
        </div>
    </div>
    <div class="volunteers text-center py-5 container">
        <h2 class="volunteer-title">Happy Volunteers</h2>
        <p class="volunteer-text">
            Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deleniti sed fugiat repellendus perferendis expedita aliquid nihil debitis odio eveniet nulla, magnam corrupti illum, dolorum maiores.
        </p>
        <div class="row">
            <div class="col-md-3 text-center">
                <img class="d-block volunteer-img" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                <p>John Doe</p>
            </div>
            <div class=" col-md-3 text-center">
                <img class="d-block volunteer-img" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                <p>John Doe</p>
            </div>
            <div class=" col-md-3 text-center">
                <img class="d-block volunteer-img" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                <p>John Doe</p>
            </div>
            <div class=" col-md-3 text-center">
                <img class="d-block volunteer-img" src="https://images.unsplash.com/photo-1488161628813-04466f872be2?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=464&q=80" alt="">
                <p>John Doe</p>
            </div>
        </div>
        <div class="volunteer-btn">
            <button class="btn btn-custom">APPLY FOR VOLUNTEER</button>
        </div>
    </div>
</div>



@endsection