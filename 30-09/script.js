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