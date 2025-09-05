<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Pets</title>
    <style>
        table {
            width: 100%;
            border-collapse: collapse;
        }
        th, td {
            border: 1px solid #ddd;
            padding: 8px;
            text-align: left;
        }
        th {
            background-color: #f2f2f2;
            font-weight: bold;
        }
        tr:nth-child(even) {
            background-color: #f9f9f9;
        }
        img {
            max-width: 50px;
            height: auto;
        }
    </style>
</head>
<body>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Kind</th>
                <th>Weight</th>
                <th>Age</th>
                <th>Breed</th>
                <th>Location</th>
                <th>Description</th>
                <th>Status</th>
                <th>Active</th>
                <th>Photo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->kind }}</td>
                <td>{{ $pet->weight }} kg</td>
                <td>{{ $pet->age }} years</td>
                <td>{{ $pet->breed }}</td>
                <td>{{ $pet->location }}</td>
                <td>{{ $pet->description }}</td>
                 <td>
                    @if ($pet->active == 1)
                       Yes
                    @else
                       No
                    @endif 
                </td>
                <td>
                    @if ($pet->status == 0)
                       Available
                    @else
                       Adopted
                    @endif 
                </td>
                <td>
                    <img src="{{ public_path().'/images/pets/'.$pet->image }}" width="50px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>