
<div class="body">
    <h1 align="center">Form Buku Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_buku/simpanedit' ) ?>" method="post">
	<?php
			$kd_buku="";
			$kd_kategori="";
			$kd_penerbit="";
			$judul="";
			$hal="";
			$deskripsi="";
			$pengarang="";
			$tahun="";
			foreach($buku as $baris){
				$kd_buku=$baris->buku_kode;
				$kd_kategori=$baris->kategori_kode;
				$kd_penerbit=$baris->penerbit_kode;
				$judul=$baris->buku_judul;
				$hal=$baris->buku_jumhal;
				$deskripsi=$baris->buku_deskripsi;
				$pengarang=$baris->buku_pengarang;
				$tahun=$baris->buku_tahun_terbit;
			}
			?>
		<table align="center">
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="txkode" value="<?php echo $kd_buku;?>"/></td>
			</tr>
			<tr>
				<td>Kode Kategori</td>
				<td><input type="text" name="txkategori" value="<?php echo $kd_kategori;?>" /></td>
			</tr>
			<tr>
				<td>Kode Penerbit</td>
				<td><input type="text" name="txpenerbit" value="<?php echo $kd_penerbit;?>"/></td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="txjudul" value="<?php echo $judul;?>" /></td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td><input type="text" name="txjumhal" value="<?php echo $hal;?>"/></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td><textarea name="txdeskripsi" ><?php echo $deskripsi;?></textarea>
				</td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="txpengarang" value="<?php echo $pengarang;?>" /></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="txtahun" value="<?php echo $tahun;?>"/></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_buku');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>
