<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>inventory</title>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>BRAND</th>
                <th>YEAR</th>
                <th>OWNER</th>
            </tr>
        </thead>
        @forelse($datas as $data)
        <tbody>
            <tr>
                <td>{{$data->brand}}</td>
                <td>{{$data->year}}</td>
                <td>{{$data->siswa->name}}</td>
            </tr>
            @empty
            <tr>
                <td>NO DATA</td>
                <td>NO DATA</td>
                <td>NO DATA</td>
            </tr>
            @endforelse
        </tbody>
    </table>
</body>
</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inventory</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Inventory</h2>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>BRAND</th>
                    <th>YEAR</th>
                    <th>OWNER</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($datas as $data)
                <tr>
                    <td>{{$data->brand}}</td>
                    <td>{{$data->year}}</td>
                    <td>{{$data->siswa->name}}</td>
                    <td>
                        <a href="{{route ('editmobil', $data->id)}}">Edit</a>
                        <form action="{{route('deletemobil', $data->id)}}" method="post">
                            @csrf
                            @method('DELETE')
                            <button type="submit">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="3" class="text-center">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>
</body>

</html>