<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Class List</title>
</head>

<body class="bg-secondary-subtle">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand">School</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="#">Classes</a>
                <a class="nav-link" href="index.php?action=showAllTeachers">Teachers</a>
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
                        Classes Menu
                    </div>

                    <div class="list-group list-group-flush">

                        <a href="#"
                            class="list-group-item list-group-item-action active">
                            List
                        </a>

                        <a href="index.php?action=registerNewClass"
                            class="list-group-item list-group-item-action">
                            Register
                        </a>

                    </div>

                </div>
            </div>

            <div class="col-md-9 col-lg-10">

                <div class="card shadow">

                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Class List</h3>
                    </div>

                    <div class="card-body p-0">

                        <table class="table table-striped table-hover mb-0 text-center">

                            <thead class="table-secondary">
                                <tr>
                                    <th>Name</th>
                                    <th>Room</th>
                                    <th>Teacher</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">

                                <?php foreach ($class_list as $class) { ?>
                                    <tr>
                                        <td><?= $class->getName(); ?></td>
                                        <td><?= $class->getRoom(); ?></td>
                                        <td><?= $class->getTeacher(); ?></td>

                                        <td>
                                            <a href="index.php?action=showStudentsInClass&class_id=<?= $class->getId(); ?>"
                                                class="btn btn-primary btn-sm">
                                                Student List
                                            </a>
                                            <a href="index.php?action=showTeachersInClass&class_id=<?= $class->getId(); ?>"
                                                class="btn btn-primary btn-sm">
                                                Teacher List
                                            </a>
                                        </td>
                                    </tr>
                                <?php } ?>

                            </tbody>

                        </table>

                    </div>

                </div>

            </div>

        </div>

    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>

</body>

</html>