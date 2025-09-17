<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Adoptions Report</title>
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
                <th>User</th>
                <th>Pet</th>
                <th>Date Adoptions</th>
                <th>State</th>
                <th>Photo User</th>
                <th>Photo User</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
            <tr>
                <td>{{ $adoption->id }}</td>
                <td>{{ $adoption->user->fullname }}</td>
                <td>{{ $adoption->pet->name }}</td>
                <td>{{ $adoption->created_at->diffforhumans() }}</td>
                <td>{{ $adoption->pet->status ? 'Adoptado' : 'Disponible' }}</td>
                <td>
                    <img src="{{ public_path().'/images/'.$adoption->user->photo }}" width="50px">
                </td>
                <td>
                    <img src="{{ public_path().'/images/pets/'.$adoption->pet->image }}" width="50px">
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>