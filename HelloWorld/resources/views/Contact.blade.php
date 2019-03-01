@extends('layouts.app')

@section('content')
<div class="wrapper">

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
<center>
    <!-- initiate controller -->
<div class="container" ng-controller="formController">
  <h1 class="textintro" style="color: green;">Contacts Management</h1><br><br>

  <!-- Contact form -->
<form name="myform" action="Contact/submit" method="post">
@csrf
		<span class="lbltext">First Name:</span> <input name="name" type="text" ng-model="user.name" class="front" ng-required="true" />
    <p class="error" ng-show="myform.name.$invalid && myform.name.$touched">Fill out your first name</p>
		<span class="lbltext">Last Name:</span> <input name="surname" type="text" ng-model="user.surname" class="front" ng-required="true" />
    <p class="error" ng-show="myform.surname.$invalid && myform.surname.$touched">Fill out your surname</p>
		<span class="lbltext">Email:</span> <input name="email" type="email" ng-model="user.email" class="front" ng-required="true" ng-pattern="emailFormat" />
    <p class="error" ng-show="myform.email.$invalid && myform.email.$touched">Fill out your valid email</p>
		<span class="lbltext">Mobile Number:</span> <input name="phone" type="Number" ng-model="user.phone" class="front" ng-minlength="10" ng-maxlength="10" ng-required="true" ng-pattern="numberFormat" />
    <p class="error" ng-show="myform.phone.$invalid && myform.phone.$touched">Fill out your Mobile Number, must be 10 numbers</p>
    <br>
		<input type="submit" name="submit" ng-class="btn btn primary success" style="color: green" value="Add Contacts">
</form>
</div>
{!!Html::script('js/Custom.js')!!}
<br><br>
</center>
   </div>
  </div>
</div>
</div>
@endsection
