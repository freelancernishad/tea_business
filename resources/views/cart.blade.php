@extends('layouts.layout')

@section('content')
<style>



</style>


<header class="page-header   header-h1  header-parallax ltx-parallax  hasBreadcrumbs">
    <div class="container">
        <h1>My account </h1>
        <ul class="breadcrumbs" typeof="BreadcrumbList" vocab="https://schema.org/">
            <!-- Breadcrumb NavXT 6.2.1 -->
            <li class="home"><span property="itemListElement" typeof="ListItem"><a property="item" typeof="WebPage"
                        title="Go to Home." href="http://chaitan.like-themes.com" class="home"><span
                            property="name">Home</span></a>
                    <meta property="position" content="1">
                </span></li>
            <li class="post post-page current-item"><span property="itemListElement" typeof="ListItem"><span
                        property="name">My account</span>
                    <meta property="position" content="2">
                </span></li>
        </ul>
    </div>
    <div class="ltx-social ltx-nav-second">
        <ul>
            <li><a href="#" target="_self"><span class="fa fa-twitter"></span></a></li>
            <li><a href="#" target="_self"><span class="fa fa-facebook-f"></span></a></li>
            <li><a href="#" target="_self"><span class="fa fa-instagram"></span></a></li>
            <li><a href="#" target="_self"><span class="fa fa-google-plus"></span></a></li>
        </ul><span class="header"><span>Follow us</span></span>
    </div>
</header>


<div class="container main-wrapper">
    <!-- Content -->
    <div class="inner-page text-page margin-default">
        <div class="row">
            <div class=" col-md-12 text-page">
                <article id="post-615" class="post-615 page type-page status-publish hentry">
                    <div class="entry-content clearfix" id="entry-div">
                        <div class="woocommerce">
                            <div class="woocommerce-notices-wrapper"></div>
                            <form class="woocommerce-cart-form" action="http://chaitan.like-themes.com/cart/"
                                method="post">

                                <table class="shop_table shop_table_responsive cart woocommerce-cart-form__contents"
                                    cellspacing="0">
                                    <thead>
                                        <tr>
                                            <th class="product-remove">&nbsp;</th>
                                            <th class="product-thumbnail">&nbsp;</th>
                                            <th class="product-name">Product</th>
                                            <th class="product-price">Price</th>
                                            <th class="product-quantity">Quantity</th>
                                            <th class="product-subtotal">Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>




                                        @php $total = 0 @endphp
                                        @if(session('cart'))
                                            @foreach(session('cart') as $id => $details)
                                                @php $total += $details['price'] * $details['quantity'] @endphp



                                        <tr class="woocommerce-cart-form__cart-item cart_item"  data-id="{{ $id }}">

                                            <td class="product-remove remove-from-cart">
                                                <a href="#"
                                                    class="remove" aria-label="Remove this item" data-product_id="4842"
                                                    data-product_sku="">×</a>
                                            </td>

                                            <td class="product-thumbnail">
                                           <img  width="70" src="{{ $details['image'] }}" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                        alt="" loading="lazy">
                                            </td>

                                            <td class="product-name" data-title="Product">
                                                <a href="http://chaitan.like-themes.com/product/an-xi-mao-xie/">{{ $details['name'] }}</a>
                                            </td>

                                            <td class="product-price" data-title="Price">
                                                <span class="woocommerce-Price-amount amount"><span
                                                        class="woocommerce-Price-currencySymbol">$</span>{{ $details['price'] }}</span>

                                                        <input type="hidden" class='iprice' value="{{ $details['price'] }}">


                                                    </td>

                                            <td class="product-quantity" data-title="Quantity">
                                                <div class="quantity">
                                                    <label class="screen-reader-text"
                                                        for="quantity_621678f81097e">Quantity</label>

                                    <input type="number" value="{{ $details['quantity'] }}"  class="form-control quantites update-cart" />



                                                </div>
                                            </td>

                                            <td class="product-subtotal" data-title="Total">
                                                <span class="woocommerce-Price-amount amount">
                                                 <span class="itotal"></span></span>
                                            </td>
                                        </tr>

                                        @endforeach
                                        @endif





                                        <tr>
                                            <td colspan="6" class="actions">
                                            </td>
                                        </tr>

                                    </tbody>
                                </table>
                            </form>

                            <div class="cart-collaterals">
                                <div class="cart_totals ">


                                    <h2>Cart totals</h2>

                                    <table cellspacing="0" class="shop_table shop_table_responsive">

                                        <tbody>







                                            <tr class="order-total">
                                                <th style="color:black" >Total</th>
                                                <td data-title="Total"><strong><span
                                                            class="woocommerce-Price-amount amount"><span
                                                                class="woocommerce-Price-currencySymbol" id='gtotal'>$</span></span></strong>
                                                </td>
                                            </tr>


                                        </tbody>
                                    </table>

                                    <div class="wc-proceed-to-checkout">

                                        <a href="{{ url('checkout') }}"
                                            class="checkout-button alt wc-forward btn">
                                            Proceed to checkout</a>
                                    </div>


                                </div>
                            </div>

                        </div>
                    </div>
                </article>
            </div>

        </div>
    </div>

</div>

