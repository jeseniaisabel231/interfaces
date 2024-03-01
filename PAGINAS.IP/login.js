function validateCredentials(username, password) {
    // Define the list of users with their credentials
    const users = [
        { username: 'admin@correo.com', password: 'admin123'},
        { username: 'usuario@correo.com', password: 'usuario123'}
    ];

    // Iterate through the list of users
    for (const user of users) {
        if (user.username === username && user.password === password) {
            return true;
        }
    }

    // If no user is found, return null
    return false;
}

document.querySelector('form').addEventListener('submit', function (event) {
    event.preventDefault();

    const username = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    const validUser = validateCredentials(username, password);

    if (validUser) {
        alert('Inicio de sesión exitoso');
    } else {
        alert('Usuario o contraseña incorrectos');
    }
});