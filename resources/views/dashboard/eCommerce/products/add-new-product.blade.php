@extends('layouts.dashboard')

@section('content')




<div class="content-body">
<div class="container-fluid">
      <!--breadcrumb-->

      <!--end breadcrumb-->

      <div class="row">
        <div class="col-lg-12 mx-auto">
            <?php
            if ($form_type=='new'){
                 $url =  route('products.store');
            }else{
                 $url = route('products.update',['product'=>$rows->id]);
            }
            ?>
     <form class="" action="{{ $url }}" method="post">

        <?php
        if ($form_type=='new'){}else{
        ?> @method('PUT')<?php } ?>
@csrf

          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <div class="d-sm-flex align-items-center" style="width:100%;justify-content: space-between;">
                <h5 class="mb-2 mb-sm-0">Add New Product</h5>
                <div class="ms-auto float-right">

                  <button type="submit" name class="btn btn-primary">Publish Now</button>
                </div>
              </div>
            </div>
            <div class="card-body">
              <div class="row g-3">
                <div class="col-12 col-lg-8">




                  <div class="card shadow-none border">
                    <div class="card-body">
                    <div class="row g-3">
                        <div class="col-12">
                          <label class="form-label">Product title</label>
                          <input type="text" class="form-control" name="product_title" value="{{ $rows->product_title }}"  placeholder="Product title">
                        </div>
                        <div class="col-12 col-lg-4">
                          <label class="form-label">SKU</label>
                          <input type="text" class="form-control" placeholder="SKU" name="Product_id" value="{{ $rows->Product_id }}">
                        </div>
                        <div class="col-12 col-lg-4">
                          <label class="form-label">Color</label>
                          <input type="text" class="form-control" placeholder="Color" name="Color" value="{{ $rows->Color }}">
                        </div>
                        <div class="col-12 col-lg-4">
                          <label class="form-label">Size</label>
                          <input type="text" class="form-control" placeholder="Size" name="Size" value="{{ $rows->Size }}">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Brand</label>
                          <input type="text" class="form-control" placeholder="Brand" name="Brand" value="{{ $rows->Brand }}">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Images</label>
                          <input class="form-control" type="file" id="productImage">
                          <input type="hidden" class="form-control" name="Images" id="image" value="{{ $rows->Images }}">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Full description</label>
                          <textarea class="form-control" placeholder="Full description" rows="4" cols="4" name="description"> {{ $rows->description }}</textarea>
                        </div>
                    </div>
                    </div>
                  </div>
                </div>

                <div class="col-12 col-lg-4">
                  <div class="card shadow-none border">
                    <div class="card-body">
                      <div class="row g-3">
                        <div class="col-12">
                          <label class="form-label">Price</label>
                          <input type="text" class="form-control" placeholder="Price" name="Price" value="{{ $rows->Price }}">
                        </div>
                        <div class="col-12">
                          <label class="form-label">Status</label>
                          <select class="form-select form-control"  name="Status" >
                            <option>Published</option>
                            <option>Draft</option>
                          </select>
                        </div>
                        <div class="col-12">
                          <label class="form-label">Tags</label>

                          <input type="text" placeholder="Tags" name="Tags" value="{{ $rows->Tags }}">


                        </div>

                        <div class="col-12">
                          <h5>Categories</h5>
                          <div class="category-list">


                            <select name="Categories" id="Categories" class="form-control">
                                <option value="">Select Category</option>
                                <?php foreach ($cat as $catLIt){ ?>

                                  <option>{{ $catLIt->name }}</option>

                                <?php } ?>

                            </select>




                          </div>
                        </div>
                      </div>
                      <!--end row-->
                    </div>
                  </div>
                </div>
              </div>
              <!--end row-->
            </div>
          </div>



        </form>

        </div>
      </div>
      </div>
      </div>
      <!--end row-->

      @section('script')
      <script>

         //   var product_cat = [];

            <?php foreach ($cat as $catLIt){ ?>

              //  product_cat.push('<?php echo $catLIt->name ?>');

            <?php } ?>


            //   console.log(cat);



//var input = document.querySelector('input[name=Categories]');

// new Tagify(input, {
//     whitelist: product_cat,
//     userInput: false
// })

      </script>

      @endsection

      @endsection
