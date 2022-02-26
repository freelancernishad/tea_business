@extends('layouts.dashboard')

@section('content')

<div class="content-body">
    <div class="container-fluid">
      <!--breadcrumb-->

      <!--end breadcrumb-->

      <div class="card">

        <div class="card-body">

          <div class="table-responsive">
            <table class="table align-middle table-striped">
              <tbody>


                @foreach ($rows as $list)

                <tr id="blog{{ $list->id }}">

                  <td class="productlist">
                    <a class="d-flex align-items-center gap-2" href="#">
                      <div class="product-box">
                        <img src="assets/images/products/01.png" alt="">
                      </div>
                      <div>
                        <h6 class="mb-0 product-title">{{ $list->title }}</h6>
                      </div>
                    </a>
                  </td>
                  <!-- <td><span>$18.00</span></td> -->
                  <td><span class="badge rounded-pill  @if ($list->status=='Published') alert-success @elseif($list->status=='Draft') alert-danger @endif">{{ $list->status }}</span></td>
                  <td><span>{{ date("Y-m-d H:i", strtotime($list->created_at)) }}</span></td>
                  <td>



                    <div class="dropdown">
                        <button type="button" class="btn btn-success light sharp" data-toggle="dropdown" aria-expanded="false">
                            <svg width="20px" height="20px" viewBox="0 0 24 24" version="1.1"><g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd"><rect x="0" y="0" width="24" height="24"></rect><circle fill="#000000" cx="5" cy="12" r="2"></circle><circle fill="#000000" cx="12" cy="12" r="2"></circle><circle fill="#000000" cx="19" cy="12" r="2"></circle></g></svg>
                        </button>
                        <div class="dropdown-menu" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 40px, 0px);">
                            <a class="dropdown-item" onclick="viewdata('{{ route('blogs.show',['blog'=>$list->id]) }}')" href="#">Show</a>
                            <a class="dropdown-item" href="{{ url('dashboad/blogs/'.$list->id.'/edit') }}">Edit</a>
                            <a class="dropdown-item"  onclick="deletedata('{{ url('dashboad/blogs/'.$list->id) }}','blog','{{ $list->id }}')" href="#">Delete</a>
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
