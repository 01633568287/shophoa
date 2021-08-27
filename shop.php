
<?php
session_start(); 
?>

<!doctype html>
    <html class="no-js" lang="en">

    <head>
    <!-- Basic page needs
        ============================================ -->
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Shop | fc flower</title>
        <meta name="description" content="">
        <!-- Mobile specific metas -->
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <!-- Favicon -->
        <link rel="shortcut icon" type="image/x-icon" href="img/favicon.ico">
        <!-- font awesome -->
        <link rel="stylesheet" href="css/font-awesome.min.css">
        <!-- carousel CSS  -->
        <link rel="stylesheet" href="css/owl.carousel.css">
        <!-- carousel Theme CSS  -->
        <link rel="stylesheet" href="css/owl.my_theme.css">
        <!-- carousel transitions CSS  -->
        <link rel="stylesheet" href="css/owl.transitions.css">
        <!-- nivo slider slider css -->
        <link rel="stylesheet" href="css/nivo-slider.css">
        <!-- animate css -->
        <link rel="stylesheet" href="css/animate.css">
        <!-- Price jquery-ui  -->
        <link rel="stylesheet" href="css/jquery-ui.css">
        <!-- fancy-box theme -->
        <link rel="stylesheet" href="fancy-box/jquery.fancybox.css">
        <!-- normalizer  -->
        <link rel="stylesheet" href="css/normalize.css">
        <!-- bootstrap  -->
        <link rel="stylesheet" href="css/bootstrap.min.css">
        <!-- main  -->
        <link rel="stylesheet" href="css/main.css">
        <!-- Mobile menu css -->
        <link rel="stylesheet" href="css/meanmenu.min.css">
        <!-- style  -->
        <link rel="stylesheet" href="style.css">
        <!-- Responsive css -->
        <link rel="stylesheet" href="css/responsive.css">
        <!-- modernizr JS  -->
        <script src="js/vendor/modernizr-2.8.3.min.js"></script>
    </head>

    <body>
        <?php include "db.php" ?>
        <!--Start Header Top area -->
        <?php include "header.php"; ?>
        <!--End Main Menu area -->


        <!--Start breadcrumbs area -->
        <div class="breadcrumbs_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                        <div class="breadcrumb-single">
                            <ul id="breadcrumbs">
                                <li><a href="#"><i class="fa fa-home"></i>Home</a></li>
                                <li><span>Ι</span></li>
                                <li>Clothings</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--End breadcrumbs area -->


        <!--Start clothing product area -->
        <div class="clothing_product_area">
            <div class="container">
                <div class="row">
                    <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
                        <div class="catagory_price_color">
                            <div class="catagory_area">
                                <h2>CATEGORY</h2>
                                <ul class="catagory">
                <li><a href="#"><i class="fa fa-angle-right"></i>Carnation</a> <span>(4)</span></li>
                <li><a href="#"><i class="fa fa-angle-right"></i>Yellow Rose</a><span>(6)</span></li>
                <li><a href="#"><i class="fa fa-angle-right"></i>Gladiolus</a><span>(8)</span></li>
                <li><a href="#"><i class="fa fa-angle-right"></i>Magnolia</a><span>(10)</span></li>
                                </ul>
                            </div>
                            <div class="priceing_area">
                                <h2>Price</h2>
                                <div class="info_widget">
                                    <div class="price_filter">
                                      <div id="slider-range"></div>
                                        <div class="price_slider_amount">
                                            <input type="text" id="amount" name="price" placeholder="Add Your Price" />
                                            <input type="submit" value="Search" />
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="catagory_area">
                                <h2>COLOR</h2>
                                <ul class="catagory">
                                    <li><a href="#"><i class="fa fa-angle-right"></i>BLACK</a> <span>(1)</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>BLUE</a><span>(2)</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>GREEN</a><span>(8)</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>GREY</a><span>(4)</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>RED</a><span>(8)</span></li>
                                    <li><a href="#"><i class="fa fa-angle-right"></i>WHITE</a><span>(6)</span></li>
                                </ul>
                            </div>
                        </div>
                        <div class="popular_tag_area">
                            <div class="popular_items">
                                <h2>POPULAR TAGS</h2>
                                <ul id="single_popular">
                                    <li><a href="#">Carnation</a></li>
                                    <li><a href="#">Yellow Rose</a></li>
                                    <li><a href="#">Orchids</a></li>
                                    <li><a href="#">Gladiolus</a></li>
                                    <li><a href="#">Sunflower</a></li>
                                    <li><a href="#">Magnolia</a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="popular_tag_area popular_tag_response">
                                    <div class="popular_items">
                                        <h2>COMPARE PRODUCTS</h2>
                                        <div class="conpany_product_details">
                                            <p>You have no items to compare.</p>
                                            <a href="#"><img src="img/banner/banner_left.jpg" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="popular_tag_area">
                                    <div class="popular_items">
                                        <h2>Highlights</h2>
                                    </div>
                                </div>
                                <div class="clothing_carousel_list">
                                    <div class="single_clothing_product">
                                        <?php
                                        $rws=query("SELECT * FROM `products` WHERE product_id<5");
                                        while ($rw=mysqli_fetch_array($rws)) {
                                            $im=$rw['product_image'];
                                            $pric=$rw['product_price'];
                                            $tit=$rw['product_title'];
                                            ?>
                                            <div class="clothing_item">
                                                <img src="img/product/<?php echo $im ?>" alt="" />
                                                <div class="product_clothing_details">
                                                    <h2><a href="#"><?php echo $tit ?></a></h2>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <p><?php echo $pric ?></p>
                                                </div>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>




                    <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
                        <div class="row">
                            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                <div class="catagory_banner">
                                    <img src="img/banner/category.jpg" alt="" />
                                </div>
                            </div>
                        </div>
                        <div class="my_tabs">
                            <ul class="tab_style">
                                <li class="active"><a data-toggle="tab" href="#tab1"><span><i class="fa fa-th"></i></span></a></li>
                                <li><a data-toggle="tab" href="#tab2"><span><i class="fa fa-th-list"></i></span></a></li>
                            </ul>
                            <div class="limiter">
                                <label>Show</label>
                                <select>
                                 <option value="">9</option>
                                 <option value="" selected="selected">12</option>
                                 <option value="">24</option>
                                 <option value="">36</option>
                             </select> per page
                         </div>
                         <div class="sort-by">
                            <label>Sort By</label>
                            <select>
                             <option value="" selected="selected">Position</option>
                             <option value="">Name</option>
                             <option value="">Price</option>
                         </select>
                         <a href=""><i class="fa fa-long-arrow-up"></i></a>
                     </div>

                     <div class="tab-content tab_content_style">
                        <div id="tab1" class="tab-pane fade in active">
                            <div class="row">

                                <?php
                                $rows=query("SELECT * FROM `products`");
                                while ($row=mysqli_fetch_array($rows)) {
                                    ?>


                                    <div class="col-lg-4 col-md-4 col-sm-4 col-xs-12">
                                        <div class="product_list">
                                            <div class="single_product repomsive_768">

                                                <?php  $image=$row['product_image'];
                                                $price=$row['product_price'];
                                                $title=$row['product_title'];
                                                $id=$row['product_id'];
                                                ?>
                                                <a href="product2.php?id=<?php echo $id; ?>" target="main"><img src="img/product/<?php echo $image ?>" alt="" /></a>
                                                
                                                <div class="product_details">
                                                    <h2><?php echo $title ?></h2>
                                                    <p><span class="regular_price">250000 VND</span> <span class="popular_price"><?php echo $price ?>VND</span></p>
                                                </div>
                                                <div class="product_detail">
                                                    <div class="star_icon">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star-half-o"></i>
                                                    </div>
                                                    <div class="product_button">
                                                        <div class="cart_details">
                                                            <a href="cart2.php?id=<?php echo $id; ?>" target="blank">Add to cart</a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                        </div>
                                                        <div class="cart_details">
                                                            <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php } ?>
                            </div>




                            

                            <div class="row">
                                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                                    <div class="blog_pagination">
                                        <h2>Page:</h2>
                                        <ul class="pagination_list">
                                            <li class="active">1</li>
                                            <li><a href="#">2</a></li>
                                            <li><a href="#">3</a></li>
                                            <li>
                                                <a href="#"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>




                        <div id="tab2" class="tab-pane fade">
                            <div class="row">
                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                    <div class="product_blog_image">
                                        <div class="product_blog_image">
                                            <a href="product.html"><img src="img/product/pr1.png" alt="" /></a>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                    <div class="blog_product_details">
                                        <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                        <div class="product_rating">
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                            <i class="fa fa-star"></i>
                                        </div>
                                        <div class="product_rating">
                                            <a href="#">1 Review(s) <span>I</span></a>
                                            <a href="#"> Add Your Review</a>
                                        </div>
                                        <div class="pricing_rate">
                                            <p class="rating_dollor"><span class="rating_value_one">$19.00</span> <span class="rating_value_two">$16.00</span></p>
                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                href="#">Learn More</a></p>
                                            </div>
                                            <div class="product_blog_button">
                                                <div class="cart_blog_details">
                                                    <a href="cart.html" target="blank">Add to cart</a>
                                                </div>
                                                <div class="cart_blog_details">
                                                    <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                </div>
                                                <div class="cart_blog_details">
                                                    <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                        <div class="product_blog_image">
                                            <div class="product_blog_image">
                                                <a href="product.html"><img src="img/product/4.jpg" alt="" /></a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                        <div class="blog_product_details">
                                            <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                            <div class="product_rating">
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                                <i class="fa fa-star"></i>
                                            </div>
                                            <div class="product_rating">
                                                <a href="#">1 Review(s) <span>I</span></a>
                                                <a href="#"> Add Your Review</a>
                                            </div>
                                            <div class="pricing_rate">
                                                <p class="rating_dollor"><span class="rating_value_one">$18.00</span> <span class="rating_value_two">$14.00</span></p>
                                                <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                    Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                    href="#">Learn More</a></p>
                                                </div>
                                                <div class="product_blog_button">
                                                    <div class="cart_blog_details">
                                                        <a href="#" target="blank">Add to cart</a>
                                                    </div>
                                                    <div class="cart_blog_details">
                                                        <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                    </div>
                                                    <div class="cart_blog_details">
                                                        <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                            <div class="product_blog_image">
                                                <div class="product_blog_image">
                                                    <a href="product.html"><img src="img/product/6_1.jpg" alt="" /></a>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                            <div class="blog_product_details">
                                                <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                <div class="product_rating">
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                    <i class="fa fa-star"></i>
                                                </div>
                                                <div class="product_rating">
                                                    <a href="#">1 Review(s) <span>I</span></a>
                                                    <a href="#"> Add Your Review</a>
                                                </div>
                                                <div class="pricing_rate">
                                                    <p class="rating_dollor"><span class="rating_value_one">$17.00</span> <span class="rating_value_two">$15.00</span></p>
                                                    <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                        Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                        href="#">Learn More</a></p>
                                                    </div>
                                                    <div class="product_blog_button">
                                                        <div class="cart_blog_details">
                                                            <a href="cart.html" target="blank">Add to cart</a>
                                                        </div>
                                                        <div class="cart_blog_details">
                                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                        </div>
                                                        <div class="cart_blog_details">
                                                            <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                <div class="product_blog_image">
                                                    <div class="product_blog_image">
                                                        <a href="product.html"><img src="img/product/12_1.jpg" alt="" /></a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                <div class="blog_product_details">
                                                    <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                    <div class="product_rating">
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                        <i class="fa fa-star"></i>
                                                    </div>
                                                    <div class="product_rating">
                                                        <a href="#">1 Review(s) <span>I</span></a>
                                                        <a href="cart.html"> Add Your Review</a>
                                                    </div>
                                                    <div class="pricing_rate">
                                                        <p class="rating_dollor"><span class="rating_value_one">$17.00</span> <span class="rating_value_two">$15.00</span></p>
                                                        <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                            Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                            href="#">Learn More</a></p>
                                                        </div>
                                                        <div class="product_blog_button">
                                                            <div class="cart_blog_details">
                                                                <a href="cart.html" target="blank">Add to cart</a>
                                                            </div>
                                                            <div class="cart_blog_details">
                                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                            </div>
                                                            <div class="cart_blog_details">
                                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                    <div class="product_blog_image">
                                                        <div class="product_blog_image">
                                                            <a href="product.html"><img src="img/product/18_1.jpg" alt="" /></a>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                    <div class="blog_product_details">
                                                        <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                        <div class="product_rating">
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                            <i class="fa fa-star"></i>
                                                        </div>
                                                        <div class="product_rating">
                                                            <a href="#">1 Review(s) <span>I</span></a>
                                                            <a href="#"> Add Your Review</a>
                                                        </div>
                                                        <div class="pricing_rate">
                                                            <p class="rating_dollor"><span class="rating_value_one">$13.00</span> <span class="rating_value_two">$10.00</span></p>
                                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                                Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                                href="#">Learn More</a></p>
                                                            </div>
                                                            <div class="product_blog_button">
                                                                <div class="cart_blog_details">
                                                                    <a href="cart.html" target="blank">Add to cart</a>
                                                                </div>
                                                                <div class="cart_blog_details">
                                                                    <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                </div>
                                                                <div class="cart_blog_details">
                                                                    <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                        <div class="product_blog_image">
                                                            <div class="product_blog_image">
                                                                <a href="product.html"><img src="img/product/13_4.jpg" alt="" /></a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                        <div class="blog_product_details">
                                                            <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                            <div class="product_rating">
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                                <i class="fa fa-star"></i>
                                                            </div>
                                                            <div class="product_rating">
                                                                <a href="#">1 Review(s) <span>I</span></a>
                                                                <a href="cart.html"> Add Your Review</a>
                                                            </div>
                                                            <div class="pricing_rate">
                                                                <p class="rating_dollor"><span class="rating_value_one">$16.00</span> <span class="rating_value_two">$10.00</span></p>
                                                                <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                                    Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                                    href="#">Learn More</a></p>
                                                                </div>
                                                                <div class="product_blog_button">
                                                                    <div class="cart_blog_details">
                                                                        <a href="cart.html" target="blank">Add to cart</a>
                                                                    </div>
                                                                    <div class="cart_blog_details">
                                                                        <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                    </div>
                                                                    <div class="cart_blog_details">
                                                                        <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="row">
                                                        <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                            <div class="product_blog_image">
                                                                <div class="product_blog_image">
                                                                    <a href="product.html"><img src="img/product/14_3.jpg" alt="" /></a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                            <div class="blog_product_details">
                                                                <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                                <div class="product_rating">
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                    <i class="fa fa-star"></i>
                                                                </div>
                                                                <div class="product_rating">
                                                                    <a href="#">1 Review(s) <span>I</span></a>
                                                                    <a href="#"> Add Your Review</a>
                                                                </div>
                                                                <div class="pricing_rate">
                                                                    <p class="rating_dollor"><span class="rating_value_one">$10.00</span> <span class="rating_value_two">$7.00</span></p>
                                                                    <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                                        Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                                        href="#">Learn More</a></p>
                                                                    </div>
                                                                    <div class="product_blog_button">
                                                                        <div class="cart_blog_details">
                                                                            <a href="cart.html" target="blank">Add to cart</a>
                                                                        </div>
                                                                        <div class="cart_blog_details">
                                                                            <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                        </div>
                                                                        <div class="cart_blog_details">
                                                                            <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                <div class="product_blog_image">
                                                                    <div class="product_blog_image">
                                                                        <a href="product.html"><img src="img/product/16.jpg" alt="" /></a>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                                <div class="blog_product_details">
                                                                    <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                                    <div class="product_rating">
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                        <i class="fa fa-star"></i>
                                                                    </div>
                                                                    <div class="product_rating">
                                                                        <a href="#">1 Review(s) <span>I</span></a>
                                                                        <a href="#"> Add Your Review</a>
                                                                    </div>
                                                                    <div class="pricing_rate">
                                                                        <p class="rating_dollor"><span class="rating_value_one">$12.00</span> <span class="rating_value_two">$8.00</span></p>
                                                                        <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                                            Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                                            href="#">Learn More</a></p>
                                                                        </div>
                                                                        <div class="product_blog_button">
                                                                            <div class="cart_blog_details">
                                                                                <a href="#" target="blank">Add to cart</a>
                                                                            </div>
                                                                            <div class="cart_blog_details">
                                                                                <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                            </div>
                                                                            <div class="cart_blog_details">
                                                                                <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="col-lg-4 col-md-4 col-sm-12 col-xs-12">
                                                                    <div class="product_blog_image">
                                                                        <div class="product_blog_image">
                                                                            <a href="product.html"><img src="img/product/17_2_1_1.jpg" alt="" /></a>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
                                                                    <div class="blog_product_details">
                                                                        <h2 class="blog_heading"><a href="">Lorem ipsum dolor</a></h2>
                                                                        <div class="product_rating">
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                            <i class="fa fa-star"></i>
                                                                        </div>
                                                                        <div class="product_rating">
                                                                            <a href="#">1 Review(s) <span>I</span></a>
                                                                            <a href="#"> Add Your Review</a>
                                                                        </div>
                                                                        <div class="pricing_rate">
                                                                            <p class="rating_dollor"><span class="rating_value_one">$17.00</span> <span class="rating_value_two">$15.00</span></p>
                                                                            <p class="blog_texts">Nunc facilisis sagittis ullamcorper. Proin lectus ipsum, gravida et mattis vulputate, tristique ut lectus. Sed et lorem nunc. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia
                                                                                Curae; Aenean eleifend laoreet congue. Vivamus adipiscing nisl ut dolor dignissim semper. Nulla luctus malesuada tincidunt. Class aptent taciti sociosqu ad litora torquent per conubia nostra, p <a class="learn_more"
                                                                                href="#">Learn More</a></p>
                                                                            </div>
                                                                            <div class="product_blog_button">
                                                                                <div class="cart_blog_details">
                                                                                    <a href="cart.html" target="blank">Add to cart</a>
                                                                                </div>
                                                                                <div class="cart_blog_details">
                                                                                    <a href="#" target="expand"><i class="fa fa-expand"></i></a>
                                                                                </div>
                                                                                <div class="cart_blog_details">
                                                                                    <a href="#" target="heart"><i class="fa fa-heart-o"></i></a>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-lg-12">
                                                                        <div class="blog_pagination">
                                                                            <h2>Page:</h2>
                                                                            <ul class="pagination_list">
                                                                                <li class="active">1</li>
                                                                                <li><a href="#">2</a></li>
                                                                                <li><a href="#">3</a></li>
                                                                                <li>
                                                                                    <a href="#"><img src="img/arrow/pager_arrow_right.gif" alt="" /></a>
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!--End clothing product area -->
                                    <!--Start Branding area -->
                                    <div class="branding_area">
                                        <div class="container">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="carousel_branding">
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand1.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand2.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand3.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand4.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand2.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand1.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand3.jpg" alt="" />
                                                        </div>
                                                        <div class="single_branding">
                                                            <img src="img/branding-image/brand2.jpg" alt="" />
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
<!--End Branding area -->

<!--Start Footer area -->
<?php include "footer.php";?>
<!--End footer area -->

<!-- jquery JS  -->
<script src="js/vendor/jquery-1.11.3.min.js"></script>
<!-- bootstrap JS -->
<script src="js/bootstrap.min.js"></script>
<!-- Mobile menu JS -->
<script src="js/jquery.meanmenu.js"></script>
<!-- jquery.easing js -->
<script src="js/jquery.easing.1.3.min.js"></script>
<!-- knob circle js -->
<script src="js/jquery.knob.js"></script>
<!-- fancybox JS -->
<script src="fancy-box/jquery.fancybox.pack.js"></script>
<!-- price slider JS  -->
<script src="js/price-slider.js"></script>
<!-- nivo slider JS -->
<script src="js/jquery.nivo.slider.pack.js"></script>
<!-- wow JS -->
<script src="js/wow.js"></script>
<!-- nivo-plugin JS -->
<script src="js/nivo-plugin.js"></script>
<!-- scrollUp JS -->
<script src="js/jquery.scrollUp.js"></script>
<!-- carousel JS  -->
<script src="js/owl.carousel.min.js"></script>
<!-- plugins JS  -->
<script src="js/plugins.js"></script>
<!-- main JS  -->
<script src="js/main.js"></script>
                                </body>

                                </html>