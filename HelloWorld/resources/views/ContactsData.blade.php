@extends('layouts.app')

@section('content')

<div class="wrapper">

    <div class="main-panel">

        <div class="content">
            <div class="container-fluid">
<h5 style="color:red; font-weight:200;">Note: Select contacts to make changes.</h5>              

<form action="" method="post">
  @csrf
	<table align="center" class="table table-hover table-striped" id="table" border="0" style="cursor: pointer;">

		<thead class="thead-dark">
			<tr>
				<th>First Name</th>
				<th>Last Name</th>
				<th>Email</th>
				<th>Mobile Number</th>
				<th>Active</th>
			</tr>
		</thead>
		<tbody>
@if(count($ContactsData) > 0)

@foreach($ContactsData as $ContactData)
<tr>
    <td>{{$ContactData->first_name}}</td>
    <td>{{$ContactData->last_name}}</td>
    <td>{{$ContactData->email}}</td>
    <td>{{$ContactData->mobile_number}}</td>
    <td>{{$ContactData->active}}</td>
  </tr>
@endforeach

@endif
			</tbody>
	</table>
</form>

<form name="frmSubmit" action="" method="post">
@csrf
   You have selected:<br>
   <input id="lblname" class="selectedRow" readonly><br>
  <button type="button" name="btnEnable" class="btn btn-primary" style="width:70px;" id="editEnable">Edit</button>
  <input type="button" name="btnDelete" class="btn btn-danger" id="btnDelete" value="Delete"><br><br>

<div ng-controller="frmtable" id="editInput" style="display: none">
  First Name: <input id="name" ng-Class="formBlock" type="text" name="name" value=""> &nbsp;
  Last Name: <input id="surname" ng-Class="formBlock" type="text" name="surname" value=""><br><br>
  Email:&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
   <input id="email" type="text" name="email" value="">
  Mobile Number: <input id="phone" type="text" name="phone" value=""><br><br>
    <input type="submit" name="btnSubmit" class="btn btn-success" id="EditSubmit" value="Edit & submit">
    <button type="button" name="btnCancel" id="editCancel" class="btn btn-default">Cancel</button>
</div>

</form>
<script src="js/script.js"></script>
   </div>
  </div>
</div>
</div>
@endsection
