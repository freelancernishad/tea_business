<div>



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
                    <article id="post-617" class="post-617 page type-page status-publish hentry">
                        <div class="entry-content clearfix" id="entry-div">
                            <div class="woocommerce">
                                <nav class="woocommerce-MyAccount-navigation">
                                    <ul>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--dashboard is-active">
                                            <a href="javascript:viod(0)" wire:click="pagefun('Dashboard')">Dashboard</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--orders">
                                            <a href="javascript:viod(0)" wire:click="pagefun('Orders')">Orders</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--downloads">
                                            <a href="javascript:viod(0)" wire:click="pagefun('Downloads')">Downloads</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-address">
                                            <a href="javascript:viod(0)" wire:click="pagefun('Addresses')">Addresses</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--edit-account">
                                            <a href="javascript:viod(0)" wire:click="pagefun('Account')">Account
                                                details</a>
                                        </li>
                                        <li
                                            class="woocommerce-MyAccount-navigation-link woocommerce-MyAccount-navigation-link--customer-logout">
                                            <a
                                                href="{{ url('my-account/logout') }}">Logout</a>
                                        </li>
                                    </ul>
                                </nav>




                                @if ($page=='' || $page=='Dashboard')

                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>
                                    <p>Hello <strong>{{ session('customer_name') }}</strong> (not <strong>{{ session('customer_name') }}</strong>? <a
                                            href="{{ url('my-account/logout') }}">Log
                                            out</a>)</p>

                                    <p>From your account dashboard you can view your <a
                                        href="javascript:viod(0)" wire:click="pagefun('Orders')">recent orders</a>,
                                        manage your <a
                                        href="javascript:viod(0)" wire:click="pagefun('Addresses')">shipping and
                                            billing addresses</a>, and <a
                                            href="javascript:viod(0)" wire:click="pagefun('Account')">edit your
                                            password and account details</a>.</p>

                                </div>
                                @elseif ($page=='Orders')
                                <div class="woocommerce-MyAccount-content">
                                    <div class="woocommerce-notices-wrapper"></div>

                                    <table
                                        class="woocommerce-orders-table woocommerce-MyAccount-orders shop_table shop_table_responsive my_account_orders account-orders-table">
                                        <thead>
                                            <tr>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-number">
                                                    <span class="nobr">Order</span></th>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-date">
                                                    <span class="nobr">Date</span></th>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-status">
                                                    <span class="nobr">Status</span></th>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-total">
                                                    <span class="nobr">Total</span></th>
                                                <th
                                                    class="woocommerce-orders-table__header woocommerce-orders-table__header-order-actions">
                                                    <span class="nobr">Actions</span></th>
                                            </tr>
                                        </thead>

                                        <tbody>


                                            @foreach ($orders as $ordersList)


                                            <tr
                                                class="woocommerce-orders-table__row woocommerce-orders-table__row--status-on-hold order">
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-number"
                                                    data-title="Order">
                                                    <a href="javascript:void(0)"  wire:click="orderDetails('details','{{ $ordersList->order_id }}')>
                                                        #{{ $ordersList->order_id }} </a>

                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-date"
                                                    data-title="Date">
                                                    <time datetime="2022-02-25T08:22:20+00:00">{{ date("F d Y", strtotime($ordersList->order_date)) }}</time>

                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-status"
                                                    data-title="Status">
                                                    {{ $ordersList->order_status }}
                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-total"
                                                    data-title="Total">
                                                    <span class="woocommerce-Price-amount amount"><span
                                                            class="woocommerce-Price-currencySymbol">$</span>{{ $ordersList->order_items_total_amount }}</span>

                                                </td>
                                                <td class="woocommerce-orders-table__cell woocommerce-orders-table__cell-order-actions"
                                                    data-title="Actions">
                                                    <a href="javascript:void(0)"  wire:click="orderDetails('details','{{ $ordersList->order_id }}')
                                                        class="woocommerce-button view btn">View</a>
                                                </td>
                                            </tr>

                                            @endforeach



                                        </tbody>
                                    </table>




                                </div>
                             @elseif ($page=='Downloads')
                             <div class="woocommerce-MyAccount-content">
                                <div class="woocommerce-notices-wrapper"></div>
                                <div class="woocommerce-Message woocommerce-Message--info woocommerce-info">
                                    <a class="woocommerce-Button btn btn-xs"
                                        href="http://chaitan.like-themes.com/shop/">
                                        Go shop </a>
                                    No downloads available yet.
                                </div>

                            </div>
                             @elseif ($page=='Addresses')
                             <div class="woocommerce-MyAccount-content">
                                <div class="woocommerce-notices-wrapper"></div>

                                <p>
                                    The following addresses will be used on the checkout page by default.</p>

                                <div class="u-columns woocommerce-Addresses col2-set addresses">


                                    <div class="u-column1 col-1 woocommerce-Address">
                                        <header class="woocommerce-Address-title title">
                                            <h3>Address</h3>
                                            <a href="http://chaitan.like-themes.com/my-account/edit-address/billing/"
                                                class="edit">Edit</a>
                                        </header>
                                        <address>{{ $Customer[0]->customer_address }} <br> {{ $Customer[0]->customer_city }} <br> {{ $Customer[0]->postal_code }} <br> {{ $Customer[0]->country }}</address>
                                    </div>



                                </div>

                            </div>
                             @elseif ($page=='Account')
                             <div class="woocommerce-MyAccount-content">
                                <div class="woocommerce-notices-wrapper"></div>
                                <form class="woocommerce-EditAccountForm edit-account" action="{{ url('/my-account/update') }}" method="post">

