<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>All Pets Report</title>
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
    <div class="header">
        <h1>Pets Report</h1>
        <p>Generated on: {{ date('Y-m-d H:i:s') }}</p>
    </div>

    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Kind</th>
                <th>Weight (kg)</th>
                <th>Age (years old)</th>
                <th>Breed</th>
                {{-- <th>Location</th> --}}
                {{-- <th>Description</th> --}}
                <th>Active</th>
                <th>Status</th>
                <th>Image Pet</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($pets as $pet)
            <tr>
                <td>{{ $pet->id }}</td>
                <td>{{ $pet->name }}</td>
                <td>{{ $pet->kind }}</td>
                <td>{{ $pet->weight }}</td>
                <td>{{ $pet->age }}</td>
                <td>{{ $pet->breed }}</td>
                {{-- <td>{{ $pet->location }}</td> --}}
                {{-- <td>{{ $pet->description }}</td> --}}
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
                    @php
                        $extension = substr($pet->image, -4);
                    @endphp
                    @if ($extension != 'webp' && $extension != '.svg')
                        <img src="{{ public_path().'/images/pets/'.$pet->image }}" width="50px">
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