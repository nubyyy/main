<link rel="stylesheet" href="style.css">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
<script src="script.js"></script>
<h1>test place for hmsanswers.com</h1>
<?php
$myfile = fopen("post.txt", "r");
$txt = fread($myfile,filesize("post.txt"));
fclose($myfile)
?>
<form action="formhandle.php" method="post">
  <label for="fchat">chat: </label>
  <input type="text" id="fchat"><br>
  <input type="submit" value="Post">
</form>
<p><?php echo $txt ?></p>
