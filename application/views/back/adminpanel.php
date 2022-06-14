
<?php if(isset($other_content) && $other_content!=NULl){?>
<?php echo $other_content ?>
<?php }else{?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bootsrtap Free Admin Template - SIMINTA | Admin Dashboad Template</title>
    <!-- Core CSS - Include with every page -->
    <script src="<?php echo base_url()?>assets/back/plugins/jquery-1.10.2.js"></script>
    <link href="<?php echo base_url()?>assets/back/plugins/bootstrap/bootstrap.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/font-awesome/css/font-awesome.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/css/font-awesome.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/css/style.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/css/main-style.css" rel="stylesheet" />
    <!-- Page-Level CSS -->
    <link href="<?php echo base_url()?>assets/back/plugins/morris/morris-0.4.3.min.css" rel="stylesheet" />
    <link href="<?php echo base_url()?>assets/back/plugins/dataTables/dataTables.bootstrap.css" rel="stylesheet" />
     <link href="<?php echo base_url()?>assets/back/plugins/pace/pace-theme-big-counter.css" rel="stylesheet" />

   </head>
<body>
    <!--  wrapper -->
    <div id="wrapper">
        <!-- navbar top -->
        <nav class="navbar navbar-default navbar-fixed-top" role="navigation" id="navbar">
            <!-- navbar-header -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".sidebar-collapse">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
            </div>
            <ul class="nav navbar-top-links navbar-right">
                        <li><a href="<?php echo base_url();?>admin-logout"><i class="fa fa-sign-out fa-fw"></i>Logout</a> </li>
            </ul>
        </nav>
        <!-- end navbar top -->

        <!-- navbar side -->
        <nav class="navbar-default navbar-static-side" role="navigation">
            <!-- sidebar-collapse -->
            <div class="sidebar-collapse">
                <!-- side-menu -->
                <ul class="nav" id="side-menu">
                    <li>
                        <!-- user image section-->
                        <div class="user-section">
                            <div class="user-section-inner">
                                <img src="<?php echo base_url()?>assets/back/img/user.png" alt="">
                            </div>
                            <div class="user-info">
                                <div><?php echo $this->session->username;?></div>
                                <div ><span>Adoy Bakery</span></div>
                            </div>
                        </div>
                        <!--end user image section-->
                    </li>
                    <li class="sidebar-search">
                        <!-- search section-->
                        <div class="input-group custom-search-form">
                            <input type="text" class="form-control" placeholder="Search...">
                            <span class="input-group-btn">
                                <button class="btn btn-default" type="button">
                                    <i class="fa fa-search"></i>
                                </button>
                            </span>
                        </div>
                        <!--end search section-->
                    </li>
                    <li class="selected">
                        
                   
                      <li>
                        <a href="#"><i class="fa fa-product-hunt fa-fw"></i> Produk Kue<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                 <a href="<?php echo base_url();?>add-product"><i class=""></i>Tambah Produk</a>
                             </li>
                            <li>
                                 <a href="<?php echo base_url();?>product-list"><i class=""></i>Daftar Produk</a>
                            </li>
                        </ul>
                    </li>

                     <li>
                        <a href="<?php echo base_url()?>manage-order"><i class="fa fa-flask fa-fw"></i>Pesanan</a>
                    </li>
                </ul>
                <!-- end side-menu -->
            </div>
            <!-- end sidebar-collapse -->
        </nav>
        <!-- end navbar side -->
       <?php if(isset($main_content)){
        echo $main_content;
         } ?>
       

    <!-- Core Scripts - Include with every page -->
  
    <script src="<?php echo base_url()?>assets/back/plugins/bootstrap/bootstrap.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/plugins/metisMenu/jquery.metisMenu.js"></script>
    <script src="<?php echo base_url()?>assets/back/plugins/pace/pace.js"></script>
    <script src="<?php echo base_url()?>assets/back/scripts/siminta.js"></script>
    <!-- Page-Level Plugin Scripts-->
    <script src="<?php echo base_url()?>assets/back/plugins/morris/raphael-2.1.0.min.js"></script>
    <script src="<?php echo base_url()?>assets/back/plugins/morris/morris.js"></script>
    <script src="<?php echo base_url()?>assets/back/scripts/dashboard-demo.js"></script>
    <!--Code for data table-->
   <script src="<?php echo base_url()?>assets/back/plugins/dataTables/dataTables.bootstrap.js"></script>

</body>
</html>

<?php }?>