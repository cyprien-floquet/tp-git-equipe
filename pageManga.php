<html>
    <head>
        <title>Mangas de Cyprien</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="lib/bootstrap/css/bootstrap.css" rel="stylesheet"> 
        <link href="lib/css/mangas.css" rel="stylesheet">   
        <script src="lib/jquery/jquery-2.1.3.min.js"></script>   
        <script src="lib/bootstrap/js/ui-bootstrap-tpls.js" type="text/javascript"></script>
        <script src="lib/bootstrap/js/bootstrap.js"></script> 
    </head>
    <body class="body">
        <?php
        require_once ('vues/menu.html');
        ?>
        <div class="container">
            <?php
                require_once '/scripts/getManga.php';
                $manga = getManga();
                require_once '/vues/formManga.php';                
            ?>
        </div>    
    </body>
</html>
