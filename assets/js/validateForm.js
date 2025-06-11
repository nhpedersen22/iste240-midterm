function validateForm() {
    "use strict";
    var isvalid = true;

    if (document.getElementById("visitor").value == "") {
        document.getElementById("visitor").style.borderColor="red";
        document.getElementById("visitor").style.backgroundColor ="pink";
        isvalid = false;
    } else {
        document.getElementById("visitor").style = null;
    }

    if (document.getElementById("vdate").value == '') {
        document.getElementById("vdate").style.borderColor="red";
        document.getElementById("vdate").style.backgroundColor ="pink";
        isvalid = false;
    } else {
        document.getElementById("vdate").style = null;
    }

    console.log("Is form ok? " + isvalid);
    return (isvalid); 
}