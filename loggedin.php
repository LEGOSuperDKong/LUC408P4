<html>
<head>
<title>WP Story Board</title>
<link rel = "stylesheet" type = "text/css" href = "style.css"></link>
<link href="https://fonts.googleapis.com/css?family=Pangolin" rel="stylesheet">
</head>
<body>
<?php
if (isset($_GET['user'])) {
$user = $_GET['user'];}
?>

<script>
<?php
echo "userx = '".$user."';";
?>
</script>

<h1>Create a new story</h1>
<input type="text" name="Name" value="name of story" id="namex"><button onclick="create();">Create</button>
<h1>Latest Stories: (oldest on top)</h1>
<?php
$contx = file_get_contents("stories.ac");
$contx = str_replace("123user321", $user, $contx);

echo $contx;
?>
<script>
function create(){
	var d = new Date();
    var n = d.getTime()
	window.location = "new.php?id="+n+"&name="+document.getElementById("namex").value+"&user="+userx;
}
</script>
</body>
</html>
