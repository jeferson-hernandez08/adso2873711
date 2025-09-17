<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Adoptions Report</title>
    <style>
        body {
            font-family: Arial, sans-serif;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
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
        .header {
            text-align: center;
            margin-bottom: 20px;
        }
        .header h1 {
            color: #154869;
        }
    </style>
</head>
<body>
    <h1>Reporte de Adopciones</h1>
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>User</th>
                <th>Pet</th>
                <th>Date</th>
                <th>Photo User</th>
                <th>Photo Pet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($adoptions as $adoption)
                <tr>
                    <td>{{ $adoption->id }}</td>
                    <td>{{ $adoption->user->fullname }}</td>
                    <td>{{ $adoption->pet->name }}</td>
                    <td>{{ $adoption->created_at->diffforhumans() }}</td>
                    <td>
                        {{-- Foto del usuario --}}
                        @php
                            $extUser = substr($adoption->user->photo, -4);
                        @endphp
                        @if ($extUser != 'webp' && $extUser != '.svg')
                            <img src="{{ public_path().'/images/'.$adoption->user->photo }}" alt="Foto usuario">
                        @else
                            Webp | SVG
                        @endif
                    </td>
                    <td>
                        {{-- Foto de la mascota --}}    
                        @php
                            $extPet = substr($adoption->pet->image, -4);
                        @endphp
                        @if ($extPet != 'webp' && $extPet != '.svg')
                            <img src="{{ public_path().('/images/pets/'.$adoption->pet->image) }}" alt="Foto mascota">
                        @else
                            Webp | SVG
                        @endif
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>