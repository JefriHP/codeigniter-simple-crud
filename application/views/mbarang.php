<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="x-ua-compatible" content="ie=edge">
        <title>Lab. Komputer</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="shortcut icon" type="image/png" href="<?php echo base_url('assets/images/icon/favicon.ico') ?>">
        <link rel="stylesheet" href="<?php echo base_url('assets/css/bootstrap.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/font-awesome.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/themify-icons.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/metisMenu.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/slicknav.min.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/owl.carousel.min.css') ?>">

        <!-- Start datatable css -->
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.18/css/dataTables.bootstrap4.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
        <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.jqueryui.min.css">

        <!-- others css -->
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/typography.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/default-css.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/styles.css') ?>">
        <link rel="stylesheet" type="text/css" href="<?php echo base_url('assets/css/responsive.css') ?>">
        
        <!-- modernizr css -->
        <script rel="stylesheet" type="text/css"  href="<?= base_url('assets/js/vendor/modernizr-2.8.3.min.js') ?>"></script>       
    </head>

    <body>
        <div class="page-container">       
            <!-- sidebar menu area start -->
            <div class="sidebar-menu">
                <div class="sidebar-header">
                    <div class="logo">
                        <h4 class ="text-muted">
                            <i class="fa fa-arrow-circle-up"></i> <span>Lab. Komputer</span>
                        </h4>                  
                    </div>
                </div>
                <div class="main-menu">
                    <div class="menu-inner">
                        <nav>
                            <ul class="metismenu" id="menu">                      
                                <li class="group-menu" style="margin-top: 10px;">
                                    <h6 class="nav-link disabled">CRUD</h6>
                                    <hr style="margin-top: 1px; margin-bottom: 1px; margin-right: 10px; margin-left: 10px; border: 0; border-top: 1px solid rgb(139, 141, 145);">
                                </li>
                                <li>
                                    <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Inline (on Table)</span></a>
                                </li>                           
                                <li>
                                    <a href="#" aria-expanded="true"><i class="ti-dashboard"></i><span>On Modal</span></a>
                                </li>                           
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
            <!-- sidebar menu area end -->        

            <div class="header-area" style="padding-top: 0px; padding-bottom: 0px;">
                <div class="row align-items-center">
                    <!-- nav and search button -->
                    <div class="col-md-8 col-sm-8 clearfix">
                        <div class="nav-btn pull-left">
                            <span></span>
                            <span></span>
                            <span></span>
                        </div>
                        <div class="search-box pull-left">
                            <form action="#">
                                <input type="text" name="search" placeholder="Find menu code..." required="">
                                <i class="ti-search"></i>
                            </form>
                        </div>
                    </div>
                    <!-- profile info & task notification -->
                    <div class="col-md-4 col-sm-4 clearfix">
                        <div class="user-profile pull-right">
                            <img class="avatar user-thumb" href="<?php echo base_url('assets/images/author/avatar.png') ?>" alt="avatar">
                            <h4 class="user-name dropdown-toggle" data-toggle="dropdown">Kumkum Rai <i class="fa fa-angle-down"></i></h4>
                            <div class="dropdown-menu">
                                <a class="dropdown-item" href="#">Message</a>
                                <a class="dropdown-item" href="#">Settings</a>
                                <a class="dropdown-item" href="#">Log Out</a>
                            </div>
                        </div>
                    </div>

                </div>
            </div>

            <div class="page-title-area">
                <div class="row align-items-center">
                    <div class="col-md-12">
                        <div class="breadcrumbs-area clearfix" style="margin-bottom: 10px; margin-top: 10px;">
                            <h1 class="page-title pull-left">Dashboard</h1>
                            <ul class="breadcrumbs pull-left">
                                <li><a href="index.html">Home</a></li>
                                <li><span>Form</span></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
            <!-- header area end -->
            <!-- main content area start -->
            <div class="main-content" style="background: #edf2f3">
                <div class="main-content-inner">
                    
                    <div class="row">
                        <div class="col-12 mt-3">
                            <!-- Content -->
                            <div class="card">
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <div class="row">
                                        <H5 class="pull-left mt-2">CRUD on Modal (Include Jquery & Ajax)</H5>
                                    </div>        
                                    <hr>
                                    <div class="row">
                                        <div class="col-10">
                                        </div>     
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" name="submit" data-toggle="modal" data-target="#mdlMasterBarang" class="btn btn-primary btn-xs btn-block"><i class="fa fa-shopping-cart"></i> <span>Add</span></button>
                                                    <!-- <button type="button" class="btn btn-primary btn-flat btn-lg mt-3" data-toggle="modal" data-target="#exampleModalLong">Launch demo modal</button>                                                     -->
                                                </div>
                                            </div>        
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="data-tables datatable-dark">    
                                            <!-- <div class="data-tables datatable-dark"> -->
                                                <table id="mydataTable" class="text-center">
                                                    <thead class="text-capitalize">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Kode Barang</th>
                                                            <th>Nama Barang</th>
                                                            <th>Harga</th>
                                                            <th>Satuan</th>
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>                        
                                </div>
                            </div>                        
                            <!-- Content -->
                        </div>    
                    </div>    

                </div> 
            </div>
            <!-- main content area end -->
                             
            <footer>
                <div class="footer-area">
                    <p>© Copyright 2023. All right reserved</p>
                </div>
            </footer>
        </div>
        <!-- page container area end -->       
    </body>

    <!-- Modal -->
    <div class="modal fade" id="mdlMasterBarang">
        <div class="modal-dialog">
            <div class="modal-content">
                <form id="frmAdd" action="">    
                    <div class="modal-header">
                        <h5 class="modal-title">Insert Master Barang</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Code</label>
                            <!-- <input class="form-control form-control-sm" type="text" placeholder="Code" id="txtBrgCode"> -->
                            <input class="form-control" type="text" id="txtBrgCode" name="nTxtBrgCode" placeholder="code">
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Name</label>
                            <input class="form-control" type="text" id="txtBrgName" name="nTxtBrgName" placeholder="desc" >
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Harga</label>
                            <input class="form-control" type="number" id="txtHarga" name="ntxtHarga" placeholder="1.000.###.##" >
                        </div>
                        <div class="form-group">
                            <label for="example-text-input" class="col-form-label">Satuan</label>
                            <input class="form-control" type="text" id="txtSatuan" name="ntxtSatuan" placeholder="satuan" >
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveMstBrg">Save changes</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- basic modal end -->

    <!-- jquery latest version -->
    <script src="<?php echo base_url('assets/js/vendor/jquery-2.2.4.min.js') ?>"></script>
    <!-- bootstrap 4 js -->
    <script src="<?php echo base_url('assets/js/popper.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/bootstrap.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/metisMenu.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slimscroll.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/jquery.slicknav.min.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/owl.carousel.min.js') ?>"></script>

    <!-- Start datatable js -->
    <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap4.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

    <!-- others plugins -->
    <script src="<?php echo base_url('assets/js/plugins.js') ?>"></script>
    <script src="<?php echo base_url('assets/js/scripts.js') ?>"></script>

