function verificaRegistro() {
	let nombre = document.getElementById("nombre").value
	let user = document.getElementById("user").value
	let correo = document.getElementById("correo").value
	let clave = document.getElementById("clave").value
	let repeatPass = document.getElementById("repeatPass").value

	const exNombre = /^([a-zA-Z]{3})+(\s)*([a-zA-Z])*(\s)*([a-zA-Z])*(\s)*([a-zA-Z])*$/
	const exUser = /^[A-Z|a-z]{4}/
	const exClave = /[A-Z|a-z]{4}\d{2}[*|/|+|.|,|;|:|=|(|)|°|&|%|$|#|"|!|¿|?|¡|\|_|-|{|}|']{1}/
	const exCorreo = /\w+([-+.']\w+)*@\w+([-.]\w+)*.\w+([-.]\w+)/

	if (!nombre || !correo || !user || !clave || !repeatPass) {
		alert(`Por favor llene todos los campos`)
		return false
	}

	if (!exNombre.test(nombre)) {
		alert('Nombre no valido')
		return false
	}

	if (!exUser.test(user)) {
		alert('Usuario no valido')
		return false
	}

	if (!exClave.test(clave)) {
		alert('Password no valido')
		return false
	}

	if (!exCorreo.test(correo)) {
		alert('Correo no valido')
		return false
	}

	if (clave !== repeatPass) {
	 	document.getElementById("p").innerHTML = 'Las contraseña no coinciden'
		document.getElementById("p").style.color = 'red'
	 	return false
	}else{
	 	document.getElementById("p").innerHTML = ''
	}

	
}