<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elequent CRUD</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</head>

<body>

    <div class="container">
        <h2>User Data ShowCase</h2>
        @if(session()->has("backend_info"))
        <div class="alert alert-{{ session('info_type') }}">
            {{ session("info_msg") }}
        </div>
        @endif
        <table class="table table-bordered table-hover" id="userTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th> Phone Number</th>
                    <th> Created At</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($users as $user)
                <tr>
                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    {{-- <td>
                        @if (isset($user->position))
                        {{ $user->position }}
                        @else
                        "default position"
                        @endif
                    </td> --}}
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->phone_number }}</td>
                    {{-- <td>{{ $user->ref_id }}</td> --}}
                    <td>{{ $user->created_at }}</td>
                    <td><a href="delete/user/{{ $user->id }}" class="btn btn-warning">delete</a></td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    {{ $user->name }}
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
    $('#userTable').DataTable();
} );
    </script>
</body>

</html>
