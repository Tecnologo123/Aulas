function clicou() {
    window.alert('Você clicou no botão!')
}
function inicio() {
    var nome = window.prompt('Qual é o seu nome ?');
    window.alert(`Olá, ${nome}! É um prazer te conhecer!`)
    
}
function calcular_idade() {
    var ano_atual = window.prompt('Qual o ano atual ?')
    var ano_nasc = window.prompt('Qual seu ano de nascimento ?')
    var idade = ano_atual - ano_nasc
    window.alert(`Você tem ${idade} anos`)
}
function bem_vindo() {
    var nome = window.prompt('Qual é o seu nome ?')
    var elemento = window.document.getElementById('resultado')
    elemento.innerHTML = (`Olá, ${nome}! Seja, bem vindo!`)
}
function calcular() {
    var n1 = window.prompt('Digite um número:')
    var elemento = document.getElementById('resultado')
    elemento.innerHTML = `O dobro de ${n1} é ${n1*2}
    e a metade é ${n1/2}!`
}
function somar() {
    var n1 = Number (window.prompt('Digite um número: '))
    var n2 = Number (window.prompt('Digite outro número: '))
    soma = n1 + n2

    var elemento = document.getElementById('resultado')
    elemento.innerHTML = `A soma é igual a ${soma}!`
}