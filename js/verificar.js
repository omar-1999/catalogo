function verificaUsuario(){
	let login = document.getElementById("login").value
	let pass = document.getElementById("pass").value
	
	const expL = /^[A-Z|a-z]{4}/
	const expP = /[A-Z|a-z]{4}\d{2}[*|/|+|.|,|;|:|=|(|)|°|&|%|$|#|"|!|¿|?|¡|\|_|-|{|}|']{1}/

	if (expL.test(login)) {
		if (expP.test(pass)) {
			// alert('Bienvenido usuario :>')
			return true
		}else{
			alert('la contraseña no cumple con las condiciones')
			return false
		}
	}else{
		alert('el login no cumple con las condiciones')
		return false
	}
}