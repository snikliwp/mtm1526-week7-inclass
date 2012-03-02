<!DOCTYPE HTML>
<html>
<head>
<meta charset="utf-8">
<title>To-DO List</title>
<link href="css/general.css" rel="stylesheet">
</head>

<body>
<div class="newform">
<form id="form">
<h1>To Do List</h1>
	<div class="item">
		<label for="item"> New To-Do Item </label>
		<input type="text" id="item" name="item" size="75" class="reqd">
	</div> <!-- End Class Item --> 
	
	<div class="submit">
		<button id="submit">Submit Item</button>
	</div> <!-- End Class submit --> 
	
	<div class="active">
		<label for="active">Active Items </label>
		<ol id="active">
		</ol>
	</div> <!-- End Class active --> 
	
	<div class="complete">
		<label for="complete"> Closed Items </label>
		<ul id="complete">
		</ul>
	</div> <!-- End Class complete --> 
</form>
</div> <!-- End Class newform --> 

</body>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>
	<script src="js/todo.js"></script>

</html>