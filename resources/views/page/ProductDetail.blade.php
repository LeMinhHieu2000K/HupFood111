@extends('master')details-preview
@section('content')
<section class="single-banner inner-section" style="background: url(assets/images/single-banner.jpg) no-repeat center;">
    <div class="container">
        <h2>product tab</h2>
        <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="index.html">Home</a></li>
            <li class="breadcrumb-item"><a href="shop-4column.html">shop-4column</a></li>
            <li class="breadcrumb-item active" aria-current="page">product-tab</li>
        </ol>
    </div>
</section>
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="details-gallery">
                    <div class="details-label-group"><label class="details-label new">new</label><label
                            class="details-label off">-10%</label></div>
                    <ul class="details-preview">
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                    </ul>
                    <ul class="details-thumb">
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                        <li><img src="assets/images/product/01.jpg" alt="product"></li>
                    </ul>
                </div>
            </div>
            <div class="col-lg-6">
                <ul class="product-navigation">
                    <li class="product-nav-prev"><a href="#"><i class="icofont-arrow-left"></i>prev product <span
                                class="product-nav-popup"><img src="assets/images/product/02.jpg"
                                    alt="product"><small>green chilis</small></span></a></li>
                    <li class="product-nav-next"><a href="#">next product <i class="icofont-arrow-right"></i><span
                                class="product-nav-popup"><img src="assets/images/product/03.jpg"
                                    alt="product"><small>green chilis</small></span></a></li>
                </ul>
                <div class="details-content">
                    <h3 class="details-name"><a href="#">existing product name</a></h3>
                    <div class="details-meta">
                        <p>SKU:<span>1234567</span></p>
                        <p>BRAND:<a href="#">radhuni</a></p>
                    </div>
                    <div class="details-rating"><i class="active icofont-star"></i><i
                            class="active icofont-star"></i><i class="active icofont-star"></i><i
                            class="active icofont-star"></i><i class="icofont-star"></i><a href="#">(3 reviews)</a>
                    </div>
                    <h3 class="details-price"><del>$38.00</del><span>$24.00<small>/per kilo</small></span></h3>
                    <p class="details-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit facere harum
                        natus amet soluta fuga consectetur alias veritatis quisquam ab eligendi itaque eos maiores
                        quibusdam.</p>
                    <div class="details-list-group"><label class="details-list-title">tags:</label>
                        <ul class="details-tag-list">
                            <li><a href="#">organic</a></li>
                            <li><a href="#">fruits</a></li>
                            <li><a href="#">chilis</a></li>
                        </ul>
                    </div>
                    <div class="details-list-group"><label class="details-list-title">Share:</label>
                        <ul class="details-share-list">
                            <li><a href="#" class="icofont-facebook" title="Facebook"></a></li>
                            <li><a href="#" class="icofont-twitter" title="Twitter"></a></li>
                            <li><a href="#" class="icofont-linkedin" title="Linkedin"></a></li>
                            <li><a href="#" class="icofont-instagram" title="Instagram"></a></li>
                        </ul>
                    </div>
                    <div class="details-add-group"><button class="product-add" title="Add to Cart"><i
                                class="fas fa-shopping-basket"></i><span>add to cart</span></button>
                        <div class="product-action"><button class="action-minus" title="Quantity Minus"><i
                                    class="icofont-minus"></i></button><input class="action-input"
                                title="Quantity Number" type="text" name="quantity" value="1"><button
                                class="action-plus" title="Quantity Plus"><i class="icofont-plus"></i></button>
                        </div>
                    </div>
                    <div class="details-action-group"><a class="details-wish wish" href="#"
                            title="Add Your Wishlist"><i class="icofont-heart"></i><span>add to wish</span></a><a
                            class="details-compare" href="compare.html" title="Compare This Item"><i
                                class="fas fa-random"></i><span>Compare This</span></a></div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <ul class="nav nav-tabs">
                    <li><a href="#tab-desc" class="tab-link active" data-bs-toggle="tab">descriptions</a></li>
                    <li><a href="#tab-spec" class="tab-link" data-bs-toggle="tab">Specifications</a></li>
                    <li><a href="#tab-reve" class="tab-link" data-bs-toggle="tab">reviews (2)</a></li>
                </ul>
            </div>
        </div>
        <div class="tab-pane fade show active" id="tab-desc">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <div class="tab-descrip">
                            <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequatur, ex! Incidunt
                                nemo aspernatur fugiat, saepe suscipit sit perferendis illum magnam voluptates
                                aliquid blanditiis, dolor assumenda dolorem ullam harum, doloribus molestiae! Unde
                                voluptas maiores exercitationem aperiam debitis accusantium, placeat vero neque,
                                atque eius numquam incidunt, culpa a odit consequatur nostrum aut nisi quisquam
                                sequi dignissimos sed. Odio necessitatibus officiis repudiandae omnis soluta fugiat
                                aliquam eius quae. Unde, ipsam atque assumenda consequuntur quia alias nulla,
                                cupiditate ab quos eveniet pariatur expedita repellendus fugit. Quisquam fuga et,
                                dolore aut temporibus atque itaque nesciunt reiciendis nobis, deleniti nihil vel qui
                                perferendis molestias aliquam doloremque.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-spec">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <table class="table table-bordered">
                            <tbody>
                                <tr>
                                    <th scope="row">Product code</th>
                                    <td>SKU: 101783</td>
                                </tr>
                                <tr>
                                    <th scope="row">Weight</th>
                                    <td>1kg, 2kg</td>
                                </tr>
                                <tr>
                                    <th scope="row">Styles</th>
                                    <td>@Girly</td>
                                </tr>
                                <tr>
                                    <th scope="row">Properties</th>
                                    <td>Short Dress</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
        <div class="tab-pane fade" id="tab-reve">
            <div class="row">
                <div class="col-lg-12">
                    <div class="product-details-frame">
                        <ul class="review-list">
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar" href="#"><img
                                            src="assets/images/avatar/01.jpg" alt="review"></a>
                                    <h5 class="review-meta"><a href="#">miron mahmud</a><span>June 02, 2020</span>
                                    </h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                    blanditiis dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                                <ul class="review-reply-list">
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar" href="#"><img
                                                    src="assets/images/avatar/02.jpg" alt="review"></a>
                                            <h5 class="review-meta"><a href="#">labonno khan</a><span><b>author
                                                        -</b>June 02, 2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem
                                            doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                    <li class="review-reply-item">
                                        <div class="review-media"><a class="review-avatar" href="#"><img
                                                    src="assets/images/avatar/03.jpg" alt="review"></a>
                                            <h5 class="review-meta"><a href="#">tahmina bonny</a><span>June 02,
                                                    2020</span></h5>
                                        </div>
                                        <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing
                                            elit. Ducimus hic amet qui velit, molestiae suscipit perferendis, autem
                                            doloremque blanditiis dolores nulla excepturi ea nobis!</p>
                                        <form class="review-reply"><input type="text"
                                                placeholder="reply your thoughts"><button><i
                                                    class="icofont-reply"></i>reply</button></form>
                                    </li>
                                </ul>
                            </li>
                            <li class="review-item">
                                <div class="review-media"><a class="review-avatar" href="#"><img
                                            src="assets/images/avatar/04.jpg" alt="review"></a>
                                    <h5 class="review-meta"><a href="#">shipu shikdar</a><span>June 02, 2020</span>
                                    </h5>
                                </div>
                                <ul class="review-rating">
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rating"></li>
                                    <li class="icofont-ui-rate-blank"></li>
                                </ul>
                                <p class="review-desc">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                    Ducimus hic amet qui velit, molestiae suscipit perferendis, autem doloremque
                                    blanditiis dolores nulla excepturi ea nobis!</p>
                                <form class="review-reply"><input type="text"
                                        placeholder="reply your thoughts"><button><i
                                            class="icofont-reply"></i>reply</button></form>
                            </li>
                        </ul>
                    </div>
                    <div class="product-details-frame">
                        <h3 class="frame-title">add your review</h3>
                        <form class="review-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="star-rating"><input type="radio" name="rating" id="star-1"><label
                                            for="star-1"></label><input type="radio" name="rating"
                                            id="star-2"><label for="star-2"></label><input type="radio"
                                            name="rating" id="star-3"><label for="star-3"></label><input
                                            type="radio" name="rating" id="star-4"><label
                                            for="star-4"></label><input type="radio" name="rating"
                                            id="star-5"><label for="star-5"></label></div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group"><textarea class="form-control"
                                            placeholder="Describe"></textarea></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="text" class="form-control"
                                            placeholder="Name"></div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group"><input type="email" class="form-control"
                                            placeholder="Email"></div>
                                </div>
                                <div class="col-lg-12"><button class="btn btn-inline"><i
                                            class="icofont-water-drop"></i><span>drop your review</span></button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="inner-section">
    <div class="container">
        <div class="row">
            <div class="col">
                <div class="section-heading">
                    <h2>related this items</h2>
                </div>
            </div>
        </div>
        <div class="row row-cols-2 row-cols-md-3 row-cols-lg-4 row-cols-xl-5">
            <div class="col">
                <div class="product-card">
                    <div class="product-media">
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/01.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label><label
                                class="label-text new">new</label></div><button class="product-wish wish"><i
                                class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/02.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/03.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/04.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/05.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/06.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/07.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/08.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/09.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
                        <div class="product-label"><label class="label-text sale">sale</label></div><button
                            class="product-wish wish"><i class="fas fa-heart"></i></button><a class="product-image"
                            href="product-video.html"><img src="assets/images/product/10.jpg" alt="product"></a>
                        <div class="product-widget"><a title="Product Compare" href="compare.html"
                                class="fas fa-random"></a><a title="Product Video"
                                href="https://youtu.be/9xzcVxSBbG8" class="venobox fas fa-play" data-autoplay="true"
                                data-vbtype="video"></a><a title="Product View" href="#" class="fas fa-eye"
                                data-bs-toggle="modal" data-bs-target="#product-view"></a></div>
                    </div>
                    <div class="product-content">
                        <div class="product-rating"><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="active icofont-star"></i><i
                                class="active icofont-star"></i><i class="icofont-star"></i><a
                                href="product-video.html">(3)</a></div>
                        <h6 class="product-name"><a href="product-video.html">fresh green chilis</a></h6>
                        <h6 class="product-price"><del>$34</del><span>$28<small>/piece</small></span></h6><button
                            class="product-add" title="Add to Cart"><i
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
        <div class="row">
            <div class="col-lg-12">
                <div class="section-btn-25"><a href="shop-4column.html" class="btn btn-outline"><i
                            class="fas fa-eye"></i><span>view all related</span></a></div>
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
@endsection


