@extends('master')

@section('content')
<section class="inner-section single-banner" style="background: url(assets/images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>Order History</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Orderlist</li>
        </ol>
    </div>
</section>
<section class="inner-section orderlist-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="orderlist-filter">
                    <h5>total order <span>- (4)</span></h5>
                    <div class="filter-short"><label class="form-label">short by:</label><select
                            class="form-select">
                            <option value="all" selected>all order</option>
                            <option value="recieved">recieved order</option>
                            <option value="processed">processed order</option>
                            <option value="shipped">shipped order</option>
                            <option value="delivered">delivered order</option>
                        </select></div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <div class="orderlist">
                    <div class="orderlist-head">
                        <h5>order#01</h5>
                        <h5>order recieved</h5>
                    </div>
                    <div class="orderlist-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order-track">
                                    <ul class="order-track-list">
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                recieved</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                processed</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                shipped</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                delivered</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>order id</h6>
                                        <p>14667</p>
                                    </li>
                                    <li>
                                        <h6>Total Item</h6>
                                        <p>6 Items</p>
                                    </li>
                                    <li>
                                        <h6>Order Time</h6>
                                        <p>7th February 2021</p>
                                    </li>
                                    <li>
                                        <h6>Delivery Time</h6>
                                        <p>12th February 2021</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>Sub Total</h6>
                                        <p>$10,864.00</p>
                                    </li>
                                    <li>
                                        <h6>discount</h6>
                                        <p>$20.00</p>
                                    </li>
                                    <li>
                                        <h6>delivery fee</h6>
                                        <p>$49.00</p>
                                    </li>
                                    <li>
                                        <h6>Total<small>(Incl. VAT)</small></h6>
                                        <p>$10,874.00</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <div class="orderlist-deliver">
                                    <h6>Delivery location</h6>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
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
                                                <td class="table-image"><img src="assets/images/product/01.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/02.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/03.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/04.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/05.jpg"
                                                        alt="product"></td>
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
                    </div>
                </div>
                <div class="orderlist">
                    <div class="orderlist-head">
                        <h5>order#02</h5>
                        <h5>order Processed</h5>
                    </div>
                    <div class="orderlist-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order-track">
                                    <ul class="order-track-list">
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                recieved</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                processed</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                shipped</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                delivered</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>order id</h6>
                                        <p>14667</p>
                                    </li>
                                    <li>
                                        <h6>Total Item</h6>
                                        <p>6 Items</p>
                                    </li>
                                    <li>
                                        <h6>Order Time</h6>
                                        <p>7th February 2021</p>
                                    </li>
                                    <li>
                                        <h6>Delivery Time</h6>
                                        <p>12th February 2021</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>Sub Total</h6>
                                        <p>$10,864.00</p>
                                    </li>
                                    <li>
                                        <h6>discount</h6>
                                        <p>$20.00</p>
                                    </li>
                                    <li>
                                        <h6>delivery fee</h6>
                                        <p>$49.00</p>
                                    </li>
                                    <li>
                                        <h6>Total<small>(Incl. VAT)</small></h6>
                                        <p>$10,874.00</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <div class="orderlist-deliver">
                                    <h6>Delivery location</h6>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
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
                                                <td class="table-image"><img src="assets/images/product/01.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/02.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/03.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/04.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/05.jpg"
                                                        alt="product"></td>
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
                    </div>
                </div>
                <div class="orderlist">
                    <div class="orderlist-head">
                        <h5>order#03</h5>
                        <h5>order shipped</h5>
                    </div>
                    <div class="orderlist-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order-track">
                                    <ul class="order-track-list">
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                recieved</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                processed</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                shipped</span></li>
                                        <li class="order-track-item"><i class="icofont-close"></i><span>order
                                                delivered</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>order id</h6>
                                        <p>14667</p>
                                    </li>
                                    <li>
                                        <h6>Total Item</h6>
                                        <p>6 Items</p>
                                    </li>
                                    <li>
                                        <h6>Order Time</h6>
                                        <p>7th February 2021</p>
                                    </li>
                                    <li>
                                        <h6>Delivery Time</h6>
                                        <p>12th February 2021</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>Sub Total</h6>
                                        <p>$10,864.00</p>
                                    </li>
                                    <li>
                                        <h6>discount</h6>
                                        <p>$20.00</p>
                                    </li>
                                    <li>
                                        <h6>delivery fee</h6>
                                        <p>$49.00</p>
                                    </li>
                                    <li>
                                        <h6>Total<small>(Incl. VAT)</small></h6>
                                        <p>$10,874.00</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <div class="orderlist-deliver">
                                    <h6>Delivery location</h6>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
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
                                                <td class="table-image"><img src="assets/images/product/01.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/02.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/03.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/04.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/05.jpg"
                                                        alt="product"></td>
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
                    </div>
                </div>
                <div class="orderlist">
                    <div class="orderlist-head">
                        <h5>order#04</h5>
                        <h5>order delivered</h5>
                    </div>
                    <div class="orderlist-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="order-track">
                                    <ul class="order-track-list">
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                recieved</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                processed</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                shipped</span></li>
                                        <li class="order-track-item active"><i class="icofont-check"></i><span>order
                                                delivered</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>order id</h6>
                                        <p>14667</p>
                                    </li>
                                    <li>
                                        <h6>Total Item</h6>
                                        <p>6 Items</p>
                                    </li>
                                    <li>
                                        <h6>Order Time</h6>
                                        <p>7th February 2021</p>
                                    </li>
                                    <li>
                                        <h6>Delivery Time</h6>
                                        <p>12th February 2021</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-4">
                                <ul class="orderlist-details">
                                    <li>
                                        <h6>Sub Total</h6>
                                        <p>$10,864.00</p>
                                    </li>
                                    <li>
                                        <h6>discount</h6>
                                        <p>$20.00</p>
                                    </li>
                                    <li>
                                        <h6>delivery fee</h6>
                                        <p>$49.00</p>
                                    </li>
                                    <li>
                                        <h6>Total<small>(Incl. VAT)</small></h6>
                                        <p>$10,874.00</p>
                                    </li>
                                </ul>
                            </div>
                            <div class="col-lg-3">
                                <div class="orderlist-deliver">
                                    <h6>Delivery location</h6>
                                    <p>jalkuri, fatullah, narayanganj-1420. word no-09, road no-17/A</p>
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
                                                <td class="table-image"><img src="assets/images/product/01.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/02.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/03.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/04.jpg"
                                                        alt="product"></td>
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
                                                <td class="table-image"><img src="assets/images/product/05.jpg"
                                                        alt="product"></td>
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
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-12">
                <ul class="pagination">
                    <li class="page-item"><a class="page-link" href="#"><i class="icofont-arrow-left"></i></a></li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">...</li>
                    <li class="page-item"><a class="page-link" href="#">65</a></li>
                    <li class="page-item"><a class="page-link" href="#"><i class="icofont-arrow-right"></i></a></li>
                </ul>
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
    .orderlist-filter {
    padding: 20px 25px;
    margin-bottom: 30px;
    border-radius: 8px;
    background: var(--white);
    border: 1px solid var(--border);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.orderlist-filter h5 {
    text-transform: capitalize
}

.filter-short {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center
}

.filter-short .form-label {
    font-size: 18px;
    margin: 0px 8px 0px 0px;
    color: var(--heading)
}

.filter-short .form-select {
    width: 150px;
    background: var(--chalk)
}

.orderlist {
    padding: 0px 30px;
    border-radius: 8px;
    margin-bottom: 30px;
    background: var(--white);
    border: 1px solid var(--border);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.orderlist-head {
    padding: 25px 0px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between;
    cursor: pointer
}

.orderlist-head h5 {
    color: var(--primary);
    text-transform: capitalize
}

.orderlist-details {
    padding: 25px;
    border-radius: 8px;
    background: var(--chalk);
    margin-bottom: 25px
}

.orderlist-details li {
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

.orderlist-details li:last-child {
    margin-bottom: 0px
}

.orderlist-details li h6 {
    line-height: 26px;
    white-space: nowrap;
    text-transform: capitalize
}

.orderlist-details li h6 small {
    font-size: 14px;
    font-weight: 400;
    margin-left: 3px
}

.orderlist-details li p {
    width: 250px;
    text-align: right
}

.orderlist-deliver {
    height: 215px;
    padding: 25px;
    border-radius: 8px;
    margin-bottom: 25px;
    background: var(--chalk)
}

.orderlist-deliver h6 {
    margin-bottom: 15px;
    white-space: nowrap;
    text-transform: capitalize
}

.orderlist-deliver p {
    text-transform: capitalize
}

.table-list {
    overflow: hidden;
    border-radius: 8px;
    margin-bottom: 30px;
    background: var(--chalk)
}

@media (max-width: 575px) {
    .orderlist-filter {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column;
        -webkit-box-pack: center;
        -ms-flex-pack: center;
        justify-content: center
    }

    .orderlist-filter h5 {
        margin-bottom: 15px
    }

    .orderlist {
        padding: 0px 15px
    }

    .orderlist-head {
        padding: 15px 0px
    }
}
</style>
    
@endsection