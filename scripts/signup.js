const button = document.getElementById('submit');

button.addEventListener('click', (e) => {
    const email = document.getElementById('email');
    const password = document.getElementById('password');
    const tipo = document.getElementById('usertype');
    e.preventDefault();
    SignUp(email, password, tipo);;
})

function SignUp(email, password, tipo) {
    const data = {
        email: email.value,
        password: password.value,
        tipo: tipo.value
    }
    console.log(data);
    // Validar el correo electrónico
    if (!data.email || !data.email.trim()) {
        alert('Por favor ingrese su correo electrónico.');
        return;
    } else if (!/\S+@\S+\.\S+/.test(data.email)) {
        alert('Por favor ingrese un correo electrónico válido.');
        return;
    }

    // Validar la contraseña
    if (!data.password || !data.password.trim()) {
        alert('Por favor ingrese su contraseña.');
        return;
    }

    // Si el correo electrónico y la contraseña son válidos, enviar la solicitud al servidor

    fetch('http://localhost:3000/api/password/', {
        method: 'POST',
        headers: {
            'Content-Type': 'application/json'
        },
        body: JSON.stringify(data)
    })
        .then(response => {
            if (response.status === 200) {
                window.location.href = 'http://localhost/Final/src/app/components/home/home.component.html';
            } else {
                alert('Alta de usuario fallida, revise sus datos.');
                console.log(response.status)
            }
            return response.json();
        })
        .then(data => console.log(data))
        .catch(error => console.error(error));
}