@extends('layouts.frontend')
@section('title')
    Shop | SkillGro
@endsection
@section('content')
    <!-- breadcrumb-area -->
    <section class="breadcrumb__area breadcrumb__bg" data-background="/frontend/assets/img/bg/breadcrumb_bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="breadcrumb__content">
                        <h3 class="title">Shop</h3>
                        <nav class="breadcrumb">
                            <span property="itemListElement" typeof="ListItem">
                                <a href="/">Home</a>
                            </span>
                            <span class="breadcrumb-separator"><i class="fas fa-angle-right"></i></span>
                            <span property="itemListElement" typeof="ListItem">Shop</span>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="breadcrumb__shape-wrap">
            <img src="/frontend/assets/img/others/breadcrumb_shape01.svg" alt="img" class="alltuchtopdown">
            <img src="/frontend/assets/img/others/breadcrumb_shape02.svg" alt="img" data-aos="fade-right"
                data-aos-delay="300">
            <img src="/frontend/assets/img/others/breadcrumb_shape03.svg" alt="img" data-aos="fade-up"
                data-aos-delay="400">
            <img src="/frontend/assets/img/others/breadcrumb_shape04.svg" alt="img" data-aos="fade-down-left"
                data-aos-delay="400">
            <img src="/frontend/assets/img/others/breadcrumb_shape05.svg" alt="img" data-aos="fade-left"
                data-aos-delay="400">
        </div>
    </section>
    <!-- breadcrumb-area-end -->
    <section class="shop-area section-py-120">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-12 col-lg-8 order-0 order-lg-2">
                    <div class="shop-top-wrap">
                        <div class="row align-items-center">
                            {{-- <div class="col-md-6 col-sm-7">
                                <div class="shop-top-left">
                                    <p>Showing 1-9 of 16 Results</p>
                                </div>
                            </div> --}}
                            {{-- <div class="col-md-6 col-sm-5">
                                <div class="shop-top-right">
                                    <select name="orderby" class="orderby">
                                        <option value="Default sorting">Default sorting</option>
                                        <option value="Sort by popularity">Sort by popularity</option>
                                        <option value="Sort by average rating">Sort by average rating</option>
                                        <option value="Sort by latest">Sort by latest</option>
                                        <option value="Sort by latest">Sort by latest</option>
                                    </select>
                                </div>
                            </div> --}}
                        </div>
                    </div>
                    <div class="shop-item-wrap">
                        <div class="row">
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img01.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale">Sale</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">Garden Adeline Life</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="avg">(5.00)</span>
                                        </div>
                                        <h4 class="price">$13.00<del>$19.00</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img02.jpg" alt="img">
                                        </a>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">Time to Explore</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="avg">(4.50)</span>
                                        </div>
                                        <h4 class="price">$19.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img03.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale">Sale</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">Wildlife Adventure</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="avg">(4.30)</span>
                                        </div>
                                        <h4 class="price">$29.00<del>$39.00</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img04.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale hot">Hot!</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">Ketut Susilo Sky</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="avg">(5.00)</span>
                                        </div>
                                        <h4 class="price">$16.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img05.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale">Sale</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">The Illusion Design</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="avg">(4.80)</span>
                                        </div>
                                        <h4 class="price">$29.00<del>$39.00</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img06.jpg" alt="img">
                                        </a>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">The Fashion Edits</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="avg">(5.00)</span>
                                        </div>
                                        <h4 class="price">$39.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img07.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale">Sale</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">The Business Women</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="avg">(4.50)</span>
                                        </div>
                                        <h4 class="price">$19.00<del>$32.00</del></h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img08.jpg" alt="img">
                                        </a>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">Online Makeup Tutorial</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <span class="avg">(5.00)</span>
                                        </div>
                                        <h4 class="price">$49.00</h4>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xl-4 col-sm-6">
                                <div class="shop-item">
                                    <div class="shop-thumb">
                                        <a href="#0">
                                            <img src="/frontend/assets/img/shop/shop_img09.jpg" alt="img">
                                        </a>
                                        <span class="flash-sale">Sale</span>
                                        <ul class="list-wrap shop-action">
                                            <li><a href="#0"><i class="fas fa-shopping-cart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-heart"></i></a></li>
                                            <li><a href="#0"><i class="far fa-eye"></i></a></li>
                                        </ul>
                                    </div>
                                    <div class="shop-content">
                                        <h3 class="title"><a href="#0">The Bad Feelings</a></h3>
                                        <div class="rating">
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star"></i>
                                            <i class="fas fa-star-half-alt"></i>
                                            <span class="avg">(4.80)</span>
                                        </div>
                                        <h4 class="price">$49.00<del>$69.00</del></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- <nav class="pagination__wrap mt-40">
                        <ul class="list-wrap">
                            <li class="active"><a href="#0">1</a></li>
                            <li><a href="#0">2</a></li>
                            <li><a href="#0">3</a></li>
                            <li><a href="#0">4</a></li>
                        </ul>
                    </nav> --}}
                </div>

            </div>
        </div>
    </section>
@endsection
