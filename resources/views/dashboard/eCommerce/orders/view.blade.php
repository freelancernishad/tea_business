

      <div class="card">
        <div class="card-header py-3">

        <form action="{{ url('dashboad/orders/'.$rows->id) }}" method="post" style="width: 100%;">
        @csrf
        @method('PUT')




          <div class="row g-3 align-items-center">
            <div class="col-12 col-lg-6 col-md-6 me-auto">
              <h5 class="mb-1">{{ date("D, M d, Y h:iA", strtotime($rows->created_at));}}</h5>
              <p class="mb-0">Order ID : #{{ $rows->order_id }}</p>
            </div>
            <div class="col-12 col-lg-3 col-6 col-md-3">
              <select class="form-select form-control" id="order_status" name="order_status">
                <option value="">Change Status</option>
                <option>Processing</option>
                <option>Shipped</option>
                <option>Delivered</option>
                <option>Canceled</option>
              </select>
<script>
    document.getElementById('order_status').value="{{ $rows->order_status }}";
</script>


            </div>
            <div class="col-12 col-lg-3 col-6 col-md-3">
              <button type="submit" class="btn btn-primary">Save</button>

            </div>
          </div>


 </form>
        </div>
        <div class="card-body">
          <div class="row row-cols-1 row-cols-xl-2 row-cols-xxl-3">
            <div class="col">
              <div class="card border shadow-none radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="icon-box bg-light-primary border-0">
                      <i class="bi bi-person text-primary"></i>
                    </div>
                    <div class="info">
                      <h6 class="mb-2">Customer</h6>
                      <p class="mb-1">{{ $cusomer->customer_name }}</p>
                      <p class="mb-1">{{ $cusomer->customer_email }}</p>
                      <p class="mb-1">{{ $cusomer->customer_phone }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border shadow-none radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="icon-box bg-light-success border-0">
                      <i class="bi bi-truck text-success"></i>
                    </div>
                    <div class="info">
                      <h6 class="mb-2">Order info</h6>
                      <p class="mb-1"><strong>Shipping</strong> : {{ $rows->Deliver_by }}</p>
                      <p class="mb-1"><strong>Pay Method</strong> : Cash on Delivery</p>
                      <p class="mb-1"><strong>Status</strong> : @if($rows->order_count==1) New Customer  @else Old Customer @endif
                        (Order: {{ $rows->order_count }})  </p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col">
              <div class="card border shadow-none radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center gap-3">
                    <div class="icon-box bg-light-danger border-0">
                      <i class="bi bi-geo-alt text-danger"></i>
                    </div>
                    <div class="info">
                      <h6 class="mb-2">Deliver to</h6>
                      <p class="mb-1"><strong>City</strong> : {{ $rows->Deliver_city }}</p>
                      <p class="mb-1"><strong>Address</strong> : {{ $rows->Deliver_address }}</p>
                      <p class="mb-1"><strong>Country</strong> : {{ $cusomer->country }}</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <!--end row-->

          <div class="row">
            <div class="col-12 col-lg-8">
              <div class="card border shadow-none radius-10">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle mb-0">
                      <thead>
                        <tr>
                          <th>Product</th>
                          <th>Unit Price</th>
                          <th>Quantity</th>
                          <th>Total</th>
                        </tr>
                      </thead>
                      <tbody>















<?php

   $order_items = json_decode($rows->order_items);
$total = 0;
// print_r($order_items);
    ?>

@foreach($order_items as $id => $details)
@php
$total += $details->price * $details->quantity;
//  print_r($total);

@endphp


                        <tr>
                          <td>

                                  <P class="mb-0 product-title">{{ $details->name }}</P>
                                </div>
                              </a>
                            </div>
                          </td>
                          <td>${{ $details->price }}</td>
                          <td>{{ $details->quantity }}</td>
                          <td>${{ $details->price*$details->quantity }}</td>
                        </tr>

                        @endforeach



                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-4">
              <div class="card border shadow-none radius-10">
                <div class="card-body">
                  <div class="d-flex align-items-center mb-4" style="justify-content: space-between;">
                    <div>
                      <h5 class="mb-0">Order Summary</h5>
                    </div>
                    <div class="ms-auto">
                      <button type="button" class="btn @if ($rows->order_status=='Processing') alert-warning @elseif($rows->order_status=='Shipped') alert-info @elseif($rows->order_status=='Delivered') alert-success @elseif($rows->order_status=='Canceled') alert-danger @endif radius-30 px-4">{{ $rows->order_status }}</button>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3" style="justify-content: space-between;">
                    <div>
                      <p class="mb-0">Subtotal</p>
                    </div>
                    <div class="ms-auto">
                      <h5 class="mb-0">${{ $total }}</h5>
                    </div>
                  </div>
                  <div class="d-flex align-items-center mb-3" style="justify-content: space-between;">
                    <div>
                      <p class="mb-0">Shipping Price</p>
                    </div>
                    <div class="ms-auto">
                      <h5 class="mb-0">$0.00</h5>
                    </div>
                  </div>


                  <div class="d-flex align-items-center mb-3" style="justify-content: space-between;">
                    <div>
                      <p class="mb-0">Total </p>
                    </div>
                    <div class="ms-auto">
                      <h5 class="mb-0">${{ $total }}</h5>
                    </div>
                  </div>
                </div>
              </div>



            </div>
          </div>
          <!--end row-->

        </div>
      </div>



      {{-- [{"image":"http://localhost:8000/dashboard/images/products/01.png","Product_id":"12345","product_title":"Men White Polo T-shirt","price":"10","Quantity":"2","discount":"10"},{"image":"http://localhost:8000/dashboard/images/products/01.png","Product_id":"12345","product_title":"Men White Polo T-shirt","price":"10","Quantity":"2","discount":"10"},{"image":"http://localhost:8000/dashboard/images/products/01.png","Product_id":"12345","product_title":"Men White Polo T-shirt","price":"10","Quantity":"2","discount":"10"}] --}}


