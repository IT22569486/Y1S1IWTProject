function confir(){

	var x = document.getElementById("PName").value;

	if(x == ""){

		alert("Please fill the form!");

	}else{

		confirm("Create account for " + x);
	}



}

function enableButton(){
    if(document.getElementById("checkbox").checked){
    	
        document.getElementById("submit").disabled=false;
    }
    else{
        document.getElementById("submit").disabled=true;
    }
}


