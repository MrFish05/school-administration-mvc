<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

<title>Student List</title>
</head>

<body class="bg-secondary-subtle">

<nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
<div class="container">
    <a class="navbar-brand">School</a>

    <div class="navbar-nav ms-auto">
        <a class="nav-link" href="index.php?action=showAllClasses">Classes</a>
        <a class="nav-link" href="index.php?action=showAllTeachers">Teachers</a>
        <a class="nav-link" href="#">Students</a>
    </div>
</div>
</nav>

<div class="container py-5">

    <div class="row justify-content-center">
        <div class="col-lg-8">

            <div class="card shadow">

                <div class="card-header bg-secondary text-white text-center">
                    <h3 class="mb-0">Student List</h3>
                </div>

                <div class="card-body p-0">

                    <table class="table table-striped table-hover mb-0 text-center">
                        <thead class="table-secondary">
                            <tr>
                                <th>First Name</th>
                                <th>Last Name</th>
                                <th>Birthday</th>
                                <th>Class</th>
                            </tr>
                        </thead>

                        <tbody class="table-group-divider">
                        <?php foreach ($student_list as $student) { ?>
                            <tr>
                                <td><?= $student->getFirst_name(); ?></td>
                                <td><?= $student->getLast_name(); ?></td>
                                <td><?= $student->getBirthday(); ?></td>
                                <td><?= $student->getClass(); ?></td>
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