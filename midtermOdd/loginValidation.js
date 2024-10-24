function validateForm() {
    const username = document.getElementById("username").value;
    const password = document.getElementById("password").value;
    let valid = true;

    // Reset error messages
    document.getElementById("usernameError").textContent = "";
    document.getElementById("passwordError").textContent = "";

    if (!username) {
        document.getElementById("usernameError").textContent = "Must be filled.";
        valid = false;
    }

    if (!password) {
        document.getElementById("passwordError").textContent = "Must be filled.";
        valid = false;
    } else if (password.length > 6) {
        document.getElementById("passwordError").textContent = "Password is more than 6 characters.";
        valid = false;
    } else if (!/[a-z]/.test(password) || !/[A-Z]/.test(password)) {
        document.getElementById("passwordError").textContent = "Password must be uppercase and lowercase.";
        valid = false;
    }

    if (valid) {
        sessionStorage.setItem("username", username);
        return true;  // Allow form to submit
    }
    return false;  // Prevent form submission
}
