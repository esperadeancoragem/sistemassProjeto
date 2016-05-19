$(document).ready(function() {
	$.getJSON("funcRetorna.php", function(data){
		var items = [];
		$(data).each(function(key, value) {
			items.push(value.nome);
        });
		$( "#nome" ).autocomplete({
	source: items
});
	});
});
	/*
	var availableTags = [
	"ActionScript",
	"AppleScript",
	"Asp",
	"BASIC",
	"C",
	"C++",
	"Clojure",
	"COBOL",
	"ColdFusion",
	"Erlang",
	"Fortran",
	"Groovy",
	"Haskell",
	"Java",
	"JavaScript",
	"Lisp",
	"Perl",
	"PHP",
	"Python",
	"Ruby",
	"Scala",
	"Scheme"
];
$( "#nome" ).autocomplete({
	source: availableTags
});
    
});
*/

// JavaScript Document