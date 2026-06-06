<!DOCTYPE html> 
<html lang="id"> 
<head> 
    <meta charset="UTF-8"> 
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> 
    <title>Halaman Pertama Laravel</title> 
    <style> 
        body { font-family: Arial, sans-serif; max-width: 800px; margin: 50px 
auto; padding: 20px; } 
        .card { background: #f8f9fa; border: 1px solid #dee2e6; 
border-radius: 8px; padding: 20px; } 
        h1 { color: #e3342f; } 
    </style> 
</head> 
<body> 
    <div class="card"> 
        <h1>🎉 Halo Dunia!</h1> 
        <p>Ini adalah halaman pertama yang dibuat dengan Laravel dan Blade Template.</p> 
        <p>Tanggal sekarang: {{ date('d F Y') }}</p> 
        <p>Versi PHP: {{ PHP_VERSION }}</p> 
    </div> 
</body> 
</html> 