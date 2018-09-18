<style type="text/css">
.listkatalog{
	width: 100%;
	height: auto;
}
.listkatalog ul{
	float: left;
}
.listkatalog ul li{
	list-style: none;
	width: 100px;
	height: 200px;
	float:left;
	padding: 150px 150px 0 0;
}
.listkatalog img{
	border: 10px solid white;
}
</style>
<div id="body">
		<div id="campaigns">
			<!--<div class="header">
				<div>
					<h2>Free Website Templates</h2>
					<p>
						This is just a place holder, so you can see what the site would look like.You can replace all this text with your own text. You can remove any link to our website from this website template, you&#39;re free to use this website template without linking back to us. This is just a place holder, so you can see what the site would look like.You can replace all this text with your own text. You can remove any link to our website from this website template, you&#39;re free to use this website template without linking back to us.
					</p>
				</div> 
				<img src="images/volunteer.jpg" alt="Image">
			</div> -->
			<div class="listkatalog" >
				<ul>
					<?php 
						foreach($katalog as $value){
						echo"<li style='width:270px;height:320px;'><a href='".base_url()."index.php/welcome/detailkatalog/".$value->buku_kode."'><img src='".base_url ()."/aset/images/".$value->gambar."' style='width:250px;height:300px;'></a></li>"; 
						}
					?>
				</ul>
				
			</div>
			<div class="footer">
				<p>
				    Semua konten disini hak cipta dilindungi 
					UU.Kepada seluruh 
					pengunjung diharap mengikuti peraturan 	
					PERPUSTAKAAN-ONLINE ini.Terimakasih</br>
					BACA TENTANG KAMI ---></br>
				</p>
				
				
				<a href="<?php echo base_url ('index.php/welcome/about'); ?>">ABOUT</a>
			</div>
		</div>
	</div>
	