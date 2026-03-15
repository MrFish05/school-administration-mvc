<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Class List</title>
</head>
<body>
    <table>
        <tr>
            <td>Class list</td>
        </tr>
        <tr>
            <td>Name</td><td>Room</td><td>Teacher</td>
        </tr>
        <?php foreach ($class_list as $class) { ?>
            <tr>
                <td><?= $class->getName(); ?></td>
                <td><?= $class->getRoom(); ?></td>
                <td><?= $class->getTeacher(); ?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>