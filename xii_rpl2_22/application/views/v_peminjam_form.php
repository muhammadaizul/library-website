
<div class="body">
    <h1 align="center">Form Peminjam Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <form action="<?php echo base_url('/index.php/c_peminjam/add' ) ?>" method="post">
		<table align="center">
			<tr>
				<td>Kode</td>
				<td><input type="text" name="txkode" value="<?php echo $kd; ?>" readonly/></td>
			</tr>
			<tr>
				<td>Nama</td>
				<td><input type="text" name="txnama" /></td>
			</tr>
			<tr>
				<td>Alamat</td>
				<td><textarea name="txalamat" ></textarea></td>
			</tr>
			<tr>
				<td>No.Telp</td>
				<td><input type="text" name="txtelp" /></td>
			</tr>
			<tr>
				<td>Foto</td>
				<td><input type="file" name="txfoto" /></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit"  value="simpan"><a href="<?php echo base_url ('index.php/c_peminjam');?>"><input type="button" value="batal"></td>
			</tr>
		</table>
	</form>

  </div>
