<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>	
</head>
<body>
	<div class="container">
		<ul style="list-style-type:none;">
			@foreach ($categories as $element)
				@foreach ($element->childs as $child)
					<a href="#">&nbsp;&nbsp;{{ $child->typesub->name_en }}</a>
				  <li>
				  	<a href="#">&nbsp;&nbsp;{{ $child->subtype->name_en }}</a>
				  </li>
				@endforeach			  
			@endforeach

		</ul>
	</div>
</body>
</html>