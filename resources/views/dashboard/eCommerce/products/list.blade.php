@extends('layouts.dashboard')

@section('content')
<div class="content-body">
<div class="container-fluid">
            <!--breadcrumb-->
            <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">




              <div class="ms-auto">

              </div>
            </div>
            <!--end breadcrumb-->



            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Products</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-responsive-md">
                            <thead>
                                <tr>
                                    <th style="width:80px;"><strong>#</strong></th>
                                    <th><strong>Name</strong></th>
                                    <th><strong>Price</strong></th>
                                    <th><strong>Status</strong></th>
                                    <th><strong>Date</strong></th>

                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>

                                @foreach ($rows as $list)

                                <tr id="products{{ $list->id }}">
                                    <td><strong>01</strong></td>
                                    <td>{{ $list->product_title }}</td>
                                    <td>${{ $list->Price }}</td>
                                    <td><span class="badge light badge-success">{{ $list->Status }}</span></td>
                                    <td>{{ date("Y-m-d H:i", strtotime($list->created_at)) }}</td>

                                    <td>
                                        <div class="dropdown">
                                            <button type="button" class="btn btn-success light sharp" data-toggle="dropdown" aria-expanded="false">
                                                <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                                            </button>
                                            <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                                                <a class="dropdown-item" onclick="viewdata('{{ route('products.show',['product'=>$list->id]) }}')" href="#">Show</a>
                                                <a class="dropdown-item" href="{{ url('dashboad/products/'.$list->id.'/edit') }}">Edit</a>
                                                <a class="dropdown-item"  onclick="deletedata('{{ url('dashboad/products/'.$list->id) }}','products','{{ $list->id }}')" href="#">Delete</a>
                                            </div>
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
</div>
@endsection