@csrf
                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="customer_name">Name&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                            name="customer_name" id="customer_name" autocomplete="customer_name"
                                            value="{{ $Customer[0]->customer_name }}">
                                    </p>
                                    <div class="clear"></div>

                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="billing_company">Company Name&nbsp;</label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                            name="billing_company" id="billing_company" autocomplete="billing_company"
                                            value="{{ $Customer[0]->billing_company }}">
                                    </p>
                                    <div class="clear"></div>


                                    <p class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                        <label for="customer_phone">Phone Number&nbsp;<span
                                                class="required">*</span></label>
                                        <input type="text" class="woocommerce-Input woocommerce-Input--text input-text"
                                            name="customer_phone" id="customer_phone" autocomplete="customer_phone"
                                            value="{{ $Customer[0]->customer_phone }}">
                                    </p>
                                    <div class="clear"></div>


                                    <fieldset>
                                        <legend>Password change</legend>

                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_current">Current password (leave blank to leave
                                                unchanged)</label>
                                            <input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_current" id="password_current" autocomplete="off">
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_1">New password (leave blank to leave
                                                unchanged)</label>
                                            <input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_1" id="password_1" autocomplete="off">
                                        </p>
                                        <p
                                            class="woocommerce-form-row woocommerce-form-row--wide form-row form-row-wide">
                                            <label for="password_2">Confirm new password</label>
                                            <input type="password"
                                                class="woocommerce-Input woocommerce-Input--password input-text"
                                                name="password_2" id="password_2" autocomplete="off">
                                        </p>
                                    </fieldset>
                                    <div class="clear"></div>


                                    <p>
                                        <input type="hidden" id="save-account-details-nonce"
                                            name="save-account-details-nonce" value="468f0971d6"><input type="hidden"
                                            name="_wp_http_referer" value="/my-account/edit-account/"> <button
                                            type="submit" class="woocommerce-Button btn btn-default btn-xs"
                                            name="save_account_details" value="Save changes">Save changes</button>
                                        <input type="hidden" name="action" value="save_account_details">
                                    </p>

                                </form>

                            </div>

                            @elseif ($page=='details')
                            <div class="woocommerce-MyAccount-content">
                                <div class="woocommerce-notices-wrapper"></div><p>Order #<mark class="order-number">{{ $orders_details[0]->order_id }}</mark> was placed on <mark class="order-date">{{ date("F d Y", strtotime($orders_details[0]->order_date)) }}</mark> and is currently <mark class="order-status">{{ $orders_details[0]->order_status }}</mark>.</p>


                            <section class="woocommerce-order-details">

                                <h2 class="woocommerce-order-details__title">Order details</h2>

                                <table class="woocommerce-table woocommerce-table--order-details shop_table order_details">

                                    <thead>
                                        <tr>
                                            <th class="woocommerce-table__product-name product-name">Product</th>
                                            <th class="woocommerce-table__product-table product-total">Total</th>
                                        </tr>
                                    </thead>

                                    <tbody>

<?php
   $order_items = json_decode($orders_details[0]->order_items);
$total = 0;
// print_r($order_items);
    ?>

@foreach($order_items as $id => $details)
@php
$total += $details->price * $details->quantity;
//  print_r($total);

@endphp



                               <tr class="woocommerce-table__line-item order_item">

                                <td class="woocommerce-table__product-name product-name">
                                    <a href="{{ url('/product/'.$id) }}">{{ $details->name }}</a> <strong class="product-quantity">× {{ $details->quantity }}</strong>	</td>

                                <td class="woocommerce-table__product-total product-total">
                                    <span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $details->price * $details->quantity }}</span>	</td>

                            </tr>


                            @endforeach


                                    </tbody>

                                    <tfoot>
                                                            <tr>
                                                    <th scope="row">Subtotal:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $total }}</span></td>
                                                </tr>
                                                                    <tr>
                                                    <th scope="row">Payment method:</th>
                                                    <td>{{ $orders_details[0]->Pay_Method }}</td>
                                                </tr>
                                                                    <tr>
                                                    <th scope="row">Total:</th>
                                                    <td><span class="woocommerce-Price-amount amount"><span class="woocommerce-Price-currencySymbol">$</span>{{ $total }}</span></td>
                                                </tr>
                                                                    </tfoot>
                                </table>

                                </section>

                            <section class="woocommerce-customer-details">


                                <h2 class="woocommerce-column__title">Billing address</h2>

                                <address>
                                    {{ $Customer[0]->customer_name }}<br>{{ $orders_details[0]->Deliver_address }}<br>{{ $orders_details[0]->Deliver_city }}<br>{{ $Customer[0]->postal_code }}<br>{{ $Customer[0]->country }}
                                                <p class="woocommerce-customer-details--phone">{{ $Customer[0]->customer_phone }}</p>

                                                <p class="woocommerce-customer-details--email">{{ $Customer[0]->customer_email }}</p>
                                        </address>



                            </section>
                            </div>
                                @endif






                            </div>
                        </div>
                    </article>
                </div>

            </div>
        </div>

    </div>



</div>
