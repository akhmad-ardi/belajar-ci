<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <title>Codeigniter | Upload</title>
</head>

<body>
  <?php echo $error; ?>
  <?php echo form_open_multipart('upload/upload') ?>

  <div>
    <label for="upload">Upload</label>
    <input type="file" id="upload" name="uploadFile" accept="image/*">
  </div>

  <input type="submit" value="upload">
  </form>
</body>

</html>