
//$( selector(htmlelement,cssclass,id) ).methode -> .css(),.attr(),.hide(),.show()
//$( selector(htmlelement,cssclass,id) ).event(fn(){...})   -> .click(),.ready(),.on() 
$(document).ready(function(){   
    console.log("READY !!!");
    // Globale Variablen Startwere setzen
    $.post('db.php',{},
        function (data, status) {                      
            console.log(data);                      
        })
    
});




