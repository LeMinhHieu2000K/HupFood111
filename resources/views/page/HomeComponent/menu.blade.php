<nav class="navbar-part">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div class="navbar-content">
                    <ul class="navbar-list">
                        <li class="navbar-item dropdown"><a class="navbar-link " href="#">Trang Chủ</a>
                           
                        </li>
                        <li class="navbar-item dropdown-megamenu"><a class="navbar-link dropdown-arrow "
                                href="#">Danh mục</a>
                            <div class="megamenu">
                                <div class="container">
                                    <div class="row">
                                        @foreach ($category as $item)
                                        <div class="col-lg-3">
                                            <div class="megamenu-wrap">
                                                <h5 class="megamenu-title">{{$item->name}}</h5>
                                                <ul class="megamenu-list">
                                                    @foreach($item->product_type as $type)
                                                    <li><a href="product-list/{{$type->id}}">{{$type->name}}</a></li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        </div>
                                        @endforeach
                                       
                                        
                                    </div>
                                </div>
                            </div>
                        </li>
                
                        <li class="navbar-item dropdown"><a class="navbar-link " href="about">Giới Thiệu</a>
                            
                        </li>
                        
                        <li class="navbar-item dropdown"><a class="navbar-link " href="blog-list">Tin Tức</a>
                        </li>
                        <li class="navbar-item dropdown"><a class="navbar-link " href="contact">Liên Hệ</a>
                        </li>
                        
                    </ul>
                    <div class="navbar-info-group">
                        <div class="navbar-info"><i class="icofont-ui-touch-phone"></i>
                            <p><small>call us</small><span>(+880) 183 8288 389</span></p>
                        </div>
                        <div class="navbar-info"><i class="icofont-ui-email"></i>
                            <p><small>email us</small><span>support@example.com</span></p>
                        </div>
                        <div class="navbar-info">
                            <li class="navbar-item dropdown"><a class="navbar-link dropdown-arrow"
                                href="#">Tài Khoản</a>
                            <ul class="dropdown-position-list">
                                <li><a href="profile-client">Thông Tin Tài Khoản</a></li>
                                <li><a href="wallet">Ví Của Tôi</a></li>
                                <li><a href="login">Đăng Nhập</a></li>
                                <li><a href="register">Đăng Ký</a></li>
                                <li><a href="register">Đăng Xuất</a></li>
                                <li><a href="reset-password">reset Mật Khẩu</a></li>
                                <li><a href="change-password">Đổi Mật Khẩu</a></li>
                            </ul>
                            </li>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</nav>