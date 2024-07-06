document.addEventListener("DOMContentLoaded", function () {
    // Función de validación
    function validateForm(form) {
        form.addEventListener("submit", function (event) {
            let valid = true;

            // Validar el campo de nombre
            const name = form.querySelector("#name");
            const namePattern = /^[a-zA-Z\s]+$/;
            if (!namePattern.test(name.value.trim())) {
                valid = false;
                alert("El campo Nombre debe contener solo letras y espacios.");
            }

            // Validar el campo de apellidos
            const apellidos = form.querySelector("#apellidos");
            if (!namePattern.test(apellidos.value.trim())) {
                valid = false;
                alert("El campo Apellidos debe contener solo letras y espacios.");
            }

            // Validar el campo de correo electrónico
            const email = form.querySelector("#email");
            const emailPattern = /^[a-zA-Z0-9._-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,6}$/;
            if (!emailPattern.test(email.value.trim())) {
                valid = false;
                alert("El campo Correo Electrónico debe ser una dirección de correo válida.");
            }

            // Validar el campo de contraseña solo si está presente
            const password = form.querySelector("#password");
            if (password && password.value.trim() !== "" && password.value.length < 6) {
                valid = false;
                alert("El campo Contraseña debe tener al menos 6 caracteres.");
            }

            // Evitar el envío del formulario si alguna validación falla
            if (!valid) {
                event.preventDefault();
            }
        });
    }

    // Seleccionar y validar el formulario de creación de usuario
    const createForm = document.getElementById("userForm");
    if (createForm) {
        validateForm(createForm);
    }

    // Seleccionar y validar el formulario de edición de usuario
    const editForm = document.getElementById("editUserForm");
    if (editForm) {
        validateForm(editForm);
    }
});
