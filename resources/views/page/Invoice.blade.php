@extends('master')
@section('content')
<section class="inner-section single-banner" style="background: url(assets/images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Order invoice</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-4column.html">shop grid</a></li>
            <li class="breadcrumb-item"><a href="product-video.html">product details</a></li>
            <li class="breadcrumb-item"><a href="checkout.html">checkout</a></li>
            <li class="breadcrumb-item active" aria-current="page">invoice</li>
        </ol>
    </div>
</section>
<section class="inner-section invoice-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="alert-info">
                    <p>Thank you! We have recieved your order.</p>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="account-card">
                    <div class="account-title">
                        <h4>order recieved</h4>
                    </div>
                    <div class="account-content">
                        <div class="invoice-recieved">
                            <h6>order number <span>1665</span></h6>
                            <h6>order date <span>february 02, 2021</span></h6>
                            <h6>total amount <span>$24,176.00</span></h6>
                            <h6>payment method <span>Cash on delivery</span></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-card">
                    <div class="account-title">
                        <h4>Order Details</h4>
                    </div>
                    <div class="account-content">
                        <ul class="invoice-details">
                            <li>
                                <h6>Total Item</h6>
                                <p>6 Items</p>
                            </li>
                            <li>
                                <h6>Order Time</h6>
                                <p>1.00pm 10-12-2021</p>
                            </li>
                            <li>
                                <h6>Delivery Time</h6>
                                <p>90 Minute Express Delivery</p>
                            </li>
                            <li>
                                <h6>Delivery Location</h6>
                                <p>House 17/A, West Jalkuri, Dhaka.</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="account-card">
                    <div class="account-title">
                        <h4>Amount Details</h4>
                    </div>
                    <div class="account-content">
                        <ul class="invoice-details">
                            <li>
                                <h6>Sub Total</h6>
                                <p>$10,864.00</p>
                            </li>
                            <li>
                                <h6>discount</h6>
                                <p>$20.00</p>
                            </li>
                            <li>
                                <h6>Payment Method</h6>
                                <p>Cash On Delivery</p>
                            </li>
                            <li>
                                <h6>Total<small>(Incl. VAT)</small></h6>
                                <p>$10,874.00</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-12">
                <div class="table-scroll">
                    <table class="table-list">
                        <thead>
                            <tr>
                                <th scope="col">Serial</th>
                                <th scope="col">Product</th>
                                <th scope="col">Name</th>
                                <th scope="col">Price</th>
                                <th scope="col">brand</th>
                                <th scope="col">quantity</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="table-serial">
                                    <h6>01</h6>
                                </td>
                                <td class="table-image"><img src="assets/images/product/01.jpg" alt="product"></td>
                                <td class="table-name">
                                    <h6>product name</h6>
                                </td>
                                <td class="table-price">
                                    <h6>$19<small>/kilo</small></h6>
                                </td>
                                <td class="table-brand">
                                    <h6>Fresh Company</h6>
                                </td>
                                <td class="table-quantity">
                                    <h6>3</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-serial">
                                    <h6>02</h6>
                                </td>
                                <td class="table-image"><img src="assets/images/product/02.jpg" alt="product"></td>
                                <td class="table-name">
                                    <h6>product name</h6>
                                </td>
                                <td class="table-price">
                                    <h6>$19<small>/kilo</small></h6>
                                </td>
                                <td class="table-brand">
                                    <h6>Radhuni Masala</h6>
                                </td>
                                <td class="table-quantity">
                                    <h6>5</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-serial">
                                    <h6>03</h6>
                                </td>
                                <td class="table-image"><img src="assets/images/product/03.jpg" alt="product"></td>
                                <td class="table-name">
                                    <h6>product name</h6>
                                </td>
                                <td class="table-price">
                                    <h6>$19<small>/kilo</small></h6>
                                </td>
                                <td class="table-brand">
                                    <h6>Pran Prio</h6>
                                </td>
                                <td class="table-quantity">
                                    <h6>2</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-serial">
                                    <h6>04</h6>
                                </td>
                                <td class="table-image"><img src="assets/images/product/04.jpg" alt="product"></td>
                                <td class="table-name">
                                    <h6>product name</h6>
                                </td>
                                <td class="table-price">
                                    <h6>$19<small>/kilo</small></h6>
                                </td>
                                <td class="table-brand">
                                    <h6>Real Food</h6>
                                </td>
                                <td class="table-quantity">
                                    <h6>3</h6>
                                </td>
                            </tr>
                            <tr>
                                <td class="table-serial">
                                    <h6>05</h6>
                                </td>
                                <td class="table-image"><img src="assets/images/product/05.jpg" alt="product"></td>
                                <td class="table-name">
                                    <h6>product name</h6>
                                </td>
                                <td class="table-price">
                                    <h6>$19<small>/kilo</small></h6>
                                </td>
                                <td class="table-brand">
                                    <h6>Rdhuni Company</h6>
                                </td>
                                <td class="table-quantity">
                                    <h6>7</h6>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12 text-center mt-5"><a class="btn btn-inline" href="#"><i
                        class="icofont-download"></i><span>download invoice</span></a>
                <div class="back-home"><a href="index.html">Back to Home</a></div>
            </div>
        </div>
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
    .invoice-recieved {
    text-align: left;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.invoice-recieved h6 {
    text-transform: capitalize
}

.invoice-recieved h6 span {
    display: block;
    font-weight: 400;
    margin-top: 10px
}

.invoice-details li {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: start;
    -ms-flex-align: start;
    align-items: flex-start;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    margin-bottom: 20px
}

.invoice-details li:last-child {
    margin-bottom: 0px
}

.invoice-details li h6 {
    line-height: 26px;
    white-space: nowrap
}

.invoice-details li h6 small {
    font-size: 14px;
    font-weight: 400;
    margin-left: 3px
}

.invoice-details li p {
    width: 250px;
    text-align: right
}

.table-scroll {
    padding: 35px;
    border-radius: 8px;
    background: var(--white)
}

.back-home {
    text-align: center
}

.back-home a {
    margin-top: 10px;
    font-weight: 500;
    color: var(--primary)
}

.back-home a:hover {
    text-decoration: underline
}

@media (max-width: 767px) {
    .invoice-recieved {
        -ms-flex-wrap: wrap;
        flex-wrap: wrap
    }

    .invoice-recieved h6 {
        margin-bottom: 25px;
        margin-right: 25px
    }
}
</style>
@endsection