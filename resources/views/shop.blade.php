@extends('layouts.layout')

@section('content')
<style>



</style>


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
<livewire:product-filter />
@endsection
