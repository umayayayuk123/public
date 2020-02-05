<style type="text/css">
    .list-sidebar:hover{
        background-color: #f1c40f;
    }
</style>
<nav class="navbar-default navbar-side" role="navigation">
    <div class="sidebar-collapse">
        <ul class="nav" id="main-menu">
            <?php if ($operator_id_akses=="HA01"){ ?>
                <!--admin-->
            <li>
                <a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url().'operator'?>"><i class="fa fa-user"></i> Admin </a>
                
            </li>
            <li>
                <a href="<?php echo base_url().'kategori'?>"><i class="fa fa-desktop"></i>Master Data<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">

                <li  class="list-sidebar">
                    <a href="<?php echo base_url().'barang'?>"><i class="glyphicon glyphicon-th"></i> Barang </a>
                </li>
                <li  class="list-sidebar">
                    <a href="<?php echo base_url().'kategori'?>"><i class="fa fa-book"></i> Kategori </a>
                </li>
                    <li  class="list-sidebar">
                        <a href="<?php echo base_url().'barang_pesanan'?>"><i class="glyphicon glyphicon-paperclip"></i> Barang Pesanan </a>
                    </li>
                    <li  class="list-sidebar">
                        <a href="<?php echo base_url().'kategori_barang_pesanan'?>"><i class="glyphicon glyphicon-tasks"></i> Kategori Barang Pesanan </a>
                    </li>
                <li  class="list-sidebar">
                    <a href="<?php echo base_url().'data_job_karyawan'?>"><i class="glyphicon glyphicon-th-list"></i> Data Job Karyawan </a>
                </li>
                <li  class="list-sidebar">
                    <a href="<?php echo base_url().'data_kategori_job'?>"><i class="glyphicon glyphicon-tasks"></i> Kategori Job Karyawan </a>
                </li>

                    <li class="list-sidebar">
                        <a href="<?php echo base_url().'arus_kas'?>"><i class="fa fa-book"></i>Arus Kas</a>
                </ul>
            </li>


                 <li >
                        <a href="<?php echo base_url().''?>"><i class="glyphicon glyphicon-dashboard"></i>Arus Kas<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li  class="list-sidebar">
                    <a href="<?php echo base_url().'transaksi_aruskas'?>"><i class="fa fa-money"></i> Buat Transaksi </a></li>

                    <li  class="list-sidebar">
                    <a href="<?php echo base_url().'detail_aruskas'?>"><i class="glyphicon glyphicon-book"></i> Laporan Arus Kas </a></li>
                </ul>
                </li>

            
                <li>
                    <a href="javascript:void(0)"><i class="glyphicon glyphicon-shopping-cart"></i>Transaksi<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'transaksi'?>"><i class="glyphicon glyphicon-envelope"></i>Buat Transaksi</a>
                        </li>
                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'transaksi/list_transaksi'?>"><i class="glyphicon glyphicon-th-large"></i>Data Transaksi</a>
                        </li>
                    </ul>
                    </li>
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-print"></i>Order<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'tb_order'?>"><i class="glyphicon glyphicon-list"></i>Buat List Pesanan</a>
                        </li>
                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'tb_order/list_order'?>"><i class="glyphicon glyphicon-th-large"></i>Transaksi Pesanan</a>
                        </li>
                    </ul>
                    </li>
                   

                 <li>
                    <a href="javascript:void(0)"><i class="glyphicon glyphicon-credit-card"></i>Transaksi Piutang<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">
                 <li class="list-sidebar">
                        <a href="<?php echo base_url().'databon'?>"><i class="fa fa-money"></i>Data BON</a>
                    </li>
                    <li class="list-sidebar">
                        <a href="<?php echo base_url().'identitas_bon'?>"><i class="fa fa-user"></i>Identitas BON</a>
                    </li>
                    </ul>       

                <li>
                    <a href="<?php echo base_url().'tb_order/list_order'?>"><i class="glyphicon glyphicon-file"></i> Laporan</a>
                </li>
                <li>
                    <a href="<?php echo base_url().'karyawan'?>"><i class="fa fa-user-md"></i> Karyawan </a>
                </li>
                
                <li>
                <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Log Out</a>
                 </li>


            
            <?php }elseif($operator_id_akses=="HA02"){ ?>
                <!--kasir-->
                <li>
                <a href="<?php echo site_url('dashboard') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
            <li>
                <a href="<?php echo base_url().'kategori'?>"><i class="fa fa-desktop"></i>Master Data<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li class="list-sidebar">
                        <a href="<?php echo base_url().'databon'?>"><i class="fa fa-money"></i>Data BON</a>
                    </li>
                    <li class="list-sidebar">
                        <a href="<?php echo base_url().'identitas_bon'?>"><i class="fa fa-user"></i>Identitas BON</a>
                    </li>
                    <li class="list-sidebar">
                        <a href="<?php echo base_url().'arus_kas'?>"><i class="fa fa-book"></i>Arus Kas</a>
                </ul>
                    </li>
            
                <li>
                    <a href="javascript:void(0)"><i class="fa fa-money"></i>Transaksi<span class="fa arrow"></span></a>
                    <ul class="nav nav-second-level">

                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'transaksi'?>"><i class="glyphicon glyphicon-envelope"></i>Buat Transaksi</a>
                        </li>
                        <li class="list-sidebar">
                            <a href="<?php echo base_url().'transaksi/list_transaksi'?>"><i class="glyphicon glyphicon-th-large"></i>Data Transaksi</a>
                        </li>
                    </ul>
                </li>
                <li>
                    <a href="<?php echo base_url().'pilih_order'?>"><i class="fa fa-book"></i> Order <span class=""></span> </a>
                </li>
                <li>
                    <a href="<?php echo base_url().'halaman_laporan'?>"><i class="glyphicon glyphicon-file"></i> Laporan</a>
                </li>
                <li>
                 </li>
                <li>
                    <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Log Out </a>
                </li>


                <?php }elseif($operator_id_akses=="HA03"){ ?>
                <!--customer-->
                <li>
                <a href="<?php echo site_url('halaman_pesanan') ?>"><i class="fa fa-dashboard"></i> Dashboard</a>
            </li>
                 <li>
                <a href="<?php echo base_url().''?>"><i class="glyphicon glyphicon-envelope"></i>Pesanan<span class="fa arrow"></span></a>
                <ul class="nav nav-second-level">
                    <li>
                        <a href="<?php echo base_url().'lihat_pesanan'?>">Lihat Pesanan Saya</a>
                    </li>   
                    
                    </ul>
                    <li>
                    <a href="<?php echo base_url().'auth/logout'?>"><i class="fa fa-sign-out fa-fw"></i> Log Out </a>
                </li>
            <?php } ?>
            
        </ul>

    </div>

</nav>