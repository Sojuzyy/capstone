
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
    <form action="admin-submitcreatedstudentaccount.php" method="get">

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="user-firstname" class="form-label">First Name</label>
                    <input type="text" name="firstname" id="user-firstname" class="form-control" placeholder="Enter First Name" autocomplete="off" required>
                    <span id="firstname-error" class="error-message"></span>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="user-lastname" class="form-label">Last Name</label>
                    <input type="text" name="lastname" id="user-lastname" class="form-control" placeholder="Enter Last Name" autocomplete="off" required>
                    <span id="lastname-error" class="error-message"></span>
                </div>
            </div>
            <div class="col">
                <div class="mb-3">
                    <label for="user-middlename" class="form-label">Middle Name</label>
                    <input type="text" name="middlename" id="user-middlename" class="form-control" placeholder="Enter Middle Name" autocomplete="off" required>
                    <span id="middlename-error" class="error-message"></span>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="user-contactnum" class="form-label">Contact Number</label>
                    <input type="text" name="user-contactnum" id="user-contactnum" class="form-control" placeholder="Enter Contact Number" autocomplete="off" required maxlength="11" pattern="09[0-9]{9}">
                    <span id="contactnum-error" class="error-message"></span>
                </div>
            </div>

            <div class="col">
                <div class="mb-3">
                    <label for="user-branch" class="form-label">Branch</label>
                    <select name="branch" id="user-branch" class="form-select" required>
                        <option value="" selected disabled>Select Branch</option>
                        <!-- Options will be dynamically added here using JavaScript -->
                    </select>
                    <span id="branch-error" class="error-message"></span>
                </div>
            </div>


            <div class="col">
                <div class="mb-3">
                    <label for="user-strand" class="form-label">Strand</label>
                    <select name="strand" id="user-strand" class="form-select" required>
                        <option value="" selected disabled>Select Strand</option>
                        <!-- Options will be dynamically added here using JavaScript -->
                    </select>
                    <span id="strand-error" class="error-message"></span>
                </div>
            </div>
        </div>


        <div class="row">
            <div class="col">
                <div class="mb-3">
                    <label for="user-gender" class="form-label">Gender</label>
                    <select name="user-gender" id="user-gender" class="form-select" required>
                        <option value="" disabled selected>Select Gender</option>
                        <option value="male">Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span id="gender-error" class="error-message"></span>
                </div>
            </div>


            <div class="col">
                <div class="mb-3">
                    <label for="user-year" class="form-label">Year</label>
                    <select name="year" id="user-year" class="form-select" required>
                        <option value="" selected disabled>Select Year</option>
                        <!-- Add more options as needed -->
                    </select>
                    <span id="year-error" class="error-message"></span>
                </div>
            </div>


            <div class="col">
                <div class="mb-3">
                    <label for="user-section" class="form-label">Section</label>
                    <select name="section" id="user-section" class="form-select" required>
                        <option value="" selected disabled>Select Section</option>
                        <!-- Add more options as needed -->
                    </select>
                    <span id="section-error" class="error-message"></span>
                </div>
            </div>

        </div>
      

        
        <button type="submit">Create Account</button>
    </form>

    <script>
         function validateNameInput(inputElement, errorElement) {
                var inputValue = inputElement.value;

                // Clear previous error message
                errorElement.textContent = '';

                // Check if the input contains any non-alphabetic characters or special characters
                if (!/^[A-Za-z\s]+$/.test(inputValue)) {
                    errorElement.textContent = 'Name must contain only alphabetic characters and spaces.';
                    inputElement.value = inputValue.replace(/[^A-Za-z\s]/g, ''); // Remove non-alphabetic characters
                }
            }

            document.getElementById('user-firstname').addEventListener('input', function() {
                validateNameInput(this, document.getElementById('firstname-error'));
            });

            document.getElementById('user-lastname').addEventListener('input', function() {
                validateNameInput(this, document.getElementById('lastname-error'));
            });

            document.getElementById('user-middlename').addEventListener('input', function() {
                validateNameInput(this, document.getElementById('middlename-error'));
            });

        document.getElementById('user-contactnum').addEventListener('input', function() {
            var contactnum = this.value;

            // Clear previous error message
            document.getElementById('contactnum-error').textContent = '';

            // Check if the input contains any non-numeric characters
            if (!/^\d*$/.test(contactnum)) {
                document.getElementById('contactnum-error').textContent = 'Contact number must contain only numeric characters.';
                this.value = this.value.replace(/[^\d]/g, ''); // Remove non-numeric characters
            }

            // Check if the input starts with "09"
            if (!/^09/.test(contactnum)) {
                document.getElementById('contactnum-error').textContent = 'Contact number must start with "09".';
            }
        });

        $(document).ready(function () {
            // Fetch years from the server
            $.ajax({
                url: 'student_section.php',
                type: 'GET',
                dataType: 'json',
                success: function (data) {
                    // Populate the dropdown with fetched years
                    var yearDropdown = $('#user-year');
                    var strandDropdown = $('#user-strand');
                    var branchDropdown = $('#user-branch');
                    var sectionDropdown = $('#user-section');

                    // Check if the data contains Section_Year
                    if (data.hasOwnProperty('Section_Year')) {
                        $.each(data.Section_Year, function (index, value) {
                            yearDropdown.append($('<option>').text(value).attr('value', value));
                        });
                    }

                    // Check if the data contains Section_Strand
                    if (data.hasOwnProperty('Section_Strand')) {
                        $.each(data.Section_Strand, function (index, value) {
                            strandDropdown.append($('<option>').text(value).attr('value', value));
                        });
                    }
                    
                    // Check if the data contains Section_Branch_Location
                    if (data.hasOwnProperty('Section_Branch_Location')) {
                        $.each(data.Section_Branch_Location, function (index, value) {
                            branchDropdown.append($('<option>').text(value).attr('value', value));
                        });
                    }
                    // Check if the data contains Section
                    if (data.hasOwnProperty('Section')) {
                        $.each(data.Section, function (index, value) {
                            sectionDropdown.append($('<option>').text(value).attr('value', value));
                        });
                    }
                },
                error: function () {
                    // Handle error if any
                    console.log('Error fetching years from the server.');
                }
            });
        });

        document.getElementById('your-form-id').addEventListener('submit', function(event) {
    event.preventDefault(); // Prevent default form submission

    // Your existing validation code here

    // Your existing AJAX request here
    $.ajax({
        url: 'admin-submitcreatedstudentaccount.php',
        type: 'GET',
        data: $('form').serialize(), // Serialize form data
        dataType: 'json',
        success: function (data) {
            // Handle success
            console.log(data);
        },
        error: function (error) {
            // Handle error
            console.log('Error:', error);
        }
    });
});


</script>

</body>
</html>
