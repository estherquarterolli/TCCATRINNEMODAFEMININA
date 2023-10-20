// mostrar senha:

function mostrarSenha2(){
    var inputPass= document.getElementById('senhaconfirmar')
    var btnShowPass = document.getElementById('olhoconfirmarsenha')

    if(inputPass.type=== 'password'){
        inputPass.setAttribute('type','text')
btnShowPass.classList.replace('bi-eye','bi-eye-slash')
}else{
    inputPass.setAttribute('type','password')
btnShowPass.classList.replace('bi-eye-slash','bi-eye')
}
}