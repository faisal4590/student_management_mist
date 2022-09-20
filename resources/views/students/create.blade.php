<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Studnet Management</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
    <div class="container" style="margin-top:20px">
        <div class="row">
            <div class="col-md-6">
                <div class="form-group">
                    <form
                        action="{{ action('\App\Http\Controllers\StudentController@store') }}"
                        method="POST">
                        @csrf
                        <label for="">Student Name: </label>
                        <input class="form-control" type="text" placeholder="student name"
                               name="student_name"> <br>

                        <label for="">Student Email: </label>
                        <input class="form-control" type="text" placeholder="student email"
                               name="student_email"> <br>

                        <label for="">Assign course: </label>
                        <select class="form-control" name="assigned_course" id="">
                            <option value="machine_learning">Machine Learning</option>
                            <option value="ai">AI</option>
                        </select>
                        <br>

                        <button class="btn btn-success" type="submit">Add Student</button>
                    </form>
                </div>
            </div>
        </div>
    </div>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>
