<form method="post" action="/send.php">
	<input type="hidden" name="title" value="Заявка">
    <input type="hidden" name="utm" value="<?= implode('&', $_GET); ?>">
	<div class="form-column">
		<div class="form-group">
			<label for="user-name--<?php echo $name = generateRandomString() ?>" class="label-placeholder">Введите ваше имя</label>
			<input type="text" name="name" class="form-control" id="user-name--<?php echo $name ?>" required>
		</div>
		<div class="form-group">
			<label for="user-phone--<?php echo $phone = generateRandomString() ?>" class="label-placeholder">Номер телефона</label>
			<input type="tel" name="phone" class="form-control" id="user-phone--<?php echo $phone ?>" required>
		</div>
		<div class="form-group form-group--btn">
			<button type="submit" class="btn btn-primary">Оставить заявку</button>
		</div>
	</div>
</form>