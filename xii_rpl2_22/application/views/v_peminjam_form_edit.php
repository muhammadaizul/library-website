
<div class="body">
    <h1 align="center">Form Peminjam Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_peminjam/simpanedit' ) ?>" method="post">
	<?php
			$kode="";
			$nama="";
			$alamat="";
			$notel="";
			$foto="";
			foreach($peminjam as $baris){
				$kode=$baris->peminjam_kode;
				$nama=$baris->peminjam_nama;
				$alamat=$baris->peminjam_alamat;
				$notel=$baris->peminjam_telp;
				$foto=$baris->peminjam_foto;
			}
			?>
		<table align="center">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="txpeminjam" value="<?php echo $kode;?>" readonly ></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="txnama" value="<?php echo $nama;?>" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="txalamat" ><?php echo $alamat;?></textarea></td>
			</tr>
			<tr>
				<td>No.Telp</td>
				<td><input type="text" name="txtelp" value="<?php echo $notel;?>" /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="txfoto" value="<?php echo $foto;?>" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_peminjam');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>


		
