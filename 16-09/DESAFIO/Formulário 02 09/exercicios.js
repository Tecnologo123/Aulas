function clicou() {
    window.alert('Informações salvas com sucesso!')
}
function clicou2() {
    window.alert('Informações excluídas com sucesso!')
}
function clicou3() {
    var nome = "Branco"

    if (nome == "Preenchido") {
        console.log("Nome preenchido com sucesso");
    } else {
        console.log("O campo nome deve ser preenchido");
    }
  
}
function validar_campo() {
    nm = document.getElementById('nome')
    sn = document.getElementById('sobrenome')
    dn = document.getElementById('datadenascimento')
    nl = document.getElementById('nomedolivro')
    na = document.getElementById('nomedoautor')
    de = document.getElementById('datadeempréstimo')
    dv = document.getElementById('datadedevolução')
    tempodeemprestimo = document.getElementById('tempodeempréstimodolivro')
    nomedolivro = document.getElementById('Nome do livro')
    descreva = document.getElementById('descrevasuaexperiencia')
    st = document.getElementById('situacao')
    ps = document.getElementById('pass')
    ps2 = document.getElementById('pass2')
    tm = document.getElementById('Termos')

    if (nm.value == "") {
        window.alert('Preencha o campo Nome!')
    }else if (sn.value == "") {
        window.alert('Preencha o campo Sobrenome!') 
    }else if (dn.value == "") {
        window.alert('Preencha o campo Data de nascimento') 
    }else if (nl.value == "") {
        window.alert('Preencha o campo Nome do livro') 
    }else if (na.value == "") {
        window.alert('Preencha o campo Nome do autor') 
    }else if (de.value == "") {
        window.alert('Preencha o campo Data de empréstimo') 
    }else if (dv.value == "") {
        window.alert('Preencha o campo Data de devolução') 
    }else if (tempodeemprestimo.value == "") {
        window.alert('Preencha o campo Tempo de empréstimo do livro') 
    }else if (nomedolivro.value == "") {
        window.alert('Preencha o campo Nome do livro') 
    }else if (descreva.value == "") {
        window.alert('Preencha o campo Descreva como está sendo sua experiência até o momento') 
    }else if (st.value == "") {
        window.alert('Preencha o campo Situação') 
    }else if (ps.value == "") {
        window.alert('Preencha o campo Escolha uma senha') 
    }else if (ps2.value == "") {
        window.alert('Preencha o campo Confirme sua senha') 
    }else if (tm.value == "") {
        window.alert('Preencha o campo Você concorda com os termos ?') 
    }else {
        window.alert('Sucesso!')
    }
}