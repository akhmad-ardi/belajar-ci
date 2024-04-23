<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Users</title>
</head>
<body>
  <table border="1">
    <thead>
      <tr>
        <th>Username</th>
        <th>Email</th>
      </tr>
    </thead>
    <tbody>
      <?php foreach($users as $user) { ?>
        <tr>
        
            <td><?php echo $user->username ?></td>
            <td><?php echo $user->email ?></td>
        
        </tr>
      <?php } ?>
    </tbody>
  </table>

</body>
</html>