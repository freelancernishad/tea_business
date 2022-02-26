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
              <li class="breadcrumb-item active" aria-current="page">Add New Employee</li>
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

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add New Employee</h5>
            </div>
            <div class="card-body">
              <div class="border p-3 rounded">


                    <?php
                    if ($form_type=='new'){
                         $url =  route('employee.store');
                    }else{
                         $url = route('employee.update',['employee'=>$rows->id]);
                    }
                    ?>
             <form class="row g-3" action="{{ $url }}" method="post" >


                            <?php
                            if ($form_type=='new'){}else{
                            ?> @method('PUT')<?php } ?>
                    @csrf

                    <input type="hidden" name="employee_id" value="{{ $employee_id }}">



                  <div class="col-12">
                    <label class="form-label">Employee Name</label>
                    <input type="text" class="form-control" placeholder="Employee Name" name="name" value="{{old('name',$rows->name)}}">
                  </div>

                  <div class="col-6">
                    <label class="form-label">Position</label>
                    <input type="text" class="form-control" placeholder="Employee Position" name="position" value="{{old('position',$rows->position)}}">
                  </div>

                  <div class="col-6">
                      <label class="form-label">Type</label>

                      <select name="type" id="type" class="form-control" >

                          <option value="">Select</option>
                          <option>Full Time</option>
                          <option>Part Time</option>
                        </select>
<script>

    document.getElementById('type').value="{{ old('type',$rows->type) }}";

</script>

                    </div>

                    <div class="col-12">
                    <label class="form-label">Sellery</label>
                    <input type="text" class="form-control" placeholder="Sellery" name="sellery" value="{{old('sellery',$rows->sellery)}}">
                    </div>

                  <div class="col-12">
                    <label class="form-label">Employee Photo</label>
                    <input class="form-control" type="file" name="image" >
                  </div>



                  <div class="col-12">
                    <button class="btn btn-primary px-4">Submit Item</button>
                  </div>
                </form>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!--end row-->

      @endsection
