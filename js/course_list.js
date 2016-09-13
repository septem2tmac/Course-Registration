function updateCourses(year, term, level) { 
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
                document.getElementById("grid").innerHTML = txt;
            }
        }
		var url = "php/course_update.php?year="+year+"&term="+term+"&level="+level;
		//console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

function listCategoryCourses(category) { 
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
                document.getElementById("grid").innerHTML = txt;
            }
        }
		var url = "php/course_categorylist.php?category="+category;
		//console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

function searchCourses() { 
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
                document.getElementById("grid").innerHTML = txt;
            }
        }
		var url = "php/course_search.php?name="+$("#search").val();
		console.log(url);
        xmlhttp.open("GET",url,true);
        xmlhttp.send();
}

$(document).ready(function(){
    $("#category").click(function(){
        //console.log("123");
		$("#search").attr('placeholder','');
		$("#search").val("");
    });
});