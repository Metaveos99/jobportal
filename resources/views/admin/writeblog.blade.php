<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="msapplication-TileColor" content="#0E0E0E">
    <meta name="template-color" content="#0E0E0E">
    
    <meta name="msapplication-config" content="browserconfig.html">
    <meta name="description" content="Index page">
    <meta name="keywords" content="index, page">
    <meta name="author" content="">
    <link rel="shortcut icon" type="image/x-icon" href="/assetdash/imgs/template/favicon.svg">
    <link href="/assetdash/css/stylecd4e.css?version=4.1" rel="stylesheet">
    <script src="https://cdn.tiny.cloud/1/oe8cysau72t9nv359m68qfndcnpdib5cp7i2zw88brq4aski/tinymce/7/tinymce.min.js" referrerpolicy="origin"></script>

    <title>Jobbox Dashboard - Job Portal HTML Template </title>
  </head>
  <body>
    <x-adminheader/>
    <main class="main">
      <x-adminnavbar/>
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Write Blog</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li><a class='icon-home' href='javascript:void(0)'>Admin</a></li>
                <li><span><a href="{{route('adminblogs')}}">Blogs</a></span></li>
                <li><span>Write Blog</span></li>
              </ul>
            </div>
          </div>
        </div>

        <div class="container">
          @if (session('Failed'))
          <div class="alert alert-danger alert-dismissible">
              <span>{{session('Failed')}}</span>
              <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
          </div>
          @endif
          <div class="panel-white mb-30">
            <div class="box-padding">
                <form action="{{route('postblog')}}" method="POST" enctype="multipart/form-data">
                  @csrf
                  <div class="form-group">
                    <label for="blogtitle" class="form-label">Title</label>
                    <input type="text" class="form-control" name="title" value="{{old('title')}}" id="blogtitle" placeholder="Enter Your Blog Title">
                    @error('title')
                        <span class="text-danger">{{$message}}</span>
                    @enderror
                  </div>
                  <div class="form-group">
                    <label for="blogslug" class="form-label">Slug</label>
                    <input type="text" class="form-control" name="slug" id="blogslug" value="{{old('slug')}}" readonly>
                    @error('slug')
                      <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="form-group">
                    <label for="blogdescription" class="form-label">Short Description</label>
                    <input type="text" class="form-control" value="{{old('description')}}" name="description" id="blogdescription" placeholder="Enter Short Description For Your Blog">
                    @error('description')
                      <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="blogwriter" class="form-label">Select Writer</label>
                        <select name="writer" id="blogwriter" class="form-control">
                          <option value="" selected disabled>Choose Writer</option>
                          @foreach ($writers as $item)
                          <option value="{{$item->id}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                        @error('writer')
                          <span class="text-danger">{{$message}}</span>
                        @enderror
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="blogcategory" class="form-label">Select Category</label>
                        <select name="category" id="blogcategory" class="form-control">
                          <option value="" selected disabled>Choose Category</option>
                          @foreach ($category as $item)
                           <option value="{{$item->name}}">{{$item->name}}</option>
                          @endforeach
                        </select>
                          @error('category')
                            <span class="text-danger">{{$message}}</span>
                          @enderror
                      </div>
                    </div>
                  </div>

                  <div class="form-group">
                    <label for="blogcover_image" class="form-label">Select Cover Image</label>
                    <input type="file" name="blogcover_image" id="blogcover_image" value="{{old('blogcover_image')}}" class="form-control" accept=".png,.jpeg,.jpg">
                    @error('blogcover_image')
                      <span class="text-danger">{{$message}}</span>
                     @enderror
                  </div>

                  <div class="form-group">
                    <label  class="form-label">Write Your Blog</label>
                    <textarea name="blog" class="ckeditor-classic" rows="15" >{{old('blog')}}</textarea>
                    @error('blog')
                    <span class="text-danger">{{$message}}</span>
                   @enderror
                  </div>

                  <button class="btn btn-default" type="submit">Submit</button>

                </form>
            </div>
          </div>
        </div>
 

        <x-adminfooter/>
      </div>
    </main>
    <script src="/assetdash/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/assetdash/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assetdash/js/vendor/jquery-migrate-3.3.0.min.js"></script>
    <script src="/assetdash/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/assetdash/js/plugins/waypoints.js"></script>
    <script src="/assetdash/js/plugins/magnific-popup.js"></script>
    <script src="/assetdash/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assetdash/js/plugins/select2.min.js"></script>
    <script src="/assetdash/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assetdash/js/plugins/jquery.circliful.js"></script>
    <script src="/assetdash/js/main8c94.js?v=4.1"></script>
    <script>
      tinymce.init({
        selector: 'textarea',
        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage advtemplate ai mentions tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        tinycomments_mode: 'embedded',
        tinycomments_author: 'Author name',
        mergetags_list: [
          { value: 'First.Name', title: 'First Name' },
          { value: 'Email', title: 'Email' },
        ],
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
   
      <script>
        function slugify(text) {
            return text.toString().toLowerCase()
                .replace(/\s+/g, '-')           // Replace spaces with -
                .replace(/[^\w\-]+/g, '')       // Remove all non-word chars
                .replace(/\-\-+/g, '-')         // Replace multiple - with single -
                .replace(/^-+/, '')             // Trim - from start of text
                .replace(/-+$/, '');            // Trim - from end of text
        }

        document.getElementById('blogtitle').addEventListener('input', function(e) {
            const title = e.target.value;
            const slug = slugify(title);
            document.getElementById('blogslug').value = slug;
        });
      </script>
    
  </body>

</html>