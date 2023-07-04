@extends('layouts.app')

@section('title')
  NOMADS
@endsection

@section('content')
  <!-- Header  -->
  <header class="text-center" id="home">
    <h1>Explore The Beautiful World Again
      <br/>
      As Easy One Click
    </h1>
    <p class="mt-3">
      You will see beautiful
      <br/>
      moment you never see before
    </p>
    <a href="#popular" class="btn btn-get-started px-4 mt-4">Get started</a>
  </header>

  <main>
    <div class="container">
      <section class="section-stats row justify-content-center  text-center" id="stats">
        <div class="col-3 col-md-2 stats-detail">
          <h2>20K</h2>
          <p>Members</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>12</h2>
          <p>Countries</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>3K</h2>
          <p>Hotel</p>
        </div>
        <div class="col-3 col-md-2 stats-detail">
          <h2>72</h2>
          <p>Partners</p>
        </div>
      </section>
    </div>

    <section class="section-popular" id="popular">
      <div class="container">
        <div class="row">
          <div class="col text-center section-popular-heading">
            <h2>Wisata Popular</h2>
            <p>
              Something that you never try
              <br/>
              before in this world
            </p>
          </div>
        </div>
      </div>
    </section>

    <section class="section-popular-content" id="popularContent">
      <div class="container">
        <div class="section-popular-travel">
          <div class="row justify-content-center">
            @foreach ($items as $item)
              <div class="col-sm-6 col-md-4 col-lg-3">
                <div class="card-travel text-center d-flex flex-column" style="background-image: url('{{ $item->galleries->count() ? Storage::url
                ($item->galleries()->first()->image) : ''}}')">
                  <div class="travel-country">{{ $item->location }}</div>
                  <div class="travel-location">{{ $item->title}}</div>
                  <div class="travel-button mt-auto">
                    <a href="{{ route('detail', $item->slug) }}" class="btn btn-travel-details px-4">
                      View Details
                    </a>
                  </div>
                </div>
              </div>            
            @endforeach
          </div>
        </div>
      </div>
    </section>

    <section class="section-networks" id="networks">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <h2>Our Networks</h2>
            <p>
              Companies are trusted us
              <br/>
              more than just a trip
            </p>
          </div>
          <div class="col-md-8 text-center">
            <img src="frontend/images/partner@2x.png" alt="Logo Partners" class="img-partner">
          </div>
        </div>
      </div>
    </section>

    <section class="section-testimonial-heading" id="testimonialHeading">
      <div class="container">
        <div class="row">
          <div class="col-12 text-center">
            <h2>They Are Loving Us</h2>
            <p>Moments were giving them
              <br/>
              the best experience
            </p>
          </div>
        </div>
      </div>
    </section>
    
    <section class="section section-testimonial-content" id="testimonialContent">
      <div class="container">
        <div class="section-popular-travel">
          <div class="row justify-content-center">
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img src="frontend/images/avatar-1.png" alt="User" class="mb-4 rounded-circle">
                  <h3 class="mb-4">Angga  Risky</h3>
                  <p class="testimonial">
                    " It was glorious and I could not stop to say wohoooo for every single moment Dankeeeee"
                  </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                  Trip to Ubud
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img src="frontend/images/avatar-2.png" alt="User" class="mb-4 rounded-circle">
                  <h3 class="mb-4">Hayna</h3>
                  <p class="testimonial">
                    " The trip was amazing and I saw something beautiful in that Island that makes me want to learn more"
                  </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                  Trip to Nusa Penida
                </p>
              </div>
            </div>
            <div class="col-sm-6 col-md-6 col-lg-4">
              <div class="card card-testimonial text-center">
                <div class="testimonial-content">
                  <img src="frontend/images/avatar-3.png" alt="User" class="mb-4 rounded-circle">
                  <h3 class="mb-4">Shabrina</h3>
                  <p class="testimonial">
                    " I oved it when the waves was shaking hardder - I was scared too"
                  </p>
                </div>
                <hr>
                <p class="trip-to mt-2">
                  Trip to Karimun Jawa
                </p>
              </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-12 text-center">
            <a href="#" class="btn btn-need-help px-4 mt-4 mx-1">
              I Need Help
            </a>
            <a href="{{ route('register') }}" class="btn btn-get-started px-4 mt-4 mx-1">
              Get started
            </a>
          </div>
        </div>
      </div>
    </section>

    <section id="contact">
      <div class="container mt-5">
          <div class="row">
              <div class="col-12">
                  <div class="intro text-center">
                      <h6>BERI KOMENTAR</h6>
                      <h2>Comment Here</h2>
                  </div>
              </div>
          </div>
          <div class="kontak">
              <div class="row justify-content-between">
                  <div class="col-md-6 mb-4">
                      <iframe
                          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3984.4076422847816!2d104.73061141471868!3d-2.9842555406766844!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e3b753ab6770bcf%3A0xb5eef6859d2c937!2sUNSRI%20bukit%20palembang!5e0!3m2!1sen!2sid!4v1647596989164!5m2!1sen!2sid"
                          style="border:0; width: 100%; height: 100%;" allowfullscreen="" loading="lazy"></iframe>
                  </div>
                  <div class="col-md-6 mb-4">
                      <div class="topic-text">Send us a comment</div>
                      <p>Tolong beri komentar agar saya bisa lebih bersemangat.  </p>
                      <form name="kontak" method="POST" action="{{ route('comment.store') }}">
                        @csrf
                          <div class="input-box">
                              <input type="text" class="form-control" name="name" id="name" aria-describedby="name"
                              placeholder="Enter your name"    required>
                          </div>
                          <div class="input-box">
                              <input type="email" class="form-control" name="email" id="email" aria-describedby="email" placeholder="Enter your Email"
                                  required>
                          </div>
                          <div class="input-box message-box">
                              <input type="textarea" name="content" id="content" placeholder="Enter your message " required>
                          </div>
                          <div class="button">
                            <button type="submit" class="btn btn-warning btn-block">
                              Send Now
                            </button>
                          </div>
                      </form>
                  </div>
                  <p>Ingin melihat komentar anda? <a href="{{ url('/comment') }}" >Klik Disini</a></p>
                  
              </div>
          </div>
      </div>
  </section>
  </main>
@endsection

@push('addon-script')
  <script>
    var selector = '.navbar .navbar-nav .nav-link';

    $(selector).on('click', function(){
        $(selector).removeClass('active');
        $(this).addClass('active');
    });
  </script>
@endpush