@extends('master')
@section('content')
    @include('page.HomeComponent.menu')
    @include('page.HomeComponent.cartSidebar')
    <aside class="nav-sidebar">
        <div class="nav-header"><a href="#"><img src="images/logo.png" alt="logo"></a><button class="nav-close"><i
                    class="icofont-close"></i></button></div>
        <div class="nav-content">
            <div class="nav-btn"><a href="login.html" class="btn btn-inline"><i class="fa fa-unlock-alt"></i><span>join
                        here</span></a></div>
            <div class="nav-select-group">
                <div class="nav-select"><i class="icofont-world"></i><select class="select">
                        <option value="english" selected>English</option>
                        <option value="bangali">Bangali</option>
                        <option value="arabic">Arabic</option>
                    </select></div>
                <div class="nav-select"><i class="icofont-money"></i><select class="select">
                        <option value="english" selected>Doller</option>
                        <option value="bangali">Pound</option>
                        <option value="arabic">Taka</option>
                    </select></div>
            </div>
            <ul class="nav-list">
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-home"></i>Home</a>
                    <ul class="dropdown-list">
                        <li><a href="home-grid.html">Home grid</a></li>
                        <li><a href="index.html">Home index</a></li>
                        <li><a href="home-classic.html">Home classic</a></li>
                        <li><a href="home-standard.html">Home standard</a></li>
                        <li><a href="home-category.html">Home category</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-food-cart"></i>shop</a>
                    <ul class="dropdown-list">
                        <li><a href="shop-5column.html">shop 5 column</a></li>
                        <li><a href="shop-4column.html">shop 4 column</a></li>
                        <li><a href="shop-3column.html">shop 3 column</a></li>
                        <li><a href="shop-2column.html">shop 2 column</a></li>
                        <li><a href="shop-1column.html">shop 1 column</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-page"></i>product</a>
                    <ul class="dropdown-list">
                        <li><a href="product-tab.html">product tab</a></li>
                        <li><a href="product-grid.html">product grid</a></li>
                        <li><a href="product-video.html">product video</a></li>
                        <li><a href="product-simple.html">product simple</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-bag-alt"></i>my account</a>
                    <ul class="dropdown-list">
                        <li><a href="profile.html">profile</a></li>
                        <li><a href="wallet.html">wallet</a></li>
                        <li><a href="wishlist.html">wishlist</a></li>
                        <li><a href="compare.html">compare</a></li>
                        <li><a href="checkout.html">checkout</a></li>
                        <li><a href="orderlist.html">order history</a></li>
                        <li><a href="invoice.html">order invoice</a></li>
                        <li><a href="email-template.html">email template</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-lock"></i>authentic</a>
                    <ul class="dropdown-list">
                        <li><a href="login.html">login</a></li>
                        <li><a href="register.html">register</a></li>
                        <li><a href="reset-password.html">reset password</a></li>
                        <li><a href="change-password.html">change password</a></li>
                    </ul>
                </li>
                <li><a class="nav-link dropdown-link" href="#"><i class="icofont-book-alt"></i>blogs</a>
                    <ul class="dropdown-list">
                        <li><a href="blog-grid.html">blog grid</a></li>
                        <li><a href="blog-standard.html">blog standard</a></li>
                        <li><a href="blog-details.html">blog details</a></li>
                        <li><a href="blog-author.html">blog author</a></li>
                    </ul>
                </li>
                <li><a class="nav-link" href="offer.html"><i class="icofont-sale-discount"></i>offers</a></li>
                <li><a class="nav-link" href="about.html"><i class="icofont-info-circle"></i>about us</a></li>
                <li><a class="nav-link" href="faq.html"><i class="icofont-support-faq"></i>need help</a></li>
                <li><a class="nav-link" href="contact.html"><i class="icofont-contacts"></i>contact us</a></li>
                <li><a class="nav-link" href="privacy.html"><i class="icofont-warning"></i>privacy policy</a></li>
                <li><a class="nav-link" href="coming-soon.html"><i class="icofont-options"></i>coming soon</a></li>
                <li><a class="nav-link" href="error.html"><i class="icofont-ui-block"></i>404 error</a></li>
                <li><a class="nav-link" href="login.html"><i class="icofont-logout"></i>logout</a></li>
            </ul>
            <div class="nav-info-group">
                <div class="nav-info"><i class="icofont-ui-touch-phone"></i>
                    <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                </div>
                <div class="nav-info"><i class="icofont-ui-email"></i>
                    <p><small>email us</small><span>support@example.com</span></p>
                </div>
            </div>
            <div class="nav-footer">
                <p>All Rights Reserved by <a href="#">Mironcoder</a></p>
            </div>
        </div>
    </aside>
    @include('page.HomeComponent.MobileMenu')
    <div class="modal fade" id="product-view">
        <div class="modal-dialog">
            <div class="modal-content"><button class="modal-close icofont-close" data-bs-dismiss="modal"></button>
                <div class="product-view">
                    <div class="row">
                        <div class="col-md-6 col-lg-6">
                            <div class="view-gallery">
                                <div class="view-label-group"><label class="view-label new">new</label><label
                                        class="view-label off">-10%</label></div>
                                <ul class="preview-slider slider-arrow">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                                <ul class="thumb-slider">
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                    <li><img src="images/product/01.jpg" alt="product"></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-md-6 col-lg-6">
                            <div class="view-details">
                                <h3 class="view-name"><a href="product-video.html">existing product name</a></h3>
                                <div class="view-meta">
                                    <p>SKU:<span>1234567</span></p>
                                    <p>BRAND:<a href="#">radhuni</a></p>
                                </div>
                                <div class="view-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3 reviews)</a></div>
                                <h3 class="view-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                                <p class="view-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit non tempora
                                    magni repudiandae sint suscipit tempore quis maxime explicabo veniam eos
                                    reprehenderit fuga</p>
                                <div class="view-list-group"><label class="view-list-title">tags:</label>
                                    <ul class="view-tag-list">
                                        <li><a href="#">organic</a></li>
                                        <li><a href="#">vegetable</a></li>
                                        <li><a href="#">chilis</a></li>
                                    </ul>
                                </div>
                                <div class="view-list-group"><label class="view-list-title">Share:</label>
                                    <ul class="view-share-list">
                                        <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                                        <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                                        <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                                        <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                                    </ul>
                                </div>
                                <div class="view-add-group"><button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                                <div class="view-action-group"><a class="view-wish wish" href="#"
                                        title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to
                                            wish</span></a><a class="view-compare" href="compare.html"
                                        title="Compare This Item"><i class="fas fa-random"></i><span>Compare
                                            This</span></a></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('page.HomeComponent.slider')
    <section class="section recent-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Món Mới</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">

                @foreach($NewProduct as $item)
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label">
                                    @if($item->new == 1)
                                        @if($item->promotion_price == 0)
                                        <label class="label-text new">new</label>
                                        @elseif($item->promotion_price != 0)
                                        <label class="label-text sale">sale</label>
                                        <label class="label-text new">new</label>
                                        @endif
                                    @endif
                                </div>
                                <button class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/{{$item->image}}"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                        href="#" class="fas fa-eye" data-bs-toggle="modal"
                                        data-bs-target="#product-view"></a></div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">{{$item->name}}</a></h6>
                                <h6 class="product-price">
                                    @if($item->promotion_price == 0)
                                    <span>{{number_format($item->unit_price)}}.đ</span>
                                    @else
                                    <del>{{number_format($item->unit_price)}}.đ</del><span>{{number_format($item->promotion_price)}}.đ</span>
                                    @endif
                                </h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span><a class="addCart" href="">Thêm vào giỏ hàng</a></span></button>
                                
                            </div>
                        </div>
                    </div>
                    @endforeach

                
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    @include('page.HomeComponent.PromotionSecond')
    <section class="section feature-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Nổi Bật</h2>
                    </div>
                </div>
            </div>
            <div class="row row-cols-1 row-cols-md-1 row-cols-lg-2 row-cols-xl-2">
                @foreach($ProductFeature as $item)
                <div class="col">
                    <div class="feature-card">
                        <div class="feature-media">
                            <div class="feature-label">
                                @if($item->promotion_price == 0)
                                @elseif($item->promotion_price != 0)
                                    @if($item->new == 1)
                                       <label class="label-text sale">sale</label>
                                       <label class="label-text new">new</label>
                                    @elseif($item->new == 0)
                                       <label class="label-text sale">sale</label>
                                    @endif
                                @endif
                                </div><button
                                class="feature-wish wish"><i class="fas fa-heart"></i></button><a class="feature-image"
                                href="product-video.html"><img src="assets/images/product/{{$item->image}}" alt="product"></a>
                            <div class="feature-widget"><a title="Product Compare" href="compare.html"
                                    class="fas fa-random"></a><a title="Product Video"
                                    href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                    data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                    data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                        </div>
                        <div class="feature-content">
                            <h6 class="feature-name"><a href="product-video.html">{{$item->name}}</a></h6>
                            <div class="feature-rating"><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="active icofont-star"></i><i
                                    class="active icofont-star"></i><i class="icofont-star"></i><a
                                    href="product-video.html">(3 Reviews)</a></div>
                            <h6 class="feature-price">
                                @if($item->promotion_price == 0)
                                    <span>{{number_format($item->unit_price)}}.đ</span>
                                    @else
                                    <del>{{number_format($item->unit_price)}}.đ</del><span>{{number_format($item->promotion_price)}}.đ</span>
                                    @endif
                            </h6>
                            <p class="feature-desc">Lorem ipsum dolor sit consectetur adipisicing xpedita dicta amet
                                olor ut eveniet commodi...</p><button class="product-add" title="Add to Cart"><i
                                    class="fas fa-shopping-basket"></i><span>add</span></button>
                            <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                        class="icofont-minus"></i></button><input class="action-input"
                                    title="Quantity Number" type="text" name="quantity" value="1"><button
                                    class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    @include('page.HomeComponent.CountDown')
    <section class="section newitem-part">
        <div class="container">
            <div class="row">
                <div class="col">
                    <div class="section-heading">
                        <h2>discount</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <ul class="new-slider slider-arrow">
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/15.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/16.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/17.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/18.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/19.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                        <li>
                            <div class="product-card">
                                <div class="product-media">
                                    <div class="product-label"><label class="label-text new">new</label></div><button
                                        class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                        class="product-image" href="product-video.html"><img src="assets/images/product/20.jpg"
                                            alt="product"></a>
                                    <div class="product-widget"><a title="Product Compare" href="compare.html"
                                            class="fas fa-random"></a><a title="Product Video"
                                            href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                            data-autoplay="true" data-vbtype="video"></a><a title="Product View"
                                            href="#" class="fas fa-eye" data-bs-toggle="modal"
                                            data-bs-target="#product-view"></a></div>
                                </div>
                                <div class="product-content">
                                    <div class="product-rating"><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                                            class="active icofont-star"></i><i class="icofont-star"></i><a
                                            href="product-video.html">(3)</a></div>
                                    <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                    <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                    <button class="product-add" title="Add to Cart"><i
                                            class="fas fa-shopping-basket"></i><span>add</span></button>
                                    <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                                class="icofont-minus"></i></button><input class="action-input"
                                            title="Quantity Number" type="text" name="quantity" value="1"><button
                                            class="action-plus" title="Quantity Plus"><i
                                                class="icofont-plus"></i></button></div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
            <div class="row">
                <div class="col">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    @include('page.HomeComponent.Promotion')
    <section class="section niche-part">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-heading">
                        <h2>Browse by Top Niche</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <ul class="nav nav-tabs">
                        <li><a href="#top-order" class="tab-link active" data-bs-toggle="tab"><i
                                    class="icofont-price"></i><span>top order</span></a></li>
                        <li><a href="#top-rate" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-star"></i><span>top rating</span></a></li>
                        <li><a href="#top-disc" class="tab-link" data-bs-toggle="tab"><i
                                    class="icofont-sale-discount"></i><span>top discount</span></a></li>
                    </ul>
                </div>
            </div>
            <div class="tab-pane fade show active" id="top-order">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/01.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/02.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/03.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/04.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/05.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/06.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/07.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/08.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/09.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text order">314</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/10.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-rate">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/11.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/12.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/13.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/14.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/15.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/16.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card product-disable">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/17.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/18.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/19.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text rate">4.8</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/20.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="tab-pane fade" id="top-disc">
                <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/06.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/07.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/08.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/09.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/10.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/11.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/12.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/13.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/14.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col">
                        <div class="product-card">
                            <div class="product-media">
                                <div class="product-label"><label class="label-text off">-10%</label></div><button
                                    class="product-wish wish"><i class="fas fa-heart"></i></button><a
                                    class="product-image" href="product-video.html"><img src="assets/images/product/15.jpg"
                                        alt="product"></a>
                                <div class="product-widget"><a title="Product Compare" href="compare.html"
                                        class="fas fa-random"></a><a title="Product Video"
                                        href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play"
                                        data-autoplay="true" data-vbtype="video"></a><a title="Product View" href="#"
                                        class="fas fa-eye" data-bs-toggle="modal" data-bs-target="#product-view"></a>
                                </div>
                            </div>
                            <div class="product-content">
                                <div class="product-rating"><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="active icofont-star"></i><i
                                        class="active icofont-star"></i><i class="icofont-star"></i><a
                                        href="product-video.html">(3)</a></div>
                                <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                                <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6>
                                <button class="product-add" title="Add to Cart"><i
                                        class="fas fa-shopping-basket"></i><span>add</span></button>
                                <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                            class="icofont-minus"></i></button><input class="action-input"
                                        title="Quantity Number" type="text" name="quantity" value="1"><button
                                        class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                                class="fas fa-eye"></i><span>show more</span></a></div>
                </div>
            </div>
        </div>
    </section>
    @include('page.HomeComponent.Brand')
    @include('page.HomeComponent.FeedbackClient')
    @include('page.HomeComponent.BlogPart')
    @include('page.HomeComponent.IntroPart')

@endsection