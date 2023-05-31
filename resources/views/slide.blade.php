<link href='http://fonts.googleapis.com/css?family=Dosis:300,400' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css">
	<link rel="stylesheet" href="{{asset("css/font-awesome.min.css")}}">
	<link rel="stylesheet" href="{{asset("vendors/colorbox/example3/colorbox.css")}}">
	<link rel="stylesheet" href="{{asset("css/settings.css")}}">
	<link rel="stylesheet" href="{{asset("css/responsive.css")}}">
	<link rel="stylesheet" title="style" href="{{asset("css/style.css")}}">
	<link rel="stylesheet" href="{{asset("css/animate.css")}}">
	<link rel="stylesheet" title="style" href="{{asset("css/huong-style.css")}}">
@extends("header")

@section("content")
<div class="fullwidthbanner-container">
    <div class="fullwidthbanner">
        <div class="bannercontainer" >
        <div class="banner" >
            <ul>
				
                    @foreach($slide as $item)
    
                            <div class="tp-bgimg defaultimg"
                        data-lazyload="undefined"
                        data-bgfit="cover"
                        data-bgposition="center center"
                        data-bgrepeat="no-repeat"
                        style="background-color: rgba(0, 0, 0, 0);
                                background-repeat: no-repeat;
                                background-image: url('{{ asset("slide/".$item->slide) }}');
                                background-size: cover;
                                background-position: center center;
                                width: 100%;
                                height: 100%;
                                opacity: 1;
                                visibility: inherit;">
                    </div>
                
                                        @endforeach
                
			</ul>
            </div>
        </div>

        <div class="tp-bannertimer"></div>
    </div>
</div>
<!--slider-->
</div>
<div class="container">
<div id="content" class="space-top-none">
<div class="main-content">
<div class="space60">&nbsp;</div>
<div class="row">
    <div class="col-sm-12">
        <div class="beta-products-list">
            <h4>New Products</h4>
            <div class="beta-products-details">
                <p class="pull-left">438 styles found</p>
                <div class="clearfix"></div>
            </div>

            <div class="row">
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/111.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/234.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span class="flash-del">$34.55</span>
                                <span class="flash-sale">$33.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/pizza.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-dao.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .beta-products-list -->

        <div class="space50">&nbsp;</div>

        <div class="beta-products-list">
            <h4>Top Products</h4>
            <div class="beta-products-details">
                <p class="pull-left">438 styles found</p>
                <div class="clearfix"></div>
            </div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-phap.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/cupcake.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span class="flash-del">$34.55</span>
                                <span class="flash-sale">$33.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepedau.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-tao.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="space40">&nbsp;</div>
            <div class="row">
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/banhkem.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="ribbon-wrapper"><div class="ribbon sale">Sale</div></div>

                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-chocolate.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span class="flash-del">$34.55</span>
                                <span class="flash-sale">$33.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-traxanh.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
                <div class="col-sm-3">
                    <div class="single-item">
                        <div class="single-item-header">
                            <a href="product.html"><img src="{{ asset("product/crepe-chuoi.jpg") }}" alt=""></a>
                        </div>
                        <div class="single-item-body">
                            <p class="single-item-title">Sample Woman Top</p>
                            <p class="single-item-price">
                                <span>$34.55</span>
                            </p>
                        </div>
                        <div class="single-item-caption">
                            <a class="add-to-cart pull-left" href="shopping_cart.html"><i class="fa fa-shopping-cart"></i></a>
                            <a class="beta-btn primary" href="product.html">Details <i class="fa fa-chevron-right"></i></a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div> <!-- .beta-products-list -->
    </div>
</div> <!-- end section with sidebar and main content -->


</div> <!-- .main-content -->
</div> <!-- #content -->
</div> <!-- .container -->
@endsection

<script src="{{asset("js/jquery.js")}}"></script>
	<script src="{{asset("vendors/jqueryui/jquery-ui-1.10.4.custom.min.js")}}"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>
	<script src="{{asset("vendors/bxslider/jquery.bxslider.min.js")}}"></script>
	<script src="{{asset("colorbox/jquery.colorbox-min.js")}}"></script>
	<script src="{{asset("vendors/animo/Animo.js")}}"></script>
	<script src="{{asset("vendors/dug/dug.js")}}"></script>
	<script src="{{asset("js/scripts.min.js")}}"></script>
	<script src="{{asset("js/jquery.themepunch.tools.min.js")}}"></script>
	<script src="{{asset("js/jquery.themepunch.revolution.min.js")}}"></script>
	<script src="{{asset("js/waypoints.min.js")}}"></script>
	<script src="{{asset("js/wow.min.js")}}"></script>
	<!--customjs-->
	<script src="{{asset("js/custom2.js")}}"></script>
	<script>
	$(document).ready(function($) {    
		$(window).scroll(function(){
			if($(this).scrollTop()>150){
			$(".header-bottom").addClass('fixNav')
			}else{
				$(".header-bottom").removeClass('fixNav')
			}}
		)
	})
	</script>