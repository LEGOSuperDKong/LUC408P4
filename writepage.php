<?php
if (isset($_GET['id'])) {
$id = $_GET['id'];}
if (isset($_GET['user'])) {
$user = $_GET['user'];}
if (isset($_GET['auth'])) {
$auth = $_GET['auth'];}
?>
<html>
<head>
<!-- Main Quill library -->
<script src="https://cdn.quilljs.com/1.1.9/quill.js"></script>
<link href="https://cdn.quilljs.com/1.1.9/quill.snow.css" rel="stylesheet">
</head>
<body>
<p>This is where you write your page. Tada.</p>
<!-- Create the editor container -->
<div style="height:50%" id="editor">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
</div>
<!-- Initialize Quill editor -->
<script>
var quill = new Quill('#editor', {
    theme: 'snow'
  });
</script>

<script>
<?php
$contx = file_get_contents($id.".txt");
echo "id = '".$id."';";
?>
</script>
<script>
<?php
echo "contentx = ".$contx.";";
?>
</script>

<script>
<?php
echo "userx = '".$user."';";
?>
</script>

<script>
<?php
echo "authx = '".$auth."';";
?>
</script>

<button onclick="save();" id="saverx">Save</button>
<script>
function load_content(){
	quill.setContents(contentx);
	if(authx != userx){
		quill.disable();
		document.getElementById("saverx").innerHTML = "Back";
	}
}
function save(){
var xhttp = new XMLHttpRequest();
xhttp.onreadystatechange = function() {
if (this.readyState == 4 && this.status == 200) {
	window.location="loggedin.php?user="+userx;
}
};
urlx = "save.php?id="+id+"&con="+encodeURIComponent(JSON.stringify(quill.getContents()));
xhttp.open("GET", urlx, true);
xhttp.send();   
}
load_content();
</script>
</body>
</html>
