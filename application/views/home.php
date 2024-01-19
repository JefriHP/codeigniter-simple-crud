<!DOCTYPE html>
<html class="no-js" lang="en">
    <head>
        <?php $this->load->view("_partials/head.php") ?>
    </head>

    <body>
        <div class="page-container">       
        <?php $this->load->view("_partials/sidebar.php") ?>
        <?php $this->load->view("_partials/navbar.php") ?>
        <?php $this->load->view("_partials/breadcrumb.php") ?>
            
            <!-- main content area start -->
            <div class="main-content" style="background: #edf2f3">
                <div class="main-content-inner">
                    <div class="row">
                        <div class="col-12 mt-3">
                            <!-- Content -->
                            <div class="card">
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <div class="row">
                                        <H5 class="pull-left mt-2">HOME</H5>
                                    </div>        
                                    <hr>
                                    <div class="row">
                                    </div>                  
                                </div>
                            </div>                        
                            <!-- Content -->
                        </div>    
                    </div>    
                </div> 
            </div>
            <!-- main content area end -->
                                    
            <?php $this->load->view("_partials/footer.php") ?>    
        
        </div>

        <!-- page container area end -->       
    </body>

    <?php $this->load->view("_partials/js.php") ?>
</html>