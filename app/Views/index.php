<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Turkeys</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">All Turkeys</h1>
        <table class="table">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Weight</th>
                    <th>Birthdate</th>
                    <th>Properties</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($turkeys as $turkey): ?>
                    <tr>
                        <td><?= $turkey['id'] ?></td>
                        <td><?= $turkey['name'] ?></td>
                        <td><?= $turkey['weight'] ?></td>
                        <td><?= $turkey['birthdate'] ?></td>
                        <td><?= $turkey['properties'] ?></td>
                        <td>
                            <a href="/edit?id=<?= $turkey['id'] ?>" class="btn btn-warning">Edit</a>
                            <button class="btn btn-danger btn-sm btn-delete" data-id="<?= $turkey['id'] ?>">Delete</button>
                        </td>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
        <a href="/create" class="btn btn-primary">Create New Turkey</a>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script>
        $(document).ready(function() {
            $(".btn-delete").on("click", function() {
                var turkeyId = $(this).data("id");
                var confirmAction = confirm("Are you sure you want to delete this turkey?");
                if (confirmAction) {
                    window.location.href = "/delete?id=" + turkeyId;
                }
            });
        });
    </script>
</body>

</html>