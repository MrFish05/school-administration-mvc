<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Register Teacher</title>
</head>

<body class="bg-secondary-subtle">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand">School</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php?action=showAllClasses">Classes</a>
                <a class="nav-link active" href="index.php?action=showAllTeachers">Teachers</a>
                <a class="nav-link" href="index.php?action=showAllStudents">Students</a>
                <a class="nav-link" href="index.php?action=showAllRooms">Rooms</a>
            </div>
        </div>
    </nav>

    <div class="container-fluid py-5">

        <div class="row">

            <div class="col-md-3 col-lg-2 mb-4">
                <div class="card shadow">
                    <div class="card-header bg-dark text-white text-center">
                        Teacher Menu
                    </div>

                    <div class="list-group list-group-flush">

                        <a href="index.php?action=showAllTeachers"
                            class="list-group-item list-group-item-action">
                            List
                        </a>

                        <a href="#"
                            class="list-group-item list-group-item-action active">
                            Register
                        </a>

                        <a href="index.php?action=showAllTaughts"
                            class="list-group-item list-group-item-action">
                            Taughts
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">

                <div class="card shadow">

                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Register New Teacher</h3>
                    </div>

                    <div class="card-body">

                        <form method="POST" action="#">

                            <div class="mb-3">
                                <label class="form-label">First Name</label>
                                <input type="text" name="first_name" class="form-control" required>
                            </div>

                            <div class="mb-3">
                                <label class="form-label">Last Name</label>
                                <input type="text" name="last_name" class="form-control" required>
                            </div>

                            <div class="d-flex justify-content-end">

                                <button type="submit" class="btn btn-success">
                                    Register Teacher
                                </button>

                            </div>

                        </form>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>