@extends('Front.master')
@section('title','About-Our team')
@section('home')
<div class="breadcumb-area">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="breadcumb-wrap text-center">
                    <h2>About us</h2>
                    <ul>
                        <li><a href="index.html">Home</a></li>
                        <li>-</li>
                        <li class="active">About</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- breadcumb-area end -->
<!-- about-area start -->
<div class="about-area pt-80">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="about-img black-opacity">
                    <img src="{{ asset('/front') }}/images/about/1.jpg" alt="">
                    <a class="video-popup" href="https://www.youtube.com/watch?v=NjwUHXoi8lM"><i class="fa fa-play"></i></a>
                    <h3>Watch this video <span>and you know about us.</span></h3>
                </div>
                <div class="about-content">
                    <h3>Neque porro quisquam est main dolorem ventore veritatis et quasi <span>architecto beatae vitae dicta sunt explicabo</span> </h3>
                    <p>Sit felis sed risus eros, et sem blandit proin, praesent sit pede ac. Purus nesciunt in amet integer massa. Tincidunt eget orci convallis ante, facilisis nulla, rutrum posuere amet pentesque proin parturient. Lectus ut rhoncus porttitor sed id morbi, vestibulum vivamus in eu, eget hendrerit malesuada leo leo,placerat ante. Penatibus odio placerat lobortis penatibsagittis quis amet quam pede, ut arcu nibh ultricies purus, placerat sapiente per risus elit et purus. Nunc lobortis, vitae aliquam, sed lorem. Suscipit nulla urna conubia nisl, ametad malesuada mauris, nullam sit, excepteur mollis a sit duis praesent, pellentesque posuere ornare sodales odio massa lorem.</p>
                    <blockquote> Tesque proin parturient. Lectus ut rhoncus porttitor sed id morbi, vestibulum vivamus in eu, eget hendrerit malesuada leo placern atibusm sagittis quis amet quam pede, ut arcu nibh ultricies purus, placerat sapiente per risus elit et purus. Nunc lobortis, vitae aliquam, sed loremu scipit ad malesuada mauris, nullam mollis.</blockquote>
                    <div class="row">
                        <div class="col-md-6">
                            <div class="about-images">
                                <img src="{{ asset('/front') }}/images/about/2.jpg" alt="">
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="about-text">
                                <p>Sit felis sed risus eros, et sem blandit proin, praesent sit pede ac. Purus nesc unt in amet integer massa. Tincidunt eget orci convallis ante, facilisis nulla rutrum posuere amet pen tesque proin parturient. Lectus ut rhoncus porttitor sed id morbi, vestibulum vivamus in eu, eget hendrerit malesuada leo placer enatibus odio placerat lobortis penatib sagittis.</p>
                                <p>Sit felis sed risus eros, et sem blandit proin, praesent sit pede ac. Purus nesc unt in amet integer massa. Tincidunt eget orci convallis ante, facilisis nulla rutrum posuere amet pen tesque proin parturient.</p>
                                <p>Sit felis sed risus eros, et sem blandit proin, praesent sit pede ac. Purus nesc unt in amet integer massa. Tincidunt eget orci convallis ante, facilisis nulla rutrum posuere amet pen tesque proin parturient.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- about-area end -->
<!-- team-area start -->
<div class="team-area ptb-80">
    <div class="container">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="team-title text-center">
                    <h2>Our Team Members</h2>
                    <p>Sit felis sed risus eros, et sem blandit proin, praesent sit pede nesciunt amet teger massa tincidunt eget convlar</p>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-12">
                <div class="team-active next-prev-style">
                    <div class="team-img">
                        <img src="{{ asset('/front') }}/images/team/1.jpg" alt="">
                        <div class="team-content">
                            <h3>Henrietta Bowers</h3>
                            <p>Content writer</p>
                        </div>
                    </div>
                    <div class="team-img">
                        <img src="{{ asset('/front') }}/images/team/2.jpg" alt="">
                        <div class="team-content">
                            <h3>Dren Bowers</h3>
                            <p>SEO Marketer</p>
                        </div>
                    </div>
                    <div class="team-img">
                        <img src="{{ asset('/front') }}/images/team/3.jpg" alt="">
                        <div class="team-content">
                            <h3>Pol Smit</h3>
                            <p>Frontend Developer</p>
                        </div>
                    </div>
                    <div class="team-img">
                        <img src="{{ asset('/front') }}/images/team/4.jpg" alt="">
                        <div class="team-content">
                            <h3>Alex Smit</h3>
                            <p>Backend Developer</p>
                        </div>
                    </div>
                    <div class="team-img">
                        <img src="{{ asset('/front') }}/images/team/5.jpg" alt="">
                        <div class="team-content">
                            <h3>Henrietta Bowers</h3>
                            <p>Content writer</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- team-area end -->
<div class="booking-area2">
    <div class="container">
        <div class="row">
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