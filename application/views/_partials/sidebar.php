<!doctype html> 
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
                        <li class="nav-item <?php echo $this->uri->segment(2) == '' ? 'active': '' ?>">
                            <a href="<?php echo site_url('Home') ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>Home</span></a>
                        </li>                           
                        <li class="nav-item <?php echo $this->uri->segment(2) == 'Barang' ? 'active': '' ?>">
                            <a href="<?php echo site_url('master/Barang') ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>On Modal</span></a>
                        </li>
                        <li class="nav-item <?php echo $this->uri->segment(2) == 'Kasir' ? 'active': '' ?>">
                            <a href="<?php echo site_url('sales/kasir') ?>" aria-expanded="true"><i class="ti-dashboard"></i><span>Kasir</span></a>
                        </li>
                        <li>
                            <a href="javascript:void(0)" aria-expanded="true"><i class="ti-dashboard"></i><span>Inline (on Table)</span></a>
                        </li>                           
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <!-- sidebar menu area end -->  
</html>