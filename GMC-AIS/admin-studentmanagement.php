<?php
    require('admin-dheader.php')
?>
<!doctype html>
<html>
    <head>
        <title>DataTables AJAX Pagination with search and sort - PHP</title>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
        <script src="https://kit.fontawesome.com/0671d081f4.js" crossorigin="anonymous"></script>
        <!-- Bootstrap CSS -->
        <link href='https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css' rel='stylesheet' type='text/css'>

        <!-- Datatable CSS -->
        <link href='src/DataTables/datatables.min.css' rel='stylesheet' type='text/css'>

        <!-- jQuery Library -->
        <script src="src/js/jquery-3.3.1.min.js"></script>

        <!-- Bootstrap JS -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>

        <!-- Datatable JS -->
        <script src="src/DataTables/datatables.min.js"></script>

        <style>

            .table-holder{
                width: 98%;
                height: 100%;
                margin: 20px;
            }
        </style>
    </head>
    <body >

        <div class="table-holder">
          <!-- Button to trigger the modal -->
            <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#createUserModal">
                Create Student Account
            </button>
            <table id='studentTable' class='display dataTable'>
                <thead>
                <tr>
                    <th>#</th>
                    <th>Student ID</th>
                    <th>First Name</th>
                    <th>Last Name</th>
                    <th>Middle Name</th>
                    <th>Contact Number</th>
                    <th>Section</th>
                    <th>Action</th>
                </tr>
                </thead>
                
            </table>
        </div>

        <!-- Modal for creating a user -->
        <div class="modal fade" id="createUserModal" tabindex="-1" aria-labelledby="createUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="createUserModalLabel">Create Student Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php require('admin-createstudentaccount.php') ?>
                    </div>
                </div>
            </div>
        </div>

        
        <!-- Modal for Editing a user -->
        <div class="modal fade" id="editUserModal" tabindex="-1" aria-labelledby="editUserModalLabel" aria-hidden="true">
            <div class="modal-dialog modal-lg">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="editUserModalLabel">Edit Student Account</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <?php require('admin-editstudentaccount.php') ?>
                    </div>
                </div>
            </div>
        </div>



        <!-- Script -->
        <script>
        $(document).ready(function () {
            var t = $('#studentTable').DataTable({
                'processing': true,
                'serverSide': true,
                'serverMethod': 'post',
                'ajax': {
                    'url': 'ajaxfile.php'
                },
                'order': [[1, 'asc']],
                'columns': [
                    { 
                        data: null,
                        render: function (data, type, row, meta) {
                            return meta.row + 1; // Row number column
                        }
                    },
                    { data: 'Student_ID' },
                    { data: 'Student_Fname' },
                    { data: 'Student_Lname' },
                    { data: 'Student_Mname' },
                    { data: 'Student_Cnumber' },
                    {
                        data: null,
                        render: function (data, type, row) {
                            return row.Student_Strand + '-' + row.Student_Year + row.Student_Section;
                        }
                    },
                    {
                        data: 'Student_ID',
                        render: function (data, type, row) {
                            return '<button onclick="editRow(' + data.Student_ID + ')">Edit</button>' +
                                '<button onclick="deleteRow(' + data.Student_ID + ')">Delete</button>';
                        }
                    }
                ]
            });

        });


        function editRow(Student_ID) {
            // Assuming you have an edit endpoint on your server (editUser.php)
            $.ajax({
                type: 'POST',
                data: { Student_ID: Student_ID },
                success: function (response) {
                    $('#editUserModal .modal-body');
                    $('#editUserModal').modal('show');
                },
                error: function (error) {
                    // Handle error
                    alert('Edit error: ' + JSON.stringify(error));
                }
            });
        }

        function deleteRow(Student_ID) {
            // Assuming you have a delete endpoint on your server (deleteUser.php)
            $.ajax({
                url: 'StudentAccount/Delete-user.php',
                type: 'POST',
                data: { Student_ID: Student_ID },
                success: function (response) {
                    // Handle the response from the server after deletion
                    alert('Delete success: ' + response);
                    // Reload the DataTable after deleting
                    $('#studentTable').DataTable().ajax.reload();
                },
                error: function (error) {
                    // Handle error
                    alert('Delete error: ' + JSON.stringify(error));
                }
            });
        }

        </script>

    </body>

</html>
