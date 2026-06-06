<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <title>Profil Mahasiswa</title> 
    <style> 
        body { font-family: Arial, sans-serif; max-width: 600px; margin: 50px 
auto; } 
        table { width: 100%; border-collapse: collapse; } 
        td, th { padding: 10px; border: 1px solid #ddd; } 
        th { background: #1E3A5F; color: white; } 
    </style> 
</head> 
<body> 
    <h1>Profil Mahasiswa</h1> 
  
    <table> 
        <tr><th>Field</th><th>Nilai</th></tr> 
        <tr> 
            <td>Nama</td> 
            {{-- {{ $variabel }} adalah sintaks Blade untuk menampilkan data --}} 
            {{-- Data akan di-escape otomatis untuk keamanan (XSS protection) --}} 
            <td>{{ $nama }}</td> 
        </tr> 
        <tr><td>NIM</td><td>{{ $nim }}</td></tr> 
        <tr><td>Jurusan</td><td>{{ $jurusan }}</td></tr> 
        <tr><td>Semester</td><td>{{ $semester }}</td></tr> 
        <tr><td>IPK</td><td>{{ number_format($ipk, 2) }}</td></tr> 
    </table> 
</body> 
</html> 