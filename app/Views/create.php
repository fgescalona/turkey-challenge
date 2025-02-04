<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Turkey</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>
    <div class="container">
        <h1 class="mt-5">Create a New Turkey</h1>
        <form action="/create" method="POST">
            <div class="mb-3">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="weight" class="form-label">Weight</label>
                <input type="number" step="0.01" name="weight" id="weight" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="birthdate" class="form-label">Birthdate</label>
                <input type="date" name="birthdate" id="birthdate" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="properties" class="form-label">Properties</label>
                <textarea name="properties" id="properties" class="form-control"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Create</button>
        </form>
    </div>
</body>

</html>