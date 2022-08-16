function mostrar(){
 		document.getElementById("dert").style.display = "block";
 	}


var g = window.matchMedia("(max-width: 830px)")
var y = window.matchMedia("(min-width: 830px)")
 	function myFunction() {
    let x = document.getElementById("myDIV");
    if(y.matches){
    	if (x.style.width === "60px") {
        x.style.width = "250px";
    } else {
        x.style.width = "60px";
    }
    }
     
    if(g.matches){
    	if (x.style.display === "block") {
        x.style.display = "none";
    } else {
        x.style.display = "block";
    }
    }


}



