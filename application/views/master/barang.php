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
                                        <div class="col-md-10">
                                        <H5 class="pull-left mt-2">CRUD on Modal (Include Jquery & Ajax)</H5>
                                        </div>    
                                        <div class="col-md-2">
                                            <!-- <button type="button" name="submit" data-toggle="modal" data-target="#mdlMasterBarang" class="btn btn-primary btn-xs btn-block"><i class="fa fa-shopping-cart"></i> <span>Add</span></button> -->
                                            <button type="button" id="btnAddBarang" name="submit" data-toggle="modal" class="btn btn-primary btn-xs btn-block"><i class="fa fa-shopping-cart"></i> <span>Add</span></button>
                                        </div>    
                                    </div>        
                                    <hr>
                                    <!-- <div class="row">
                                        <div class="col-10">
                                        </div>     
                                        <div class="col-md-2">
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <button type="button" name="submit" data-toggle="modal" data-target="#mdlMasterBarang" class="btn btn-primary btn-xs btn-block"><i class="fa fa-shopping-cart"></i> <span>Add</span></button>
                                                </div>
                                            </div>        
                                        </div>
                                    </div> -->
                                    <div class="row">
                                        <div class="col-12 mt-2">
                                            <div class="data-tables datatable-dark">    
                                                <table id="mydataTable" class="text-center">
                                                    <thead class="text-capitalize">
                                                        <tr>
                                                            <th>No.</th>
                                                            <th>Kode Barang</th>
                                                            <th>Nama Barang</th>
                                                            <th>Harga Jual</th>
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
                                    <select class="form-control selectpicker" id="drdSatuan" name="Satuan" data-live-search="true">
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
    // fetch data
    $(document).ready(function(){
        $('#mydataTable').DataTable({
            processing : true,
            serverSide : true,
            paging: false,
            searching: false,
            order : [],
            ajax : {
                url:"<?= base_url('master/barang/fetchData'); ?>",
                type:"POST",
                dataType : "JSON",
            },
            success: function(data) {
                if (data.msg == 'error') {
                    return [];
                }
            }
        });
        setListSatuan()
    });

    function rmCurrency(value){
        return value.replace(/,/g, '').replace(/[^0-9.]/g, '').replace(/(\..*?)\..*/g, '$1');
    }

    function setFormatCurrency(value) {        
        const _value = rmCurrency(value);
        return parseFloat(_value).toLocaleString('en-US', {
            style: 'decimal',
            maximumFractionDigits: 2,
            minimumFractionDigits: 2
        });        
    }

    $('#txtHargaBeli,#txtHargaJual')
    .on('click change paste input', function() {
        this.value = rmCurrency(this.value)
    })
    .on('blur', function() {
        this.value = setFormatCurrency(this.value)
    });

    //Show Modal
    $('#btnAddBarang').click(function(){
        frmClear()
        $('#mdlMasterBarang').modal("show");
        $('#frmMode').val("INSERT");
    });

    function frmClear() {
        $('#ID').val('');
        $('#txtBrgCode').val('');
        $('#txtBrgName').val('');
        $('#txtHargaJual').val('0.00');
        $('#txtHargaBeli').val('0.00');
        $('#drdSatuan').val('');
        //$("#rbnStatusNonAktif").attr('checked', true);//set by ID
        $('input[name=Status][value=1]').attr('checked', true); // set by Value 
        $('#prevGambar').attr('src', '<?php echo base_url('assets/images/media/nothing-img.png') ?>')
    }

    function readURL(input) {
        if (input.files && input.files[0]) {
            var reader = new FileReader();
            reader.onload = function (e) {
                $('#prevGambar').attr('src', e.target.result);
            }
            reader.readAsDataURL(input.files[0]);
        }
    }

    $('#fileGambar').change(function(){       
        filename = this.files[0].name;
        if (filename != ''){
            readURL(this);
            $('label[for=fileGambar]').text(filename);
            //$('label[for=fileGambar]').text(filename); //By Label
        }else{
            $('#prevGambar').attr('src', '<?php echo base_url('assets/images/media/nothing-img.png') ?>');
            $('label[for=fileGambar]').text('Choose File');
        }
    });

    function Insert() {
        //var formData = new FormData($("#frmAdd")[0]);
        $.ajax({
            url: "barang/insert",
            type: "POST",
            dataType : 'JSON',
            data : new FormData($("#frmAdd")[0]),
            contentType : false,
            processData : false,
            success: function(data) {
                if (data.msg == 'success') {
                    mytable = $('#mydataTable').DataTable();
                    mytable.draw();
                    $('#mdlMasterBarang').modal('hide');
                    // alert('failed');
                } else {
                    alert(data.msg);
                }
            }
        });
    }

    function setListSatuan() {
        $.ajax({
            url: "satuan/getSatuan",
            type: "POST",
            dataType : 'JSON',
            success: function(data) {
                if(data.msg=='success'){
                    var html = '';
                    $.each(data.rows, function(i, item) {
                        html += '<option value='+data.rows[i].SatCode+'>'+data.rows[i].SatCode+'</option>';
                    });
                    $('#drdSatuan').html(html);
                }else{
                    alert('failed');
                }
            }
        });
    }

    function Update() {
        $.ajax({
            url: "barang/update",
            type: "POST",
            dataType : 'JSON',
            data : new FormData($("#frmAdd")[0]),
            contentType : false,
            processData : false,
            success: function(data) {
                if (data.msg == 'success') {
                    mytable = $('#mydataTable').DataTable();
                    mytable.draw();
                    $('#mdlMasterBarang').modal('hide');
                } else {
                    alert(data.msg);
                }
            }
        });
        // $.ajax({
        //     url: "barang/update",
        //     type: "POST",
        //     dataType : 'JSON',
        //     data: {
        //         ID: $('#ID').val(),
        //         BrgCode: $('#txtBrgCode').val(),
        //         BrgName: $('#txtBrgName').val(),
        //         HargaBeli: rmCurrency($('#txtHargaBeli').val()),
        //         HargaJual: rmCurrency($('#txtHargaJual').val()),
        //         Satuan: $('#drdSatuan').val(),
        //         Gambar: $('#fileGambar').val(),
        //         Status: $('input[name=nRbnStatus]:checked', '#frmAdd').val()
        //     },
        //     success: function(data) {
        //         if (data.msg == 'success') {
        //             mytable = $('#mydataTable').DataTable();
        //             mytable.draw();
        //             $('#mdlMasterBarang').modal('hide');
        //         } else {
        //             alert('failed');
        //         }
        //     }
        // });
    }

    $(document).on('submit', '#frmAdd', function(e) {
        e.preventDefault();
        if ($('#ID').val() == '') {
            Insert();
        }else{
            Update();
        }
    });

    $(document).on('click', '.deleteBtn', function(e) {
        e.preventDefault();
        if (confirm("Are you sure want to delete ? ")) {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url(); ?>master/barang/deleteByID",
            data: {
                ID: $(this).data('id')
            },
            success: function(data) {
                // var json = JSON.parse(data);
                // message = json.message;
                if (data.msg == 'success') {  
                    $('#mydataTable').DataTable().row($(this).closest('tr')).remove().draw();
                    // Manual:
                    // var table = $('#mydataTable').DataTable();
                    // var removingRow = $(this).closest('tr');
                    // table.row(removingRow).remove().draw();
                } else {
                    alert('Failed');
                    return;
                }
            }
        });
      } else {
        return null;
      }
    });


    $(document).on('click', '.editBtn', function(e) {
        e.preventDefault();
        $.ajax({
            type: "POST",
            url: "<?= site_url('master/barang/getBarangByID') ?>", 
            data: {
                ID: $(this).data('id')
            },
            success: function(data) {
                $('#frmMode').val("UPDATE");
                $('#ID').val(data['ID']);
                $('#txtBrgCode').val(data['BrgCode']);
                $('#txtBrgName').val(data['BrgName']);
                $('#txtHargaBeli').val(setFormatCurrency(data['HargaBeli']));
                $('#txtHargaJual').val(setFormatCurrency(data['HargaJual']));
                $('#drdSatuan').val(data['Satuan']);
                $('#gambar_lama').val(data['Gambar']);
                $('input[name=nRbnStatus][value='+ data['Status'] +']').attr('checked', true); // set by Value 
                $('#prevGambar').attr('src', '<?php echo base_url('./uploads/barang/') ?>' + data['Gambar']);
                //$('#prevGambar').attr('src', '<?php echo base_url('./uploads/barang/') ?>' + 'default2.png');
                $("#mdlMasterBarang").find('.modal-title').text('Edit Barang');
                $("#mdlMasterBarang").modal('show');
            }
        });
        
    });    

    // $(document).ready(function(){
    //     $('#drdSatuan').change(function(){ 
    //         // var id=$(this).val();
    //         $.ajax({
    //             url : "<?php echo site_url('satuan/getSatuan');?>",
    //             method : "POST",
    //             async : True,
    //             dataType : 'JSON',
    //             success: function(data){
    //                 var html = '';
    //                 var i;
    //                 for(i=0; i<data.length; i++){
    //                     html += '<option value='+data[i].SadCode+'>'+data[i].SatDesc+'</option>';
    //                 }
    //                 $('#drdSatuan').html(html);
    //             }
    //         });
    //         return false;
    //     }); 
    // });

        $(function() {
            $('.selectpicker').selectpicker();
        });
</script>