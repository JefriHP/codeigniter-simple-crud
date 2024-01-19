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
            <!-- <div class="main-content-inner" style="background: rgb(234, 239, 247)"> -->
            <div class="main-content-inner">
                <!-- <div class="main-content-inner"> -->
                <form id="frmAddItem" method="POST" enctype="multipart/form-data">
                    <div class="row">
                        <div class="col-7 mt-4">
                            <div class="row">
                                <div class="col-12">
                                    <div class="card">
                                        <div class="card-body" style="padding-bottom: 10px;">
                                            <div class="row">
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-3 ">
                                                                <label for="example-datetime-local-input" class="col-form-label">Date</label>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6 ">
                                                                <input class="form-control form-control-sm" type="datetime-local" value="2018-07-19T15:30:00" id="example-datetime-local-input">
                                                            </div>
                                                        </div>        
                                                    </div>
                                                </div>
                                                <div class="col-6">
                                                    <div class="form-group">
                                                        <div class="row">
                                                            <div class="col-md-4 col-sm-3 ">
                                                                <label for="example-text-input" class="col-form-label">Customer</label>
                                                            </div>
                                                            <div class="col-md-8 col-sm-6 ">
                                                                <!-- <input class="form-control form-control-sm" type="text" value="TRX2023-00001" id="example-text-input"> -->
                                                                <div class="input-group">
                                                                    <input type="text" class="form-control form-control-sm"  value="GENERAL" id="example-text-input">
                                                                    <div class="input-group-append">
                                                                        <button class="btn btn-primary btn-xs" type="button"><i class="fa fa-search"></i></button>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>        
                                                    </div>   
                                                </div>
                                            </div>
                                        </div>    
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-12 mt-4">
                                    <div class="card">
                                        <div class="card-body" style="padding-bottom: 10px;">                                      
                                            <!-- Form add new item  -->
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="row">
                                                            <div class="col-md-7">

                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-3 col-sm-3 ">
                                                                            <label for="example-datetime-local-input" class="col-form-label">Item</label>
                                                                        </div>
                                                                        <div class="col-md-9 col-sm-9 " style="padding-left: 30px">
                                                                            <div class="input-group">
                                                                                <input type="text" class="form-control form-control-sm"  value="BRG0001" id="AddItem_KodeBarang" name ="AddItem_KodeBarang">
                                                                                <div class="input-group-append">
                                                                                    <button class="btn btn-primary btn-xs" type="button"><i class="fa fa-search"></i></button>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-3">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-9 ">
                                                                            <div class="row">
                                                                                <div class="col-md-12 col-sm-8">
                                                                                    <div class="input-group">
                                                                                        <input type="number" class="form-control form-control-sm" value="0">
                                                                                        <div class="input-group-append pull-right">
                                                                                            <span class="input-group-text form-control form-control-sm">Pack</span>
                                                                                        </div>
                                                                                    </div>  
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                            <div class="col-md-2">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-12 col-sm-8 ">
                                                                            <button type="submit" name="submit" class="btn btn-primary btn-xs btn-block"><i class="fa fa-shopping-cart"></i> <span>Add</span></button>
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <div class="row">
                                                            <div class="col-12">
                                                                <div class="form-group">
                                                                    <div class="row">
                                                                        <div class="col-md-2 col-sm-4 ">
                                                                            <label for="example-text-input" class="col-form-label">Desc.</label>
                                                                        </div>
                                                                        <div class="col-md-10 col-sm-8 ">
                                                                            <input class="form-control form-control-sm" type="text" value="So Clean Higinist - 1Kg" id="example-text-input" disabled>
                                                                        </div>
                                                                    </div>        
                                                                </div>
                                                            </div>
                                                        </div>            
                                                    </div>
                                                </div>
                                        </div>    
                                    </div> 
                                </div>
                            </div>                             
                        </div>    
                        <!-- <div class="col-4 mt-4">
                
                        </div>  -->
                        <div class="col-5 mt-4">
                            <div class="card">
                                <div class="card-body" style="padding-top: 10px; padding-bottom: 10px;">                                      
                                    <div class="form-group">
                                        <div class="row">
                                                <!-- <p class="font-30"><b>Trx2301-00001 / Total:</b></p> -->
                                                <p><b>Total : </b></p>
                                        </div>
                                        <div class="row">
                                            <div class="col-md-12 col-sm-6 ">
                                                <H3 class="pull-left">Rp. 100,000,000.00-</H2>
                                            </div>
                                        </div>        
                                        <hr style="margin-top: 1px; margin-bottom: 1px; margin-right: 10px; margin-left: 10px; border: 0; border-top: 1px solid rgb(139, 141, 145);">                                   
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="row"> 
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <label for="example-text-input" class="col-form-label">DPP</label>
                                                    </div>
                                                    <div class="col-md-9 col-sm-6 ">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control form-control-sm">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <label for="example-text-input" class="col-form-label">Disc.</label>
                                                    </div>
                                                    <div class="col-md-9 col-sm-6 ">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control form-control-sm">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>                                              
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-6 col-sm-6">
                                                <div class="row"> 
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <label for="example-text-input" class="col-form-label">Cash</label>
                                                    </div>
                                                    <div class="col-md-9 col-sm-6 ">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control form-control-sm">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 col-sm-6">
                                                <div class="row">
                                                    <div class="col-md-3 col-sm-3 ">
                                                        <label for="example-text-input" class="col-form-label">Change</label>
                                                    </div>
                                                    <div class="col-md-9 col-sm-6 ">
                                                        <div class="input-group">
                                                            <div class="input-group-prepend">
                                                                <span class="input-group-text form-control form-control-sm">Rp.</span>
                                                            </div>
                                                            <input type="text" class="form-control form-control-sm" aria-label="Amount (to the nearest dollar)">
                                                        </div>
                                                    </div>
                                                </div>    
                                            </div>                                              
                                        </div>        
                                    </div>
                                    <div class="form-group">
                                        <div class="row">
                                            <div class="col-md-1 col-sm-3"></div>
                                            <div class="col-md-10 col-sm-3">
                                                <button type="button" class="btn btn-success btn-xs btn-block"><i class="fa fa-send"></i> <span>Payment</span></button>
                                            </div>
                                            <div class="col-md-1 col-sm-3"></div>
                                        </div>
                                    </div>
                                </div>    
                            </div>                
                        </div> 
                    </div>

                    <div class="row">
                        <!-- Textual inputs start -->
                        <div class="col-12 mt-4">
                            <div class="card">
                                <div class="card-body" style="padding-bottom: 10px;">
                                    <!-- <h4 class="header-title">Thead danger</h4> -->
                                    <div class="single-table">
                                        <div class="table-responsive">
                                            <table class="table text-center">
                                                <thead class="text-uppercase bg-danger">
                                                    <tr class="text-white">
                                                        <th scope="col">No.</th>
                                                        <th scope="col">Nama Barang</th>
                                                        <th scope="col">Qty</th>
                                                        <th scope="col">Satuan</th>
                                                        <th scope="col">Harga</th>
                                                        <th scope="col">Disc.</th>
                                                        <th scope="col">Total</th>
                                                        <th scope="col">action</th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <?php if (isset($_SESSION['cart'])): ?>
                                                        <?php foreach ($_SESSION['cart'] as $key => $value) { ?>
                                                            <tr>
                                                                <td>0</td>    
                                                                <td>
                                                                    <?=$value['BrgName']?>
                                                                </td>
                                                                <td class="col-md-2">
                                                                    <input type="number" name="Qty[<?=$key?>]" value="<?=$value['Qty']?>" class="form-control">
                                                                </td>
                                                                <td><?=$value['Satuan']?></td>
                                                                <td align="right"><?=number_format($value['Harga'])?></td>
                                                                <td align="right"><?=number_format(0)?></td>
                                                                <td align="right"><?=number_format(($value['Qty'] * $value['Harga']))?></td>
                                                                <td><i class="ti-trash"></i></td>
                                                                <!-- <td><a href="keranjang_hapus.php?id=<?=$value['id']?>" class="btn btn-danger"><i class="glyphicon glyphicon-remove"></i></a></td> -->

                                                            </tr>
                                                        <?php } ?>
                                                    <?php endif; ?>    
                                                
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div> 
        
        
            <?php $this->load->view("_partials/footer.php") ?>    
        
        </div>

        <!-- page container area end -->       
    </body>

    <?php $this->load->view("_partials/js.php") ?>

    <!-- Modal -->
    <div class="modal fade show" id="mdlMasterBarang">
        <div class="modal-dialog">
            <div class="modal-content">
                <input type="hidden" id="frmMode">
                
                <form id="frmAdd" method="POST" enctype="multipart/form-data">
                    <input type="hidden" id="ID" name="ID">
                    <div class="modal-header">
                        <h5 class="modal-title">Master Barang</h5>
                        <button type="button" class="close" data-dismiss="modal"><span>&times;</span></button>
                    </div>
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-md-6"> 
                                <div class="form-group">
                                <label for="txtBrgCode" class="col-form-label">Code</label>
                                    <input class="form-control" type="text" id="txtBrgCode" name="BrgCode" placeholder="code">
                                </div>
                                <div class="form-group">
                                    <label for="txtBrgName" class="col-form-label">Name</label>
                                    <input class="form-control" type="text" id="txtBrgName" name="BrgName" placeholder="desc" >
                                </div>
                                <div class="form-group">
                                    <label for="drdSatuan" class="col-form-label">Satuan</label>
                                    <select class="custom-select" id="drdSatuan" name="Satuan">
                                        <option value="1">One</option>
                                    </select>
                                </div>
                            </div>

                            <div class="col-md-6">    
                                <div class="form-group">
                                    <label for="txtHargaBeli" class="col-form-label">Harga Beli</label>
                                    <input class="form-control" type="text" id="txtHargaBeli" name="HargaBeli" placeholder="1.000.###.##" >
                                </div>
                                <div class="form-group">
                                    <label for="txtHargaJual" class="col-form-label">Harga Jual</label>
                                    <input class="form-control" type="text" id="txtHargaJual" name="HargaJual" placeholder="1.000.###.##" >
                                </div>
                                <div class="form-group">
                                    <label for="rbtnStatus" class="col-form-label">Status</label>
                                    <div>
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" checked="" id="rbnStatusAktif" name="Status" class="custom-control-input" value="1">
                                            <label class="custom-control-label" for="rbnStatusAktif">Aktif</label>
                                        </div>    
                                        <div class="custom-control custom-radio custom-control-inline">
                                            <input type="radio" id="rbnStatusNonAktif" name="Status" class="custom-control-input" value="0">
                                            <label class="custom-control-label" for="rbnStatusNonAktif">Non-aktif</label>
                                        </div>
                                    </div>
                                </div>  
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-md-12">    
                                <div class="form-group">
                                    <label for="example-text-input" class="col-form-label">Gambar</label><br>
                                    <div>
                                        <div class="media mb-2">
                                            <!-- <img class="align-self-end img-fluid mr-4" name="nPrevGambar" id="prevGambar" src="<?php echo base_url('assets/images/media/nothing-img.png') ?>" alt="image" width="70px" height="70px"> -->
                                            <img class="align-self-end img-fluid mr-4" name="nPrevGambar" id="prevGambar" src="" alt="image" width="70px" height="70px">
                                            <div class="media-body">
                                            <div class="custom-file" style="margin-top: 20px;">
                                                <input type="hidden" name="gambar_lama" id="gambar_lama">
                                                <input type="file" id="fileGambar" name="Gambar" class="custom-file-input">
                                                <label class="custom-file-label" id="lblFileGambar" name="nlblFileGambar">Choose file</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>                               
                            </div>
                        </div>        
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        <button type="submit" class="btn btn-primary" id="saveMstBrg">Save changes</button>
                        <!-- <button type="submit" class="btn btn-primary" id="saveMstBrg">Save changes</button>
                        <button type="submit" class="btn btn-success" id="saveEdit">Save changes</button> -->
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- basic modal end -->
    
</html>

<script type="text/javascript" language="javascript" >

</script>