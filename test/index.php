<!DOCTYPE HTML>
<html>
<body>


<form action="submit.php" method="post">
File name:<br>
<input type="text" name="filename" >
<br>
First name:<br>
<input type="text" name="firstname" >
<br>
last name:<br>
<input type="text" name="lastname" >
<br><br>
<input type="submit" value="Submit">
<button type="submit" formaction="download.php">download</button>
</form>
<form action="upload.php" method="post" enctype="multipart/form-data">
    Select image to upload:
    <input type="file" name="fileToUpload" id="fileToUpload">
    <input type="submit" value="Upload Image" name="submit">
</form>
<div class="container">
	<div class="displaydetails">
	<form method="POST" action="RetrieveandDisplay.php">
		Enter the name to search data:<br/>
		<input type="text" name="FetchDetails">
		<input type="submit" name="Find" value="Find Data"/>
	</form>
	</div>
</div>
</body>
</html>
