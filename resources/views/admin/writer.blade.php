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
    <script src="/assetdash/js/vendor/jquery-3.6.0.min.js"></script>
    <script src="/assetdash/js/vendor/jquery-migrate-3.3.0.min.js"></script>
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
                    <h3 class="mb-35">Writer</h3>
                </div>
                <div class="box-breadcrumb">
                    <div class="breadcrumbs">
                        <ul>
                            <li><a class='icon-home' href='javascript:void(0)'>Admin</a></li>
                            <li><span><a href="{{route('adminblogs')}}">Blogs</a> </span></li>
                            <li><span>Writer</span></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="d-flex justify-content-end mb-4">
                <button class="btn btn-default me-2" data-bs-toggle="modal" data-bs-target="#exampleModal"><i class="fa-solid fa-plus" style="color: #ffffff;"></i> Add</button>
            </div>

            <div class="container">
                <div class="panel-white mb-30">
                    <div class="box-padding table-responsive">
                        <livewire:blog-writertable/>
                    </div>
                </div>
            </div>

            <x-adminfooter />
        </div>
    </main>

    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Add Writer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <livewire:addblogwriter/>
        </div>
        </div>
    </div>
    
    <div class="modal fade" id="exampleModal2" tabindex="-1" aria-labelledby="exampleModalLabel2" aria-hidden="true">
        <div class="modal-dialog  modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Edit Writer</h5>
            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <livewire:editblogwriter/>
        </div>
        </div>
    </div>

    <script src="/assetdash/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="/assetdash/js/vendor/bootstrap.bundle.min.js"></script>
    <script src="/assetdash/js/plugins/waypoints.js"></script>
    <script src="/assetdash/js/plugins/magnific-popup.js"></script>
    <script src="/assetdash/js/plugins/perfect-scrollbar.min.js"></script>
    <script src="/assetdash/js/plugins/select2.min.js"></script>
    <script src="/assetdash/js/plugins/swiper-bundle.min.js"></script>
    <script src="/assetdash/js/plugins/jquery.circliful.js"></script>
    <script src="/assetdash/js/main8c94.js?v=4.1"></script>
    <script src="/assetdash/js/datatables.min.js"></script>

    <script>
        $(document).ready(function() {
            console.log('im reloading');
            $('#myTable').DataTable({
              responsive: true
            });
        });

       function ggx(id){

        let delidval = id;
        Livewire.dispatch('writer-delete', { item: delidval });
        
       }

       function editwriter(id) {
        
        let editid = id;

        var myModal = new bootstrap.Modal(document.getElementById('exampleModal2'), {
        keyboard: false
        });

        Livewire.dispatch('writer-tobeedit', { item: editid });

        myModal.show();

       }

    </script>

   

</body>

</html>
