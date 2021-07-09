<!--doctype html-->
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE-edge">
<meta name="viewport" content="width=device-width, intial-scale=1.0">
<title>Proj1 | Laravel </title>
	<!--style----->
	<style>
		body{
			font-family:poppins;
		}
	</style>
  
	
<link rel="stylesheet" href="{{asset('css/stylelaravel.css')}}"/ >
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="preconnect" href="https://fonts.gstatic.com">
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
<script src="https://kit.fontawesome.com/c8e4d183c2.js" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
		
</head>
<body>
        @include('laravelweb.includes.body')
        @include('laravelweb.includes.about')
        @include('laravelweb.includes.todo')
         @include('laravelweb.includes.contact')

</body>
</html>