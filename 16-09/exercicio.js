function calcular_media() {
    var nome = window.prompt('Solicitar nome:');
    var nota1 = Number(window.prompt('Solicitar nota1:'));
    var nota2 = Number(window.prompt('Solicitar nota2'));
    var media = (nota1 + nota2)/2
    par1 = document.getElementById('nota')
    par1.innerHTML = (`A primeira nota é ${nota1} e 
    a segunda nota é ${nota2}`)
    par2 = document.getElementById('media')
    par2.innerHTML = (`O valor da média obtida é ${media}`)

    if (media <=7) {
        par3 = document.getElementById('mensagem')
        par3.innerHTML = (`${nome}, Estude mais`)
    }else {
        par3 = document.getElementById('mensagem')
        par3.innerHTML = (`Parabéns, ${nome}`)
    }
    
}
