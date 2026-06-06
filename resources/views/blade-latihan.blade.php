<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <title>Latihan Blade</title>

    <style>
        body {
            font-family: Arial;
            max-width: 800px;
            margin: 40px auto;
        }

        .card {
            border: 1px solid #ddd;
            padding: 20px;
            border-radius: 10px;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        td,
        th {
            border: 1px solid #ccc;
            padding: 10px;
        }

        .success {
            color: green;
            font-weight: bold;
        }

        .warning {
            color: orange;
            font-weight: bold;
        }
    </style>
</head>

<body>

    <h1>
        🚀
        Latihan Blade Laravel</h1>

    {{-- Menampilkan Variabel --}}
    <div class="card">

        <h2>1. Menampilkan Data</h2>

        <p>Nama: {{ $nama }}</p>

        <p>Nama Huruf Besar:
            {{ strtoupper($nama) }}
        </p>

    </div>

    {{-- Kondisional --}}
    <div class="card">

        <h2>2. Kondisional IF</h2>

        @if ($ipk >= 3.5)
            <p class="success">
                cumlaude
            </p>
        @elseif ($ipk >= 3.0)
            <p class="warning">
                Sangat Memuaskan
            </p>
        @else
            <p>
                Memuaskan
            </p>
        @endif

    </div>

    {{-- Switch --}}
    <div class="card">

        <h2>3. Switch Status</h2>

        @switch($statusMahasiswa)
            @case('aktif')
                <p>Status: Mahasiswa Aktif</p>
            @break

            @case('cuti')
                <p>Status: Sedang Cuti</p>
            @break

            @default
                <p>Status Tidak Diketahui</p>
        @endswitch

    </div>

    {{-- Foreach --}}
    <div class="card">

        <h2>4. Data Mahasiswa</h2>

        <table>

            <tr>
                <th>No</th>
                <th>Nama</th>
                <th>NIM</th>
            </tr>

            @foreach ($mahasiswas as $mahasiswa)
                <tr>

                    <td>
                        {{ $loop->iteration }}
                    </td>

                    <td>
                        {{ $mahasiswa['nama'] }}
                    </td>

                    <td>
                        {{ $mahasiswa['nim'] }}
                    </td>

                </tr>
            @endforeach

        </table>

    </div>

</body>

</html>
