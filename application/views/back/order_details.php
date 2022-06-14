
       <!--  page-wrapper -->
        <div id="page-wrapper" style="background:#fff">

            <div class="row">
                <!-- Page Header -->
                <div class="col-lg-12">
                    <h1 class="page-header">Halaman Pesanan</h1>
                </div>
                <!--End Page Header -->
            </div>
            <div class="row">
                <div class="col-lg-6">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Alamat Pegiriman
                        </div>
                        <div class="panel-body">
                          <h4><b>Nama       :</b> <?php echo $ship_info->cus_name?></h4>
                          <h4><b>Email      :</b> <?php echo $ship_info->cus_email?></h4>
                          <h4><b>No Telepon :</b> <?php echo $ship_info->cus_notelp?></h4>
                          <h4><b>Alamat     :</b> <?php echo $ship_info->cus_alamat?></h4>
                          <h4><b>Kecamatan  :</b> <?php echo $ship_info->cus_kec?></h4>
                          <h4><b>Kota       :</b> <?php echo $ship_info->cus_kota?></h4>
                          <h4><b>Kode Pos   :</b> <?php echo $ship_info->cus_kodepos?></h4>
                        </div>
                    </div>
                </div>
            </div>
                <div class="row">
                     <div class="col-lg-12">
                         <div class="panel panel-default">
                            <div class="panel-heading">
                               Invoice # Inv <?php echo $order_info->id_pesanan?>
                            </div>
                         <h5>
                             Tanggal Invoice: <?php $date=  $order_info->tanggal_pesanan;
                               echo date('m-d-y',strtotime($date));
                             ?>
                         </h5>
                         </div>
                     </div>
                </div>
               <div class="row">
                <div class="col-lg-8">
                    <!-- Advanced Tables -->
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                          Detail Order
                        </div>
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>Nama Produk</th>
                                            <th>Jumlah</th>
                                            <th>Harga Satuan</th>
                                            <th>Total</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php 
                                            $total=0;
                                        foreach ($order_details_info as $order) {?>
                                        <tr class="odd gradeX">
                                            <td><?php echo $order->nama_produk?></td>

                                            

                                            <td><?php echo $order->jumlah?></td>
                                            <td>Rp. <?php echo $order->harga_produk;?></td>
                                            <td class="center"><?php echo $order->jumlah * $order->harga_produk;?></td>  

                                        </tr>
                                        <?php 
                                        $total = $total+$order->jumlah * $order->harga_produk + 10000;
                                           
                                         } ?>
                                    </tbody>
                                </table>
                            </div>
                            
                        </div>
                    </div> 
                </div>
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                           Kalkulasi
                        </div>
                        <div class="panel-body">
                           <h4><strong>Sub Total: </strong>Rp. <?php echo $total?></h4>
                           <h4><strong>PPN 5%: </strong>Rp. <?php echo $vat = $total*5/100;?></h4>
                           <h4><strong>Grand-Total: </strong>Rp. <?php echo $vat+$total;?></h4>
                        </div>
                        <!-- <div class="panel-footer">
                            Panel Footer
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
        <!-- end page-wrapper -->
       