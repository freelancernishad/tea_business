<div>





<style>
.woocommerce-MyAccount-navigation aside ul li:before, .widget-area aside ul li:before {

    content: '';

}

</style>



















    <div class="container main-wrapper">
        <div class="inner-page margin-top">
            <div class="row row-eq-height_">
                <div class="col-xl-8 col-xl-push-4 col-lg-8 col-lg-push-4 col-md-12 text-page products-column-with-sidebar matchHeight woocommerce"
                    data-mh="ltx-col" style="height: 2646.28px;">



                    <ul class="products columns-4">

                        @foreach ($rows as $productsList)




                    	<li id="post-4842"  data-id="{{ $productsList->id }}"
                            class="swiper-slide filter-item filter-type-0 filter-type-243 filter-type-242 filter-type-246 post-4842 product type-product status-publish has-post-thumbnail product_cat-green-tea product_cat-black-tea product_cat-organic-tea product_tag-organic first instock shipping-taxable purchasable product-type-simple">
                            <div class="item"> <a
                                    href="{{ url('/product/'.$productsList->id) }}">
                                    <div class="image">
                                        <img width="340" height="227"
                                            src="{{ $productsList->Images }}"
                                            class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                            alt="" loading="lazy" />
                                    </div>
                                    <div class="star-rating"><span
                                            style="width:100%">Rated
                                            <strong
                                                class="rating">5.00</strong>
                                            out of 5</span></div>
                                    <h2
                                        class="woocommerce-loop-product__title">
                                        {{ $productsList->product_title }}</h2>
                                </a>
                                <a href="{{ url('/product/'.$productsList->id) }}"
                                    class="btn btn-white btn-more">More
                                    info</a>
                                <div class="post_content entry-content">
                                    {{ $productsList->description }}</div><span
                                    class="price"><span
                                        class="woocommerce-Price-amount amount"><span
                                            class="woocommerce-Price-currencySymbol">&#36;</span>{{ $productsList->Price }}</span>

                                        </span>
                                        <input type="hidden" id="quantity" value="1">
                                        <input type="hidden" id="itemId" value="{{ $productsList->id }}">

                                        <a
                                    rel="nofollow"
                                    href="javascript:void(0)"

                                    class="ajax_add_to_cart btn btn-xs add_to_cart_button">Add
                                    to cart</a>
                            </div>
                        </li>


                        @endforeach


                    </ul>
                </div>
                <div class="col-xl-3 col-xl-pull-8 col-lg-4 col-lg-pull-8 col-md-12 div-sidebar matchHeight"
                    data-mh="ltx-col" style="height: 2646.28px;">
                    <div id="content-sidebar" class="content-sidebar woocommerce-sidebar widget-area"
                        role="complementary">
                        <aside id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                            <form role="search" method="get" class="woocommerce-product-search"
                                action="#">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-0">Search
                                    for:</label>
                                <input type="search" wire:model="search" id="woocommerce-product-search-field-0" class="search-field"
                                    placeholder="Search products…" value="" name="s">
                                <button type="submit" value="Search" class="btn btn-default btn-xs">Search</button>
                                <input type="hidden" name="post_type" value="product">
                            </form>
                        </aside>

                        <aside id="woocommerce_product_categories-4"
                            class="widget woocommerce widget_product_categories">
                            <h3 class="header-widget">Categories</h3>
                            <ul class="product-categories">


                                @foreach ($cat as $catList)



                                <li class="cat-item cat-item-242"><a
                                        href="javascript:void(0)" wire:click="catfillter('{{ $catList->name }}')">{{ $catList->name }}</a>
                                </li>

                                @endforeach




                            </ul>
                        </aside>
                        <aside id="woocommerce_price_filter-4" class="widget woocommerce widget_price_filter">
                            <h3 class="header-widget">Filter</h3>
                            <form method="get" action="#">
                                <div class="price_slider_wrapper">
                                    <div class="price_slider ui-slider ui-corner-all ui-slider-horizontal ui-widget ui-widget-content"
                                        style="">
                                        <div class="ui-slider-range ui-corner-all ui-widget-header"
                                            style="left: 0%; width: 100%;"></div><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 0%;"></span><span tabindex="0"
                                            class="ui-slider-handle ui-corner-all ui-state-default"
                                            style="left: 100%;"></span>
                                    </div>
                                    <div class="price_slider_amount d-flex" style="display: flex;">
                                        <input type="text" id="min_price" name="min_price" wire:model="min_price" value="1" data-min="1"
                                            placeholder="Min price">
                                        <input type="text" id="max_price" name="max_price" wire:model="max_price" value="4" data-max="4"
                                            placeholder="Max price" >
                                        <div class="clear"></div>
                                    </div>
                                </div>
                            </form>
                        </aside>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
