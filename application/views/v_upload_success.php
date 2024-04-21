<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <title>Codeigniter | Upload Success</title>
</head>

<body>
  <h1 style="text-align: center;">Success Upload</h1>

  <?php foreach ($upload_data as $item => $value): ?>
    <li>
      <?php echo $item; ?>:
      <?php echo $value; ?>
    </li>
  <?php endforeach; ?>
  </ul>
</body>

</html>