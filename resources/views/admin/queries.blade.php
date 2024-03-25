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
                    <h3 class="mb-35">Queries</h3>
                </div>
                <div class="box-breadcrumb">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a class='icon-home' href='javascript:void(0)'>Admin</a></li>
                            <li><span>Queries</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="container">
                <div class="panel-white mb-30">
                    <div class="box-padding table-responsive">
                        <table id="myTable" class="table">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Phone Number</th>
                                    <th>Company Name</th>
                                    <th>Message</th>
                                    <th>Date</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($contacts as $index=>$item)
                                <tr>
                                    <td>{{++$index}}</td>
                                    <td>{{$item->name}}</td>
                                    <td>{{$item->email}}</td>
                                    <td>{{$item->number}}</td>
                                    <td>{{$item->company_name}}</td>
                                    <td>{{$item->message}}</td>
                                    <td>{{$item->created_at->format('d F Y')}}</td>
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
