@extends('layouts.dashboard')

@section('content')
<div class="content-body">
    <div class="container-fluid">

      <!--end breadcrumb-->

      <div class="card">
        <div class="card-header py-3">
          <h6 class="mb-0">Add Blog Category</h6>
        </div>
        <div class="card-body">
          <div class="row">
            <div class="col-12 col-lg-4 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                    <?php
                    if ($form_type=='new'){
                         $url =  route('blog-category.store');
                    }else{
                         $url = route('blog-category.update',['blog_category'=>$edit_data->id]);
                    }
                    ?>

                  <form class="row g-3" method="post" action="{{ $url }}">
                    <?php
                    if ($form_type=='new'){}else{
                    ?> @method('PUT')<?php } ?>

                      @csrf

                        <input type="hidden" name="category_id" value="{{ $category_id }}">

                    <div class="col-12">
                      <label class="form-label">Name</label>
                      <input type="text" class="form-control" name="name" value="{{old('name',$edit_data->name)}}" placeholder="Category name">
                      @error('name')
                            <div class="alert alert-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="col-12">
                      <label class="form-label">Slug</label>
                      <input type="text" class="form-control" name="slug" value="{{old('slug',$edit_data->slug)}}" placeholder="Slug name">
                      @error('slug')
                      <div class="alert alert-danger">{{ $message }}</div>
                  @enderror
                    </div>
                    <div class="col-12">
                      <label class="form-label">Parent</label>
                      <select class="form-select form-control mb-3" name="parent_category" id="parent_category">
                        <option value="" >Select</option>

                        @foreach ($rows as $category)

                        <option>{{ $category->name }}</option>
                        @endforeach
                      </select>

<script>

    document.getElementById('parent_category').value="{{ $edit_data->parent_category }}"
</script>

                    </div>

                    <div class="col-12">
                      <div class="d-grid">
                        <button class="btn btn-primary">Add Category</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
            <div class="col-12 col-lg-8 d-flex">
              <div class="card border shadow-none w-100">
                <div class="card-body">
                  <div class="table-responsive">
                    <table class="table align-middle">
                      <thead>
                        <tr>

                          <th>ID</th>
                          <th>Name</th>

                          <th>Slug</th>
                          <th>Parent Category</th>
                          <th>Order</th>
                          <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>

                        @foreach ($rows as $list)



                        <tr id="blog_category{{ $list->id }}">

                          <td>#{{ $list->category_id }}</td>
                          <td>{{ $list->name }}</td>

                          <td>{{ $list->slug }}</td>
                          <td>{{ $list->parent_category }}</td>
                          <td>54</td>
                          <td>
                            <div class="d-flex align-items-center gap-3 fs-6">

                              <a href="{{ url('dashboad/blog-category/'.$list->id.'/edit') }}" class="text-warning" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="" data-bs-original-title="Edit info"
                                aria-label="Edit"><i class="bi bi-pencil-fill"></i></a>
                              <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip"
                                data-bs-placement="bottom" title="" data-bs-original-title="Delete"
                                aria-label="Delete" onclick="deletedata('{{ url('dashboad/blog-category/'.$list->id) }}','blog_category','{{ $list->id }}')"><i class="bi bi-trash-fill"></i></a>
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
          <!--end row-->
        </div>
      </div>
      </div>
      </div>



      @endsection
