<?php


?>
<!-- <hr/>
<div style="">
<h1>404, Page Not Found</h1>
<h3>The Url you searched does not exit <?php echo basename($_SERVER['REQUEST_URI']);?></h3>
<a href="<?php echo BASE_URL?>">Back To Home</a>
</div>
<hr/> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page Not Found</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f7f7f7;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }
        .container {
            text-align: center;
        }
        h1 {
            font-size: 48px;
            margin-bottom: 20px;
            color: #333;
        }
        p {
            font-size: 18px;
            color: #666;
            margin-bottom: 30px;
        }
        a {
            text-decoration: none;
            color: #007bff;
            font-weight: bold;
        }
        a:hover {
            text-decoration: underline;
        }
        .image {
            margin-bottom: 30px;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="image">
            <img src="<?php echo BASE_URL?>assets/images/404.jpg" alt="Page Not Found">
        </div>
        <h1>Oops! Page Not Found ?search=<?php echo basename($_SERVER['REQUEST_URI'])?></h1>
        <p>We're sorry, the page you are looking for might have been removed or is temporarily unavailable.</p>
        <a href="<?php echo BASE_URL?>index.php/">Go to Home Page</a>
    </div>
</body>
</html>
