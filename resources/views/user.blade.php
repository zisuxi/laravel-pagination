<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>User List</title>
    <!-- Link to Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container mt-4">
        <h1>User List</h1>

        <!-- Display the users -->
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($user as $us)
                    <tr>
                        <td>{{ $us->id }}</td>
                        <td>{{ $us->name }}</td>
                        <td>{{ $us->email }}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>

        <!-- Render pagination links -->
        <div class="d-flex justify-content-between align-items-center mt-3" style="padding: 20px;
    background-color: #cfcfcf">
            <!-- Result Count Text -->
            <div>
                Showing {{ $user->firstItem() }} to {{ $user->lastItem() }} of {{ $user->total() }} results
            </div>

            <!-- Pagination with Bootstrap 5 styling -->
            <div>
                {{ $user->links('pagination::bootstrap-4') }} <!-- Ensure you're using Bootstrap 5 pagination links -->
            </div>
        </div>

    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-Rr/0upPFE40DddFtbJQu0of7FTnVGxT4CkrbB4RVbjDy5shAAxf6uYib+2IjKxj8" crossorigin="anonymous"></script>
</body>

</html>
