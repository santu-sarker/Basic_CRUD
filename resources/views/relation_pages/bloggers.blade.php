<!DOCTYPE html>
<html lang="en">

<head>
    <title>Elequent Relations</title>
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
        <h2>Blogger Data ShowCase</h2>
        @if(session()->has("backend_info"))
        <div class="alert alert-{{ session('info_type') }}">
            {{ session("info_msg") }}
        </div>
        @endif
        <table class="table table-bordered table-hover" id="bloggerTable">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Total Posts</th>
                    <th> Created At</th>
                    <th> View Post</th>
                </tr>
            </thead>
            <tbody>

                @foreach ($bloggers as $blogger)
                <tr>
                    <td>{{ $blogger->blogger_id }}</td>
                    <td>{{ $blogger->blogger_name }}</td>
                    <td>{{ $blogger->blogger_email }}</td>
                    <td>{{ $blogger->posts_count }}</td>
                    <td>{{ $blogger->created_at }}</td>
                    <td>
                        <a href="{{ route('blogger.show' , ['blogger_id' => $blogger->blogger_id]) }}" target="blank">
                            View Post</a>
                    </td>


                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
    <script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
    $('#bloggerTable').DataTable();
} );
    </script>
</body>

</html>
