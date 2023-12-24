document.addEventListener('DOMContentLoaded', function () {
    // Get the login icon and login container
    var loginIcon = document.getElementById('login-icon');
    var loginContainer = document.getElementById('login-container');

    // Toggle the login form on click
    loginIcon.addEventListener('click', function () {
        loginContainer.style.display = loginContainer.style.display === 'none' ? 'flex' : 'none';
    });

    // Close the login form if the user clicks outside of it
    window.addEventListener('click', function (event) {
        if (event.target === loginContainer) {
            loginContainer.style.display = 'none';
        }
    });
});
