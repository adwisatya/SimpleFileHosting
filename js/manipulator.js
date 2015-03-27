function groupList(){
	document.getElementById('content').innerHTML="";
}

function getGroupList(){

	xmlhttp.open("POST",url,true);
	xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
	xmlhttp.setRequestHeader("Content-length", param.length);
	xmlhttp.setRequestHeader("Connection", "close");
	xmlhttp.send(param);
}
function GetXmlHttpObject() {
	var xmlhttp=null;
	try {
		// Firefox, Opera 8.0+, Safari
		xmlhttp=new XMLHttpRequest();
	}
	catch (e) {
		// Internet Explorer
		try {
			xmlhttp=new ActiveXObject("Msxml2.XMLHTTP");
		}
		catch (e) {
			xmlhttp=new ActiveXObject("Microsoft.XMLHTTP");
		}
	}
	return xmlhttp;
}