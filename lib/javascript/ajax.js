function ajax()
{
	var httpRequest;
	httpRequest = new XMLHttpRequest();
	httpRequest.onreadystatechange = function(){
		if(httpRequest.readyState == 4){
			var response = JSON.parse(httpRequest.responseText);
			for(i=0; i < response.length; i++){
				document.getElementById("ajaxTest").innerHTML = response[i];
			}
		}
	}
	httpRequest.open('GET', '../cwk/api/search.php', true);
	httpRequest.send(null);
}