<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="keywords" content="">
	<meta name="author" content="">
	<meta name="robots" content="">
    <meta name="viewport" content="width=device-width,initial-scale=1">
	<meta name="description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:title" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:description" content="Zenix - Crypto Admin Dashboard">
	<meta property="og:image" content="https://zenix.dexignzone.com/xhtml/social-image.png">
	<meta name="format-detection" content="telephone=no">
    <title>Zenix - Crypto Admin Dashboard </title>
    <!-- Favicon icon -->
    <link rel="icon" type="image/png" sizes="16x16" href="{{ asset('images/favicon.png') }}">
	<link rel="stylesheet" href="{{ asset('vendor/chartist/css/chartist.min.css') }}">
    <link href="{{ asset('vendor/bootstrap-select/dist/css/bootstrap-select.min.css') }}" rel="stylesheet">
	<link href="{{ asset('vendor/owl-carousel/owl.carousel.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;500&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css">
    <link href="https://kit-pro.fontawesome.com/releases/v5.15.2/css/pro.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.6/tagify.min.css" integrity="sha512-3TQTxe+kPDiA+h9hlIm4ydUdtreW8fVei75UUVmBioKA+prR2aYZqSDsCOBqGBmXJ4JSXKyj3bMHD1VAFDGyTA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

	<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/croppie/2.6.5/croppie.css" integrity="sha512-2eMmukTZtvwlfQoG8ztapwAH5fXaQBzaMqdljLopRSA0i6YKM8kBAOrSSykxu9NN9HrtD45lIqfONLII2AFL/Q==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <style>

        select option {
            margin: 40px;
            background: #eb8153;
            color: white;
            text-shadow: 0 1px 0 rgba(0, 0, 0, 0.4);
        }
            </style>
