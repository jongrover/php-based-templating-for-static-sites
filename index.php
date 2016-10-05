<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>My PHP Example Site</title>
</head>
<body>
  <?php
    require('header.php');

    switch ($_GET['p']) {
      case 'about':
        require('about.php'); break;
      case 'contact':
        require('contact.php'); break;
      default:
        require('welcome.php');
    }

    require('footer.php');
  ?>
</body>
</html>
