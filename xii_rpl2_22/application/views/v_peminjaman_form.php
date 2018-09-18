
<div class="body">
    <h1 align="center">Form Peminjaman Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_peminjaman/add' ) ?>" method="post">
		<table align="center">
			<tr>
				<td>Kode Peminjaman</td>
				<td><input type="text" name="txkode" value="<?php echo $kd; ?>" readonly /></td>
			</tr>
			<tr>
				<td>Kode Petugas</td>
				<td>
					<select name="txpetugas">
						<?php foreach($kdp as $value){
							echo "<option>".$value->petugas_kode."</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Kode Peminjam</td>
				<td>
					<select name="txpeminjam">
						<?php foreach($kdpm as $value){
							echo "<option>".$value->peminjam_kode."</option>";
						}
						?>
					</select>
				</td>
			</tr>
			<tr>
				<td>Tanggal Pinjam</td>
				<td><input type="text" name="txtgl" value="<?php echo $tgls; ?>" /></td>
			</tr>
			<tr>
				<td>Tanggal Kembali</td>
				<td><input type="text" name="txtglkembali" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_peminjaman');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>

