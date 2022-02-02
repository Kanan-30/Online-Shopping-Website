<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="brand.css">
    <script src="slider.js" defer></script>
    <title>Mobiles</title>
</head>
<body>
                                                    <!-- Navigation Bar 
............................................................................................................................................... -->
<?php include 'nav.php'; ?>
                                                          <!--Main Page
............................................................................................................................................... -->  
<div class="mobile">
<h1>SHOP BY BRAND</h1>
<a href="products.php?a=oneplus"><img src="Images/Mobile/oneplus.png"></a>
<a href="products.php?a=Redmi"><img src="Images/Mobile/redmi.png"></a>
<a href="products.php?a=apple"><img src="Images/Mobile/apple.png"></a>
<br>
<br>
<a href="products.php?a=samsung"><img src="Images/Mobile/samsung.png"></a>
<a href="products.php?a=Oppo"><img src="Images/Mobile/oppo.png"></a>
<a href="products.php?a=Vivo"><img src="Images/Mobile/vivo.png"></a>
</div>
</body>
</html>