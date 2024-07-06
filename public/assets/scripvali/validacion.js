document.addEventListener('DOMContentLoaded', function() {
    const ids = ['carbohidratos', 'proteinas', 'grasas', 'calorias', 'contenido'];
    ids.forEach(function(id) {
        const input = document.getElementById(id);
        if (input) {
            input.addEventListener('input', function() {
                if (/[^0-9.]+/.test(input.value)) {
                    alert("Solo se permiten números.");
                    input.value = input.value.replace(/[^0-9.]+/g, '');
                }
                if ((input.value.match(/\./g) || []).length > 1) {
                    alert("Solo se permite un punto decimal.");
                    input.value = input.value.replace(/\.+$/, '');
                }
            });
        }
    });
});


document.addEventListener('DOMContentLoaded', function() { 
    const inputNombre = document.getElementById('nombre');
    if (inputNombre) {
        inputNombre.addEventListener('input', function() {
            inputNombre.value = inputNombre.value.replace(/[^a-zA-Z\s]/g, '')
        });
    }
});

document.addEventListener('DOMContentLoaded', function() {
    const limits = {
        'nombre': 30,
        'carbohidratos': 8,
        'proteinas': 8,
        'grasas': 8,
        'calorias': 8,
        'contenido': 8
    };

    const limitInputLengthWithAlert = (input, maxLength) => {
        if (input.value.length > maxLength) {
            alert(`Solo se permiten ${maxLength} caracteres en el campo.`);
            input.value = input.value.slice(0, maxLength);
        }
    };

    Object.keys(limits).forEach(function(id) {
        const inputElement = document.getElementById(id);
        if (inputElement) {
            inputElement.addEventListener('input', function() {
                limitInputLengthWithAlert(inputElement, limits[id]);
            });
        }
    });
});

