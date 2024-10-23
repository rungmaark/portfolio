document.getElementById('usernameForm').addEventListener('submit', function(event) {
    var username = document.getElementById('username').value;
    var errorMessage = document.getElementById('error-message');

    if (username.trim() === '') {
        event.preventDefault();
        errorMessage.textContent = 'Please fill your username.';
    } else {
        
    }
});
