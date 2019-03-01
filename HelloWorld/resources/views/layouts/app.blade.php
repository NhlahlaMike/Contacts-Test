<!DOCTYPE html>
<html ng-app="app1" ng-cloak>
<head>
<meta charset="utf-8">
<title>Contact</title>

{!!Html::style('css/app.css')!!}
{!!Html::style('css/style.css')!!}
<link href="css/_bootstrap.min.css" rel="stylesheet">
{!!Html::style('jquery.confirm/jquery.confirm.css')!!}
{!!Html::script('js/jquery-3.3.1.min.js')!!}
{!!Html::script('js/app.js')!!}
{!!Html::script('js/bootstrap.min.js')!!}
{!!Html::script('jquery.confirm/jquery.confirm.js')!!}
{!!Html::script('js/angular.min.js')!!}
{!!Html::script('js/Custom.js')!!}

</head>
<body>

@include('inc.messages')
@yield('content')

</body>
</html>
