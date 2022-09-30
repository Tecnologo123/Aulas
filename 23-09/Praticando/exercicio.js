function calcular_filme() {
    var nm = window.prompt('Qual o nome do filme ?')
    var ano_atual = window.prompt('Qual o ano atual ?')
    var ano_lan = window.prompt('Qual o ano de lançamento ?')
    var filme = ano_atual - ano_lan
    par1 = document.getElementById('filme')
    window.alert(`O filme ${nm} foi lançado há ${filme} anos`)
}
function calcular_album() {
    var nm = window.prompt('Qual o nome do álbum ?')
    var bn = window.prompt('Qual o nome da banda ?')
    var ano_atual = window.prompt('Qual o ano atual ?')
    var ano_lan = window.prompt('Qual o ano de lançamento ?')
    var album = ano_atual - ano_lan
    par2 = document.getElementById('album')
    window.alert(`O álbum ${nm} da banda ${bn} foi lançado há ${album} anos`)
}