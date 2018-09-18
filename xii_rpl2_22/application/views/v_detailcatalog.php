<style type="text/css">
	a{
		text-decoration: none;
		color: black;
	}
	.detailkatalog{
		width: 100%;
		margin-left: 15px;
		height:auto;
	}
	.detailkatalog li{
		list-style: none;
	}
	.imgkatalog{
		width: 300px;
		background-color: white;
		float: left;
	}
	.imgkatalog img{
		width: 300px;
		height: 350px;
	}
	.detail{
		margin-left: 10px;
		float: left;
		width:600px;
		height: 350px;
		background-color: white;
	}
</style>
<div id="body">
		<div id="campaigns">
				<div class="detailkatalog">
					<?php foreach ($detail as $baris)
					{
						echo "<div class='imgkatalog'><img src='".base_url()."aset/images/".$baris->gambar."'/></div>";
						echo "<div class='detail'>
							<ul>
							<li>judul	 :".$baris->buku_judul."</li>
							<li>pengarang:".$baris->buku_pengarang."</li>
							<li>tahun terbit:".$baris->buku_thn_terbit."</li>
							<li>sinopsis:".$baris->buku_diskripsi."</li>
							<li><a href='".base_url()."index.php/welcome/catalog'>back</a></li>
						</div>";
					};?>
					
				</div>
		<!--	<div class="footer">
				<p>
				    Semua konten disini hak cipta dilindungi 
					UU.Kepada seluruh 
					pengunjung diharap mengikuti peraturan 	
					PERPUSTAKAAN-ONLINE ini.Terimakasih</br>
					BACA TENTANG KAMI -></br>
				</p>			
				<a href="<?php echo base_url ('index.php/welcome/about'); ?>">ABOUT</a>
			</div> -->
		</div>
	</div>
