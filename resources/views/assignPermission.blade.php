<!doctype html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Roles</title>
        <link rel="stylesheet" href="https://unpkg.com/bootstrap@5.3.2/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

    </head>

<body class="bg-light">
        <nav class="navbar navbar-expand-md bg-white shadow-lg bsb-navbar bsb-navbar-hover bsb-navbar-caret">
            <div class="container">
                <a class="navbar-brand" href="#">
                    <strong>Roles</strong>
                </a>
            </div>
        </nav>
        <form action="{{ route('roles.store') }}" method="post">
        @csrf
            <div class="container">
                <div class="card border-0 shadow my-5">
                    <div class="card-header bg-light">
                        <h3 class="h5 pt-2">Roles</h3>
                    </div>
                    <div class="card-body  ">
                        <div class="form-item ">
                            <label for="role">Choose a role:</label>
                            <select id="role" name="role" class="form-select form-control">
                                @foreach ($roles as $role)
                                    <option value="{{ $role->name }}">{{ $role->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    <div class="form-check">
                                @foreach ($permissions as $permission)
                                    <div class="form-check mb-2">
                                        <input type="checkbox" id="permmision-{{$permission->id}}" class="form-check-input"  name="permission[]" value="{{ $permission->name }}">
                                        <label class="form-check-label" for="permission-{{ $permission->id }}"> {{ $permission->name }}</label>
                                    </div>
                                @endforeach
                    </div>
                        <button type="submit" class="btn btn-primary btn-custom">Confirm</button>
                    </div>
                </div>
            </div>
        </form>

</body>
</html>