<style>
    .details-gallery {
    position: relative
}

.details-label-group {
    position: absolute;
    top: 20px;
    left: 20px;
    z-index: 1;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-orient: vertical;
    -webkit-box-direction: normal;
    -ms-flex-direction: column;
    flex-direction: column
}

.details-label {
    font-size: 14px;
    padding: 6px 10px;
    margin-bottom: 6px;
    line-height: 13px;
    border-radius: 3px;
    text-transform: capitalize;
    text-align: center;
    color: var(--white)
}

.details-label:last-child {
    margin-bottom: 0px
}

.details-label.off {
    background: var(--red)
}

.details-label.new {
    background: var(--green)
}

.details-label.sale {
    background: var(--orange)
}

.details-label.feat {
    background: var(--purple)
}

.details-label.rate {
    background: var(--yellow)
}

.details-preview {
    margin-bottom: 16px
}

.details-preview li img {
    width: 100%;
    border-radius: 8px
}
.details-thumb{
 margin-top: -70px
}

.details-thumb li {
    margin: 0px 8px;
    cursor: pointer;
   height: 120px;
}

.details-thumb li img {
    width: 100%;
    border-radius: 8px;
    border: 1px solid var(--white)
}

.details-thumb .slick-current img {
    border: 1px solid var(--primary)
}

