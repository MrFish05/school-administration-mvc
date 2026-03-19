<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Student Class List</title>
</head>

<body class="bg-secondary-subtle">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand">School</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link active" href="index.php?action=showAllClasses">Classes</a>
                <a class="nav-link" href="index.php?action=showAllTeachers">Teachers</a>
                <a class="nav-link" href="index.php?action=showAllStudents">Students</a>
            </div>
        </div>
    </nav>

    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-8">

                <div class="card shadow">

                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Teachers Class List</h3>
                    </div>

                    <div class="card-body p-0">

                        <table class="table table-striped table-hover mb-0 text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <?php foreach ($teacher_class_list as $teacher) { ?>
                                    <tr>
                                        <td><?= $teacher->getTeacher_id(); ?></td>
                                        <td><?= $teacher->getLast_name(); ?></td> ?>">Remove</a></td>
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