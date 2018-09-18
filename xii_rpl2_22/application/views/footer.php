<div id="footer">
		<div>
			<form action="<?php echo base_url();?>index.php/welcome/savecontact" method="post">
				<h2>Send A Message</h2>
				<label for="name"><span>Your Name:</span>
					<input type="text" id="name" name="txtname">
				</label>
				<label for="emailad"><span>Email Address:</span>
					<input type="text" id="emailad" name="txtmail">
				</label>
				<label for="message"><span class="message">Message:</span>
					<textarea name="txtmsg" id="message" cols="30" rows="10"></textarea>
				</label>
				<a href="#"><input type="button" class="send" value="Send"></a>
			</form>
			<div>
				<h2>Contact Details</h2>
				<ul>
					<li>
						<b>Location</b>
						<span>:</span>
						<p>
							JL.Raya Selatan Wangon No.128 Kec.Wangon 57136 Kab.Banyumas
						</p>
					</li>
					<li>
						<b>Phone</b>
						<span>:</span>
						<p>
							+0285 - 747 -9907 -28
						</p>
					</li>
					<li>
						<b>Email</b>
						<span>:</span>
						<p>
							kang.izzul@gmail.com</p>
					</li>
					<li>
						<b>Social</b>
						<span>:</span>
						<div>
							<a href="http://freewebsitetemplates.com/go/facebook/" id="facebook" target="_blank">facebook</a>
							<a href="http://freewebsitetemplates.com/go/twitter/" id="twitter" target="_blank">twitter</a>
							<a href="http://freewebsitetemplates.com/go/googleplus/" id="googleplus" target="_blank">google&#43;</a>
						</div>
					</li>
				</ul>
			</div>
		</div>
		<p>
			&copy; Copyright 2014. All rights reserved.
		</p>
	</div>
</body>
</html>