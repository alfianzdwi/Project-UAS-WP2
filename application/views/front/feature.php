<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Jenis Kue</h2>
	
	<?php $allproduct = $this->ProductModel->get_all_product_limit();?> <!--Memanggil Fungsi Yang Ada Di File Model Untuk Mendapatkan Data Produk-->
	<?php foreach ($allproduct as $product) {?>
	<?php if($product->status_pro==1){?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="<?php echo base_url().$product->gambar_pro?>" width="80px" height="370px" alt="" />
					<h2>Rp. <?php echo $product->harga_pro?></h2>
					<p><?php echo $product->judul_pro?></p>
					</div>
				<div class="product-overlay">
					<div class="overlay-content">			
					<form action="<?php echo base_url()?>add-to-cart"  method="post">
							<h2>Rp. <?php echo $product->harga_pro?></h2><!--This is under form because style factor when product price move to form then style is not formating-->
							<p><?php echo $product->judul_pro?></p>
							<input type="hidden" value="1" name="qty"/>
							<input type="hidden" value="<?php echo $product->id_pro?>" name="id_pro"/>
							<button type="submit" class="btn btn-default add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Tambahkan Ke Keranjang
							</button>
							<a href="<?php echo base_url()?>product-details/<?php echo $product->id_pro?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Lihat Detail</a>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>

	<?php } }?>
</div><!--features_items-->