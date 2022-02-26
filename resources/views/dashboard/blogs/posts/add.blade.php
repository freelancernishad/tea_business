@extends('layouts.dashboard')

@section('content')

<div class="content-body">
    <div class="container-fluid">
      <!--breadcrumb-->

      <!--end breadcrumb-->

      <div class="row">
        <div class="col-lg-8 mx-auto">
          <div class="card">
            <div class="card-header py-3 bg-transparent">
              <h5 class="mb-0">Add New Post</h5>
            </div>
            <div class="card-body">
              <div class="border p-3 rounded">

                <?php
                if ($form_type=='new'){
                     $url =  route('blogs.store');
                }else{
                     $url = route('blogs.update',['blog'=>$rows->id]);
                }
                ?>


                <form class="row g-3" method="post" action="{{ $url }}">
                    <?php
                    if ($form_type=='new'){}else{
                    ?> @method('PUT')<?php } ?>
            @csrf


                  <div class="col-12">
                    <label class="form-label">Post title</label>
                    <input type="text" class="form-control" placeholder="Post title" name="title" value="{{old('title',$rows->title)}}" >
                  </div>
                  <div class="col-12">
                    <label class="form-label">Post description</label>
                    <textarea class="form-control" placeholder="Full description" rows="4" cols="4"  name="description">{{old('description',$rows->description)}}</textarea>
                  </div>
                  <div class="col-12">
                    <label class="form-label">Images</label>
                    <input class="form-control" type="file" id="productImage">
                    <input type="hidden" class="form-control" name="Images" id="image" value="{{ $rows->Images }}">
                  </div>
                  <div class="col-12">
                    <label class="form-label">Tags</label>
                    <input type="text" class="form-control" placeholder="Tags" name="Tags" value="{{old('Tags',$rows->Tags)}}">
                  </div>
                  <div class="col-12 col-md-12">
                    <label class="form-label">Category</label>

                    <input name='Category' class='tagify--outside' placeholder='Add Category' value="{{old('Category',$rows->Category)}}">

                  </div>

                  <div class="col-12">
                    <div class="form-check">
                      <input class="form-check-input" type="checkbox" value="Published" id="status" name="status">
                      <label class="form-check-label" for="status">
                        Publish on website
                      </label>
                    </div>
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
      </div>
      </div>
      <!--end row-->


      @section('script')
      <script>

var Blog_cat = [];

<?php foreach ($cat as $catLIt){ ?>

    Blog_cat.push('<?php echo $catLIt->name ?>');

<?php } ?>


//   console.log(cat);

  var input = document.querySelector('input[name=Category]');

  new Tagify(input, {
      whitelist: Blog_cat,
      userInput: false
  })

      </script>

      @endsection
      @endsection
