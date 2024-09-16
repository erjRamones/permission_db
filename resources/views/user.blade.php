<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <div class="container">
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
    <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand">
                    <strong>Users</strong>
                    <a id="accountDropdown" role="button" >{{ Auth::user()->first_name }}</a>
                </a>
            </div>
    </nav>
        
        
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
                    <td class="text-center align-middle">{{ $user->roles->pluck('name')->implode(', ') }}</td> <!-- Email -->

                    <td class="text-center align-middle">
                        <a href="{{ route('assignUser.edit',$user->id) }}" class="btn btn-primary btn-sm">
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
