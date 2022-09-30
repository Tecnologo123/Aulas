function par_impar(){
    elemento = document.getElementById('paragrafo');
    var num = Number(window.prompt('Insira um número máximo'))
    message = "TESTE"
    if (num %2 == 0) {
        message += "teste"
    }else {
        message += "teste"
    } 
    elemento.innerHTML = message
}