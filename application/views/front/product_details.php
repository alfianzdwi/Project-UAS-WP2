<div class="product-details"><!--product-details-->
	<div class="col-sm-5">
		<div class="view-product">
			<img src="<?php echo base_url().$product_info->gambar_pro?>" alt="" />
		</div>


	</div>
	<div class="col-sm-7">
		<div class="product-information"><!--/product-information-->
			<h2><?php echo $product_info->judul_pro?></h2>
			<!-- <img src="<?php echo base_url()?>assets/front/images/product-details/rating.png" alt="" /> -->
			<span>
					<span>Rp. <?php echo $product_info->harga_pro?></span><!--This is under form because style factor when product price move to form then style is not formating-->
			</span>
			<p><b>Ketersediaan :</b>
				<?php if($product_info->jumlah_pro>0){
					echo "In Stock";
				}elseif($product_info->ketersediaan_pro==3){
					echo "Up Coming";
				}else{
					echo "Out Of Stock";
				}?>
			</p>
			<p>
			<form action="<?php echo base_url()?>add-to-cart"  method="post">
					<label>Jumlah :</label>
					<input type="text" value="1" name="qty"/>
					<input type="hidden" value="<?php echo $product_info->id_pro?>" name="id_pro"/>
					<button type="submit" class="btn btn-fefault cart">
						<i class="fa fa-shopping-cart"></i>
						Tambah Ke Keranjang
					</button>
				</form>	
			</p>
			</div><!--/product-information-->
	</div>
</div>