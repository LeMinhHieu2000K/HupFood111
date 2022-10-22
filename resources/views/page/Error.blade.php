@extends('master')
@section('content')
<section class="error-part">
    <div class="container">
        <h1>404 | Not Found</h1><img class="img-fluid" src="assets/images/error.png" alt="error">
        <h3>ooopps! this page can't be found.</h3>
        <p>It looks like nothing was found at this location.</p><a href="index.html">go to home</a>
    </div>
</section>
<section class="news-part" style="background: url(assets/images/newsletter.jpg) no-repeat center;">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-5 col-lg-6 col-xl-7">
                <div class="news-text">
                    <h2>Get 20% Discount for Subscriber</h2>
                    <p>Lorem ipsum dolor consectetur adipisicing accusantium</p>
                </div>
            </div>
            <div class="col-md-7 col-lg-6 col-xl-5">
                <form class="news-form"><input type="text" placeholder="Enter Your Email Address"><button><span><i
                                class="icofont-ui-email"></i>Subscribe</span></button></form>
            </div>
        </div>
    </div>
</section>
<section class="intro-part">
    <div class="container">
        <div class="row intro-content">
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-truck"></i></div>
                    <div class="intro-content">
                        <h5>free home delivery</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-sync-alt"></i></div>
                    <div class="intro-content">
                        <h5>instant return policy</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-headset"></i></div>
                    <div class="intro-content">
                        <h5>quick support system</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
            <div class="col-sm-6 col-lg-3">
                <div class="intro-wrap">
                    <div class="intro-icon"><i class="fas fa-lock"></i></div>
                    <div class="intro-content">
                        <h5>secure payment way</h5>
                        <p>Lorem ipsum dolor sit amet adipisicing elit nobis.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>


<style>
    .error-part {
    padding: 100px 0px;
    text-align: center
}

.error-part h1 {
    margin-bottom: 10px;
    color: var(--primary)
}

.error-part img {
    margin-bottom: 30px
}

.error-part h3 {
    text-transform: uppercase;
    margin-bottom: 3px
}

.error-part p {
    margin-bottom: 20px
}

.error-part a {
    font-size: 14px;
    padding: 10px 35px;
    border-radius: 8px;
    letter-spacing: 0.3px;
    color: var(--white);
    background: var(--primary);
    text-transform: uppercase
}

@media (max-width: 767px) {
    .error-part {
        padding: 60px 0px
    }
}

@media (min-width: 768px) and (max-width: 1199px) {
    .error-part {
        padding: 80px 0px
    }
}
</style>
@endsection