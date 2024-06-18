<!DOCTYPE html>
<html>
<head>
    <title>College Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">College Details</h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $college->collfullname }}</h5>
                <p class="card-text"><strong>Short Name:</strong> {{ $college->collshortname }}</p>
                <h5 class="mt-4">Departments</h5>
                <ul>
                    @foreach ($college->departments as $department)
                        <li>{{ $department->deptfullname }}</li>
                    @endforeach
                </ul>
                <h5 class="mt-4">Programs</h5>
                <ul>
                    @foreach ($college->programs as $program)
                        <li>{{ $program->progfullname }}</li>
                    @endforeach
                </ul>
                <a href="{{ url('/show/colleges') }}" class="btn btn-primary">Back to Colleges</a>
            </div>
        </div>
    </div>
</body>
</html>
