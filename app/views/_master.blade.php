<!DOCTYPE html>
<html>

	<head>
		<title>
			@yield ("title", "Developer's Best Friend")
		</title>

		<meta charset="utf-8">
	    <link rel="stylesheet" href="{{ URL::asset("main.css") }}" type="text/css">
	</head>

	<body>
		<img id="logo" src=' {{ URL::asset('images/bestfriend.gif') }} ' alt='website Logo'>
	    <h1>Developer's Best Friend</h1>
		@yield ("content")
		@yield ("footer")
	</body>
	
</html>