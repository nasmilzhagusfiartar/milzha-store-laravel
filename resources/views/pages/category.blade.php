@extends('layouts.app')

@section('title')
    Store Category Page
@endsection

@section('content')
<!-- Page Content -->
<div class="page-content page-home">
  <section class="store-trend-categories">
    <div class="container">
      <div class="row">
        <div class="col-12" data-aos="fade-up">
          <h5>All Categories</h5>
        </div>
      </div>
      <div class="row">
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="100">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-gadgets.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Gadgets</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="200">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-furniture.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Furniture</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="300">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-makeup.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Makeup</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="400">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-sneaker.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Sneaker</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="500">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-tools.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Tools</p>
          </a>
        </div>
        <div class="col-6 col-md-3 col-lg-2" data-aos="fade-up" data-aos-delay="600">
          <a href="#" class="component-categories d-block">
            <div class="categories-image">
              <img src="/images/categories-baby.svg" alt="" class="w-100" />
            </div>
            <p class="categories-text">Baby</p>
          </a>
        </div>
      </div>
    </div>
  </section>
</div>
@endsection
