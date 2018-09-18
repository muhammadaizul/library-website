
<div id="body">
	<h1 align="center">Data Peminjam Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <table border=1 align="center">
			<tr>
				<th>Kode</th>
				<th>Nama</th>
				<th>Alamat</th>
				<th>No.Telp</th>
				 <th>Foto</th>
				<th>Aksi</th> 
			</tr>
			<?php foreach($data_peminjam as $baris){ ?>
			<tr>
		<td><?php echo $baris->peminjam_kode; ?></td>
		<td><?php echo $baris->peminjam_nama; ?></td>
		<td><?php echo $baris->peminjam_alamat; ?></td>
		<td><?php echo $baris->peminjam_telp; ?></td>
		<td><?php echo $baris->peminjam_foto; ?></td> 
		<td><a href="<?php echo base_url('/index.php/c_peminjam/del/'.$baris->peminjam_kode);?>">HAPUS</a> 
		 <a href="<?php echo base_url('/index.php/c_peminjam/formedit/'.$baris->peminjam_kode);?>">UBAH</a></td>
			</tr>
			<?php } ?>
		</table>
		<div style="margin-left:200px" align="center">
			<a href="<?php echo base_url('/index.php/c_peminjam/form');?>"><input type="submit" class="send" value="INPUT DATA BUKU"></a>
		</div>
	</div>
