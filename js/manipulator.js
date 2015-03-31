function catat(){
	var logging = document.getElementById('logging').value;
	xmlhttp.open("GET","../bin/mlogging.php?data="+logging,true);
	xmlhttp.send();
	xmlhttp.open("GET","bin/mlogging.php?data="+logging,true);
	xmlhttp.send();
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