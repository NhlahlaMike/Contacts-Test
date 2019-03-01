$(document).ready(function(){
	$('#editEnable').click(function(){
		event.preventDefault();
		$('#editInput').show();
	});

	$('#editCancel').click(function(){
		event.preventDefault();
		$('#editInput').hide();
	});
$( '#editEnable' ).attr( 'disabled', 'disabled' );
$( '#btnDelete' ).attr( 'disabled', 'disabled' );
var table = document.getElementById( "table" );
var id;
for ( var i = 1; i < table.rows.length; i++ )
// document.getElementById("lname").value = this.cells[1].innerHTML;
{
	table.rows[ i ].onclick = function () {

		document.getElementById("name").value = this.cells[0].innerHTML;
		document.getElementById("surname").value = this.cells[1].innerHTML;
		document.getElementById("email").value = this.cells[2].innerHTML;
		document.getElementById("phone").value = this.cells[3].innerHTML;
		document.getElementById("lblname").value = this.cells[0].innerHTML + "  " + this.cells[1].innerHTML;
		id = this.cells[2].innerHTML;

$( '#editEnable' ).removeAttr( 'disabled' );
$( '#btnDelete' ).removeAttr( 'disabled' );
	};

}

$('#btnDelete').click(function(){

	$.confirm({
		'title'		: 'Delete Confirmation',
		'message'	: 'You are about to delete this contacts. <br /> Do you want to proceed?',
		'buttons'	: {
			'Yes'	: {
				'class'	: 'blue',
				'action': function(){
					$('form[name=frmSubmit]').attr('action','ContactsData/delete/'+id);
					$('form[name=frmSubmit]').submit();
				}
			},
			'No'	: {
				'class'	: 'gray',
				'action': function(){}	// Nothing to do in this case. You can as well omit the action property.
			}
		}
	});

});

$('#EditSubmit').click(function(){
$('form[name=frmSubmit]').attr('action','ContactsData/update');
$('form[name=frmSubmit]').submit();
});

});
