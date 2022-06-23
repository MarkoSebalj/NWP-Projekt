<?php 
	print '
	<h1>Obrazac za kontakt</h1>
	<div id="contact">
		<iframe src="https://maps.google.com/maps?q=Radni%C4%8Dka%20cesta%2037b%2C%2010000%2C%20Zagreb&t=&z=13&ie=UTF8&iwloc=&output=embed" width="100%" height="400" frameborder="0" style="border:0" allowfullscreen></iframe>
		<form action="send-contact1.html" id="contact_form" name="contact_form" method="POST">
			<label for="fname">Ime *</label>
			<input type="text" id="fname" name="firstname" placeholder="Unesite ime.." required >
			
			<label for="lname">Prezime *</label>
			<input type="text" id="lname" name="lastname" placeholder="Unesite prezime.." required>
				
			<label for="email"> E-mail *</label>
			<input type="email" id="email" name="email" placeholder="Unesite e-mail.." required>

			<label for="country">Zemlja</label>
			<select id="country" name="country">
				<option value="">Odaberite</option>
				<option value="BE">Belgija</option>
				<option value="HR" selected>Hrvatska</option>
				<option value="LU">Luksemburg</option>
				<option value="HU">Madarska</option>
			</select>

			<label for="subject">Upit</label>
			<textarea id="subject" name="subject" placeholder="Unesite vas upit.." style="height:200px"></textarea>

			<input type="submit" value="Pošalji">
		</form>
	</div>';
?>