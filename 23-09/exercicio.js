function validar_idade() {
    var ida = document.getElementById('idade')

    if (ida.value >= 18 ) {
        window.alert("Cadastro realizado com Sucesso!")
    }else {
        window.alert("Você não pode se cadastrar nesse site")
    }
   
}