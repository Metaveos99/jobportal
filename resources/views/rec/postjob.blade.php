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
    <x-recruiterheader/>
    <main class="main">
      <x-recruiternavbar/>
      <div class="box-content">
        <div class="box-heading">
          <div class="box-title"> 
            <h3 class="mb-35">Post Job</h3>
          </div>
          <div class="box-breadcrumb"> 
            <div class="breadcrumbs">
              <ul> 
                <li><a class='icon-home' href='javascript:void(0)'>Admin</a></li>
                <li><span>Post Job</span></li>
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
                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="industrySelect" class="form-label">Select Industry</label>
                        <select id="industrySelect" class="select-active">
                          <!-- Options will be dynamically added here -->
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label for="jobTitleSelect" class="form-label">Job Titles</label>
                        <select id="jobTitleSelect" class="select-active">
                          <!-- Options will be dynamically added here -->
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Job Type</label>
                        <select class="select-active">
                          <option value="full-time">Full-time</option>
                          <option value="part-time">Part-time</option>
                          <option value="contract">Contract</option>
                          <option value="temporary">Temporary</option>
                          <option value="internship">Internship</option>
                          <option value="freelance">Freelance</option>
                          <option value="remote">Remote</option>
                          <option value="volunteer">Volunteer</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Job Level</label>
                        <select class="select-active">
                          <option value="entry-level">Entry-level</option>
                          <option value="junior">Junior</option>
                          <option value="mid-level">Mid-level</option>
                          <option value="senior-level">Senior-level</option>
                          <option value="executive">Executive</option>
                          <option value="management">Management</option>
                          <option value="intern">Intern</option>
                        </select>
                      </div>
                    </div>
                   
                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">Minimum Experience</label>
                        <input type="number" class="form-control" placeholder="Minimum Experience">
                      </div>
                    </div>

                    <div class="col-md-6">
                        <div class="form-group">
                          <label for="" class="form-label">Salary</label>
                          <input type="number" class="form-control" placeholder="Enter Salary">
                        </div>
                    </div>

                    <div class="col-md-12">
                      <div class="form-group">
                          <label for="" class="form-label">Full Address</label>
                          <input type="text" class="form-control" placeholder="Enter Full Address">
                      </div>
                    </div>

                  </div>

                  <div class="row">
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">State</label>
                        <select id="stateSelect" class="select-active">
                          <!-- Options will be dynamically added here -->
                        </select>
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <label class="form-label">District</label>
                        <select id="citySelect" class="select-active">
                          <!-- Options will be dynamically added here -->
                        </select>
                      </div>
                    </div>
                  </div>

                  <div class="form-group mt-4">
                    <label  class="form-label">Job Description</label>
                    <textarea name="job_description" class="form-control" rows="15" >{{old('job_description')}}</textarea>
                    @error('job_description')
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
        menubar: false,
        plugins: 'anchor  charmap codesample emoticons  lists  searchreplace table visualblocks wordcount checklist casechange  formatpainter pageembed  a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode  advtemplate  mentions  tableofcontents footnotes  autocorrect typography inlinecss markdown',
        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | table | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
        
       
        ai_request: (request, respondWith) => respondWith.string(() => Promise.reject("See docs to implement AI Assistant")),
      });
    </script>
   
   <script src="/assetdash/js/postjobjs.js"></script>
    
  </body>

</html>