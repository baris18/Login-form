<!DOCTYPE html>
<html lang="en">

<?php  $this->load->view("includes/head.php"); ?>


<body class="text-center">
	<div class="container">
		<main class="form-signin">
			<form>
				<img class="mb-4" src="assets/img/logo.png" alt="" width="72" height="57">
				<h1 class="h3 mb-3 fw-normal">Lütfen Doldurunuz</h1>

				<div class="form-floating mb-3">
					<input type="email" class="form-control" id="floatingInput" placeholder="isim@örnek.com">
					<label for="floatingInput">Email adresi</label>
				</div>
				<div class="form-floating">
					<input type="password" class="form-control" id="floatingPassword" placeholder="Şifre">
					<label for="floatingPassword">Şifre</label>
				</div>
				<div class="form-floating mb-3">
					<select class="form-select" aria-label="Default select example">
						<option selected>Hizmet</option>
						<option value="1">Web Sitesi</option>
						<option value="2">Pimapen</option>
						<option value="3">Lig Boosting</option>
					</select>
				</div>
				<div class="form-floating mb-3">
					<select class="form-select" aria-label="Default select example">
						<option selected>Bütçe</option>
						<option value="1">2500$</option>
						<option value="2">5500$</option>
						<option value="3">10000$+</option>
					</select>
				</div>
				<div class="form-floating">
					<div class="mb-3">
						<label for="exampleFormControlTextarea1" class="form-label">Mesajınız</label>
						<textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
					</div>
				</div>

				<div class="checkbox mb-3">
					<label>
						<input type="checkbox" value="remember-me"> Beni Hatırla
					</label>
				</div>
				<button class="w-100 btn btn-lg btn-primary" type="submit">Gönder</button>
			</form>
		</main>
	</div>
	<?php  $this->load->view("includes/footer.php"); ?>
</body>

</html>
