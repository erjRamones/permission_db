<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Roles</title>
    <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
</head>
<body class="bg-light">
    <nav class="navbar navbar-expand-md bg-white shadow-lg">
        <div class="container">
            <a class="navbar-brand" href="#"><strong>Add Roles</strong></a>
        </div>
    </nav>

    <form action="{{route('assignUser.update', $users->id)}}" method="POST">
        @csrf
        <div class="container">
            <div class="card border-0 shadow my-5">
                <div class="card-header bg-light">
                    <h3 class="h5 pt-2">Users</h3>
                </div>
                <div class="card-body">
                    <div class="mb-3">
                        <label for="name" class="form-label">First Name</label>
                        <input type="text" id="name" class="form-control" name="first_name" value="{{ old('first_name', $users->first_name)}}">
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" id="email" class="form-control" name="email" value="{{ old('email', $users->email)}}">
                    </div>
                    <div class="mb-4">
                        <h5 class="form-label">Assign Roles</h5>
                        @foreach ($roles as $role)
                            <div class="form-check mb-2">
                                <input  {{($hasRoles->contains($role->id)) ? 'checked' :''}}
                                type="checkbox" 
                                id="role-{{ $role->id }}" 
                                class="form-check-input" 
                                name="role[]" 
                                value="{{ $role->name }}">
                                <label class="form-check-label" for="role-{{ $role->id }}">{{ $role->name }}</label>
                            </div>
                        @endforeach
                    </div>
                    <button type="submit" class="btn btn-primary">Confirm</button>
                </div>
            </div>
        </div>
    </form>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
