<form method="post" action="<?= get_theme_file_uri('mail-send.php'); ?>">
    <input type="hidden" name="title" value="Заявка">
    <input type="hidden" name="admin_email" value="<?= get_option('admin_email'); ?>">
    <div class="form-column">
        <div class="form-group">
            <label for="user-name--<?= $name = generateRandomString() ?>" class="label-placeholder">Введите ваше
                имя</label>
            <input type="text" name="name" class="form-control" id="user-name--<?= $name ?>" required>
        </div>
        <div class="form-group">
            <label for="user-phone--<?= $phone = generateRandomString() ?>" class="label-placeholder">Номер
                телефона</label>
            <input type="tel" name="phone" class="form-control" id="user-phone--<?= $phone ?>" required>
        </div>
        <div class="form-group form-group--btn">
            <button type="submit" class="btn btn-primary">Оставить заявку</button>
        </div>
    </div>
</form>