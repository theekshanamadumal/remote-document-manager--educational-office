<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8" />
    <title>User</title>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    
     
  </head>
  <body>
    <?php include_once("inc/head.php"); ?>
    Hi There <?php echo $_SESSION['UserName']?>
    <?php    include_once('inc/foot.php');    ?>
  </body>
</html>
