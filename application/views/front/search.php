
<div class="features_items"><!--features_items-->
	<h2 class="title text-center">Produk</h2>
	<?php foreach ($search_data as $value) {?>

	<?php if($value->status_pro==1){?>
	<div class="col-sm-4">
		<div class="product-image-wrapper">
			<div class="single-products">
				<div class="productinfo text-center">
					<img src="<?php echo base_url().$value->gambar_pro?>" width="268px" height="249px" alt="" />
					<h2>Rp.<?php echo $value->harga_pro?></h2>
					<p><?php echo $value->judul_pro?></p>
					<a href="#" class="btn btn-default add-to-cart"><i class="fa fa-shopping-cart"></i>Add to cart</a>
				</div>
				<div class="product-overlay">
					<div class="overlay-content">			
					<form action="<?php echo base_url()?>add-to-cart"  method="post">
							<h2>Rp.<?php echo $value->harga_pro?></h2><!--This is under form because style factor when product price move to form then style is not formating-->
							<p><?php echo $value->judul_pro?></p>
							<input type="hidden" value="1" name="qty"/>
							<input type="hidden" value="<?php echo $value->id_pro?>" name="id_pro"/>
							<button type="submit" class="btn btn-default add-to-cart">
								<i class="fa fa-shopping-cart"></i>
								Add to cart
							</button>
							<a href="<?php echo base_url()?>product-details/<?php echo $value->id_pro?>" class="btn btn-default add-to-cart"><i class="fa fa-info"></i>Details</a>
						</form>	
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php }} ?>
		<?php if($search_data==NUll){?>
			<p>Kue Yang Anda Cari Tidak Ada!!</p>
	<?php }else{?>
	
	<?php }?>
</div><!--features_items-->

