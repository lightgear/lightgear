<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Lightgear (i18n)</title>

	<link href="/css/app.css" rel="stylesheet">

	<!-- Fonts -->
	<link href='//fonts.googleapis.com/css?family=Roboto:400,300' rel='stylesheet' type='text/css'>
</head>
<body>

    @include('navigation')

    <div class="container-fluid">
        <div class="row">
            @yield('content')
        </div>
    </div>

    <script src="{{ asset('/js/vendor.js') }}"></script>
</body>
</html>
