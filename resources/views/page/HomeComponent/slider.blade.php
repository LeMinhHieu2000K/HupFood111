<section class="banner-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 order-1 order-lg-0 order-xl-0">
                <div class="row">
                    <div class="col-sm-6 col-lg-12">
                        <div class="home-grid-promo"><a href="#"><img src="assets/images/promo/home/01.jpg"
                                    alt="promo"></a></div>
                    </div>
                    <div class="col-sm-6 col-lg-12">
                        <div class="home-grid-promo"><a href="#"><img src="assets/images/promo/home/02.jpg"
                                    alt="promo"></a></div>
                    </div>
                </div>
            </div>
            <div class="col-lg-8 order-0 order-lg-1 order-xl-1">
                <div class="home-grid-slider slider-arrow slider-dots"><a href="#"><img
                            src="assets/images/home/grid/01.jpg" alt=""></a><a href="#"><img src="assets/images/home/grid/02.jpg"
                            alt=""></a></div>
            </div>
        </div>
    </div>
</section>
<section class="section suggest-part">
    <div class="container">
        <ul class="suggest-slider slider-arrow">
            

                @foreach($ProductType as $item)
            <li><a class="suggest-card"  href="product-list/{{$item->id}}"><img src="assets/images/suggest/{{$item->image}}" alt="suggest">
                    <h5>{{$item->name}}<span>34 items</span></h5>
                </a></li>

            @endforeach
        </ul>
    </div>
</section>


<style>
    
</style>


