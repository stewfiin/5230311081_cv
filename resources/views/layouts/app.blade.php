<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CV - {{ $nama ?? 'CV Profesional' }}</title>
    
    {{-- Kita akan menggunakan FontAwesome untuk ikon (jika masih diperlukan di tempat lain) --}}
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    
    <style>
        body, h1, h2, h3, p, ul, li {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, "Helvetica Neue", Arial, sans-serif;
            background-color: #f0f2f5;
            color: #333;
            line-height: 1.6;
        }

        .cv-header {
            background-color: #3498db; 
            color: white;
            padding: 30px;
            
            display: flex;
            justify-content: space-between;
            align-items: center; 
            gap: 20px;
            
            max-width: 1100px;
            margin: 30px auto 0 auto; 
        
            border-radius: 10px 10px 0 0;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
      
            flex-direction: column;
            text-align: center;
        }

        .sidebar-info {
            flex: 1; 
            width: 100%;
        }
        
        .sidebar-info h1 {
            font-size: 2.8rem;
            margin-top: 0;
            margin-bottom: 5px;
            font-weight: 700;
        }
        
        .sidebar-info .jabatan-header {
            font-size: 1.3rem;
            font-weight: 300;
            border-bottom: 2px solid rgba(255, 255, 255, 0.7); 
            padding-bottom: 10px;
            margin-bottom: 20px;
        }

        .sidebar-foto-container {
            flex-shrink: 0; 
            order: -1; 
            margin-bottom: 20px;
        }

        .profil-foto {
            width: 250px;
            height: 250px;
            border-radius: 50%; 
            object-fit: cover; 
            border: 4px solid white;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.15);
        }


        .kontak-info {
            margin-top: 20px;
            text-align: left; 
        }

        .kontak-info h3 {
            font-size: 1.5rem;
            margin-bottom: 10px;
        }

        .kontak-info p {
            margin-bottom: 8px;
            font-size: 0.95rem;
            font-weight: 300;
        }
        
     
        .cv-content-wrapper {
            max-width: 1100px;
            margin: 0 auto 30px auto; 
            background-color: #ffffff;
            
          
            border-radius: 0 0 10px 10px;
            box-shadow: 0 4px 15px rgba(0, 0, 0, 0.1);
            
            padding: 30px;
        }

        .profil-teks {
            font-size: 1.05rem;
            text-align: justify;
        }

        .section {
            margin-bottom: 25px;
        }

        .section h2 {
            font-size: 1.8rem;
            color: #3498db; 
            border-bottom: 2px solid #e0e0e0;
            padding-bottom: 8px;
            margin-bottom: 15px;
        }

        .item {
            margin-bottom: 20px;
        }

        .item h3 {
            font-size: 1.3rem;
            font-weight: 600;
            margin-bottom: 3px;
        }

        .item-meta {
            font-size: 0.95rem;
            font-weight: 500;
            color: #555;
            margin-bottom: 8px;
        }

        .item-deskripsi {
            list-style-type: none; 
            padding-left: 1px;
            font-size: 0.95rem;
            color: #444;
        }
        
        .item-deskripsi li {
            margin-bottom: 5px;
            position: relative;
        }

        .keahlian-list {
            list-style-type: none;
            padding-left: 0;
            display: flex;
            flex-wrap: wrap;
            gap: 10px;
        }

        .keahlian-list li {
            background-color: #e9f5fb;
            color: #3498db;
            padding: 5px 12px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
        }

        @media (min-width: 768px) {
            .cv-header {
                flex-direction: row; 
                align-items: flex-start;
                text-align: left;
            }
            .sidebar-foto-container {
                order: 1;
                margin-bottom: 0;
            }
            .kontak-info {
                text-align: left;
            }
        }

    </style>
</head>
<body>
    @yield('content')
</body>
</html>

