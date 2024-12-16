<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Employee Management System</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.1/css/all.min.css" integrity="sha512-5Hs3dF2AEPkpNAR7UiOHba+lRSJNeM2ECkwxUIxC1Q/FLycGTbNapWXB4tP889k5T5Ju8fs4b1P5z/iB4nMfSQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body>
    <nav class="navbar navbar-dark bg-dark justify-content-center mb-4">
        <span class="navbar-brand fs-3 text-white">Employee Management System</span>
    </nav>

    <div class="container">
        <div class="d-flex justify-content-between align-items-center mb-4">
            <div>
                <h2 class="h4">All Employees</h2>
                <p class="text-muted">Manage all your existing employees</p>
            </div>
            <button class="btn btn-primary" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasAddUser">
                <i class="fa-solid fa-user-plus"></i> Add New Employee
            </button>
        </div>

        <div class="table-responsive">
            <table class="table table-bordered table-striped text-center">
                <thead class="table-dark">
                    <tr>
                        <th>First Name</th>
                        <th>Last Name</th>
                        <th>Department</th>
                        <th>Position</th>
                        <th>Email</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody id="data-table">
                   
                </tbody>
            </table>
        </div>

      
        <div class="offcanvas offcanvas-end" tabindex="-1" id="offcanvasAddUser" style="width: 400px;">
            <div class="offcanvas-header">
                <h5 class="offcanvas-title">Add New Employee</h5>
                <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
            </div>
            <div class="offcanvas-body">
                <form id="employeeForm">
                    <div class="mb-3">
                        <label for="firstName" class="form-label">First Name</label>
                        <input type="text" class="form-control" id="firstName" name="firstName" placeholder="First Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="lastName" class="form-label">Last Name</label>
                        <input type="text" class="form-control" id="lastName" name="lastName" placeholder="Last Name" required>
                    </div>
                    <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="department" id="department">
                                <option value="">-- Select Department --</option>
                                <option value="HR">HR</option>
                                <option value="Finance">Finance</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="position" id="position">
                                <option value="">-- Select Position --</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Email" required>
                    </div>
                    <button class="btn btn-success w-100" type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>

    
    <div class="modal fade" id="editModal" tabindex="-1" aria-labelledby="editModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="editModalLabel">Edit Employee</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form id="editForm">
                        <input type="hidden" id="editId">
                        <div class="mb-3">
                            <label for="editFirstName" class="form-label">First Name</label>
                            <input type="text" class="form-control" id="editFirstName" placeholder="First Name" required>
                        </div>
                        <div class="mb-3">
                            <label for="editLastName" class="form-label">Last Name</label>
                            <input type="text" class="form-control" id="editLastName" placeholder="Last Name" required>
                        </div>

                        <div class="mb-3">
                        <label for="department" class="form-label">Department:</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="department" id="editDepartment">
                                <option value="">-- Select Department --</option>
                                <option value="HR">HR</option>
                                <option value="Finance">Finance</option>
                            </select>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label for="position" class="form-label">Position</label>
                        <div class="col-sm-6">
                            <select class="form-control" name="position" id="editPosition">
                                <option value="">-- Select Position --</option>
                            </select>
                        </div>
                    </div>

                        <div class="mb-3">
                            <label for="editEmail" class="form-label">Email</label>
                            <input type="email" class="form-control" id="editEmail" placeholder="Email" required>
                        </div>
                        <button class="btn btn-primary w-100" type="button" onclick="updateData()">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

   
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script>
  $(document).ready(function () {
    loadEmployees();

    
    $('#employeeForm').on('submit', function (e) {
        e.preventDefault();
        const formData = {
            firstName: $('#firstName').val(),
            lastName: $('#lastName').val(),
            department: $('#department').val(),
            position: $('#position').val(),
            email: $('#email').val()
        };

        $.ajax({
            url: 'insert.php',
            type: 'POST',
            data: formData,
            success: function (response) {
                alert('Employee added successfully.');
                $('#offcanvasAddUser').offcanvas('hide');
                loadEmployees();
            },
            error: function () {
                alert('Error adding employee.');
            }
        });
    });

    
    $('#editForm').on('submit', function (e) {
        e.preventDefault();
        updateData();
    });
});

function loadEmployees() {
    $.ajax({
        url: 'retrieve.php',
        type: 'GET',
        dataType: 'json',
        success: function (data) {
            const tableBody = $('#data-table');
            tableBody.empty();
            if (data.length > 0) {
                data.forEach(emp => {
                    tableBody.append(`
                        <tr>
                            <td>${emp.firstName}</td>
                            <td>${emp.lastName}</td>
                            <td>${emp.department}</td>
                            <td>${emp.position}</td>
                            <td>${emp.email}</td>
                            <td>
                                <button class="btn btn-warning btn-sm" onclick="showEditModal(${emp.id})">Edit</button>
                                <button class="btn btn-danger btn-sm" onclick="deleteEmployee(${emp.id})">Delete</button>
                            </td>
                        </tr>
                    `);
                });
            } else {
                tableBody.append('<tr><td colspan="6">No employees found.</td></tr>');
            }
        },
        error: function () {
            alert('Error loading employees.');
        }
    });
}

function showEditModal(id) {
    
    $.ajax({
        url: 'retrieve.php', 
        type: 'GET',
        data: { id: id }, 
        dataType: 'json',
        success: function (data) {
            if (data) {
                
                $('#editId').val(data.id);
                $('#editFirstName').val(data.firstName);
                $('#editLastName').val(data.lastName);
                $('#editDepartment').val(data.department);
                $('#editPosition').val(data.position);
                $('#editEmail').val(data.email);

                // Show the Edit Modal
                $('#editModal').modal('show');
            } else {
                alert('Employee not found.');
            }
        },
        error: function () {
            alert('Error fetching employee data.');
        }
    });
}

function updateData() {
   
    const updatedData = {
        id: $('#editId').val(),
        firstName: $('#editFirstName').val(),
        lastName: $('#editLastName').val(),
        department: $('#editDepartment').val(),
        position: $('#editPosition').val(),
        email: $('#editEmail').val()
    };

    
    $.ajax({
        url: 'update.php', 
        type: 'POST',
        data: updatedData,
        success: function () {
           
            alert('Employee updated successfully.');
            $('#editModal').modal('hide'); 
            loadEmployees();
        },
        error: function () {
            alert('Error updating employee.');
        }
    });
}

function deleteEmployee(id) {
    if (confirm('Are you sure you want to delete this employee?')) {
        $.ajax({
            url: 'delete.php',
            type: 'POST',
            data: { id },
            success: function () {
                alert('Employee deleted successfully.');
                loadEmployees();
            },
            error: function () {
                alert('Error deleting employee.');
            }
        });
    }
}

    </script>

    <script src="script.js"></script>
</body>
</html>
