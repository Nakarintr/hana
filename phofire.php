<!DOCTYPE html>
<html lang="th">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>บล็อกโพสต์</title>
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Prompt:wght@400;700&display=swap');

        body {
            font-family: 'Prompt', sans-serif;
            background-color: #1a1a2e;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            color: #f4f4f4;
            background-image: url('https://cdn.pixabay.com/photo/2014/11/25/08/15/bokeh-544963_960_720.jpg');
            background-repeat: no-repeat;
            background-size: cover;
        }

        .container {
            display: flex;
            flex-direction: column;
            align-items: center;
            gap: 20px;
        }

        .blog-posts {
            display: flex;
            gap: 20px;
        }

        .blog-post {
            background-color: #ffffff;
            width: 300px;
            max-width: 90vw;
            padding: 30px;
            border-radius: 12px;
            box-shadow: 0 6px 12px rgba(0, 0, 0, 0.4);
            text-decoration: none;
            color: #333333;
            text-align: center;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .blog-post:hover {
            transform: scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.6);
            background-color: #f5f5f5;
        }

        .blog-post h2 {
            margin: 0;
            font-weight: 700;
            font-size: 1.4em;
            color: #333333;
        }

        .back-link {
            margin-top: 20px;
            font-size: 1em;
            color: #f4f4f4;
            text-decoration: none;
        }

        .back-link:hover {
            color: #dcdcdc;
        }
    </style>
</head>
<body>

<div class="container">
    <div class="blog-posts">
        <a href="phofire1.php" class="blog-post">
            <h2>นครินทร์ เชิดศิริผล</h2>
        </a>
        
        <a href="phofire2.php" class="blog-post">
            <h2>พรไพลิน อ่อนเชียง</h2>
        </a>
    </div>
    
    <a href="clinic_hana.php" class="back-link">ย้อนกลับไปหน้าแรก</a>
</div> 

</body>
</html>
