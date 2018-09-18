<div class="body">
    <h1 align="center">Form Peminjaman Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_peminjaman/simpanedit' ) ?>" method="post">
	<?php
			$kode="";
			$petugas="";
			$peminjam="";
			$tgl="";
			$tglkembali="";
			foreach($peminjaman as $baris){
				$kode=$baris->peminjaman_kode;
				$petugas=$baris->petugas_kode;
				$pemijam=$baris->peminjam_kode;
				$tgl=$baris->peminjaman_tgl;
				$tglkembali=$baris->peminjaman_tgl_hrs_kembali;
			}
			?>
		<table align="center">
			<tr>
				<td>Kode Peminjaman</td>
				<td><input type="text" name="txkode" value="<?php echo $kode;?>" readonly ></td>
			</tr>
			<tr>
				<td>Kode Petugas</td>
				<td><input type="text" name="txpetugas" value="<?php echo $petugas;?>" /></td>
			</tr>
			<tr>
				<td>Kode Peminjam</td>
				<td><input type="text" name="txpeminjam" value="<?php echo $peminjam;?>" /></td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="text" name="txtgl" value="<?php echo $tgl;?>" /></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="text" name="txtglkembali" value="<?php echo $tglkembali;?>" /></td>	
			</tr>
			<tr>
				<td>Status</td>
				<td><input type="checkbox" value="1" name="st"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_peminjaman');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>


		

