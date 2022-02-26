@extends('layouts.layout')

@section('content')

<style>
nav.woocommerce-MyAccount-navigation {
    float: left;
    width: 30%;
}

.woocommerce-MyAccount-content {
    float: right;
    width: 68%;
}
@media (max-width:768px){
    nav.woocommerce-MyAccount-navigation {
    float: left;
    width:100%;
}

.woocommerce-MyAccount-content {
    float: right;
    width: 100%;
}
}



</style>
<livewire:login />

@if(session()->has('message'))
    <script>

Toast.fire({
  icon: "{{ session('icon') }}",
  title: "{{ session('message') }}"
})

    </script>
@endif
@endsection
