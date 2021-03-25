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
                                       <div style = "height: 30px;"></div>
                                        <h2> Emprendimientos</h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">

                        <div style = "height: 70px;"></div>

                        <!-- PRODUCT 1 -->
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-"></div><a class="d-block" ><img class="img-fluid w-100" src="assets/images/gallery/arrival9.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                      </br>

                                      <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal1">
                                          Contactame
                                        </button>

                                        <!-- Modal 1 -->
                                        <div class="modal fade" id="Modal1" tabindex="-1" role="dialog" aria-labelledby="Modal1" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="Modal1">MASTER GYM</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                              </svg> @mastergym
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                              </svg>(0376) 4412345
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>San Martin n° 123
                                              </br>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>  --}}
                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Contactame</a></li>  --}}
                                        {{--  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>  --}}
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <div class="reset-anchor" style = "color:black;" href="detail.html"></div></h6>
                                 {{--   <p class="small text-muted">$250</p>  --}}
                                </div>
                              </div>


                            <!-- PRODUCT 2 -->

                             <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-"></div><a class="d-block"><img class="img-fluid w-100" src="assets/images/gallery/arrival10.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                      </br>

                                      <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal2">
                                          Contactame
                                        </button>

                                        <!-- Modal 2 -->
                                        <div class="modal fade" id="Modal2" tabindex="-1" role="dialog" aria-labelledby="Modal2" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="Modal2">Ayacucho Lavados - Autodetailing</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16">
                                                <path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/>
                                              </svg> @Ayacucholavados
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16">
                                                <path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/>
                                              </svg> (03751) 15300462
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>Av Paraguay y Ayacucho
                                              </br>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>  --}}
                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Contactame</a></li>  --}}
                                        {{--  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>  --}}
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <div class="reset-anchor" style = "color:black;" href="detail.html"></div></h6>
                                 {{--   <p class="small text-muted">$250</p>  --}}
                                </div>
                              </div>

                              <!-- PRODUCT 3 -->
                            <div class="col-xl-3 col-lg-4 col-sm-6">
                                <div class="product text-center">
                                  <div class="position-relative mb-3">
                                    <div class="badge text-white badge-"></div><a class="d-block" ><img class="img-fluid w-100" src="assets/images/gallery/arrival11.png" alt="..."></a>
                                    <div class="product-overlay">
                                      <ul class="mb-0 list-inline">
                                      </br>

                                      <!-- Button trigger modal -->
                                        <button type="button" class="btn btn-secondary" data-toggle="modal" data-target="#Modal3">
                                          Contactame
                                        </button>

                                        <!-- Modal 3 -->
                                        <div class="modal fade" id="Modal3" tabindex="-1" role="dialog" aria-labelledby="Modal3" aria-hidden="true">
                                          <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                              <div class="modal-header">
                                                <h5 class="modal-title" id="Modal1">Veronica Hermann</h5>
                                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                  <span aria-hidden="true">&times;</span>
                                                </button>
                                              </div>
                                              <div class="modal-body">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                                <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2zm13 2.383l-4.758 2.855L15 11.114v-5.73zm-.034 6.878L9.271 8.82 8 9.583 6.728 8.82l-5.694 3.44A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.739zM1 11.114l4.758-2.876L1 5.383v5.73z"/>
                                              </svg> veronicaHermann@gmail.com
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-phone" viewBox="0 0 16 16">
                                                <path d="M11 1a1 1 0 0 1 1 1v12a1 1 0 0 1-1 1H5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1h6zM5 0a2 2 0 0 0-2 2v12a2 2 0 0 0 2 2h6a2 2 0 0 0 2-2V2a2 2 0 0 0-2-2H5z"/>
                                                <path d="M8 14a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"/>
                                              </svg>(03751) 15569341
                                              </br>
                                              <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-geo-alt" viewBox="0 0 16 16">
                                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                                              </svg>Montecarlo
                                              </br>
                                              </div>
                                              <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                                              </div>
                                            </div>
                                          </div>
                                        </div>


                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-outline-dark" href="#"><i class="far fa-heart"></i></a></li>  --}}
                                        {{--  <li class="list-inline-item m-0 p-0"><a class="btn btn-sm btn-dark" href="cart.html">Contactame</a></li>  --}}
                                        {{--  <li class="list-inline-item mr-0"><a class="btn btn-sm btn-outline-dark" href="#productView" data-toggle="modal"><i class="fas fa-expand"></i></a></li>  --}}
                                      </ul>
                                    </div>
                                  </div>
                                  <h6> <div class="reset-anchor" style = "color:black;" href="detail.html"></div></h6>
                                 {{--   <p class="small text-muted">$250</p>  --}}
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

                        </div>

                    </div>

                </section>

        @endsection
