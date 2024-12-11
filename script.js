document.getElementById('loginForm').addEventListener('submit', function(event) {
    const email = document.getElementById('username').value;
    const password = document.getElementById('password').value;

    if (email === "" || password === "") {
        alert("Please fill in both email and password!");
        event.preventDefault();
    }
});

document.getElementById('registerForm')?.addEventListener('submit', function(event) {
    const email = document.getElementById('email').value;
    const password = document.getElementById('password').value;
    const confirmPassword = document.getElementById('confirmPassword').value;

    if (email === "" || password === "" || confirmPassword === "") {
        alert("Please fill in all fields!");
        event.preventDefault();
    }

    if (password !== confirmPassword) {
        alert("Passwords do not match!");
        event.preventDefault();
    }
});
