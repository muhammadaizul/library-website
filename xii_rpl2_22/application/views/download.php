	<div id="body">
		<div class="5grid-layout">
			<div class="row">
				<div class="6u">
					<div id="content" style="padding:0px 12%">
					<table align="center">
							<?php
							$i = 0;
							foreach($katalog as $baris){
								if($i%5==0) echo "<tr>";
							?>
							<td style="padding:20px 20px">
							<a href="<?php echo base_url('aset/images/'.$baris->gambar);?>">
							<?php
							echo "<img src='".base_url('aset/images/'.$baris->gambar)."' style='width:150px;'/>";
							echo "<div style='margin-top:10px'>$baris->buku_judul</div>";
							?>
							</a>
							</td>
							<?php
								$i++;
							}
							?>
						</tr>
					</table>
					</div>
				</div>
			</div>
		</div>
	</div>
	</div>
</div>
				
