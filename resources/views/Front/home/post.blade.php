@extends('Front.master')
@section('title','Blog master --Home')
@section('home')
    @include('Front.inc.slider')

    <div class="popular-post-area popular-post-area2">
        <div class="container">
            <div class="row post">
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="post-wrap">
                        <div class="post-img">
                            <img src="{{ asset('/front') }}/images/popular/1.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">The new lid defense the algo rithomm made me do it.</a></h3>
                            <p>Courtney Singleton</p>
                            <span>15 December, 17</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="post-wrap">
                        <div class="post-img">
                            <img src="{{ asset('/front') }}/images/popular/2.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Interesting idea that set your mind in motion.</a></h3>
                            <p>Hattie Johnston</p>
                            <span>20 November, 17</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-12">
                    <div class="post-wrap">
                        <div class="post-img">
                            <img src="{{ asset('/front') }}/images/popular/3.jpg" alt="">
                        </div>
                        <div class="post-content">
                            <h3><a href="blog-details.html">Graphic design images from north korea are glorious.</a></h3>
                            <p>Rudolph Marshall</p>
                            <span>15 December, 17</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- .popular-post-area end -->
    <!-- .post-area start -->
    <div class="post-area pb-80 post-area3">
        <div class="container">
            <div class="row">
                <div class="col-12">
                    <div class="section-title text-center">
                        <h2>Recent Post</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-12">
                    <div class="sidebar-popular-post">
                        <div class="row">
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="widget widget_categories ">
                                    <h4 class="widget-title">Category Post</h4>
                                    <ul>
                                        <li><a href="#">Entertainment</a></li>
                                        <li><a href="#">Technology</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Business</a></li>
                                        <li><a href="#">Life Style</a></li>
                                        <li><a href="#">Musuc & Band</a></li>
                                        <li><a href="#">Travels</a></li>
                                        <li><a href="#">Restaurent</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-12 col-md-6 col-12">
                                <div class="booking-wrap2">
                                    <div class="booking-img2">
                                        <img src="{{ asset('/front') }}/images/booking2.jpg" alt="">
                                    </div>
                                    <div class="booking-form">
                                        <form action="#">
                                            <h2>Get Breaking News delivered to your inbox.</h2>
                                            <input type="text" placeholder="Name here...">
                                            <input type="text" placeholder="Phone here...">
                                            <input type="email" placeholder="Emaile here...">
                                            <button>Subscribe now</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-12">
                    <div class="row">
                        <div class="col-12 col-lg-12 col-md-6">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <img src="{{ asset('/front') }}/images/post/post2/1.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h3><a href="blog-details.html">British military courts use aginst protesters busines cultural...</a></h3>
                                    <p>Courtney Singleton</p>
                                    <span>15 December, 17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-6">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <img src="{{ asset('/front') }}/images/post/post2/2.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h3><a href="blog-details.html">South korea’s moon jae in sworn vowing to address north...</a></h3>
                                    <p>Courtney Singleton</p>
                                    <span>15 December, 17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-6">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <img src="{{ asset('/front') }}/images/post/post2/3.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h3><a href="blog-details.html">Robots helped inspire and deep learning might become...</a></h3>
                                    <p>Courtney Singleton</p>
                                    <span>15 December, 17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-6">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <img src="{{ asset('/front') }}/images/post/post2/4.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h3><a href="blog-details.html">Man looking at his note remember to daily tasks...</a></h3>
                                    <p>Courtney Singleton</p>
                                    <span>15 December, 17</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 col-lg-12 col-md-6">
                            <div class="post-wrap">
                                <div class="post-img">
                                    <img src="{{ asset('/front') }}/images/post/post2/5.jpg" alt="">
                                </div>
                                <div class="post-content">
                                    <h3><a href="blog-details.html">British military courts use aginst protesters busines cultural...</a></h3>
                                    <p>Courtney Singleton</p>
                                    <span>15 December, 17</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-12">
                    <div class="pagination-wrapper text-center">
                        <ul class="page-numbers">
                            <li><a class="prev page-numbers" href="#"><i class="fa fa-arrow-left"></i></a></li>
                            <li><span class="page-numbers current">1</span></li>
                            <li><a class="page-numbers" href="#">2</a></li>
                            <li><a class="page-numbers" href="#">3</a></li>
                            <li><a class="next page-numbers" href="#"><i class="fa fa-arrow-right"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- .post-area end -->
    <!-- tanding-post-area start -->
    <div class="tanding-post-area pb-80">
        <div class="container">
            <div class="row">
                <div class="teanding-active2 next-prev-style">
                    <div class="col-12">
                        <div class="featured-items mb-60">
                            <img src="{{ asset('/front') }}/images/tanding/1.jpg" alt="">
                            <div class="featured-content">
                                <p>Naomi Jefferson</p>
                                <span>15 December, 17</span>
                                <h2>British military courts use aginst protesters busines cultural...</h2>
                                <a class="readmore-btn" href="featured.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="hover">
                                <span class="hover-one"></span>
                                <span class="hover-two"></span>
                                <span class="hover-three"></span>
                                <span class="hover-four"></span>
                            </div>
                        </div>
                    </div>
                    <div class="col-12">
                        <div class="featured-items mb-60">
                            <img src="{{ asset('/front') }}/images/tanding/2.jpg" alt="">
                            <div class="featured-content">
                                <p>Jefferson Arham</p>
                                <span>15 December, 17</span>
                                <h2>The future steps of scala what to the expect from upcoming releases...</h2>
                                <a class="readmore-btn" href="featured.html">Read more <i class="fa fa-long-arrow-right"></i></a>
                            </div>
                            <div class="hover">
                                <span class="hover-one"></span>
                                <span class="hover-two"></span>
                                <span class="hover-three"></span>
                                <span class="hover-four"></span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 offset-lg-3 col-md-8 offset-md-2 col-12">
                    <div class="booking-content text-center">
                        <h3>Most popular blog site</h3>
                        <h2>You ready to read and write here? Let’s get started today!</h2>
                        <a href="contact.html" class="readmore-btn">Contact now</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection