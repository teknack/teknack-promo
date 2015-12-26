function validateForm() {
    var x = document.forms["register"]["pname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        document.forms["register"]["pname"].focus();
        return false;
    }

    x = document.forms["register"]["pemail"].value;
    if (x == null || x == "") {
        alert("Email must be filled out");
        document.forms["register"]["pemail"].focus();
        return false;
    }
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))) {  
		alert("Invalid Email format");
		document.forms["register"]["pemail"].focus();
		return false;  
	}
    
    x = document.forms["register"]["ptelnum"].value;
    if (x == null || x == "") {
        alert("Mobile Number must be filled out");
        document.forms["register"]["ptelnum"].focus();
        return false;
    }
    if (!(/^\d{10}$/.test(x))) {  
		alert("Please enter a 10 digit Mobile Number");
		document.forms["register"]["ptelnum"].focus();
		return false;  
	}

    x = document.forms["register"]["ptkcode"].value;
    if (x == null || x == "") {
        alert("Teknack Code must be filled out. \nDon't have a Code? Contact Us to get one!");
        document.forms["register"]["ptkcode"].focus();
        return false;
    }
    if (x.length != 8) {
        alert("Invalid Teknack Code. \nDon't have a Code? Contact Us to get one!");
        document.forms["register"]["ptkcode"].focus();
        return false;
    }

    x = document.forms["register"]["ppass"].value;
    if (x == null || x == "") {
        alert("Password must be filled out");
        document.forms["register"]["ppass"].focus();
        return false;
    }
    if (x.length < 6) {
        alert("Password must be 6 characters");
        document.forms["register"]["ppass"].focus();
        return false;
    }

    var x2 = document.forms["register"]["prepass"].value;
    if (x == null || x == "") {
        alert("Re-enter password");
        document.forms["register"]["prepass"].focus();
        return false;
    }

    if (x != x2) {
        alert("Passwords do not match! Re-enter password");
        document.forms["register"]["ppass"].focus();
        return false;
    }

    //return true;
}

function validateContactUs() {
    var x = document.forms["contact"]["cname"].value;
    if (x == null || x == "") {
        alert("Name must be filled out");
        document.forms["contact"]["cname"].focus();
        return false;
    }

    x = document.forms["contact"]["cemail"].value;
    if (x == null || x == "") {
        alert("Email must be filled out");
        document.forms["contact"]["cemail"].focus();
        return false;
    }
    if (!(/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/.test(x))) {  
		alert("Invalid Email format");
		document.forms["contact"]["cemail"].focus();
		return false;  
	}
    
    x = document.forms["contact"]["ctelnum"].value;
    if (x == null || x == "") {
        alert("Mobile Number must be filled out");
        document.forms["contact"]["ctelnum"].focus();
        return false;
    }
    if (!(/^\d{10}$/.test(x))) {  
		alert("Please enter a 10 digit Mobile Number");
		document.forms["contact"]["ctelnum"].focus();
		return false;  
	}

	x = document.forms["contact"]["ccolnm"].value;
    if (x == null || x == "") {
        alert("Please enter College name & location");
        document.forms["contact"]["ccolnm"].focus();
        return false;
    }

    x = document.forms["contact"]["cmessage"].value;
    if (x == null || x == "") {
        alert("Please enter message");
        document.forms["contact"]["cmessage"].focus();
        return false;
    }

    //alert("Thank you for dropping us a line.\nWe will get back to you shortly.");
    //return true;
}