</head>
<body data-typography="poppins" data-theme-version="dark" data-layout="vertical" data-nav-headerbg="color_1" data-headerbg="color_1" data-sidebar-style="full" data-sibebarbg="color_1" data-sidebar-position="fixed" data-header-position="fixed" data-container="wide" direction="ltr" data-primary="color_1" data-new-gr-c-s-check-loaded="14.1050.0" data-gr-ext-installed="">

    <!--*******************
        Preloader start
    ********************-->
    <div id="preloader">
        <div class="sk-three-bounce">
            <div class="sk-child sk-bounce1"></div>
            <div class="sk-child sk-bounce2"></div>
            <div class="sk-child sk-bounce3"></div>
        </div>
    </div>
    <!--*******************
        Preloader end
    ********************-->

    <!--**********************************
        Main wrapper start
    ***********************************-->
    <div id="main-wrapper">

        <!--**********************************
            Nav header start
        ***********************************-->
        <div class="nav-header">
            <a href="index.html" class="brand-logo">
                <svg class="logo-abbr" width="50" height="50" viewbox="0 0 50 50" fill="none" xmlns="http://www.w3.org/2000/svg">
					<rect class="svg-logo-rect" width="50" height="50" rx="6" fill="#EB8153"></rect>
					<path class="svg-logo-path" d="M17.5158 25.8619L19.8088 25.2475L14.8746 11.1774C14.5189 9.84988 15.8701 9.0998 16.8205 9.75055L33.0924 22.2055C33.7045 22.5589 33.8512 24.0717 32.6444 24.3951L30.3514 25.0095L35.2856 39.0796C35.6973 40.1334 34.4431 41.2455 33.3397 40.5064L17.0678 28.0515C16.2057 27.2477 16.5504 26.1205 17.5158 25.8619ZM18.685 14.2955L22.2224 24.6007L29.4633 22.6605L18.685 14.2955ZM31.4751 35.9615L27.8171 25.6886L20.5762 27.6288L31.4751 35.9615Z" fill="white"></path>
				</svg>
                <svg class="brand-title" width="74" height="22" viewbox="0 0 74 22" fill="none" xmlns="http://www.w3.org/2000/svg">
					<path class="svg-logo-path" d="M0.784 17.556L10.92 5.152H1.176V1.12H16.436V4.564L6.776 16.968H16.548V21H0.784V17.556ZM25.7399 21.28C24.0785 21.28 22.6599 20.9347 21.4839 20.244C20.3079 19.5533 19.4025 18.6387 18.7679 17.5C18.1519 16.3613 17.8439 15.1293 17.8439 13.804C17.8439 12.3853 18.1519 11.088 18.7679 9.912C19.3839 8.736 20.2799 7.79333 21.4559 7.084C22.6319 6.37467 24.0599 6.02 25.7399 6.02C27.4012 6.02 28.8199 6.37467 29.9959 7.084C31.1719 7.79333 32.0585 8.72667 32.6559 9.884C33.2719 11.0413 33.5799 12.2827 33.5799 13.608C33.5799 14.1493 33.5425 14.6253 33.4679 15.036H22.6039C22.6785 16.0253 23.0332 16.7813 23.6679 17.304C24.3212 17.808 25.0585 18.06 25.8799 18.06C26.5332 18.06 27.1585 17.9013 27.7559 17.584C28.3532 17.2667 28.7639 16.8373 28.9879 16.296L32.7959 17.36C32.2172 18.5173 31.3119 19.46 30.0799 20.188C28.8665 20.916 27.4199 21.28 25.7399 21.28ZM22.4919 12.292H28.8759C28.7825 11.3587 28.4372 10.6213 27.8399 10.08C27.2612 9.52 26.5425 9.24 25.6839 9.24C24.8252 9.24 24.0972 9.52 23.4999 10.08C22.9212 10.64 22.5852 11.3773 22.4919 12.292ZM49.7783 21H45.2983V12.74C45.2983 11.7693 45.1116 11.0693 44.7383 10.64C44.3836 10.192 43.9076 9.968 43.3103 9.968C42.6943 9.968 42.069 10.2107 41.4343 10.696C40.7996 11.1813 40.3516 11.8067 40.0903 12.572V21H35.6103V6.3H39.6423V8.764C40.1836 7.90533 40.949 7.23333 41.9383 6.748C42.9276 6.26267 44.0663 6.02 45.3543 6.02C46.3063 6.02 47.0716 6.19733 47.6503 6.552C48.2476 6.888 48.6956 7.336 48.9943 7.896C49.3116 8.43733 49.517 9.03467 49.6103 9.688C49.7223 10.3413 49.7783 10.976 49.7783 11.592V21ZM52.7548 4.62V0.559999H57.2348V4.62H52.7548ZM52.7548 21V6.3H57.2348V21H52.7548ZM63.4657 6.3L66.0697 10.444L66.3497 10.976L66.6297 10.444L69.2337 6.3H73.8537L68.9257 13.608L73.9657 21H69.3457L66.6017 16.884L66.3497 16.352L66.0977 16.884L63.3537 21H58.7337L63.7737 13.692L58.8457 6.3H63.4657Z" fill="black"></path>
				</svg>
            </a>

            <div class="nav-control">
                <div class="hamburger">
                    <span class="line"></span><span class="line"></span><span class="line"></span>
                </div>
            </div>
        </div>
        <!--**********************************
            Nav header end
        ***********************************-->

		<!--**********************************
            Chat box start
        ***********************************-->

		<!--**********************************
            Header start
        ***********************************-->
        <div class="header">
            <div class="header-content">
                <nav class="navbar navbar-expand">
                    <div class="collapse navbar-collapse justify-content-between">
                        <div class="header-left">
							<div class="input-group search-area right d-lg-inline-flex d-none">
								<input type="text" class="form-control" placeholder="Find something here...">
								<div class="input-group-append">
									<span class="input-group-text">
										<a href="javascript:void(0)">
											<i class="flaticon-381-search-2"></i>
										</a>
									</span>
								</div>
							</div>
                        </div>
                        <ul class="navbar-nav header-right main-notification">
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-theme-mode" href="#">
									<i id="icon-light" class="fa fa-sun-o"></i>
                                    <i id="icon-dark" class="fa fa-moon-o"></i>
                                </a>
							</li>
							<li class="nav-item dropdown notification_dropdown">
                                <a class="nav-link bell dz-fullscreen" href="#">
                                    <svg id="icon-full" viewbox="0 0 24 24" width="20" height="20" stroke="currentColor" stroke-width="2" fill="none" stroke-linecap="round" stroke-linejoin="round" class="css-i6dzq1"><path d="M8 3H5a2 2 0 0 0-2 2v3m18 0V5a2 2 0 0 0-2-2h-3m0 18h3a2 2 0 0 0 2-2v-3M3 16v3a2 2 0 0 0 2 2h3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                    <svg id="icon-minimize" width="20" height="20" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-minimize"><path d="M8 3v3a2 2 0 0 1-2 2H3m18 0h-3a2 2 0 0 1-2-2V3m0 18v-3a2 2 0 0 1 2-2h3M3 16h3a2 2 0 0 1 2 2v3" style="stroke-dasharray: 37, 57; stroke-dashoffset: 0;"></path></svg>
                                </a>
							</li>


                            <li class="nav-item dropdown header-profile">
                                <a class="nav-link" href="#" role="button" data-toggle="dropdown">
                                    <img src="images/profile/pic1.jpg" width="20" alt="">
									<div class="header-info">
										<span>Johndoe</span>
										<small>Super Admin</small>
									</div>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a href="app-profile.html" class="dropdown-item ai-icon">
                                        <svg id="icon-user1" xmlns="http://www.w3.org/2000/svg" class="text-primary" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                        <span class="ml-2">Profile </span>
                                    </a>

                                    <a href="page-login.html" class="dropdown-item ai-icon">
                                        <svg id="icon-logout" xmlns="http://www.w3.org/2000/svg" class="text-danger" width="18" height="18" viewbox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                                        <span class="ml-2">Logout </span>
                                    </a>
                                </div>
                            </li>
                        </ul>
                    </div>
                </nav>

			</div>
        </div>
        <!--**********************************
            Header end ti-comment-alt
        ***********************************-->

        <!--**********************************
            Sidebar start
        ***********************************-->
        <div class="deznav">
            <div class="deznav-scroll">

				<ul class="metismenu" id="menu">
					<li class="nav-label first">Main Menu</li>
                    <li><a class="ai-icon" href="{{ url('home') }}" aria-expanded="false">
							<i class="flaticon-144-layout"></i>
							<span class="nav-text">Dashboard</span>
						</a>


                    </li>

					<li class="nav-label">eCommerce</li>

                    <li>
                        <a class="ai-icon" href="{{ route('products.index') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Products</span>
                        </a>
                     </li>


                    <li>
                        <a class="ai-icon" href="{{ route('product-category.index') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Products Categories</span>
                        </a>
                     </li>


                    <li>
                        <a class="ai-icon" href="{{ route('orders.index') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Orders</span>
                        </a>
                     </li>


                    <li>
                        <a class="ai-icon" href="{{ route('products.create') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Add New Product</span>
                        </a>
                     </li>


					<li class="nav-label">Blogs</li>

                    <li>
                        <a class="ai-icon" href="{{ route('blogs.index') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Posts</span>
                        </a>
                     </li>


                    <li>
                        <a class="ai-icon" href="{{ route('blog-category.index') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Post Categories</span>
                        </a>
                     </li>

                    <li>
                        <a class="ai-icon" href="{{ route('blogs.create') }}" aria-expanded="false">
                            <i class="flaticon-144-layout"></i>
                            <span class="nav-text">Add New Post</span>
                        </a>
                     </li>

                </ul>

			</div>
        </div>
        <!--**********************************
            Sidebar end
        ***********************************-->


        @yield('content')


        <!--**********************************
            Footer start
        ***********************************-->
        <div class="footer">
            <div class="copyright">
                <p>Copyright © Designed &amp; Developed by <a href="../index.htm" target="_blank">DexignZone</a> 2021</p>
            </div>
        </div>
        <!--**********************************
            Footer end
        ***********************************-->





		<!--**********************************
           Support ticket button start
        ***********************************-->

        <!--**********************************
           Support ticket button end
        ***********************************-->


    </div>
    <!--**********************************
        Main wrapper end
    ***********************************-->

    <!--**********************************
        Scripts
    ***********************************-->
    <!-- Required vendors -->
    <script data-cfasync="false" src="../cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js">
    </script><script src="{{ asset('vendor/global/global.min.js') }}"></script>
	<script src="{{ asset('vendor/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
	<script src="{{ asset('vendor/chart.js/Chart.bundle.min.js') }}"></script>

	<!-- Chart piety plugin files -->
    <script src="{{ asset('vendor/peity/jquery.peity.min.js') }}"></script>

	<!-- Apex Chart -->
	<script src="{{ asset('vendor/apexchart/apexchart.js') }}"></script>

	<!-- Dashboard 1 -->
	<script src="{{ asset('js/dashboard/dashboard-1.js') }}"></script>

	<script src="{{ asset('vendor/owl-carousel/owl.carousel.js') }}"></script>
    <script src="{{ asset('js/custom.min.js') }}"></script>
	<script src="{{ asset('js/deznav-init.js') }}"></script>
    <script src="{{ asset('js/demo.js') }}"></script>
    <script src="{{ asset('js/styleSwitcher.js') }}"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tagify/4.9.6/tagify.min.js" integrity="sha512-wAzuooJgcFWbYbwmko7OXDFdq8dejt0VSee7eHiDvszK5cyuzOH9UQ9rUqarP70lplAfc0ozg6XRJwXCWtkXFQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
		jQuery(document).ready(function(){
			setTimeout(function() {
				dezSettingsOptions.version = 'dark';
				new dezSettings(dezSettingsOptions);
			},1500)
		});
	</script>

