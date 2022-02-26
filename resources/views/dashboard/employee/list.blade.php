@extends('layouts.dashboard')

@section('content')
      <!--breadcrumb-->
      <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
        <div class="breadcrumb-title pe-3">Employee</div>
        <div class="ps-3">
          <nav aria-label="breadcrumb">
            <ol class="breadcrumb mb-0 p-0">
              <li class="breadcrumb-item"><a href="javascript:;"><i class="bx bx-home-alt"></i></a>
              </li>
              <li class="breadcrumb-item active" aria-current="page">Employee List</li>
            </ol>
          </nav>
        </div>
        <div class="ms-auto">
          <div class="btn-group">
            <button type="button" class="btn btn-primary">Settings</button>
            <button type="button" class="btn btn-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
              data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
            </button>
            <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                href="javascript:;">Action</a>
              <a class="dropdown-item" href="javascript:;">Another action</a>
              <a class="dropdown-item" href="javascript:;">Something else here</a>
              <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
            </div>
          </div>
        </div>
      </div>
      <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <div class="row align-items-center m-0">
            <div class="col-md-3 col-12 me-auto mb-md-0 mb-3">

            </div>
            <div class="col-md-2 col-6">
              <input type="date" class="form-control">
            </div>
            <div class="col-md-2 col-6">

            </div>
          </div>
        </div>
        <div class="card-body">

          <div class="table-responsive">
            <table class="table align-middle table-striped">
              <tbody>



                @foreach ($rows as $list)

                <tr id="employee{{ $list->id }}">
                  <td>
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox">
                    </div>
                  </td>
                  <td class="productlist">
                    <a class="d-flex align-items-center gap-2" href="#">
                      <div class="product-box">
                        <img src="{{ asset('dashboard/images/products/01.png') }}" alt="">
                      </div>
                      <div>
                        <h6 class="mb-0 product-title">{{ $list->name }}</h6>
                      </div>
                    </a>
                  </td>
                  <!-- <td><span>$18.00</span></td> -->
                  <td><span class="">{{ $list->sellery }} </span></td>
                  <td><span>{{ date("Y-m-d H:i", strtotime($list->created_at)) }}</span></td>
                  <td>
                    <div class="d-flex align-items-center gap-3 fs-6">
                      <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="" data-bs-original-title="View detail" aria-label="Views"  onclick="viewdata('{{ route('employee.show',['employee'=>$list->id]) }}')" ><i
                          class="bi bi-eye-fill"></i></a>
                      <a href="{{ url('dashboad/employee/'.$list->id.'/edit') }}" class="text-warning" data-bs-toggle="tooltip"
                        data-bs-placement="bottom" title="" data-bs-original-title="Edit info" aria-label="Edit"><i
                          class="bi bi-pencil-fill"></i></a>
                      <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                        title="" data-bs-original-title="Delete"   onclick="deletedata('{{ url('dashboad/employee/'.$list->id) }}','employee','{{ $list->id }}')" aria-label="Delete"><i
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
      @endsection
