
function sendPost(){

}

function deleteRow(el)
{
	var row = $(el).closest('tr');
	var url = row.attr('data-url');
	var method = "DELETE";

	row.fadeOut();

	function fail(){
		row.fadeIn();
		alert("Algo salio mal. Lo siento");	
	}

	$.post(url, {'_method' : method }).done(
		function(data){
			if(data.success == true)
				row.remove()
			else
				fail();
		}
	).fail( fail );

}