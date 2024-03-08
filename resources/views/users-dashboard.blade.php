<!-- <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Siswa</title>
</head>
<body>
    <h2>Siswa</h2>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>NAME</th>
                <th>CLASS</th>
                <th>ADDRESS</th>
                <th>AGE</th>
                <th>HANDPHONE BRAND</th>
                <th>HANDPHONE SERIES</th>
                <th>ACTION</th>
            </tr>
        </thead>
        <tbody>
            @forelse($data as $siswa)
            <tr>
                <td>{{$siswa->id}}</td>
                <td>{{$siswa->name}}</td>
                <td>{{$siswa->class}}</td>
                <td>{{$siswa->address}}</td>
                <td>{{$siswa->age}}</td>
                <td>{{$siswa->handphone->brand ?? 'N/A'}}</td>
                <td>{{$siswa->handphone->series ?? 'N/A'}}</td>
                <td>
                    <a href="{{route ('show', $siswa->id)}}">Details</a>
                    <a href="{{route ('edit', $siswa->id)}}">Edit</a>
                    <form action="{{route ('delete', $siswa->id)}}" method="POST">
                    @csrf
                    @method('DELETE')
                    <button type="submit">Delete</button>
                    </form>
                </td>
            </tr>
            @empty
            <tr>
                <td>No ID Data</td>
                <td>No NAME Data</td>
                <td>No CLASS Data</td>
                <td>No ADDRESS Data</td>
                <td>No AGE Data</td>
                <td>No Data
                </td>
            </tr>
            @endforelse
        </tbody>
    </table>
    {{ $data -> links()}}
</body>
</html> -->

<!-- <!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Siswa</h2>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>ADDRESS</th>
                    <th>AGE</th>
                    <th>HANDPHONE BRAND</th>
                    <th>HANDPHONE SERIES</th>
                    <th>CAR</th>
                    <th>YEAR</th>
                    <th>ACTION</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $siswa)
                <tr>
                    <td>{{$siswa->id}}</td>
                    <td>{{$siswa->name}}</td>
                    <td>{{$siswa->class}}</td>
                    <td>{{$siswa->address}}</td>
                    <td>{{$siswa->age}}</td>
                    <td>{{$siswa->handphone->brand ?? 'N/A'}}</td>
                    <td>{{$siswa->handphone->series ?? 'N/A'}}</td>
                    <td>
                        @if($siswa->inventory->isNotEmpty())
                        @foreach($siswa->inventory as $inventories)
                        {{$inventories->brand ?? 'N/A'}}
                        @if(!$loop->last)
                        <br>
                        @endif
                        @endforeach
                        @else
                        N/A
                        @endif
                    </td>

                    <td>
                        @if($siswa->inventory->isNotEmpty())
                        @foreach($siswa->inventory as $inventories)
                        {{$inventories->year ?? 'N/A'}}
                        @if(!$loop->last)
                        <br>
                        @endif
                        @endforeach
                        @else
                        N/A
                        @endif
                    </td>


                    <td>
                        <a href="{{route ('show', $siswa->id)}}" class="btn btn-info btn-sm">Details</a>
                        <a href="{{route ('edit', $siswa->id)}}" class="btn btn-warning btn-sm">Edit</a>
                        <form action="{{route ('delete', $siswa->id)}}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
                        </form>
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $data -> links('pagination::bootstrap-4')}}
    </div>
</body>

</html> -->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dashboard - Siswa</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
</head>

<body>
    <div class="container mt-5">
        <h2 class="text-center text-primary">Siswa</h2>

        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#modalCreate">
            Add New Siswa
        </button>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NAME</th>
                    <th>CLASS</th>
                    <th>ADDRESS</th>
                    <th>AGE</th>
                    <th>HANDPHONE BRAND</th>
                    <th>HANDPHONE SERIES</th>
                    <th>CAR</th>
                    <th>YEAR</th>
                </tr>
            </thead>
            <tbody>
                @forelse($data as $siswa)
                <tr>
                    <td>{{$siswa->id}}</td>
                    <td>{{$siswa->name}}</td>
                    <td>{{$siswa->class}}</td>
                    <td>{{$siswa->address}}</td>
                    <td>{{$siswa->age}}</td>
                    <td>{{$siswa->handphone->brand ?? 'N/A'}}</td>
                    <td>{{$siswa->handphone->series ?? 'N/A'}}</td>
                    <td>
                        @if($siswa->inventory->isNotEmpty())
                        @foreach($siswa->inventory as $inventories)
                        {{$inventories->brand ?? 'N/A'}}
                        @if(!$loop->last)
                        <br>
                        @endif
                        @endforeach
                        @else
                        N/A
                        @endif
                    </td>

                    <td>
                        @if($siswa->inventory->isNotEmpty())
                        @foreach($siswa->inventory as $inventories)
                        {{$inventories->year ?? 'N/A'}}
                        @if(!$loop->last)
                        <br>
                        @endif
                        @endforeach
                        @else
                        N/A
                        @endif
                    </td>
                </tr>
                @empty
                <tr>
                    <td colspan="7" class="text-center">No Data</td>
                </tr>
                @endforelse
            </tbody>
        </table>
        {{ $data -> links('pagination::bootstrap-4')}}
    </div>
</body>

</html>