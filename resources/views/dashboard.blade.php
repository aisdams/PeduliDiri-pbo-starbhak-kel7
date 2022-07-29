@extends('layout')
@section('judul', 'Dashboard')
@section('isi')
@stack('style')
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Dancing+Script:wght@600&display=swap" rel="stylesheet">
<style>
  .bar {
  position: absolute;
  top: 0;
  left: 0;

  width: 100%;
  padding: 25px 0;
  font-family: Gelasio;
  font-size: 18px;
}

.bar_content {
  display: block; /* Important to give the content a width */

  width: 100%;
  transform: translateX(100%); /* Animation start out of the screen */

  /* Add the animation */
  animation: move 30s linear infinite /* infinite make reapeat the animation indefinitely */;
}

.bar .bar_content h4 {
  background: url(https://media1.giphy.com/media/26ufo4EIIEdB8tX3y/giphy.gif?cid=ecf05e472chtd6fjy7sjjzeri0huy8mo2g99ujw6li8f8jnk&rid=giphy.gif&ct=g);
  background-size: cover;
  -webkit-background-clip: text;
  -webkit-text-fill-color: transparent;
}

/* Create the animation */
@keyframes move {
  to { transform: translateX(-100%); }
}

.swiper {
        width: 100%;
        height: 100%;
      }

      .swiper-slide {
        text-align: center;
        font-size: 18px;
        background: #fff;

        /* Center slide text vertically */
        display: -webkit-box;
        display: -ms-flexbox;
        display: -webkit-flex;
        display: flex;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        -webkit-justify-content: center;
        justify-content: center;
        -webkit-box-align: center;
        -ms-flex-align: center;
        -webkit-align-items: center;
        align-items: center;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 30px;
        object-fit: cover;
      }

      .swiper {
        width: 100%;
        height: 30px;
        margin-left: auto;
        margin-right: auto;
      }

      .swiper-slide {
        background-size: cover;
        background-position: center;
      }

      .mySwiper2 {
        height: 30%;
        width: 100%;
      }

      .mySwiper {
        height: 20%;
        box-sizing: border-box;
        padding: 10px 0;
      }

      .mySwiper .swiper-slide {
        width: 25%;
        height: 50%;
        opacity: 0.4;
      }

      .mySwiper .swiper-slide-thumb-active {
        opacity: 1;
      }

      .swiper-slide img {
        display: block;
        width: 100%;
        height: 100%;
        object-fit: cover;
      }
</style>
<div class="main-panel">
    <div class="content-wrapper">
      <div class="row purchace-popup">
        <div class="col-12 stretch-card grid-margin">
            @if (session('success'))
                    <div class="alert alert-success alert-dismissible fade show col-12">
                        {{ session('success') }}<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                          </button>
                    </div>
                    @endif
        </div>
      </div>

      
      <!-- Quick Action Toolbar Ends-->
      <div class="row" style="margin-top: -3rem;">
        <div class="col">
          <div class="bar" style="position:relative;">
            <span class="bar_content">
              <h4 style="font-family: 'Dancing Script', cursive; font-size:35px;">Welcome SevenBaley EveryOne</h4>
            </span>
          </div>
        </div>
</div>

    <!-- Swiper -->

    <div
      style="--swiper-navigation-color: #fff; --swiper-pagination-color: #fff"
      class="swiper mySwiper2"
    >
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://teaguetours.com.au/wp-content/uploads/2021/09/Teague-Tours-Banner-South-Australia-Wirrabra.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://prod-virtuoso.dotcmscloud.com/dA/188da7ea-f44f-4b9c-92f9-6a65064021c1/heroImage1/PowerfulReasons_hero.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://en.bastionluxuryhotel.com/cache/83/db/83dbbc4cb6a71b67b04323836455ef6e.jpg" />
        </div>
      </div>
      <div class="swiper-button-next"></div>
      <div class="swiper-button-prev"></div>
    </div>
    <div thumbsSlider="" class="swiper mySwiper">
      <div class="swiper-wrapper">
        <div class="swiper-slide">
          <img src="https://a.cdn-hotels.com/gdcs/production143/d1112/c4fedab1-4041-4db5-9245-97439472cf2c.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://teaguetours.com.au/wp-content/uploads/2021/09/Teague-Tours-Banner-South-Australia-Wirrabra.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://prod-virtuoso.dotcmscloud.com/dA/188da7ea-f44f-4b9c-92f9-6a65064021c1/heroImage1/PowerfulReasons_hero.jpg" />
        </div>
        <div class="swiper-slide">
          <img src="https://en.bastionluxuryhotel.com/cache/83/db/83dbbc4cb6a71b67b04323836455ef6e.jpg" />
        </div>
      </div>
    </div>
    <!-- content-wrapper ends -->
  <div class="textnya">
    <h2 class="text-center mb-4" style="color: rgb(85, 85, 85); font-weight: 700">Panduan Perjalanan</h2>
    <div class="container text-center">
      <div class="row align-items-start">
        <div class="col rounded-4">
          <i class="bi bi-geo-alt" style="font-size: 1.7rem"></i>
          <h5>Collect Information</h5>
          <p class="fw-light">You must collect as much information about the destination as possible about Indonesian tourist destinations.</p>
        </div>
        <div class="col rounded-4">
          <style>
            .textnya .col {
              margin-left:2rem; 
              border: 1px solid rgb(48, 0, 221);
              transform: rotate(0deg);
            }
            .textnya .col:hover {
              background: #fff;
              color: rgb(83, 83, 83);
              transition: .2s linear;
              transform: rotate(10deg);
            }
          </style>
          <i class="bi bi-journal-bookmark-fill" style="font-size: 1.7rem"></i>
          <h5>Make an itinerary</h5>
          <p class="fw-light">Start programming your itinerary. Understand which places you're going to visit.</p>
          <button type="button" title="Click In Here For Create Travel Log" class="btn btn-dark"><a href="" style="text-decoration: none; color: white">Create Travel Log</a></button>
        </div>
        <div class="col rounded-4">
          <i class="bi bi-thermometer-sun" style="font-size: 1.7rem"></i>
          <h5>Check body temp</h5>
          <p class="fw-light">Also pay attention to your body temperature, always maintain health</p>
        </div>
        <div class="col rounded-4">
          <i class="bi bi-clipboard-check" style="font-size: 1.7rem"></i>
          <h5>Make a reservation</h5>
          <p class="fw-light">Resevasi hotels, vehicles, crossings, tourist activities, inter-county buses, attractions, rent car transportation, motorbike rental, trains or previous flights.</p>
        </div>
      </div>
  </div>
</div>

<div class="covernya" style="position: relative; top: 3rem">
  <h2 class="fw-bold text-center" style="color: rgb(85, 85, 85); font-weight: 700">Artikel Populer</h2>
  <div class="container text-start">
    <div class="row align-items-start mt-5">
      <div class="col">
        <h6>Thailand</h6>
        <img src="{{ asset("img/thailand.webp") }}" alt="" width="300px">
        <h5>Travel Requirements and Restrictions to the Philippines</h5>
        <p class="fw-light">SevenBaley aims to provide travelers with a holistic travel experience, and provides up-to-date and detailed information on requirements and</p>
      </div>
      <div class="col">
        <h6>Thailand</h6>
        <img src="{{ asset("img/thailand.webp") }}" alt="" width="300px">
        <h5>Travel Requirements and Restrictions to the Philippines</h5>
        <p class="fw-light">SevenBaley aims to provide travelers with a holistic travel experience, and provides up-to-date and detailed information on requirements and</p>
      </div>
      <div class="col">
        <h6>Thailand</h6>
        <img src="{{ asset("img/thailand.webp") }}" alt="" width="300px">
        <h5>Travel Requirements and Restrictions to the Philippines</h5>
        <p class="fw-light">SevenBaley aims to provide travelers with a holistic travel experience, and provides up-to-date and detailed information on requirements and</p>
      </div>
    </div>
</div>

</div>

    <!-- partial:partials/_footer.html -->
    {{-- <footer class="footer">
      <div class="d-sm-flex justify-content-center justify-content-sm-between">
        <span class="text-muted d-block text-center text-sm-left d-sm-inline-block">Copyright © bootstrapdash.com 2020</span>
        <span class="float-none float-sm-right d-block mt-1 mt-sm-0 text-center"> Free <a href="https://www.bootstrapdash.com/bootstrap-admin-template/" target="_blank">Bootstrap admin templates</a> from Bootstrapdash.com</span>
      </div>
    </footer> --}}
    <!-- partial -->
  </div>
@endsection
@push('scripts')
  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      spaceBetween: 10,
      slidesPerView: 4,
      freeMode: true,
      watchSlidesProgress: true,
    });
    var swiper2 = new Swiper(".mySwiper2", {
      spaceBetween: 10,
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev",
      },
      autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
      thumbs: {
        swiper: swiper,
      },
    });
  </script>  
@endpush