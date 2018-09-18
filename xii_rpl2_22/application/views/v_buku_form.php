
<div class="body">
    <h1 align="center">Form Buku Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_buku/add' ) ?>" method="post">
		<table align="center">
			<tr>
				<td>Kode Buku</td>
				<td><input type="text" name="txkode" value="<?php echo $kd; ?>" readonly /></td>
			</tr>
			<tr>
				<td>Kode Kategori</td>
				<td><select name="txkategori">
						<?php foreach($kdk as $value){
							echo "<option>".$value->kategori_kode."</option>";
						}
						?>
					</select></td>
			</tr>
			<tr>
				<td>Kode Penerbit</td>
				<td><select name="txpenerbit">
						<?php foreach($kdpe as $value){
							echo "<option>".$value->penerbit_kode."</option>";
						}
						?>
					</select>
				
				</td>
			</tr>
			<tr>
				<td>Judul Buku</td>
				<td><input type="text" name="txjudul" /></td>
			</tr>
			<tr>
				<td>Jumlah Halaman</td>
				<td><input type="text" name="txjumhal" /></td>
			</tr>
			<tr>
				<td>Deskripsi</td>
				<td>
					<textarea name="txdeskripsi"></textarea>
				</td>
			</tr>
			<tr>
				<td>Pengarang</td>
				<td><input type="text" name="txpengarang" /></td>
			</tr>
			<tr>
				<td>Tahun Terbit</td>
				<td><input type="text" name="txtahun" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_buku');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>