.product-navigation {
    margin-bottom: 25px;
    padding: 20px 25px;
    border-radius: 8px;
    background: var(--white);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: justify;
    -ms-flex-pack: justify;
    justify-content: space-between
}

.product-navigation li a {
    color: var(--text);
    text-transform: capitalize;
    position: relative;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.product-navigation li a:hover {
    color: var(--primary)
}

.product-navigation li a:hover .product-nav-popup {
    visibility: visible;
    opacity: 1
}

.product-nav-popup {
    position: absolute;
    top: 30px;
    left: 50%;
    z-index: 3;
    width: 100px;
    height: auto;
    visibility: hidden;
    opacity: 0;
    padding: 10px;
    border-radius: 8px;
    -webkit-transform: translateX(-50%);
    transform: translateX(-50%);
    background: var(--white);
    border: 1px solid var(--border);
    -webkit-box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1);
    box-shadow: 0px 15px 35px 0px rgba(0, 0, 0, 0.1);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.product-nav-popup::before {
    position: absolute;
    content: "";
    z-index: -1;
    top: -3px;
    left: 50%;
    width: 12px;
    height: 12px;
    border-radius: 3px;
    -webkit-transform: rotate(45deg) translateX(-50%);
    transform: rotate(45deg) translateX(-50%);
    background: var(--white);
    border-top: 1px solid var(--border);
    border-left: 1px solid var(--border)
}

.product-nav-popup img {
    width: 100%
}

.product-nav-popup small {
    font-size: 14px;
    line-height: 18px;
    display: inline-block
}

.details-content {
    padding: 35px 35px;
    border-radius: 8px;
    background: var(--white)
}

.details-name {
    font-size: 26px;
    line-height: 34px;
    margin-bottom: 5px;
    text-transform: capitalize
}

.details-name a {
    color: var(--heading);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.details-name a:hover {
    color: var(--primary)
}

.details-meta {
    margin-bottom: 12px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.details-meta p {
    font-size: 13px;
    margin-right: 20px;
    white-space: nowrap;
    text-transform: uppercase;
    color: var(--placeholder)
}

.details-meta span,
.details-meta a {
    margin-left: 5px;
    color: var(--placeholder)
}

.details-meta a:hover {
    text-decoration: underline;
    color: var(--primary)
}

.details-rating {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    margin-bottom: 15px
}

.details-rating i,
.details-rating a {
    font-size: 15px;
    margin-right: 3px;
    color: var(--gray)
}

.details-rating a {
    margin-left: 8px;
    white-space: nowrap;
    text-transform: capitalize;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.details-rating a:hover {
    color: var(--primary);
    text-decoration: underline
}

.details-rating .active {
    color: var(--yellow)
}

.details-price {
    margin-bottom: 20px
}

.details-price del {
    color: var(--red);
    margin-right: 25px
}

.details-price span {
    color: var(--primary);
    white-space: nowrap
}

.details-price span small {
    font-size: 14px;
    font-weight: 400;
    text-transform: capitalize
}

.details-desc {
    margin-bottom: 25px
}

.details-list-group {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start;
    margin-bottom: 25px
}

.details-list-group:last-child {
    margin-bottom: 0px
}

.details-list-title {
    font-weight: 500;
    margin-right: 15px;
    color: var(--heading);
    text-transform: capitalize
}

.details-tag-list {
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

.details-tag-list li {
    margin-right: 8px
}

.details-tag-list li a {
    font-size: 14px;
    line-height: 12px;
    padding: 8px 10px;
    border-radius: 5px;
    letter-spacing: 0.3px;
    text-transform: capitalize;
    color: var(--text);
    background: var(--chalk);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.details-tag-list li a:hover {
    color: var(--white);
    background: var(--primary)
}

.details-share-list {
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

.details-share-list li {
    margin-right: 8px
}

.details-share-list li a {
    width: 35px;
    height: 35px;
    font-size: 16px;
    line-height: 35px;
    border-radius: 50%;
    text-align: center;
    color: var(--text);
    background: var(--chalk);
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.details-share-list li a:hover {
    color: var(--white);
    background: var(--primary)
}

.details-add-group {
    margin: 45px 0px 15px
}

.details-add-group .product-add,
.details-add-group .action-input {
    padding: 10px 0px;
    color: var(--white);
    background: var(--primary);
    text-transform: uppercase
}

.details-add-group .action-minus i,
.details-add-group .action-plus i {
    background: var(--chalk)
}

.details-action-group {
    display: -ms-grid;
    display: grid;
    grid-gap: 15px;
    -ms-grid-columns: (minmax(200px, 1fr))[auto-fit];
    grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
    position: relative
}

.details-action-group a {
    padding: 10px 0px;
    border-radius: 8px;
    color: var(--text);
    background: var(--chalk);
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.details-action-group a:hover {
    color: var(--primary)
}

.details-action-group a i {
    font-size: 16px;
    margin-right: 8px
}

.details-action-group a span {
    font-size: 14px;
    font-weight: 500;
    letter-spacing: 0.5px;
    text-transform: uppercase
}

.details-wish.active {
    color: var(--white);
    background: var(--primary)
}

.details-wish.active:hover {
    color: var(--white);
    background: var(--primary)
}

.product-details-frame {
    padding: 50px;
    border-radius: 8px;
    margin-bottom: 30px;
    background: var(--white)
}

.product-details-frame:last-child {
    margin-bottom: 0px
}

.frame-title {
    margin-bottom: 30px;
    text-transform: capitalize
}

.tab-descrip {
    position: relative
}

.tab-descrip ul {
    list-style: disc;
    margin-left: 20px;
    margin-top: 25px
}

.tab-descrip ul li {
    margin-bottom: 8px
}

.tab-descrip ul li:last-child {
    margin-bottom: 0px
}

.tab-descrip img {
    width: 100%;
    border-radius: 8px
}

.tab-descrip a {
    position: absolute;
    top: 50%;
    left: 50%;
    z-index: 2;
    width: 80px;
    height: 80px;
    font-size: 22px;
    line-height: 80px;
    border-radius: 50%;
    text-align: center;
    color: var(--white);
    background: rgba(15, 199, 86, 0.8);
    -webkit-transform: translate(-50%, -50%);
    transform: translate(-50%, -50%);
    -webkit-box-shadow: var(--primary-bshadow);
    box-shadow: var(--primary-bshadow);
    text-shadow: var(--primary-tshadow)
}

.table-bordered {
    margin-bottom: 0px
}

.table-bordered th,
.table-bordered td {
    padding: 12px 25px;
    text-align: left
}

.table-bordered th {
    font-weight: 500
}

.table-bordered td:last-child {
    border-right: 1px solid var(--border)
}

.review-item {
    padding: 45px 45px;
    border-radius: 8px;
    margin-bottom: 30px;
    background: var(--chalk);
    border: 1px solid var(--border)
}

.review-item:last-child {
    margin-bottom: 0px
}

.review-media {
    margin-bottom: 15px;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.review-avatar {
    margin-right: 15px;
    border-radius: 50%;
    border: 2px solid var(--primary)
}

.review-avatar img {
    width: 65px;
    border-radius: 50%;
    border: 2px solid var(--white)
}

.review-meta {
    text-transform: capitalize
}

.review-meta a {
    color: var(--heading);
    text-transform: capitalize;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.review-meta a:hover {
    color: var(--primary)
}

.review-meta span {
    display: block;
    font-size: 15px;
    font-weight: 400;
    color: var(--text)
}

.review-meta span b {
    font-weight: 500;
    color: var(--primary)
}

.review-rating {
    margin-bottom: 10px
}

.review-rating li {
    font-size: 16px;
    margin-right: 5px;
    color: var(--yellow);
    display: inline-block
}

.review-desc {
    margin-bottom: 20px
}

.review-reply {
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
    -webkit-box-pack: start;
    -ms-flex-pack: start;
    justify-content: flex-start
}

.review-reply input {
    width: 100%;
    padding: 7px 18px;
    border-radius: 6px;
    margin-right: 20px;
    background: var(--white)
}

.review-reply button {
    font-size: 15px;
    padding: 6px 15px;
    border-radius: 6px;
    color: var(--white);
    background: var(--primary);
    text-transform: capitalize;
    transition: all linear .3s;
    -webkit-transition: all linear .3s;
    -moz-transition: all linear .3s;
    -ms-transition: all linear .3s;
    -o-transition: all linear .3s
}

.review-reply button:hover {
    background: var(--heading)
}

.review-reply button i {
    margin-right: 5px
}

.review-reply-list {
    margin-left: 80px;
    margin-top: 35px;
    border-top: 1px solid var(--border)
}

.review-reply-item {
    padding: 30px 0px;
    border-bottom: 1px solid var(--border)
}

.review-reply-item:last-child {
    padding-bottom: 0px;
    border-bottom: none
}

.review-form .btn {
    width: 100%;
    padding: 12px 30px
}

@media (max-width: 991px) {
    .product-navigation {
        margin: 25px 0px
    }
}

@media (max-width: 575px) {
    .details-content {
        padding: 20px
    }

    .details-name {
        font-size: 22px;
        line-height: 30px
    }

    .product-details-frame {
        padding: 20px
    }

    .review-item {
        padding: 20px 15px
    }

    .review-reply {
        -webkit-box-orient: vertical;
        -webkit-box-direction: normal;
        -ms-flex-direction: column;
        flex-direction: column
    }

    .review-reply input {
        margin: 0px 0px 15px
    }

    .review-reply-list {
        margin-left: 25px
    }

    .star-rating label {
        margin: 0px 6px
    }
}

@media (min-width: 576px) and (max-width: 767px) {
    .review-reply-list {
        margin-left: 30px
    }
}
</style>