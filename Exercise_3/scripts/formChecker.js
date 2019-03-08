function check() { 

    let validation = true
    // Gathering all inputs
    let b1qty = document.getElementById("b1qty").value
    let b2qty = document.getElementById("b2qty").value
    let b3qty = document.getElementById("b3qty").value
    let user = document.getElementById("user").value
    let pass = document.getElementById("pass").value

    // Scanning for checked shipment box

    let ship

    if( document.getElementById("free").checked) {
        ship = document.getElementById("free").value
    }
    else if( document.getElementById("fifty").checked) {
        ship = document.getElementById("fifty").value
    }
    else if( document.getElementById("five").checked) {
        ship = document.getElementById("five").value
    }
    else {
        document.getElementById("myForm").reset()
        validation = false
        // Try Again
    }


    // Validating Qty Inputs
    if((b1qty < 0) || (b2qty < 0) || (b3qty < 0)) {
        document.getElementById("myForm").reset()
        validation = false
        // Try Again
    }

    // Validating Username
    let at = false
    let dot = false
    let c = false
    let o = false
    let m = false
    //console.log(user[5])
    for(let i = 0; i < user.length; i++)
    {
        if(user[i] == "@") {
            console.log(i)
            at = true
        }
        
        if( (at == true) && (user[i] == ".")) {
            console.log(i)
            dot = true
        }

        if( (dot == true) && (user[i] == "c")) {
            console.log(i)
            c = true
        }
        if( (c == true) && (user[i] == "o")) {
            console.log(i)
            o = true
        }
        if( (o == true) && (user[i] == "m")) {
            console.log(i)
            m = true
        }
    }
    if (m != true) {
        document.getElementById("myForm").reset()
        validation = false
    }

    // Validating Password
    if (pass == "") {
        document.getElementById("myForm").reset()
        validation = false
        // Try Again
    }

    console.log(b1qty)
    console.log(b2qty)
    console.log(b3qty)
    console.log(ship)
    console.log(user)
    console.log(pass)
    console.log(validation)

    ////////////////////////////////////////////////

    if(validation){
        document.forms['myForm'].submit()
    }
    else{

        alert("Ensure all quantities are input, shipping has been selected, and you enter a valid username and password.")
        event.preventDefault();
        
    }
}
