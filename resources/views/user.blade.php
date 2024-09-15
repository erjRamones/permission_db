<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Users</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="mb-4">Users</h2>
        
        <table class="table table-bordered table-striped">
            <thead class="thead-dark">
                <tr>
                    <th>#</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th class="text-center align-middle">Role</th>
                    <th class="text-center align-middle">Action</th>
                    <!-- <th>Role</th> -->
                </tr>
            </thead>
            <tbody>
                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td> <!-- Row number -->
                    <td>{{ $user->first_name }}</td> <!-- Name -->
                    <td>{{ $user->email }}</td> <!-- Email -->
                    <td></td> <!-- Email -->

                    <td class="text-center align-middle">
                        <a href="" class="btn btn-primary btn-sm">
                            Assign Role
                        </a>
                    </td> <!-- Role -->
                </tr>

                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
