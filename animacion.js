// La función original (Opción B)
function pass(){
    const passwordInput = document.getElementById("pass");
    const icon = document.getElementById("pass_icon");
    
    if(passwordInput.type === "password"){
        passwordInput.type = "text";     
        icon.src = "ojoA.png";           
    } else {
        passwordInput.type = "password"; 
        icon.src = "ojo.png";            
    }
}

// NUEVO CÓDIGO: Asigna el evento de clic al elemento por su ID
document.addEventListener('DOMContentLoaded', (event) => {
    const icon = document.getElementById("pass_icon");
    if (icon) {
        icon.addEventListener('click', pass);
    }
});

// O aún más simple si usas 'defer', puedes omitir el DOMContentLoaded:
/*
const icon = document.getElementById("pass_icon");
if (icon) {
    icon.addEventListener('click', pass);
}
*/