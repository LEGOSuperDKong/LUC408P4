<html>
<body>
<h1>Create a new story</h1>
<input type="text" name="Name" value="name of story" id="namex"><button onclick="create();">Create</button>
<h1>Latest Stories: (oldest on top)</h1>
<?php
$contx = file_get_contents("stories.ac");
echo $contx;
?>
<script>
function create(){
	var d = new Date();
    var n = d.getTime()
	window.location = "new.php?id="+n+"&name="+document.getElementById("namex").value;
}
</script>
</body>
</html>