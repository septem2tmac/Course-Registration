function login() { 
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
				var txtArr = txt.split(":||:");
				if (txtArr[0].charAt(txtArr[0].length - 1) == '0') {
					document.getElementById("valid").innerHTML = "The input is not valid, please try it again.";
				} else {
					console.log(txtArr[0].charAt(txtArr[0].length - 1));
					$('#modalLogin').modal('hide');
					document.getElementById("students").innerHTML = txtArr[1];//txtArr[0];
					document.getElementById("CheckoutAndCart").innerHTML = txtArr[2];
				}
            }
        }
		var url = "php/login.php";
		console.log(url);
        xmlhttp.open("POST",url,true);
		xmlhttp.setRequestHeader("Content-type", "application/x-www-form-urlencoded");
        xmlhttp.send("username="+$("#username").val()+"&password="+$("#password").val()+"&email="+$("#email").val());
}

function logout() { 
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
				var txtArr = txt.split(":||:");
                document.getElementById("students").innerHTML = txtArr[0];
				document.getElementById("CheckoutAndCart").innerHTML = txtArr[1];
            }
        }
		var url = "php/logout.php";
		console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}