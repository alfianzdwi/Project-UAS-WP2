
<script type="text/javascript" src="<?php echo base_url();?>/assets/back/ckeditor/ckeditor.js"></script>
    <!--  page-wrapper -->
    <div id="page-wrapper">
        <div class="row">
           <!-- page header -->
           <div class="col-lg-12">
            <h1 class="page-header">Forms Element</h1>
        </div>
        <!--end page header -->
    </div>
    <div class="row">
        <div class="col-lg-12">
            <!-- Form Elements -->
            <div class="panel panel-default">
              <?php echo $this->session->flashdata('flsh_msg'); ?>
               <h4 class="error">
                    <?php $msg = $this->session->userdata('error_image');
                        echo $msg;
                        $this->session->unset_userdata('error_image');
                     ?>                       
                </h4>
                <div class="panel-heading">
                    Add new Product
                </div>
                <div class="panel-body">
                    <div class="row">
                        <div class="col-lg-12">
                           <h5 style='color:red'> <?php echo validation_errors();?></h5>
                             <?php echo form_open_multipart('save-product','');?>
                                <div class="form-group">
                                    <label>Judul Produk</label>
                                    <input type="text" class="form-control" value="" name="judul_pro" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Deskripsi Produk</label>
                                    <textarea  id="ck" class="form-control" rows="3" name="desk_pro"></textarea>
                                    <script>CKEDITOR.replace('ck')</script>
                                </div>
                        
                                 <div class="form-group">
                                    <label>Harga Produk</label>
                                    <input type="number" class="form-control" value="" name="harga_pro" required="">
                                </div>
                                 <div class="form-group">
                                    <label>Jumlah Stok</label>
                                    <input type="number" class="form-control" value="" name="jumlah_pro" required="">
                                </div>
                                <div class="form-group">
                                    <label>Status Produk</label>
                                    <select class="form-control" name="status_pro">
                                        <option>Select One</option>
                                        <option value="1">Enable</option>
                                        <option value="2">Disable</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Ketersediaan</label>
                                    <select class="form-control" name="ketersediaan_pro">
                                        <option>Select One</option>
                                        <option value="1">In Stock</option>
                                        <option value="2">Out Of Stock</option>
                                        <option value="3">Up Comming</option>
                                    </select>
                                </div>
                                <div class="form-group">
                                    <label>Upload Gambar Produk</label>
                                    <input type="file" name="gambar_pro">
                                </div>
                                 <div class="form-group">
                                    <label>Produk Top/Teratas</label>
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox" name="pro_top" value="1">Ceklis
                                        </label>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Save</button>
                            <?php echo form_close();?>
                        </div>
                    </div>
                </div>
            </div>
            <!-- End Form Elements -->
        </div>
    </div>
</div>
<!-- end page-wrapper -->


