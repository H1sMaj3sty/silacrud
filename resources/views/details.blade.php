<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details {{$datad->name}}</title>
</head>
<body>
    <label for="name">Name: </label>
    <p>{{$datad->name}}</p><br><br>

    <label for="class">Class: </label>
    <p>{{$datad->class}}</p><br><br>

    <label for="address">Address: </label>
    <p>{{$datad->address}}</p><br><br>

    <label for="age">Age: </label>
    <h2>{{$datad->age}}</h2><br><br>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Details {{$datad->name}}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <div class="row">
            <div class="col-md-6 offset-md-3">
                <div class="card text-white bg-primary mb-3">
                    <div class="card-header">Details</div>
                    <div class="card-body">
                        <h5 class="card-title">Name: {{$datad->name}}</h5>
                        <p class="card-text">Class: {{$datad->class}}</p>
                        <p class="card-text">Address: {{$datad->address}}</p>
                        <p class="card-text">Age: {{$datad->age}}</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

