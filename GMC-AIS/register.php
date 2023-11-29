<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Your Form</title>
    <style>
        .invalid-input {
            border: 1px solid red;
        }
        .valid-input {
            border: 1px solid green;
        }
        .error-message {
            color: red;
            font-size: 12px;
            margin-top: 5px;
        }
        .valid-message {
            color: green;
            font-size: 12px;
            margin-top: 5px;
        }
    </style>
</head>
<body>
    <form action="" method="get">
        <div class="mb-3">
            <input type="text" name="firstname" id="user-firstname" class="form-control" placeholder="Enter First Name" required>
            <span id="firstname-error" class="error-message"></span>
        </div>
        <div class="mb-3">
            <input type="text" name="lastname" id="user-lastname" class="form-control" placeholder="Enter Last Name" required>
            <span id="lastname-error" class="error-message"></span>
        </div>

        <div class="mb-3">
            <input type="text" name="username" id="user-username" class="form-control" placeholder="Enter Username" required>
        </div>
        <div class="mb-3">
            <input type="email" name="email" id="user-email" class="form-control" placeholder="Enter Email" required pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}">
        </div>

        <div class="mb-3">
            <input type="text" name="cnum" id="user-cnum" class="form-control" placeholder="Contact Number" required>
        </div>

        <!-- <div class="mb-3">
            <input  type="password" oninput="validatePasswords()"  name="password" id="password" class="form-control" placeholder="Enter Password" required>
            <span id="password-error" class="error-message"></span>
            <span id="password-valid" class="valid-message"></span>

        </div>
        <div class="mb-3">
            <input type="password"  oninput="validatePasswords()" name="confirmpassword" id="confirmpassword" class="form-control" placeholder="Confirm Password" required>
            <span id="confirmpw-error" class="error-message"></span>
            <span id="confirmpw-valid" class="valid-message"></span>

        </div> -->

        <button type="button">Submit</button>
    </form>

    <script>

        var firstnameInput = document.getElementById("user-firstname");
        var lastnameInput = document.getElementById("user-lastname");
        var firstnameError = document.getElementById("firstname-error");
        var lastnameError = document.getElementById("lastname-error");

        // Function to check if the input contains special characters or numbers
        function isValidInput(inputValue) {
            return /^[A-Za-z]+$/.test(inputValue);
        }

        // Event listener for the firstname input
        firstnameInput.addEventListener("input", function () {
            var inputValue = firstnameInput.value;
            if (!isValidInput(inputValue)) {
                firstnameInput.classList.add("invalid-input");
                firstnameError.textContent = "Invalid input. Please use only letters.";
            } else {
                firstnameInput.classList.remove("invalid-input");
                firstnameError.textContent = "";
            }
        });

        // Event listener for the lastname input
        lastnameInput.addEventListener("input", function () {
            var inputValue = lastnameInput.value;
            if (!isValidInput(inputValue)) {
                lastnameInput.classList.add("invalid-input");
                lastnameError.textContent = "Invalid input. Please use only letters.";
            } else {
                lastnameInput.classList.remove("invalid-input");
                lastnameError.textContent = "";
            }
        });

        function validatePasswords() {
            var passwordInput = document.getElementById("password");
            var confirmInput = document.getElementById("confirmpassword");
            var passwordError = document.getElementById("password-error");
            var confirmError = document.getElementById("confirmpw-error");
            var confirmValid = document.getElementById("confirmpw-valid");

            // Check if passwords match
            if (confirmInput.value !== passwordInput.value) {
                confirmInput.classList.add("invalid-input");
                confirmInput.classList.remove("valid-input");

                confirmError.textContent = "Passwords do not match.";
                confirmValid.textContent = ""; // Clear the error message
            } else {
                confirmInput.classList.remove("invalid-input");
                confirmError.textContent = ""; // Clear the error message

                confirmInput.classList.add("valid-input");
                confirmValid.textContent = "Passwords match.";

                // Check password length
                if (passwordInput.value.length < 8) {
                    passwordInput.classList.add("invalid-input");
                    passwordError.textContent = "Password must be at least 8 characters long.";
                } else {
                    passwordInput.classList.remove("invalid-input");
                    passwordError.textContent = ""; // Clear the error message
                }
                // You can submit the form or perform additional actions here
                // For example: document.forms[0].submit();
            }
        }

    </script>
</body>
</html>
