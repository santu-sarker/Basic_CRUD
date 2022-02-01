<!DOCTYPE html>
<html lang="en">
<head>
  <title>Test Users</title>
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
  <h2>Basic Table</h2>
  @if(session()->has("delete_user"))
        <div class="alert alert-success">
            {{ session("delete_user") }}
        </div>
    @endif
  <table class="table table-bordered table-hover" id="userTable">
    <thead>
      <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Position</th>
        <th> Address </th>
      </tr>
    </thead>
    <tbody>

      @foreach ($users as $user)
      <tr>
        <td>{{ $user->user_id }}</td>
        <td>{{ $user->user_name }}</td>
        <td>
            @if (isset($user->position))
            {{ $user->position }}
            @else
            "default position"
            @endif
        </td>
        <td>{{ $user->address }}</td>
        <td><a href="delete/user/{{ $user->user_id }}" class="btn btn-warning">delete</a></td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#userTable').DataTable();
} );
</script>
</body>
</html>
