function validaInscricao(){
	with(document.formInscricao){
		if(nome.value==""){
			alert( "Preencha o campo Nome!" );
			nome.focus();
			return false;
		}
		if(cpf.value==""){
			alert( "Preencha o campo CPF!" );
			cpf.focus();
			return false;
		}
		if(email.value==""){
			alert( "Preencha o campo E-mail!" );
			email.focus();
			return false;
		}
		if(senha.value==""){
			alert( "Preencha o campo Senha!" );
			senha.focus();
			return false;
		}
	}
}