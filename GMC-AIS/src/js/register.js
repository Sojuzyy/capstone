document.addEventListener("DOMContentLoaded", function () {
    var firstnameInput = document.getElementById("user-firstname");
    var lastnameInput = document.getElementById("user-lastname");

    // Function to check if the input contains special characters or numbers
    function isValidInput(inputValue) {
        return /^[A-Za-z]+$/.test(inputValue);
    }

    // Event listener for the firstname input
    firstnameInput.addEventListener("input", function () {
        var inputValue = firstnameInput.value;
        if (!isValidInput(inputValue)) {
            firstnameInput.classList.add("invalid-input");
        } else {
            firstnameInput.classList.remove("invalid-input");
        }
    });

    // Event listener for the lastname input
    lastnameInput.addEventListener("input", function () {
        var inputValue = lastnameInput.value;
        if (!isValidInput(inputValue)) {
            lastnameInput.classList.add("invalid-input");
        } else {
            lastnameInput.classList.remove("invalid-input");
        }
    });
});