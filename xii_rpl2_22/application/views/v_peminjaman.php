
<div id="body">
    <h1 align="center">Data Peminjaman Perpustakaan SMK Telkom Sandhy Putra Purwokerto</h1><br>
    <table border=1 align="center">
			<tr>
				<th>Kode peminjaman</th>
				<th>Kode Petugas</th>
				<th>Kode Peminjam</th>
				<th>Tanggal Pinjam</th>
				 <th>Tanggal Kembali</th>
				 <th>Status Pinjam</th>
				<th>Aksi</th> 
			</tr>
			<?php foreach($data_peminjaman as $baris){ ?>
			<tr>
		<td><?php echo $baris->peminjaman_kode; ?></td>
		<td><?php echo $baris->petugas_kode; ?></td>
		<td><?php echo $baris->peminjam_kode; ?></td>
		<td><?php echo $baris->peminjaman_tgl; ?></td>
		<td><?php echo $baris->peminjaman_tgl_hrs_kembali; ?></td> 
		<td><?php echo $baris->status; ?></td>
		<td><a href="<?php echo base_url('/index.php/c_peminjaman/delp/'.$baris->peminjaman_kode);?>">HAPUS</a> |
		 <a href="<?php echo base_url('/index.php/c_peminjaman/formedit/'.$baris->peminjaman_kode);?>">UBAH</a></td>
			</tr>
			<?php } ?>
		</table>
		<div style="margin-left:200px" align="center">
			<a href="<?php echo base_url('/index.php/c_peminjaman/form');?>"><input type="submit" class="send" value="INPUT DATA BUKU"></a>
		</div>
		

  </div>

