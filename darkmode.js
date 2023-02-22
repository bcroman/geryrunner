function darkMode() {
   
   
   if (document.getElementById("mycheck").checked == false){
	   var element = document.body;
	   element.classList.toggle("dark-mode");
	   document.getElementById("mycheck").checked = true
	}
	else{
		var element = document.body;
	    element.classList.toggle("dark-mode");
		document.getElementById("mycheck").checked = false
	}
	
}