    .@extends('layouts.frontend')

        @section('title')
            Home
        @endsection

        @section('content')

            @include('frontend.slider.slider')

                <section>

                    <div class="container">
                        <div class="row justify-content-center">
                            <div class="row justify-content-center">
                                <div class="col-xl-7 col-lg-8 col-md-10">
                                    <div class="section-tittle mb-60 text-center wow fadeInUp" data-wow-duration="2s" data-wow-delay=".2s">
                                        <h2>new<br>arrival</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="assets/images/gallery/arrival1.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <a class="reset-anchor" href="detail.html">Kui Ye Chen’s AirPods</a></h6>
                                  <p class="small text-muted">$250</p>
                                </div>
                              </div>
                              <!-- PRODUCT-->
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-primary">Sale</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="assets/images/gallery/arrival2.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <a class="reset-anchor" href="detail.html">Air Jordan 12 gym red</a></h6>
                                  <p class="small text-muted">$300</p>
                                </div>
                              </div>
                              <!-- PRODUCT-->
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-"></div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="assets/images/gallery/arrival3.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <a class="reset-anchor" href="detail.html">Cyan cotton t-shirt</a></h6>
                                  <p class="small text-muted">$25</p>
                                </div>
                              </div>
                              <!-- PRODUCT-->
                              <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-info">New</div><a class="d-block" href="detail.html"><img class="img-fluid w-100" src="assets/images/gallery/arrival4.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>
                                        <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Add to cart</a></li>
                                        <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <a class="reset-anchor" href="detail.html">Timex Unisex Originals</a></h6>
                                  <p class="small text-muted">$351</p>
                                </div>
                              </div>

                        </div>

                    </div>

                </section>

        @endsection
