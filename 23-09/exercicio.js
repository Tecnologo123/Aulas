function validar_idade() {
    var ida = document.getElementById('idade')

    if (ida.value >= 18) {
        window.alert("Cadastro realizado com Sucesso!")
    } else {
        window.alert("Você não pode se cadastrar nesse site")
    }

}
function calcular() {
    var n1 = Number(window.prompt('Solicitar n1:'));
    var n2 = Number(window.prompt('Solicitar n2:'));
    par1 = document.getElementById('numero')


    if (n1 > n2) {
        par1.innerHTML = `O primeiro número é ${n1} e o segundo número é ${n2}. ${n1} é maior que ${n2}`
    } else if (n2 > n1) {
        par1.innerHTML = `O segundo número é ${n2} e o primeiro número é ${n1}. ${n2} é maior que ${n1}`
    } else {
        par1.innerHTML = (`Os dois números são iguais`)
    }

}
function calcular2() {
    var n1 = Number(window.prompt('Solicitar um número:'));
    var n2 = Number(window.prompt('Solicitar outro número:'));
    var opcao = Number(window.prompt('Escolha uma opção de operação matemática: \n 1)Soma \n 2)Multiplicação \n 3)Subtração \n 4)Divisão '));

    switch (opcao) {
        case 1 :
            resultado = n1 + n2
            window.alert(`O resultado da soma é ${resultado}`)
            break
        case 2 :
            resultado = n1 * n2 
            window.alert(`O resultado da multiplicação é ${resultado}`)
            break
        case 3 :
            resultado = n1 - n2
            window.alert(`O resultado da subtração é ${resultado}`)
            break
        case 4 :
            resultado = n1 / n2
            window.alert(`O resultado da divisão é ${resultado}`)
        default :
            window.alert(`Opção inválida`)
    }
}