<!-- Modal -->
<div class="modal fade" id="dataModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog  modal-xl">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="staticBackdropLabel"></h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body" id="modal_content">
          ...
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>

        </div>
      </div>
    </div>
  </div>


<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>



<div id="uploadimageModal" class="modal" role="dialog">
    <div class="modal-dialog modal-lg">
     <div class="modal-content">

           <div class="modal-body">
             <div class="row">
          <div class="col-md-8 text-center">
            <div id="upload-image"></div>

          </div>
          <div class="col-md-4" style="padding-top:30px;">
           <br />
           <br />
           <br/>

        </div>
       </div>


           </div>
             <span class="btn btn-success crop_image" onclick="imagesize()" data-dismiss="modal" >Crop</span>
        </div>
       </div>
      </div>

      <script src="{{ asset('js/croppie.js') }}"></script>

<script>




var imageW,imageH,frameW,frameH;




$('#productImage , #committeeImage , #galleryImage , #infoImage , #brandsliderImage , #mainsliderImage , #blogImage , #categoryImage').on('change', function () {
  $('#upload-image').croppie('destroy');
  if($(this).is('#productImage')){
    imageW = 330;
    imageH = 220;
    frameW = 400;
    frameH = 350;
  }

  if($(this).is('#committeeImage')){
    imageW = 200;
    imageH = 250;
    frameW = 300;
    frameH = 350;
  }


  if($(this).is('#galleryImage')){
    imageW = 600;
    imageH = 400;
    frameW = 650;
    frameH = 450;
  }

  if($(this).is('#infoImage')){
    imageW = 600;
    imageH = 200;
    frameW = 650;
    frameH = 450;
  }

  if($(this).is('#brandsliderImage')){
    imageW = 200;
    imageH = 135;
    frameW = 350;
    frameH = 250;
  }
  if($(this).is('#mainsliderImage')){
    imageW = 1000;
    imageH = 500;
    frameW = 1050;
    frameH = 550;
  }
  if($(this).is('#blogImage')){
    imageW = 1000;
    imageH = 500;
    frameW = 1050;
    frameH = 550;
  }
  if($(this).is('#categoryImage')){
    imageW = 200;
    imageH = 150;
    frameW = 250;
    frameH = 200;
  }


  $image_crop = $('#upload-image').croppie({
enableExif: true,
viewport: {
width: imageW,
height: imageH,
type: 'square'
},
boundary: {
width: frameW,
height: frameH
}
});


var reader = new FileReader();
reader.onload = function (e) {
$image_crop.croppie('bind', {
url: e.target.result
}).then(function(){
console.log('jQuery bind complete');
});
}
reader.readAsDataURL(this.files[0]);
$('#uploadimageModal').modal('show');

});


