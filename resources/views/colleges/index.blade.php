<!DOCTYPE html>
<html>
<head>
    <title>Colleges</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">All Colleges</h1>
        <table class="table table-bordered mt-3">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Short Name</th>
                    <th>Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($colleges as $college)
                    <tr>
                        <td>{{ $college->collid }}</td>
                        <td>{{ $college->collfullname }}</td>
                        <td>{{ $college->collshortname }}</td>
                        <td><a href="{{ url('/show/college/'.$college->collid) }}" class="btn btn-info">Show</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</body>
</html>