<script type="text/javascript" language="javascript" >
    $(document).ready(function(){
        fetch_data();
        function fetch_data() {
            var dataTable = $('#mydataTable').DataTable({
                "processing" : true,
                "serverSide" : true,
                "order" : [],
                "ajax" : {
                    url:"/labkom/labkom/controller/fetch.php",
                    type:"POST",
                }
            });
        }
    });

    $(document).on('submit', '#frmAdd', function(e) {
        e.preventDefault();
        var brgCode = $('#txtBrgCode').val();
        var brgName = $('#txtBrgName').val();
        var harga = $('#txtHarga').val();
        var satuan = $('#txtSatuan').val();
        if (brgCode != '') {
            $.ajax({
            url: "/labkom/labkom/controller/fetch.php",
            type: "POST",
            data: {
                tipe: "INSERT",
                brgCode: brgCode,
                brgName: brgName,
                harga: harga,
                satuan: satuan
            },
            success: function(data) {
                var json = JSON.parse(data);
                var status = json.status;
                alert(status);
                if (status == 'true') {
                    mytable = $('#mydataTable').DataTable();
                    mytable.draw();
                    $('#mdlMasterBarang').modal('hide');
                } else {
                    alert('failed');
                }
            }
            });
        } else {
            alert('Fill all the required fields');
        }
    });

    $(document).on('click', '.deleteBtn', function(event) {
      event.preventDefault();
      var id = $(this).data('id');
      if (confirm("Are you sure want to delete ? ")) {
        $.ajax({
          url: "/labkom/labkom/controller/fetch.php",
          data: {
            tipe: "DELETE",
            id: id
          },
          type: "POST",
          success: function(data) {
            var json = JSON.parse(data);
            status = json.status;
            if (status == 'true') {  
                var table = $('#mydataTable').DataTable();
                var removingRow = $(this).closest('tr');
                table.row(removingRow).remove().draw();
            } else {
              alert('Failed');
              return;
            }
          }
        });
      } else {
        return null;
      }
    })
</script>

</html>