console.log(imageW);


function imagesize(){
$image_crop.croppie('result', {
type: 'canvas',
size: 'viewport'
}).then(function (response) {
console.log(response);

$("#image").val(response);
$("#imagepreview").attr("src",response);

$('#uploadimageModal').modal('hide');

});
}
</script>

@yield('script')

<script>

  $(document).ready(function() {
      $('.category_multi_select').select2();
  });


// The DOM element you wish to replace with Tagify
var inputtag = document.querySelector('input[name=Tags]');

// initialize Tagify on the above input node reference
new Tagify(inputtag)





function viewdata(url) {

//   alert(url)
          $.ajax({
              url: url,
              method: "get",
              success: function(data) {

                  // console.log(data)
                  $("#modal_content").html(data);
                  $("#dataModal").modal("show");
              },
          });


      }


  function deletedata(url,idname,id) {

          Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
          }).then((result) => {
          if (result.isConfirmed) {


          $.ajax({
              url: url,
              method: "POST",
              data:{ "_token": "{{ csrf_token() }}" ,"_method": "DELETE"},
              success: function(data) {

                   console.log(data)
                   Swal.fire(
              'Deleted!',
              'Your file has been deleted.',
              'success'
              )


              $('#'+idname+id).closest("tr").fadeOut(1000);

              },
          });








          }
  })



      }


  </script>

</body>

</html>
