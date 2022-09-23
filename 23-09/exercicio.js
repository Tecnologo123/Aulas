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