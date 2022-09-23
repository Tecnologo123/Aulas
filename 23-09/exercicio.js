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
        window.alert(`O primeiro número é ${n1} e o segundo número é ${n2}. ${n1} é maior que ${n2}`)
    } else if (n2 > n1) {
        window.alert(`O segundo número é ${n2} e o primeiro número é ${n1}. ${n2} é maior que ${n1}`)
    } else {
        window.alert(`Os dois números são iguais`)
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
            break
        default :
            window.alert(`Opção inválida`)
            break
    }
}
function calcular_media2() {
    var nome = window.prompt('Solicitar nome');
    var nota1 = Number(window.prompt('Solicitar nota1:'));
    var nota2 = Number(window.prompt('Solicitar nota2:'));
    var media = (nota1 + nota2)/2

    if (media <=7) {
        window.alert(`${nome}, estude mais!`)
    }else {
        window.alert(`Parabéns, ${nome}!`)
    }
}
function par_impar(){
    var num = Number(window.prompt('Insira um número'))
    if (num %2 == 0) {
        window.alert('Par!')
    }else {
        window.alert('Impar!')
    } 

}
function calcular_idade() {
    var anonsc = (window.prompt('Insira o ano de nascimento'))   
}
function opcoes() {
    var opcao = Number(window.prompt('Escolha uma opção de operação matemática: \n 1)Calcular idade\n 2)Calcular média \n 3)Número maior \n 4)Par ou Impar ')); 

    switch (opcao) {
        case 1 :
            
            break
        case 2 :
            calcular_media2() 
            break
        case 3 :
            calcular()
            break
        case 4 :
            par_impar()
            break
        default:
            window.alert(`Opção inválida`)
            break
    }
}
