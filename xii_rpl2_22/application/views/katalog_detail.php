<style>
#tombol_back{
	margin-top: 20px;
	border:1px solid #9e9e9e;
	border-radius: 5px;
	height:30px;
	width: 100px;
	padding:3px;
}
#tombol_back:hover{
	background: #9e9e9e;
	color:#fff;
}
table{
	margin-left:auto;
	margin-right:auto;
}
</style>
					<div id="body" >
					<table align="center">
							<?php
							$i = 0;
							foreach($buku as $baris){
								if($i%5==0) echo "<tr>";
							?>
							<td>
							<?php
							echo "<img src='".base_url('aset/images/'.$baris->gambar)."' style='width:300px'/>";
							?>
							</td>
							<td valign="top" style="vertical-align:top;padding:5px;">
							<div >
							<table style="margin-left:0px">
							<tr>
								<div style="margin-top:5px">
								<?php
									echo "<td>Judul buku</td><td> :</td><td> $baris->buku_judul</td>";
								?>
								</div>
							</tr>
							<tr>
								<div style="margin-top:5px">
								<?php
									echo "<td>Pengarang buku</td><td> :</td><td> $baris->buku_pengarang</td>";
								?>
								</div>
							</tr>
							<tr>
								<div style="margin-top:5px">
								<?php
									echo "<td>Tahun Terbit</td><td> :</td><td> $baris->buku_tahun_terbit</td>";
								?>
								</div>
							</tr>
							<tr>
								<div style="margin-top:5px">
								<?php
									echo "<td>Sinopsis</td><td> :</td><td> $baris->buku_deskripsi</td>";
								?>
								</div >
							</tr>
							</table>
								<div style="margin-top:5px">
								 <a href="<?php echo base_url('index.php/katalog_user/cek/'.$baris->buku_kode);?>">Pinjam BUKU</a>
								</div>
							</div>
							</td>
							<?php
								$i++;
							}
							?>
						</tr>
						<tr>
						<td><input type="button" value="kembali" onclick="history.go(-1)" id="tombol_back"></td>
						</tr>
					</table>
					
					</div>
				</div>
			</div>
		</div>
				
