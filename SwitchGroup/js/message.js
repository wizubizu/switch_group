$('#hideshow') .toggle(function (){
$('#hideshow') .text('show');
}, function(){
	$('#hideshow') .text('hide');
});

$('#hideshow') .click(function(){
	$('#message') .toggle();
});