<div class="subscribe-block">
    <div class="container">
        <section data-vc-full-width="true" data-vc-full-width-init="true"
            class="vc_section vc_section-o-content-middle vc_section-flex"
            style="position: relative; left: -75.5px; box-sizing: border-box; width: 1351px; padding-left: 75.5px; padding-right: 75.5px;">
            <div class="vc_row wpb_row vc_row-fluid vc_row-o-equal-height vc_row-o-content-middle vc_row-flex">
                <div
                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-12 vc_hidden-sm vc_hidden-xs">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="heading  header-inline align-left color-white subcolor-black icon-type-before   vc_custom_1530546375063 heading-tag-h3 heading-icon"
                                id="like_sc_header_1460693116"><img
                                    src="http://chaitan.like-themes.com/wp-content/uploads/2018/07/subscribe-icon.png"
                                    class="heading-icon " alt="Subscribe <span> weekly newsletter </span>">
                                <div class="heading-content">
                                    <h3 class="header ltx-sr-id-like_sc_header_14606931161651854542 ltx-sr ltx-sr-effect-fade_in ltx-sr-el-block ltx-sr-delay-0 ltx-sr-duration-1000 ltx-sr-sequences-0"
                                        data-sr-id="1"
                                        style="visibility: visible; transform: scale(1); opacity: 1; transition: all 0.3s ease 0s;">
                                        Subscribe <span> weekly newsletter </span></h3>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div
                    class="wpb_column vc_column_container vc_col-sm-6 vc_col-lg-6 vc_col-md-12 text-align-center-md-sm-ms">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <div class="wpb_text_column wpb_content_element ">
                                <div class="wpb_wrapper">
                                    <script>
                                    (function() {
                                        if (!window.mc4wp) {
                                            window.mc4wp = {
                                                listeners: [],
                                                forms: {
                                                    on: function(event, callback) {
                                                        window.mc4wp.listeners.push({
                                                            event: event,
                                                            callback: callback
                                                        });
                                                    }
                                                }
                                            }
                                        }
                                    })();
                                    </script>
                                    <!-- MailChimp for WordPress v4.3.3 - https://wordpress.org/plugins/mailchimp-for-wp/ -->
                                    <form id="mc4wp-form-1" class="mc4wp-form mc4wp-form-806" method="post"
                                        data-id="806" data-name="Subscribe Form">
                                        <div class="mc4wp-form-fields">
                                            <div class="input-group">
                                                <input type="email" name="EMAIL" placeholder="Your email ..."
                                                    required="">
                                                <span class="input-group-append">
                                                    <button class="btn btn-xs btn-black color-hover-white btn-default"
                                                        type="submit">Subscribe</button>
                                                </span>
                                            </div>
                                        </div><label style="display: none !important;">Leave this field empty if you're
                                            human: <input type="text" name="_mc4wp_honeypot" value="" tabindex="-1"
                                                autocomplete="off"></label><input type="hidden" name="_mc4wp_timestamp"
                                            value="1645639928"><input type="hidden" name="_mc4wp_form_id"
                                            value="806"><input type="hidden" name="_mc4wp_form_element_id"
                                            value="mc4wp-form-1">
                                        <div class="mc4wp-response"></div>
                                    </form><!-- / MailChimp for WordPress Plugin -->

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <div class="vc_row-full-width vc_clearfix"></div>
    </div>
</div>
@endsection

@section('scripts')
<script type="text/javascript">






    $(".update-cart").change(function (e) {
        e.preventDefault();

        var ele = $(this);

        $.ajax({
            url: '{{ route('update.cart') }}',
            method: "patch",
            data: {
                _token: '{{ csrf_token() }}',
                id: ele.parents("tr").attr("data-id"),
                quantity: ele.parents("tr").find(".quantites").val()
            },
            success: function (response) {
               //window.location.reload();
               console.log(response);
               subTotal()


               Toast.fire({
  icon: 'success',
  title: 'Cart updated successfully'
})
$('.header-cart-count').html(response);

            }
        });
    });



    $(".remove-from-cart").click(function (e) {
        e.preventDefault();
        var ele = $(this);
// console.log(ele.parents("tr").attr("data-id"));
    var attr_id = ele.parents("tr").attr("data-id");
        if(confirm("Are you sure want to remove?")) {
            $.ajax({
                url: '{{ route('remove.from.cart') }}',
                method: "DELETE",
                data: {
                    _token: '{{ csrf_token() }}',
                    id: ele.parents("tr").attr("data-id")
                },
                success: function (response) {
                    console.log(response);
                    var response_id = response;


            //alert(comment_id);
            if (attr_id == response_id) {
                ele.parents("tr").remove();


                Toast.fire({
  icon: 'error',
  title: 'Product removed successfully'
})

            }
               subTotal()
                }
            });
        }
    });







    var gt = 0;
    var iprice = document.getElementsByClassName('iprice');
    var iquantity = document.getElementsByClassName('quantites');
    var itotal = document.getElementsByClassName('itotal');
    var gtotal = document.getElementById('gtotal');
    var tp = 0;
    function subTotal(){
        gt = 0;
        for(var i =0;i<iprice.length;i++){
            itotal[i].innerHTML = '$'+(iprice[i].value)*(iquantity[i].value);
            gt = gt+(iprice[i].value)*(iquantity[i].value);
        }
        gtotal.innerText = '$'+ (Number(gt) + Number(tp));
    }

    subTotal()


</script>
@endsection
