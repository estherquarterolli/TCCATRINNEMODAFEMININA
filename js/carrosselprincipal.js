var radio =  document.querySelector('.manual-btn')
var cont = 1

document.getElementById('radio1').checked = true

setInterval(() => {
    proximaimg() 
}, 5000 //tempo q a imagem vai ficar antes de passar
)

function proximaimg(){
    cont++

    if (cont > 3){
        cont = 1;
    }

    document.getElementById('radio'+ cont).checked = true 

}