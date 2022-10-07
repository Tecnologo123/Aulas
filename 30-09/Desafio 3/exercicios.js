function calcular() {
    var maior = 0
    for (var i = 0; i < 5; i ++) {
        var numero = Number(window.prompt('Digite um número:'))
        if (numero > maior)
            maior = numero
    } 
    alert(`${maior} é o maior número`)
}

function tabuada() {
    mensagem_inteira = ""
    mensagem = ""
    var tab = 0
    var num = Number(prompt('Digite o número de qual tabuada deseja realizar:'))
    for (var i = 1; i <= 10; i++) {
        tab = num * i
        mensagem = `${num} x ${i} = ${tab}\n`
        mensagem_inteira += mensagem
    }
    alert(mensagem_inteira) 
}






