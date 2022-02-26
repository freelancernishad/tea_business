<!DOCTYPE html>
<html lang="en-US">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width">
	<meta name="format-detection" content="telephone=no">

	<title>Chai Gorom</title>

	<!-- Google Fonts -->
	<link rel='stylesheet' id='chaitan_google_fonts-css'
		href='https://fonts.googleapis.com/css?family=Open+Sans:400,600,700,800%7CPlayfair+Display:400,400i,700,700i,900&#038;subset=latin-ext'
		type='text/css' media='all' />
	<!-- jQueary JS -->
	<script src="{{ asset('assets/js/jquery.min.js') }}"></script>


	<!-- Font Awesome -->
	<script src="https://kit.fontawesome.com/8cffe8c664.js" crossorigin="anonymous"></script>

    <link rel="stylesheet" href="{{ asset('assets/css/page_header.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/css/vs_shortcode.css') }}">

	<link rel="stylesheet" href="{{ asset('assets/css/all.css') }}">
    <!-- Font Awesome -->



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />

    <script>
 const Toast = Swal.mixin({
  toast: true,
  position: 'top-end',
  showConfirmButton: false,
  timer: 3000,
  timerProgressBar: true,
  didOpen: (toast) => {
    toast.addEventListener('mouseenter', Swal.stopTimer)
    toast.addEventListener('mouseleave', Swal.resumeTimer)
  }
})

    </script>
 @livewireStyles
</head>

<body
	class="home page-template-default page page-id-4546 woocommerce-no-js tribe-no-js masthead-fixed full-width footer-widgets grid paceloader-enabled wpb-js-composer js-comp-ver-5.7 vc_responsive">
	<div id="preloader"></div>

