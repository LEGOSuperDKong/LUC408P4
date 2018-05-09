<html>
<body>
<script>
<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['name'])) {
$name = $_GET['name'];}
$file = fopen($id.".txt", "w") or die("Unable to open file!");
fclose($file);


$file = fopen("stories.ac", "a") or die("Unable to open file!");
fwrite($file, "<p><a href='writepage.php?id=".$id."'>".$name."</a></p>");
fclose($file);
echo 'window.location="writepage.php?id='.$id.'";';
?>
</script>
</body>
</html>