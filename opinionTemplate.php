<?php include 'partials/header.php'; ?>
<?php include 'lib/db.php'; ?>
<?php include 'lib/opinion.php'; ?>

    <!---main--->
			<div class="main" style="background-color: #5a6c96; padding-top: 20px; padding-bottom: 70px;">
				<div class="main-section">
				<div class="login-form">
					<h3>Laissez votre avis</h3>
					<p>Ils ont laissés leurs avis. Faites de meme.</p>
						<span></span>
					<form name="opinionForm" method="post">

<h4>Nom Complet</h4>
<input type="text" name="name" class="user" placeholder="John Doe" maxlength="20"  autocomplete="off" required>

<h4>Votre avis</h4>
<textarea class="mess" name="message" placeholder="Message" maxlength="1000" required></textarea>
<input type="submit" value="Envoyer" name="opinion">
</form>
				
				</div>
				</div>
			</div>
<?php include 'partials/footer.php'; ?>
