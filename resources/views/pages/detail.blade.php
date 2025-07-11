@extends('layouts.app')

@section('title')
    Store Detail Page
@endsection

@section('content')
    <!-- Page Content -->
    <div class="page-content page-details">
      <section
        class="store-breadcrumbs"
        data-aos="fade-down"
        data-aos-delay="100"
      >
        <div class="container">
          <div class="row">
            <div class="col-12">
              <nav>
                <ol class="breadcrumb">
                  <li class="breadcrumb-item">
                    <a href="/index.html">Home</a>
                  </li>
                  <li class="breadcrumb-item active">Product Details</li>
                </ol>
              </nav>
            </div>
          </div>
        </div>
      </section>

      <section class="store-gallery" id="gallery">
        <div class="container">
          <div class="row">
            <div class="col-lg-8" data-aos="zoom-in">
              <transition name="slide-fade" mode="out-in">
                <img
                  :src="photos[activePhoto].url"
                  :key="photos[activePhoto].id"
                  class="w-100 main-image"
                  alt=""
                />
              </transition>
            </div>
            <div class="col-lg-2">
              <div class="row">
                <div
                  class="col-3 col-lg-12 mt-2 mt-lg-0"
                  v-for="(photo, index) in photos"
                  :key="photo.id"
                  data-aos="zoom-in"
                  data-aos-delay="100"
                >
                  <a href="#" @click="changeActive(index)">
                    <img
                      :src="photo.url"
                      class="w-100 thumbnail-image"
                      :class="{ active: index == activePhoto }"
                      alt=""
                    />
                  </a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </section>

      <div class="store-details-container" data-aos="fade-up">
        <section class="store-heading">
          <div class="container">
            <div class="row">
              <div class="col-lg-8">
                <h1>Sofa Ternyaman</h1>
                <div class="owner">By Nasmilzha Gusfiarta Rachmadi</div>
                <div class="price">Rp. 1.000.000</div>
              </div>
              <div class="col-lg-2" data-aos="zoom-in">
                <a
                  href="/cart.html"
                  class="btn btn-success px-4 text-white btn-block mb-3"
                  >Add to Cart</a
                >
              </div>
            </div>
          </div>
        </section>
        <section class="store-description">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8">
                <p>
                  Sofa kulit asli Italia dengan desain minimalis yang elegan.
                  Nikmati kenyamanan maksimal dengan busa berdensitas tinggi dan
                  bantalan empuk. Sempurna untuk melengkapi ruang tamu modern
                  Anda. Dapatkan penawaran khusus bulan ini!
                </p>
                <p>
                  "Sofa kulit asli Italia dengan jahitan tangan yang presisi,
                  memberikan kesan mewah dan elegan." "Sofa bed dengan ruang
                  penyimpanan yang luas, ideal untuk apartemen dengan ruang
                  terbatas." "Sofa sudut dengan desain modular, dapat
                  disesuaikan dengan berbagai ukuran ruangan."
                </p>
              </div>
            </div>
          </div>
        </section>

        <section class="store-review">
          <div class="container">
            <div class="row">
              <div class="col-12 col-lg-8 mt-3 mb-3">
                <h5>Customer Review (3)</h5>
              </div>
            </div>
            <div class="row">
              <div class="col-12 col-lg-8">
                <ul class="list-unstyled">
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-1.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Rizky</h5>
                      Saya sangat puas dengan sofa sudut yang saya beli dari
                      Milzha Store. Desainnya modern dan minimalis, sangat cocok
                      dengan interior rumah saya. Busa yang digunakan sangat
                      empuk dan nyaman, membuat saya betah berlama-lama menonton
                      TV. Selain itu, proses pengiriman juga sangat cepat dan
                      rapi. Saya sangat merekomendasikan sofa ini kepada
                      teman-teman saya.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-2.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Karina</h5>
                      Saya sangat puas dengan sofa ini. Sandaran kepalanya bisa
                      diatur, jadi bisa disesuaikan dengan posisi duduk yang
                      paling nyaman. Bahan kainnya juga lembut dan mudah
                      dibersihkan.
                    </div>
                  </li>
                  <li class="media">
                    <img
                      src="/images/icons-testimonial-3.png"
                      alt=""
                      class="mr-3 rounded-circle"
                    />
                    <div class="media-body">
                      <h5 class="mt-2 mb-1">Sopian</h5>
                      Punggung saya yang sering pegal sekarang terasa lebih baik
                      setelah menggunakan sofa ini. Dukungannya sangat terasa.
                    </div>
                  </li>
                </ul>
              </div>
            </div>
          </div>
        </section>
      </div>
    </div>
@endsection

@push('addon-script')
        <script src="/vendor/vue/vue.js"></script>
    <script>
      var gallery = new Vue({
        el: "#gallery",
        mounted() {
          AOS.init();
        },
        data: {
          activePhoto: 1,
          photos: [
            {
              id: 1,
              url: "/images/product-details-1.jpg",
            },
            {
              id: 2,
              url: "/images/product-details-2.jpg",
            },
            {
              id: 3,
              url: "/images/product-details-3.jpg",
            },
            {
              id: 4,
              url: "/images/product-details-4.jpg",
            },
          ],
        },
        methods: {
          changeActive(id) {
            this.activePhoto = id;
          },
        },
      });
    </script>
@endpush
