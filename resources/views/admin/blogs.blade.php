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
    <link href="https://cdn.datatables.net/v/bs5/dt-2.0.2/datatables.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />

    <title>Jobbox Dashboard - Job Portal HTML Template </title>
</head>

<body>
    <x-adminheader />
    <main class="main">
        <x-adminnavbar />
        <div class="box-content">
            <div class="box-heading">
                <div class="box-title">
                    <h3 class="mb-35">Blogs</h3>
                </div>
                <div class="box-breadcrumb">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a class='icon-home' href='javascript:void(0)'>Admin</a></li>
                            <li><span>Blogs</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-4">
                <a class="btn btn-default me-2" href="{{ route('writeblog') }}"><img
                        src="/assetdash/imgs/page/dashboard/pen-solid.svg" style="width: 1.5rem;padding-right: 12px;"
                        alt="pen"> Write New Blog</a>
                <a class="btn btn-default me-2" href="{{ route('managecategory') }}"><i class="fa-solid fa-list me-1" style="color: #ffffff;"></i> Manage Category</a>
                <a class="btn btn-default me-2" href="{{ route('managewriter') }}"><i class="fa-solid fa-file-pen me-1" style="color: #ffffff;"></i> Manage Writer</a>
            </div>

            <div class="container">
                @if (session('Success'))
                <div class="alert alert-success alert-dismissible">
                    <span>{{session('Success')}}</span>
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
                @endif
                <div class="panel-white mb-30">
                    <div class="box-padding table-responsive">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Cover Image</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Writer</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($blogs as $index=>$item)
                                <tr>
                                    <td>{{++$index}}</td>
                                    <td><img style="width: 8rem" src="{{asset('storage/'.$item->blogcover_image)}}" alt="Cover Image"></td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->description}}</td>
                                    <td>{{$item->getWriter->name}}</td>
                                    <td>{{$item->category}}</td>
                                    <td>{{$item->created_at->format('d F Y')}}</td>
                                    <td>
                                        <div class="d-flex">
                                            <a href="{{route('blogdetails',['id'=>$item->slug])}}" target="_blank" data-bs-toggle="tooltip" data-bs-placement="top" title="View">
                                                <button class="btn">
                                                    <i class="fa-solid fa-eye me-2"></i> 
                                                </button>
                                            </a>
    
                                            <a href="{{route('editblog',['id'=>$item->id])}}" data-bs-toggle="tooltip" data-bs-placement="top" title="Edit">
                                                <button class="btn">
                                                    <i class="fa-solid fa-pen-to-square me-2"></i>
                                                </button>
                                            </a>
    
                                            
                                            <form action="{{route('deleteblog')}}" method="post">
                                                @csrf
                                                <button class="btn" name="id" value="{{$item->id}}" type="submit" data-bs-toggle="tooltip" data-bs-placement="top" title="Delete">
                                                    <i class="fa-solid fa-trash" style="color: red"></i>
                                                </button>
                                            </form>
                                        </div>
                                    </td>
                                </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>

            <x-adminfooter />
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

    <script src="https://cdn.datatables.net/v/bs5/dt-2.0.2/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            $('#myTable').DataTable({
              responsive: true
            });
        });
    </script>

</body>

</html>
