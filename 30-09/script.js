function par_impar() {
    var soma = 0

    for (var i = 0; i < 10; i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        soma = soma + nota
    }
    var media = soma / 10
    window.alert(`A média da turma é ${media}`)
}

function calcular_media() {
    var qtd = window.prompt('Quantas notas deseja inserir ?')
    var soma = 0

    for (var i = 0; i < qtd; i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        soma = soma + nota
    }
    var media = soma / qtd
    window.alert(`A média da turma é ${media}`)
}
function calcular_media2() {
    var qtd = window.prompt('Quantas notas deseja inserir ?')
    var soma = 0

    for (var i = 0; i < qtd; i++) {
        var nota = Number(window.prompt('Digite uma nota:'))
        //soma = soma + nota
        soma += nota
    }
    var media = soma / qtd
    window.alert(`A média da turma é ${media}`)
}
function calcular_par_impar() {
    var mensagem_inteira = ""
    var mensagem

    for (var i = 0; i <= 10; i++) {
        if (i % 2 == 0) {
            mensagem = `${i} é par!\n`
            mensagem_inteira += mensagem
        } else {
            mensagem = `${i} é ímpar\n`
            mensagem_inteira += mensagem
        }
    }
    alert(mensagem_inteira)
}

function calcular_pares_impares() {
    var mensagem_inteira = ""

    for (var i = 0; i <= 10; i++) {
        mensagem = par_impar(i)
        mensagem_inteira += mensagem
    }
    alert(mensagem_inteira)
}

function par_impar(numero) {
    if (numero % 2 == 0) {
        mensagem `${numero} é par!`
    } else {
        mensagem `${numero} é ímpar!`
    }
    return mensagem
}

function calculadora(){
    opcao = prompt("digite a operacao\n[1]Soma\n[2]Subtração")
    numero1 = Number(prompt("digite um numero:"))
    numero2 = Number(prompt("digite outro numero:"))

    switch (opcao){
        case 1:
            resultado = soma(numero1,numero2)
            alert(`O resultado é ${resultado}`)
            break
        case 2:
            resultado = subtrair(numero1,numero2)
            alert(`O resultado é ${resultado}`)
            break
        default:
            alert("Opção Inválida!")
            break
    }
}

function somar(numero1,numero2){
    resultado = numero1 + numero2
    return resultado
}

function subtrair(numero1,numero2){
    resultado = numero1 - numero2
    return resultado
}