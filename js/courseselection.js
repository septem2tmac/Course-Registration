function courseselection() { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				//var txt = xmlhttp.responseText;
				//var txtArr = txt.split(":||:");
                //document.getElementById("students").innerHTML = txtArr[0];
				//document.getElementById("CheckoutAndCart").innerHTML = txtArr[1];
            }
        }
		var url = "php/courseselection.php";
		console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

function coursedelete(name, year, term) { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var txt = xmlhttp.responseText;
                document.getElementById("courseinCart").innerHTML = txt;
            }
        }
		var url = "php/deletecourse.php?name="+name+"&year="+year+"&term="+term;
		console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

function admincoursedelete(name, year, term) { 
        if (window.XMLHttpRequest) {
            // code for IE7+, Firefox, Chrome, Opera, Safari
            xmlhttp = new XMLHttpRequest();
        } else {
            // code for IE6, IE5
            xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
        }
        xmlhttp.onreadystatechange = function() {
            if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
				var txt = xmlhttp.responseText;
                document.getElementById("admin_table").innerHTML = txt;
            }
        }
		var url = "php/admindelete.php?name="+name+"&year="+year+"&term="+term;
		console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}