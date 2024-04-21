<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <title>Codeigniter | Form</title>
</head>

<body>
  <?php echo form_open('form/signup') ?>

  <div>
    <label for="name">Name</label>
    <input type="text" id="name" name="name">
    <?php echo form_error('name') ?>
  </div>

  <div>
    <label for="email">Email</label>
    <input type="text" id="email" name="email">
    <?php echo form_error('email') ?>
  </div>

  <div>
    <label for="confirm_email">Confirm Email</label>
    <input type="text" id="confirm_email" name="confirm_email">
    <?php echo form_error('confirm_email') ?>
  </div>

  <button type="submit">Sign Up</button>
  </form>
</body>

</html>