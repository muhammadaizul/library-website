	<div id="body">
		<div class="header">
			<div>
				<img src="<?php echo base_url ('aset/images/people.jpg');?>" alt="Image">
				<div id="tagline">
					<h1>L I B R A R Y</h1>
					<h3>SMK TELKOM SANDHY PUTRA PURWOKERTO 2013/2014</h3>
				<div class="section">
					<h1><?php 
					if(isset($_SESSION['uname']))
					{
						echo "<h1>haloo ! ".$_SESSION['uname']."</h1>";
					}
					?></h1>
					</div>
				</div>
				<!--<div class="section">
					<h2>This is just a place holder, so you can see what the site would look like.</h2>
					<p>
						You can replace all this text with your own text. You can remove any link to our website from this website template, you&#39;re free to use this website template without linking back to us. This is just a place holder, so you can see what the site would look like. You can replace all this text with your own text. You can remove any link to our website from this website template.
					</p>
					<a href="about.html" class="first">Learn More About Us</a>
					<a href="about.html">FreeWebsiteTemplate</a>
				</div>  -->
			</div>
		</div>
		<div class="body">
			<div>
				<div class="figure">
					<a href="<?php echo base_url ('index.php/katalog');?>"><img src="<?php echo base_url('aset/images/hands.jpg'); ?>" alt="Image"></a>
					<h2><a href="<?php echo base_url ('index.php/katalog');?>">CATALOG</a></h2>
				</div>
				<div class="news">
					<h2>News &amp; Blog </h2>
					<ul>
						<li>
							<span class="date">Feb 11 2014</span>
							<h3><a href="<?php echo base_url ('index.php/news.html');?>">Manfaat Membaca</a></h3>
							<p>
								manfaat membaca sangat banyak sekali dan ternyata kebanyakan orang yang ber-IQ tinggi
								mereka hobi membaca hlo! gmana gd kamu ?
							</p>
							<span class="link"><a href="<?php echo base_url ('index.php/welcome/index');?>">Read More..</a></span>

						</li>

						<li>
							<span class="date">Feb 11 2014</span>
							<h3><a href="<?php echo base_url ('index.php/news.html');?>">Seri ke-8 Novel Harry Potter terbit lagi </a></h3>
							<p>
								dapatkan segera bukunya ya.
							</p>
						</li>
					</ul>
					<span class="link"><a href="<?php echo base_url ('index.php/welcome/index');?>">Read More..</a></span>
				</div>
				<div class="help">
					<h2>News &amp; Blog</h2>
					<a href="<?php echo base_url ('index.php/welcome/index');?>"><img src="<?php echo base_url('aset/images/finger.jpg');?>" alt="Image"></a>
					<h3><a href="<?php echo base_url ('index.php/welcome/index');?>">BUKU BARU SEJARAH INDO</a></h3>
					<p>
						PRAMOEDYA buku karya anak bangsa
						yang menggetarkan semangat untuk 
						mempertahankan NKRI.Buku karya anak bangsa
						ini merupakan bacaan wajib bagi para pemuda,guru,dsg.
					</p>
					<span class="link"><a href="<?php echo base_url ('index.php/welcome/index');?>">Read More...</a></span>
				</div>
			</div>
		</div>
	</div>
	