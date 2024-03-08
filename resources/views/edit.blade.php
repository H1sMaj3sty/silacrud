<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - {{ $datae->name }}</title>
</head>
<body>
    <h2>Edit Data</h2>
    <form action="{{route ('change')}}" method="POST">
        @csrf

        <input type="hidden" name="id" value="{{ $datae->id }}"><br><br>

        <label for="name">Name</label>
        <input type="text" name="name" id="name" value="{{ $datae->name }}"><br><br>

        <label for="class">Class</label>
        <select name="class" id="class">
            <option value= "XI-PPLG-A" {{ $datae->class == 'XI-PPLG-A' ? 'selected' : ''}}>XI-PPLG-A</option>
            <option value="XI-PPLG-B" {{ $datae->class == 'XI-PPLG-B' ? 'selected' : ''}}>XI-PPLG-B</option>
        </select>

        <label for="address">Address</label>
        <input type="text" name="address" id="address" value="{{ $datae-> address}}"><br><br>

        <label for="age">Age</label>
        <input type="number" name="age" id="age" value="{{ $datae->age }}">

        <button type="submit">Submit</button>
    </form>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit - {{ $datae->name }}</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>
<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Edit Data</h2>
        <form action="{{route ('change')}}" method="POST" class="bg-light p-5 rounded">
            @csrf

            <input type="hidden" name="id" value="{{ $datae->id }}">

            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" value="{{ $datae->name }}" class="form-control">
            </div>

            <div class="form-group">
                <label for="class">Class</label>
                <select name="class" id="class" class="form-control">
                    <option value= "XI-PPLG-A" {{ $datae->class == 'XI-PPLG-A' ? 'selected' : ''}}>XI-PPLG-A</option>
                    <option value="XI-PPLG-B" {{ $datae->class == 'XI-PPLG-B' ? 'selected' : ''}}>XI-PPLG-B</option>
                </select>
            </div>

            <div class="form-group">
                <label for="address">Address</label>
                <input type="text" name="address" id="address" value="{{ $datae-> address}}" class="form-control">
            </div>

            <div class="form-group">
                <label for="age">Age</label>
                <input type="number" name="age" id="age" value="{{ $datae->age }}" class="form-control">
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</body>
</html>