<?php

     $fullURL = 'http://'.$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
     $hostUrl = 'http://'.$_SERVER['HTTP_HOST'].'/';
     $qu= 0;
     if(session('cart')){
foreach (session()->get('cart') as $id => $details) {
    $qu = $qu+$details['quantity'];
}
}
if($fullURL!=$hostUrl){



?>
    <div class="ltx-topbar-block homepage">
        <div class="container">
            <div class="vc_row wpb_row vc_row-fluid vc_row-o-content-middle vc_row-flex">
                <div class="wpb_column vc_column_container vc_col-sm-12 vc_col-lg-8 vc_col-md-12">
                    <div class="vc_column-inner">
                        <div class="wpb_wrapper">
                            <ul class="block-icon icons-count-3  icon-h-right align-left i-circle layout-inline">
                                <li data-mh="ltx-block-icon-li-1274">
                                    <div data-mh="ltx-block-icon-in-1274" class=""><span
                                            class="icon fa fa-phone-square  bg-bg-transparent"
                                            data-mh="ltx-icon-span-like_sc_block_icon_1835337128"></span>
                                        <div class="block-right">
                                            <h6 class="header"> <span> +20-800-33-000 </span> </h6>
                                            <div class="descr"></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-mh="ltx-block-icon-li-1274">
                                    <div data-mh="ltx-block-icon-in-1274" class=""><span
                                            class="icon fa fa-map-marker  bg-bg-transparent"
                                            data-mh="ltx-icon-span-like_sc_block_icon_1835337128"></span>
                                        <div class="block-right">
                                            <h6 class="header"> Regione Venetta, 21/100, Milano, Italy<br />
                                            </h6>
                                            <div class="descr"></div>
                                        </div>
                                    </div>
                                </li>
                                <li data-mh="ltx-block-icon-li-1274">
                                    <div data-mh="ltx-block-icon-in-1274" class=""><span
                                            class="icon fa fa-clock-o  bg-bg-transparent"
                                            data-mh="ltx-icon-span-like_sc_block_icon_1835337128"></span>
                                        <div class="block-right">
                                            <h6 class="header"> Monday-Sunday 9:00 - 23:00<br />
                                            </h6>
                                            <div class="descr"></div>
                                        </div>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div
                    class="wpb_column vc_column_container vc_col-sm-4 vc_hidden-md vc_hidden-sm vc_hidden-xs text-align-right">
                    <div class="vc_column-inner vc_custom_1530865762673">
                        <div class="wpb_wrapper">
                            <div class="ltx-navbar-icons">
                                <ul>
                                    <li class="ltx-fa-icon ltx-nav-search   hidden-sm hidden-ms hidden-xs">
                                        <div class="top-search">
                                            <a href="#" id="top-search-ico" class="top-search-ico fa fa-search"
                                                aria-hidden="true"></a>
                                            <a href="#" id="top-search-ico-close"
                                                class="top-search-ico-close fa fa-close" aria-hidden="true"></a>
                                            <input placeholder="Search" value="" type="text">
                                        </div>
                                    </li>
                                    <li class="ltx-fa-icon ltx-nav-cart  hidden-sm hidden-ms hidden-xs">
                                        <div class="cart-navbar">
                                            <a href="{{ url('cart') }}"
                                                class="shop_table cart ltx-cart" title="View your shopping cart"><span
                                                    class="cart-contents header-cart-count count">{{ $qu }}</span><i
                                                    class="fa fa fa-shopping-bag" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                    </li>
                                    <li
                                        class="ltx-fa-icon ltx-nav-profile menu-item-has-children  hidden-sm hidden-ms hidden-xs">
                                        <a href="{{ url('my-account') }}"><span
                                                class="fa fa-user"></span>
                                           @if (session()->has('customer_name'))
                                               {{ session('customer_name') }}
                                           @else
                                           Login
                                           @endif </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="wpb_text_column wpb_content_element  vc_custom_1530310664704">
                                <div class="wpb_wrapper">


                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div id="nav-wrapper" class="navbar-layout-desktop homepage">
        <nav class="navbar" data-spy="affix" data-offset-top="35">
            <div class=" container">
                <div class="navbar-logo ">
                    <a class="logo" href="http://chaitan.like-themes.com/"><img width="478" height="151"
                            src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png"
                            class="attachment-full size-full" alt="" loading="lazy"
                            srcset="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png 478w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04-300x95.png 300w"
                            sizes="(max-width: 478px) 100vw, 478px" /></a>
                </div>
                <div id="navbar" class="navbar-collapse collapse" data-mobile-screen-width="1199">
                    <div class="toggle-wrap">
                        <a class="logo" href="http://chaitan.like-themes.com/"><img width="478" height="151"
                                src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png"
                                class="attachment-full size-full" alt="" loading="lazy"
                                srcset="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png 478w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04-300x95.png 300w"
                                sizes="(max-width: 478px) 100vw, 478px" /></a>
                        <button type="button" class="navbar-toggle collapsed">
                            <span class="close"><span class="fa fa-close"></span></span>
                        </button>
                        <div class="clearfix"></div>
                    </div>
                    <ul id="menu-main-menu" class="nav navbar-nav">
                        <li id="menu-item-4552"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-4552">
                            <a href="{{ url('/') }}"><span>Home</span></a>

                        </li>
                        <li id="menu-item-3557"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3557">
                            <a><span>About us</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-5134"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5134"><a
                                        href="http://chaitan.like-themes.com/about-company/"><span>About
                                            Company</span></a></li>
                                <li id="menu-item-57"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a
                                        href="http://chaitan.like-themes.com/testimonials/"><span>Testimonials</span></a>
                                </li>
                                <li id="menu-item-750"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750"><a
                                        href="http://chaitan.like-themes.com/team/"><span>Team</span></a></li>
                                <li id="menu-item-2364"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2364"><a
                                        href="/faq/"><span>FAQ</span></a></li>
                                <li id="menu-item-2584"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2584"><a
                                        href="/404-page"><span>404 Page</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-619"
                            class="menu-item menu-item-type-custom menu-item-object-custom current-menu-ancestor current-menu-parent menu-item-619">
                            <a href="{{ url('shop') }}"><span>Products</span></a>

                        </li>
                        <li id="menu-item-59"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59">
                            <a><span>Blog</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-3976"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3976">
                                    <a href="#"><span>Blog with Sidebar</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-43"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
                                            <a href="http://chaitan.like-themes.com/classic-blog-with-left-sidebar/"><span>Classic
                                                    Left Sidebar</span></a>
                                        </li>
                                        <li id="menu-item-3974"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3974">
                                            <a href="http://chaitan.like-themes.com/blog-2-columns-with-right-sidebar/"><span>2-Columns
                                                    Right Sidebar</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li id="menu-item-3977"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3977">
                                    <a href="#"><span>Blog without Sidebar</span></a>
                                    <ul class="sub-menu">
                                        <li id="menu-item-3975"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3975">
                                            <a href="http://chaitan.like-themes.com/classic-blog-without-sidebar/"><span>Classic
                                                    Blog</span></a>
                                        </li>
                                        <li id="menu-item-45"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45">
                                            <a href="http://chaitan.like-themes.com/blog-two-columns-without-sidebar/"><span>Masonry
                                                    2-Columns</span></a>
                                        </li>
                                        <li id="menu-item-44"
                                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
                                            <a href="http://chaitan.like-themes.com/blog-three-columns/"><span>Masonry
                                                    3-Columns</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li id="menu-item-60"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-60">
                            <a><span>Gallery</span></a>
                            <ul class="sub-menu">
                                <li id="menu-item-47"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
                                        href="http://chaitan.like-themes.com/gallery-2-columns/"><span>Gallery
                                            2-columns</span></a></li>
                                <li id="menu-item-48"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
                                        href="http://chaitan.like-themes.com/gallery-3-columns/"><span>Gallery
                                            3-columns</span></a></li>
                                <li id="menu-item-49"
                                    class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a
                                        href="http://chaitan.like-themes.com/gallery-4-columns/"><span>Gallery
                                            4-columns</span></a></li>
                            </ul>
                        </li>
                        <li id="menu-item-46"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
                                href="http://chaitan.like-themes.com/contacts/"><span>Contacts</span></a></li>
                        <li id="menu-item-61"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-mega-menu menu-item-61">
                            <a href="#"><span>Pages</span></a>
                            <div class="mega-menu">
                                <ul class="sub-menu mega-menu-row">
                                    <li id="menu-item-783"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-783">
                                        <a><span>Typography</span></a>
                                        <ul class="sub-menu sub-menu-has-icons">
                                            <li id="menu-item-597"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-597">
                                                <a href="http://chaitan.like-themes.com/elements/headers/"
                                                    class="fa fa-font"><span>Headers</span></a>
                                            </li>
                                            <li id="menu-item-579"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-579">
                                                <a href="http://chaitan.like-themes.com/elements/text/"
                                                    class="fa fa-align-left"><span>Text</span></a>
                                            </li>
                                            <li id="menu-item-594"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-594">
                                                <a href="http://chaitan.like-themes.com/elements/text_columns/"
                                                    class="fa fa-columns"><span>Text Columns</span></a>
                                            </li>
                                            <li id="menu-item-643"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-643">
                                                <a href="http://chaitan.like-themes.com/elements/table/"
                                                    class="fa fa-table"><span>Table</span></a>
                                            </li>
                                            <li id="menu-item-588"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-588">
                                                <a href="http://chaitan.like-themes.com/elements/separators/"
                                                    class="fa fa-arrows-h"><span>Separators</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-784"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-784">
                                        <a><span>Form Elements</span></a>
                                        <ul class="sub-menu sub-menu-has-icons">
                                            <li id="menu-item-555"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-555">
                                                <a href="http://chaitan.like-themes.com/elements/buttons/"
                                                    class="fa fa-mouse-pointer"><span>Buttons</span></a>
                                            </li>
                                            <li id="menu-item-705"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-705">
                                                <a href="http://chaitan.like-themes.com/elements/forms/"
                                                    class="fa fa-edit"><span>Forms</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-785"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-785">
                                        <a><span>Shortcodes</span></a>
                                        <ul class="sub-menu sub-menu-has-icons">
                                            <li id="menu-item-527"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-527">
                                                <a href="http://chaitan.like-themes.com/elements/accordions/"
                                                    class="fa fa-list"><span>Accordions</span></a>
                                            </li>
                                            <li id="menu-item-538"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-538">
                                                <a href="http://chaitan.like-themes.com/elements/alert/"
                                                    class="fa fa-exclamation-triangle"><span>Alerts</span></a>
                                            </li>
                                            <li id="menu-item-568"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-568">
                                                <a href="http://chaitan.like-themes.com/elements/tabs/"
                                                    class="fa fa-th-large"><span>Tabs</span></a>
                                            </li>
                                            <li id="menu-item-56"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-56">
                                                <a href="http://chaitan.like-themes.com/elements/shortcodes/"
                                                    class="fa fa-caret-square-o-right"><span>Shortcodes</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li id="menu-item-786"
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-786">
                                        <a href="#"><span>Lists</span></a>
                                        <ul class="sub-menu sub-menu-has-icons">
                                            <li id="menu-item-675"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-675">
                                                <a href="http://chaitan.like-themes.com/elements/icons-page/"
                                                    class="fa fa-gratipay"><span>Icons</span></a>
                                            </li>
                                            <li id="menu-item-562"
                                                class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-562">
                                                <a href="http://chaitan.like-themes.com/elements/list/"
                                                    class="fa fa-twitter"><span>Lists and Social Icons</span></a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                            </div>
                        </li>
                    </ul>
                    <div class="mobile-controls">
                        <div>
                            <ul>
                                <li class="ltx-fa-icon ltx-nav-search  ">
                                    <div class="top-search">
                                        <a href="#" id="top-search-ico-mobile" class="top-search-ico fa fa-search"
                                            aria-hidden="true"></a>

                                        <input placeholder="Search" value="" type="text">
                                    </div>
                                </li>
                                <li class="ltx-fa-icon ltx-nav-cart ">
                                    <div class="cart-navbar">
                                        <a href="{{ url('cart') }}" class="shop_table cart ltx-cart"
                                            title="View your shopping cart"><span
                                                class="cart-contents header-cart-count count">{{ $qu }}</span><i
                                                class="fa fa fa-shopping-bag" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </li>
                                <li class="ltx-fa-icon ltx-nav-profile menu-item-has-children ">
                                    <a href="{{ url('my-account') }}"><span
                                            class="fa fa-user"></span>
                                            @if (session()->has('customer_name'))
                                            {{ session('customer_name') }}
                                        @else
                                        Login
                                        @endif</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="navbar-controls">
                    <button type="button" class="navbar-toggle collapsed">
                        <span class="icon-bar top-bar"></span>
                        <span class="icon-bar middle-bar"></span>
                        <span class="icon-bar bottom-bar"></span>
                    </button>
                    <div class="ltx-navbar-icons">
                        <ul>
                            <li class="ltx-fa-icon ltx-nav-cart ">
                                <div class="cart-navbar">
                                    <a href="{{ url('cart') }}" class="shop_table cart ltx-cart"
                                        title="View your shopping cart"><span
                                            class="cart-contents header-cart-count count">{{ $qu }}</span><i
                                            class="fa fa fa-shopping-bag" aria-hidden="true"></i>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </nav>
    </div>

<?php }else{ ?>



    <link rel="stylesheet" href="assets/css/woo_commarce.css">



{{-- homepage --}}




	<div id="nav-wrapper" class="navbar-layout-desktop-center-absolute">
		<nav class="navbar" data-spy="" data-offset-top="35">
			<div class=" container">
				<div class="navbar-logo ">
					<a class="logo" href="http://chaitan.like-themes.com/"><img width="254" height="258"
							src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_01.png"
							class="attachment-full size-full" alt="" loading="lazy"
							srcset="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_01.png 254w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_01-24x24.png 24w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_01-48x48.png 48w"
							sizes="(max-width: 254px) 100vw, 254px" /></a>
				</div>
				<div id="navbar" class="navbar-collapse collapse" data-mobile-screen-width="1199">
					<div class="toggle-wrap">
						<a class="logo" href="http://chaitan.like-themes.com/"><img width="478" height="151"
								src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png"
								class="attachment-full size-full" alt="" loading="lazy"
								srcset="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png 478w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04-300x95.png 300w"
								sizes="(max-width: 478px) 100vw, 478px" /></a>
						<button type="button" class="navbar-toggle collapsed">
							<span class="close"><span class="fa fa-close"></span></span>
						</button>
						<div class="clearfix"></div>
					</div>
					<ul id="menu-main-menu" class="nav navbar-nav">
						<li id="menu-item-4552"
							class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-4552">
							<a href="/"><span>Home</span></a>
							<ul class="sub-menu">
								<li id="menu-item-5156"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-4546 current_page_item menu-item-5156">
									<a href="http://chaitan.like-themes.com/"><span>Tea Production</span></a>
								</li>
								<li id="menu-item-5171"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5171"><a
										href="http://chaitan.like-themes.com/world-tea-company/"><span>World Tea
											Company</span></a></li>
							</ul>
						</li>
						<li id="menu-item-3557"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3557">
							<a><span>About us</span></a>
							<ul class="sub-menu">
								<li id="menu-item-5134"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-5134"><a
										href="http://chaitan.like-themes.com/about-company/"><span>About
											Company</span></a></li>
								<li id="menu-item-57"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-57"><a
										href="http://chaitan.like-themes.com/testimonials/"><span>Testimonials</span></a>
								</li>
								<li id="menu-item-750"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-750"><a
										href="http://chaitan.like-themes.com/team/"><span>Team</span></a></li>
								<li id="menu-item-2364"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2364"><a
										href="/faq/"><span>FAQ</span></a></li>
								<li id="menu-item-2584"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-2584"><a
										href="/404-page"><span>404 Page</span></a></li>
							</ul>
						</li>
						<li id="menu-item-619"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-619">
							<a href="{{ url('shop') }}"><span>Products</span></a>

						</li>
						<li id="menu-item-59"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59">
							<a><span>Blog</span></a>
							<ul class="sub-menu">
								<li id="menu-item-3976"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3976">
									<a href="#"><span>Blog with Sidebar</span></a>
									<ul class="sub-menu">
										<li id="menu-item-43"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-43">
											<a href="http://chaitan.like-themes.com/classic-blog-with-left-sidebar/"><span>Classic
													Left Sidebar</span></a>
										</li>
										<li id="menu-item-3974"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3974">
											<a href="http://chaitan.like-themes.com/blog-2-columns-with-right-sidebar/"><span>2-Columns
													Right Sidebar</span></a>
										</li>
									</ul>
								</li>
								<li id="menu-item-3977"
									class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3977">
									<a href="#"><span>Blog without Sidebar</span></a>
									<ul class="sub-menu">
										<li id="menu-item-3975"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-3975">
											<a href="http://chaitan.like-themes.com/classic-blog-without-sidebar/"><span>Classic
													Blog</span></a>
										</li>
										<li id="menu-item-45"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-45">
											<a href="http://chaitan.like-themes.com/blog-two-columns-without-sidebar/"><span>Masonry
													2-Columns</span></a>
										</li>
										<li id="menu-item-44"
											class="menu-item menu-item-type-post_type menu-item-object-page menu-item-44">
											<a href="http://chaitan.like-themes.com/blog-three-columns/"><span>Masonry
													3-Columns</span></a>
										</li>
									</ul>
								</li>
							</ul>
						</li>
						<li id="menu-item-60"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-60">
							<a><span>Gallery</span></a>
							<ul class="sub-menu">
								<li id="menu-item-47"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-47"><a
										href="http://chaitan.like-themes.com/gallery-2-columns/"><span>Gallery
											2-columns</span></a></li>
								<li id="menu-item-48"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-48"><a
										href="http://chaitan.like-themes.com/gallery-3-columns/"><span>Gallery
											3-columns</span></a></li>
								<li id="menu-item-49"
									class="menu-item menu-item-type-post_type menu-item-object-page menu-item-49"><a
										href="http://chaitan.like-themes.com/gallery-4-columns/"><span>Gallery
											4-columns</span></a></li>
							</ul>
						</li>
						<li id="menu-item-46"
							class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
								href="http://chaitan.like-themes.com/contacts/"><span>Contacts</span></a></li>
						<li id="menu-item-61"
							class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-mega-menu menu-item-61">
							<a href="#"><span>Pages</span></a>
							<div class="mega-menu">
								<ul class="sub-menu mega-menu-row">
									<li id="menu-item-783"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-783">
										<a><span>Typography</span></a>
										<ul class="sub-menu sub-menu-has-icons">
											<li id="menu-item-597"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-597">
												<a href="http://chaitan.like-themes.com/elements/headers/"
													class="fa fa-font"><span>Headers</span></a>
											</li>
											<li id="menu-item-579"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-579">
												<a href="http://chaitan.like-themes.com/elements/text/"
													class="fa fa-align-left"><span>Text</span></a>
											</li>
											<li id="menu-item-594"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-594">
												<a href="http://chaitan.like-themes.com/elements/text_columns/"
													class="fa fa-columns"><span>Text Columns</span></a>
											</li>
											<li id="menu-item-643"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-643">
												<a href="http://chaitan.like-themes.com/elements/table/"
													class="fa fa-table"><span>Table</span></a>
											</li>
											<li id="menu-item-588"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-588">
												<a href="http://chaitan.like-themes.com/elements/separators/"
													class="fa fa-arrows-h"><span>Separators</span></a>
											</li>
										</ul>
									</li>
									<li id="menu-item-784"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-784">
										<a><span>Form Elements</span></a>
										<ul class="sub-menu sub-menu-has-icons">
											<li id="menu-item-555"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-555">
												<a href="http://chaitan.like-themes.com/elements/buttons/"
													class="fa fa-mouse-pointer"><span>Buttons</span></a>
											</li>
											<li id="menu-item-705"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-705">
												<a href="http://chaitan.like-themes.com/elements/forms/"
													class="fa fa-edit"><span>Forms</span></a>
											</li>
										</ul>
									</li>
									<li id="menu-item-785"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-785">
										<a><span>Shortcodes</span></a>
										<ul class="sub-menu sub-menu-has-icons">
											<li id="menu-item-527"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-527">
												<a href="http://chaitan.like-themes.com/elements/accordions/"
													class="fa fa-list"><span>Accordions</span></a>
											</li>
											<li id="menu-item-538"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-538">
												<a href="http://chaitan.like-themes.com/elements/alert/"
													class="fa fa-exclamation-triangle"><span>Alerts</span></a>
											</li>
											<li id="menu-item-568"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-568">
												<a href="http://chaitan.like-themes.com/elements/tabs/"
													class="fa fa-th-large"><span>Tabs</span></a>
											</li>
											<li id="menu-item-56"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-56">
												<a href="http://chaitan.like-themes.com/elements/shortcodes/"
													class="fa fa-caret-square-o-right"><span>Shortcodes</span></a>
											</li>
										</ul>
									</li>
									<li id="menu-item-786"
										class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children mega-menu-col menu-item-786">
										<a href="#"><span>Lists</span></a>
										<ul class="sub-menu sub-menu-has-icons">
											<li id="menu-item-675"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-675">
												<a href="http://chaitan.like-themes.com/elements/icons-page/"
													class="fa fa-gratipay"><span>Icons</span></a>
											</li>
											<li id="menu-item-562"
												class="menu-item menu-item-type-post_type menu-item-object-page menu-item-has-icon menu-item-562">
												<a href="http://chaitan.like-themes.com/elements/list/"
													class="fa fa-twitter"><span>Lists and Social Icons</span></a>
											</li>
										</ul>
									</li>
								</ul>
							</div>
						</li>
					</ul>
					<div class="ltx-navbar-icons">
						<ul>
							<li class="ltx-fa-icon ltx-nav-search   hidden-sm hidden-ms hidden-xs">
								<div class="top-search">
									<a href="#" id="top-search-ico" class="top-search-ico fa fa-search"
										aria-hidden="true"></a>
									<a href="#" id="top-search-ico-close" class="top-search-ico-close fa fa-close"
										aria-hidden="true"></a>
									<input placeholder="Search" value="" type="text">
								</div>
							</li>
							<li class="ltx-fa-icon ltx-nav-cart  hidden-sm hidden-ms hidden-xs">
								<div class="cart-navbar">
									<a href="{{ asset('cart') }}" class="shop_table cart ltx-cart"
										title="View your shopping cart"><span
											class="cart-contents header-cart-count count">{{ $qu }}</span><i
											class="fa fa fa-shopping-bag" aria-hidden="true"></i>
									</a>
								</div>
							</li>
							<li
								class="ltx-fa-icon ltx-nav-profile menu-item-has-children  hidden-sm hidden-ms hidden-xs">
								<a href="{{ url('my-account') }}"><span class="fa fa-user"></span>
                                    @if (session()->has('customer_name'))
                                    {{ session('customer_name') }}
                                @else
                                Login
                                @endif</a>
							</li>
						</ul>
					</div>
					<div class="mobile-controls">
						<div>
							<ul>
								<li class="ltx-fa-icon ltx-nav-search  ">
									<div class="top-search">
										<a href="#" id="top-search-ico-mobile" class="top-search-ico fa fa-search"
											aria-hidden="true"></a>

										<input placeholder="Search" value="" type="text">
									</div>
								</li>
								<li class="ltx-fa-icon ltx-nav-cart ">
									<div class="cart-navbar">
										<a href="http://chaitan.like-themes.com/cart/" class="shop_table cart ltx-cart"
											title="View your shopping cart"><span
												class="cart-contents header-cart-count count">0</span><i
												class="fa fa fa-shopping-bag" aria-hidden="true"></i>
										</a>
									</div>
								</li>
								<li class="ltx-fa-icon ltx-nav-profile menu-item-has-children ">
									<a href="{{ url('my-account') }}"><span
											class="fa fa-user"></span>
                                            @if (session()->has('customer_name'))
                                            {{ session('customer_name') }}
                                        @else
                                        Login
                                        @endif</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="navbar-controls">
					<button type="button" class="navbar-toggle collapsed">
						<span class="icon-bar top-bar"></span>
						<span class="icon-bar middle-bar"></span>
						<span class="icon-bar bottom-bar"></span>
					</button>
					<div class="ltx-navbar-icons">
						<ul>
							<li class="ltx-fa-icon ltx-nav-cart ">
								<div class="cart-navbar">
									<a href="http://chaitan.like-themes.com/cart/" class="shop_table cart ltx-cart"
										title="View your shopping cart"><span
											class="cart-contents header-cart-count count">0</span><i
											class="fa fa fa-shopping-bag" aria-hidden="true"></i>
									</a>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</nav>
	</div>
<?php } ?>

    @yield('content')





	<section id="ltx-logo-footer">

        <div class="container">
            <span class="logo-footer"><img width="478" height="151"
                    src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png"
                    class="attachment-full size-full" alt="" loading="lazy"
                    srcset="http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04.png 478w, http://chaitan.like-themes.com/wp-content/uploads/2018/06/logo_04-300x95.png 300w"
                    sizes="(max-width: 478px) 100vw, 478px" /></span>
            <div class="ltx-social ltx-nav-second">
                <ul>
                    <li><a href="#" target="_self"><span class="fa fa-twitter"></span></a></li>
                    <li><a href="#" target="_self"><span class="fa fa-facebook-f"></span></a></li>
                    <li><a href="#" target="_self"><span class="fa fa-instagram"></span></a></li>
                    <li><a href="#" target="_self"><span class="fa fa-google-plus"></span></a></li>
                </ul><span class="header"><span>Follow us</span></span>
            </div>
        </div>
        </section>
        <section id="ltx-widgets-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-12 col-ms-12  matchHeight clearfix">
                    <div class="footer-widget-area">
                        <div id="text-4" class="widget widget_text">
                            <h4 class="header-widget">About us</h4>
                            <div class="textwidget">
                                <p><strong class="color-main">Addres:</strong> 21 Newstreet, Chaitan town, India, 109-74
                                </p>
                            </div>
                        </div>
                        <div id="ltx_icons-3" class="widget widget_ltx_icons">
                            <ul class="social-icons-list">
                                <li><a href="#"><span class="fa fa-phone"></span>+700800-50-800</a></li>

                                <li><a href="#"><span class="fa fa-envelope"></span>manager@chaitan.md</a></li>

                                <li><a href="#"><span class="fa fa-skype"></span>chaitan</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-ms-12 hidden-xs hidden-ms hidden-sm matchHeight clearfix">
                    <div class="footer-widget-area">
                        <div id="ltx_navmenu-2" class="widget widget_ltx_navmenu">
                            <h4 class="header-widget">Explore</h4>
                            <div class="menu-main-menu-container">
                                <ul id="menu-main-menu-1" class="menu">
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item current-menu-ancestor current-menu-parent menu-item-has-children menu-item-4552">
                                        <a href="/">Home</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-3557">
                                        <a>About us</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-619">
                                        <a href="{{ url('shop') }}">Products</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-59">
                                        <a>Blog</a>
                                    </li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-60">
                                        <a>Gallery</a>
                                    </li>
                                    <li class="menu-item menu-item-type-post_type menu-item-object-page menu-item-46"><a
                                            href="http://chaitan.like-themes.com/contacts/">Contacts</a></li>
                                    <li
                                        class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-has-mega-menu menu-item-61">
                                        <a href="#">Pages</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-12 col-ms-12 hidden-xs hidden-ms hidden-sm matchHeight clearfix">
                    <div class="footer-widget-area">
                        <div id="ltx_blogposts-5" class="widget widget_ltx_blogposts">
                            <h4 class="header-widget">Recent News</h4>
                            <div class="items">
                                <div class="post"><a
                                        href="http://chaitan.like-themes.com/3-ways-how-to-test-nutaral-indian-tea/"
                                        class="photo"><img width="110" height="80"
                                            src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/blog_01-110x80.jpg"
                                            class="attachment-chaitan-tiny size-chaitan-tiny wp-post-image" alt=""
                                            loading="lazy" /></a>
                                    <div class="blog-info top"><a
                                            href="http://chaitan.like-themes.com/3-ways-how-to-test-nutaral-indian-tea/"
                                            class="date">February 21, 2018</a><a
                                            href="http://chaitan.like-themes.com/3-ways-how-to-test-nutaral-indian-tea/">
                                            <h6>3 ways how to test nutaral indian tea</h6>
                                        </a></div>
                                </div>
                                <div class="post"><a
                                        href="http://chaitan.like-themes.com/results-of-international-tea-conference-18/"
                                        class="photo"><img width="110" height="80"
                                            src="http://chaitan.like-themes.com/wp-content/uploads/2018/06/blog_02-110x80.jpg"
                                            class="attachment-chaitan-tiny size-chaitan-tiny wp-post-image" alt=""
                                            loading="lazy" /></a>
                                    <div class="blog-info top"><a
                                            href="http://chaitan.like-themes.com/results-of-international-tea-conference-18/"
                                            class="date">February 21, 2018</a><a
                                            href="http://chaitan.like-themes.com/results-of-international-tea-conference-18/">
                                            <h6>Results of international tea conference &#8217;18</h6>
                                        </a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        </section>
        <footer class="copyright-block">
        <div class="container">
            <p><a href="https://themeforest.net/user/like-themes">Like-themes</a> 2018 © All Rights Reserved - <a
                    href="https://themeforest.net/user/like-themes">Purchase Theme</a></p><a href="#"
                class="go-top hidden-xs hidden-ms"><span class="fa fa-arrow-up"></span></a>
        </div>
        </footer>

        <script defer src="../assets/js/autoptimize.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@yield('scripts')

<script>

$(".ajax_add_to_cart").click(function (e) {
        e.preventDefault();

        var  quantity = document.getElementById('quantity').value;
        var  itemId = document.getElementById('itemId').value;
        // alert(quantity);
        // var ele = $(this);
// console.log(ele.parents("li").attr("data-id"));
    //  var attr_id = ele.parents("li").attr("data-id");

            $.ajax({
                url: "{{ url('add-to-cart/') }}/"+itemId,
                method: "get",
                data:{'quantity':quantity},
                success: function (response) {

                    console.log(response);




Toast.fire({
  icon: 'success',
  title: 'Item added on cart successfully'
})







                   $('.header-cart-count').html(response);

                }

            });

    });

</script>
@livewireScripts

        </body>

        </html>







