function par_impar(){
    var soma = 0

    for (var i = 0 ;i < 10 ;i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        soma = soma+nota
    }
    var media = soma/10
    window.alert(`A média da turma é ${media}`) 
}

function calcular_media() {
    var qtd = window.prompt('Quantas notas deseja inserir ?') 
    var soma = 0

    for (var i = 0 ;i < qtd ;i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        soma = soma+nota
    }
    var media = soma/qtd
    window.alert(`A média da turma é ${media}`)    
}
function calcular_media2() {
    var qtd = window.prompt('Quantas notas deseja inserir ?') 
    var soma = 0

    for (var i = 0 ;i < qtd ;i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        //soma = soma + nota
        soma += nota 
    }
    var media = soma/qtd
    window.alert(`A média da turma é ${media}`)    
}
function calcular_par_impar() {
    var mensagem_inteira = ""
    var mensagem
    
    for(var i = 0 ;i <=10 ;i++) {
        if(i % 2 == 0) {
            mensagem = `${i} é par!\n`
            mensagem_inteira += mensagem
        } else {
            mensagem=`${i} é ímpar\n`
            mensagem_inteira += mensagem
        }
        alert(mensagem_inteira)
    }
    
}