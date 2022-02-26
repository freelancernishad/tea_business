@extends('layouts.layout')

@section('content')


<header class="page-header   header-h1  header-parallax ltx-parallax  hasBreadcrumbs">
    <div class="container">
        <h1>Shop </h1>
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="">
            <!-- Breadcrumb NavXT 6.2.1 -->
            <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Home." href="{{ url('/') }}" class="home"><span
                            property="name">Home</span></a>
                    <meta property="position" content="1">
                </span></li>
            <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span
                        property="name">Shop</span>
                    <meta property="position" content="2">
                </span></li>
        </ul>
    </div>

</header>
<div class="container main-wrapper woocommerce">
    <div class="inner-page margin-default">
        <div class="row centered">
            <div class="col-xl-9 col-lg-12 text-page">
                <div class="woocommerce-notices-wrapper"></div>
                <div
                    id="product-4842"
                    class="post-4842 product type-product status-publish has-post-thumbnail product_cat-green-tea product_cat-black-tea product_cat-organic-tea product_tag-organic first instock shipping-taxable purchasable product-type-simple"
                >
                    <div class="woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images" data-columns="4" style="opacity: 1; transition: opacity 0.25s ease-in-out 0s;">
                        <figure class="woocommerce-product-gallery__wrapper">
                            <div data-thumb="{{ $product_details[0]->Images }}" class="woocommerce-product-gallery__image">
                                <a href="{{ $product_details[0]->Images }}">
                                    <img
                                        width="600"
                                        height="375"
                                        src="{{ $product_details[0]->Images }}"
                                        class="wp-post-image"
                                        alt=""
                                        loading="lazy"
                                        title="04"
                                        data-caption=""
                                        data-src="{{ $product_details[0]->Images }}"
                                        data-large_image="{{ $product_details[0]->Images }}"
                                        data-large_image_width="1600"
                                        data-large_image_height="1000"


                                    />
                                </a>
                            </div>
                        </figure>
                    </div>

                    <div class="summary entry-summary">
                        <h1 class="product_title entry-title">{{ $product_details[0]->product_title }}</h1>

                        <p class="price">
                            <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $product_details[0]->Price }}</span>
                        </p>

                        <form class="cart"  method="post" enctype="multipart/form-data">
                            <div class="quantity">
                                <label class="screen-reader-text" for="quantity">Quantity</label>
                                <input
                                    type="number"
                                    id="quantity"
                                    class="input-text qty text"
                                    step="1"
                                    min="1"
                                    max=""
                                    name="quantity"
                                    value="1"
                                    title="Qty"
                                    size="4"
                                    pattern="[0-9]*"
                                    inputmode="numeric"
                                    aria-labelledby="An Xi Mao Xie quantity"
                                />
                                <span class="more"></span><span class="less"></span>
                            </div>
                            <input type="hidden" id="itemId" value="{{ $product_details[0]->id }}">
                            <button type="button" name="add-to-cart" value="4842" class="single_add_to_cart_button alt btn btn-default ajax_add_to_cart">Add to cart</button>
                        </form>

                        <div class="product_meta">
                            <span class="posted_in">
                                Category: <a href="{{ url('/shop?category='.$product_details[0]->Categories) }}" rel="tag">{{ $product_details[0]->Categories  }}</a>
                            </span>

                        </div>
                    </div>

                    <div class="woocommerce-tabs wc-tabs-wrapper">
                        <ul class="tabs wc-tabs" role="tablist">
                            <li class="description_tab active" id="tab-title-description" role="tab" aria-controls="tab-description">
                                <a href="#tab-description">Description</a>
                            </li>

                        </ul>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--description panel entry-content wc-tab" id="tab-description" role="tabpanel" aria-labelledby="tab-title-description" style="">
                            <h2>Description</h2>


                            <p>
                                {{ $product_details[0]->description }}
                            </p>
                        </div>
                        <div class="woocommerce-Tabs-panel woocommerce-Tabs-panel--reviews panel entry-content wc-tab" id="tab-reviews" role="tabpanel" aria-labelledby="tab-title-reviews" style="display: none;">
                            <div id="reviews" class="woocommerce-Reviews">
                                <div id="comments">
                                    <h2 class="woocommerce-Reviews-title">1 review for <span>{{ $product_details[0]->product_title }}</span></h2>

                                    <ol class="commentlist">
                                        <li class="review byuser comment-author-admin bypostauthor even thread-even depth-1" id="li-comment-17">
                                            <div id="comment-17" class="comment_container">
                                                <img
                                                    alt=""
                                                    src="http://2.gravatar.com/avatar/ef3f0393ca0144a73c5fa0d01820e0d0?s=60&amp;d=mm&amp;r=g"
                                                    srcset="http://2.gravatar.com/avatar/ef3f0393ca0144a73c5fa0d01820e0d0?s=120&amp;d=mm&amp;r=g 2x"
                                                    class="avatar avatar-60 photo"
                                                    height="60"
                                                    width="60"
                                                    loading="lazy"
                                                />
                                                <div class="comment-text">
                                                    <div class="star-rating">
                                                        <span style="width: 100%;">Rated <strong class="rating">5</strong> out of 5</span>
                                                    </div>
                                                    <p class="meta">
                                                        <strong class="woocommerce-review__author">Amanda Johnson </strong>
                                                        <span class="woocommerce-review__dash">–</span> <time class="woocommerce-review__published-date" datetime="2018-07-03T17:04:16+00:00">July 3, 2018</time>
                                                    </p>

                                                    <div class="description">
                                                        <p>
                                                            Quisque scelerisque suscipit purus, nec venenatis nulla lobortis eu. Interdum et malesuada fames ac ante ipsum primis in faucibus. Suspendisse tempor id lacus in tincidunt.
                                                            Vestibulum porttitor risus diam, nec ullamcorper leo consectetur luctus.
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <!-- #comment-## -->
                                    </ol>
                                </div>



                                <div class="clear"></div>
                            </div>
                        </div>
                    </div>


                </div>
            </div>
        </div>
    </div>
</div>

@endsection
