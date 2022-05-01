<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta charset="utf-8">
    <title>REMY'S APP</title>
    <link rel="stylesheet" href="style-log.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js" charset="utf-8"></script>
  </head>
  <body>

    <div class="form">
    <div style="color: #fff;font-size: 3.1em;">ME<span style="color: #008000;font-size: 1.5em;">R</span>CI</div>
    </div>


    <script type="text/javascript">
    $('.options-02 a').click(function(){
      $('form').animate({
        height: "toggle", opacity: "toggle"
      }, "slow");
    });
    </script>

  </body>
</html>

<?php



$name = $sujet = $message = "";



$name = $_POST['name'];
$sujet = $_POST['sujet'];
$message = $_POST['message'];
$total=$name +" " + $sujet +" " + $message;
$fichier = fopen('ex.txt', 'c+b');

fseek($fichier, filesize('ex.txt'));
fwrite($fichier, $total);

?>
      