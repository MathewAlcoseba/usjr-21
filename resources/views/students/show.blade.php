<!DOCTYPE html>
<html>
<head>
    <title>Student Details</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
</head>
<body>
    <div class="container">
        <h1 class="mt-5">Student Details</h1>
        <div class="card mt-3">
            <div class="card-body">
                <h5 class="card-title">{{ $student->studfirstname }} {{ $student->studlastname }}</h5>
                <p class="card-text"><strong>Program:</strong> {{ $student->program->progfullname }}</p>
                <p class="card-text"><strong>College:</strong> {{ $student->college->collfullname }}</p>
                <p class="card-text"><strong>Year:</strong> {{ $student->studyear }}</p>
                <a href="{{ url('/show/students/all') }}" class="btn btn-primary">Back to Students</a>
            </div>
        </div>
    </div>
</body>
</html>
