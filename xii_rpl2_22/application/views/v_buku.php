<div id="body">
<form method="POST" action="<?php echo base_url ('index.php/c_buku/form');?>">
<h1 align="center">Data Buku Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
	<table border=1 align="center">
			<tr>
				<td>Kode Buku</td>
				<td>Kode Kategori</td>
				<td>Kode Penerbit</td>
				<td>Judul Buku</td>
				<td>Jumlah Halaman</td>
				<td>Deskripsi</td>
				<td>Pengarang</td>
				<td>Tahun Terbit</td>
				<td>Aksi</td>
			</tr>
			<?php foreach($data_buku as $baris){ ?>
			<tr>
		<td><?php echo $baris->buku_kode; ?></td>
		<td><?php echo $baris->kategori_kode; ?></td>
		<td><?php echo $baris->penerbit_kode; ?></td>
		<td><?php echo $baris->buku_judul; ?></td>
		<td><?php echo $baris->buku_jumhal; ?></td>
		<td><?php echo $baris->buku_deskripsi; ?></td>
		<td><?php echo $baris->buku_pengarang; ?></td>
		<td><?php echo $baris->buku_tahun_terbit; ?></td>
		<td><a href="<?php echo base_url('/index.php/c_buku/del/'.$baris->buku_kode);?>">HAPUS</a> |
		 <a href="<?php echo base_url('/index.php/c_buku/formedit/'.$baris->buku_kode);?>">UBAH</a></td>
			</tr>
			<?php } ?>
		</table>
		<div style="margin-left:200px" align="center">
			
			<a href="<?php echo base_url('/index.php/c_buku/form');?>"><input type="submit" class="send" value="INPUT DATA BUKU"></a>
		</div>
	</form>

	</div>


