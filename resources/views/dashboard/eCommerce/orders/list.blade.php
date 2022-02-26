@extends('layouts.dashboard')

@section('content')
<div class="content-body">
<div class="container-fluid">
      <!--breadcrumb-->

      <!--end breadcrumb-->

      <div class="row">
        <div class="col-12 col-lg-9 d-flex">
          <div class="card w-100">
            <div class="card-header py-3">

            </div>
            <div class="card-body">
              <div class="table-responsive">
                <table class="table table-responsive-md">
                  <thead>
                    <tr>
                      <th>ID</th>
                      <th>Customer name</th>
                      <th>Price</th>
                      <th>Status</th>
                      <th>Date</th>
                      <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>


                   @foreach ($rows as $list)


                    <tr  id="orders{{ $list->id }}">
                      <td>#{{ $list->order_id }}</td>
                      <td>{{ $list->customers->customer_name }}</td>
                      <td>${{ $list->order_items_total_amount }}</td>
                      <td><span class="badge rounded-pill @if ($list->order_status=='Processing') alert-warning @elseif($list->order_status=='Shipped') alert-info @elseif($list->order_status=='Delivered') alert-success @elseif($list->order_status=='Canceled') alert-danger @endif">{{ $list->order_status }}</span></td>
                      <td>{{ date("Y-m-d H:i", strtotime($list->created_at));}}</td>
                      <td>
                        <div class="d-flex align-items-center gap-3 fs-6">
                          <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip"
                            data-bs-placement="bottom" title="" data-bs-original-title="View detail"
                            aria-label="Views" onclick="viewdata('{{ route('orders.show',['order'=>$list->id]) }}')"><i class="bi bi-eye-fill"></i></a>

                          <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                            title="" data-bs-original-title="Delete"  onclick="deletedata('{{ url('dashboad/orders/'.$list->id) }}','orders','{{ $list->id }}')" aria-label="Delete"><i
                              class="bi bi-trash-fill"></i></a>
                        </div>
                      </td>
                    </tr>
                    @endforeach



                  </tbody>
                </table>
              </div>
              {{ $rows->links('layouts.dashboard-paginate') }}
            </div>
          </div>
        </div>
        <div class="col-12 col-lg-3 d-flex">
          <div class="card w-100">
            <div class="card-header py-3">
              <h5 class="mb-0">Filter by</h5>
            </div>
            <div class="card-body">
              <form class="row g-3">
                <div class="col-12">
                  <label class="form-label">Order ID</label>
                  <input type="text" class="form-control" placeholder="Order ID">
                </div>
                <div class="col-12">
                  <label class="form-label">Customer</label>
                  <input type="text" class="form-control" placeholder="Customer name">
                </div>
                <div class="col-12">
                  <label class="form-label">Order Status</label>
                  <select class="form-select form-control">
                    <option>Published</option>
                    <option>Draft</option>
                  </select>
                </div>
                <div class="col-12">
                  <label class="form-label">Total</label>
                  <input type="text" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Date Added</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-12">
                  <label class="form-label">Date Modified</label>
                  <input type="date" class="form-control">
                </div>
                <div class="col-12">
                  <div class="d-grid">
                    <button class="btn btn-primary">Filter Product</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      </div>
      </div>
      <!--end row-->
      @endsection
