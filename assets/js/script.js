document.addEventListener(
	"DOMContentLoaded",
	function () {
		const validacion = document.getElementById("validacion");
		// alert validacion content
		if (validacion.innerText == "") {
			//pass
		} else {

			Swal.fire({
				title: "Error",
				text: validacion.innerText,
				icon: "error",
			});
		}
	},
	false
);
