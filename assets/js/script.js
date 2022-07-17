const formularioRegistro = document.querySelector("#formularioRegistro");

// Evento submit del formulario
formularioRegistro.addEventListener("submit", (e) => {
	// Obtenemos los datos del formulario
	const patente = formularioRegistro.patente.value;
	const marca = formularioRegistro.marca.value;
	const modelo = formularioRegistro.modelo.value;
	const color = formularioRegistro.color.value;

	// verificamos que los campos no esten vacios
	if (
		patente.trim() === "" ||
		marca.trim() === "" ||
		modelo.trim() === "" ||
		color.trim() === ""
	) {
		// mostramos un mensaje de error
		mostrarError("Todos los campos son obligatorios");
	} else {
		// creamos un objeto con los datos del formulario
		const vehiculo = {
			patente,
			marca,
			modelo,
			color,
		};
        mostrarError("Vehiculo registrado con exito");

		// enviamos el objeto al servidor con default
	}
});


const mostrarError = (error) => {
	Swal.fire({
		type: "error",
		title: "Error",
		text: error,
	});
};

const mostrarExito = (mensaje) => {
	Swal.fire({
		type: "success",
		title: "Exito",
		text: mensaje,
	});
};
