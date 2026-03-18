<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">

    <title>Teacher List</title>
</head>

<body class="bg-secondary-subtle">

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark shadow-sm">
        <div class="container">
            <a class="navbar-brand">School</a>

            <div class="navbar-nav ms-auto">
                <a class="nav-link" href="index.php?action=showAllClasses">Classes</a>
                <a class="nav-link active" href="#">Teachers</a>
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

                        <a href="index.php?action=registerNewTeacher"
                            class="list-group-item list-group-item-action">
                            Register
                        </a>

                        <a href="index.php?action=showAllTeaches"
                            class="list-group-item list-group-item-action active">
                            Teaches
                        </a>

                    </div>
                </div>
            </div>

            <div class="col-md-9 col-lg-10">

                <div class="card shadow">

                    <div class="card-header bg-secondary text-white text-center">
                        <h3 class="mb-0">Teaches List</h3>
                    </div>

                    <div class="card-body p-0">

                        <table class="table table-striped table-hover mb-0 text-center">
                            <thead class="table-secondary">
                                <tr>
                                    <th>Teacher</th>
                                    <th>Class</th>
                                    <th>Action</th>
                                </tr>
                            </thead>

                            <tbody class="table-group-divider">
                                <?php foreach ($teaches_list as $teaches) { ?>
                                    <tr>
                                        <form method="post" action="index.php?action=showAllTeaches&teaches_id=<?= $teaches->getId(); ?>">
                                            <td><?= $teaches->getTeacher(); ?></td>
                                            <td>
                                                <select name="class_id" class="form-select" required>

                                                    <?php foreach ($class_list as $class) { ?>
                                                        <option value="<?= $class->getId(); ?>" <?php if ($teaches->getClass_id() == $class->getId()) {
                                                                                                    echo "selected";
                                                                                                } ?>>
                                                            <?= $class->getName(); ?>
                                                        </option>
                                                    <?php } ?>

                                                </select>
                                            </td>
                                            <td>
                                                <input type="submit" value="Save" class="btn btn-primary" />
                                            </td>
                                        </form>
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