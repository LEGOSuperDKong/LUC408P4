<html>
<body>
<script>
<?php
if (isset($_GET['user'])) {
$user = $_GET['user'];}
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['name'])) {
$name = $_GET['name'];}

$file = fopen($id.".txt", "w") or die("Unable to open file!");
fclose($file);


$file = fopen("stories.ac", "a") or die("Unable to open file!");
fwrite($file, "<p><a href='writepage.php?id=".$id."&user=123user321&auth=".$user."'>".$name." <small>by ".$user."</small></a></p>");
fclose($file);
echo 'window.location="writepage.php?id='.$id.'&user='.$user.'&auth='.$user.'";';
?>
</script>
</body>
</html>