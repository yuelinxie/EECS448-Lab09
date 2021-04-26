document.getElementById('form').onsubmit = function(){
    if(document.getElementById('eyeMask').value == "" || document.getElementById('faceMask').value == "" || document.getElementById('facTissue').value == ""){
        alert("Quantities cannot be blank")
        return false;
    }
    else if(document.getElementById('email').value == "" || document.getElementById('password').value == "" ){
        alert("Username and password field cannot be blank")
        return false;
    }
    else{
        return true;
    }
}