<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
  <link rel="stylesheet" type="text/css" href="stylesheets/normalize.css">
  <link rel="stylesheet" type="text/css" href="stylesheets/mystyle.css">
    <meta charset="utf-8">
    <title>Melie's Site</title>
  </head>
  <body>

   <div class="welcome">
      <h1 class="logo">TowFinders</h1>
      <?php include 'site.php';?>
   </div>
   <hr>
      <p>
        <?php
          $message = fopen('C:\Users\mjlan\www\scripts\message.txt','r');
          echo fread($message, filesize('C:\Users\mjlan\www\scripts\message.txt'));
        ?>
        <br>
        <label><button >Search</button></label>
      </p>
    <hr>

    <form action="index.php" method="get">
    Name: <input type="text" name="name">
    <input type="submit">
    </form>
    
    <br>
    
      
      

  </body>
</html>