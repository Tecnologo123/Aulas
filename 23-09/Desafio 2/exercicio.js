function calcular_idade() {
    var ano_atual = window.prompt('Qual o ano atual ?')
    var ano_nasc = window.prompt('Qual seu ano de nascimento ?')
    var idade = ano_atual - ano_nasc
    par1 = document.getElementById('idade')
    window.alert(`Você tem ${idade} anos`)
}
function calcular_media() {
    var nome = window.prompt('Solicitar nome');
    var nota1 = Number(window.prompt('Solicitar nota1:'));
    var nota2 = Number(window.prompt('Solicitar nota2:'));
    var media = (nota1 + nota2)/2
    par2 = document.getElementById('media')

    if (media <=7) {
        window.alert(`${nome}, estude mais!`)
    }else {
        window.alert(`Parabéns, ${nome}!`)
    }
}
function calcular() {
    var n1 = Number(window.prompt('Solicitar n1:'));
    var n2 = Number(window.prompt('Solicitar n2:'));
    par3 = document.getElementById('numero')


    if (n1 > n2) {
        window.alert(`O primeiro número é ${n1} e o segundo número é ${n2}. ${n1} é maior que ${n2}`)
    } else if (n2 > n1) {
        window.alert(`O segundo número é ${n2} e o primeiro número é ${n1}. ${n2} é maior que ${n1}`)
    } else {
        window.alert(`Os dois números são iguais`)
    }

}
function par_impar(){
    var num = Number(window.prompt('Insira um número'))
    par4 = document.getElementById('parimpar')
    if (num %2 == 0) {
        window.alert('Par!')
    }else {
        window.alert('Impar!')
    } 

}