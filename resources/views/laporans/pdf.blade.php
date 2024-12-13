<!DOCTYPE html>
<html>
<head>
    <title>Laporan Santri</title>
</head>
<body>
    <h1>Laporan Data Santri</h1>
    <table border="1" cellpadding="10">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nama</th>
                <th>Umur</th>
                <th>Status</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($santris as $santri)
                <tr>
                    <td>{{ $santri->id }}</td>
                    <td>{{ $santri->nama }}</td>
                    <td>{{ $santri->umur }}</td>
                    <td>{{ $santri->status }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</body>
</html>
