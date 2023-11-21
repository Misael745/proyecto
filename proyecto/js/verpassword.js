document.addEventListener('DOMContentLoaded', function () {
    
    var passwordInput = document.getElementById('password');
    var showPasswordCheckbox = document.getElementById('showPassword');

    
    showPasswordCheckbox.addEventListener('change', function () {
        if (showPasswordCheckbox.checked) {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    });

    
});
