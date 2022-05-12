<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" >
        <title>Букінг проект</title>
        <style>
            body{
               margin: 10px; 
               text-align: center;
            }
            .color_status
            {
                width:115px;
                height:30px;
                margin-left: 2px;
                margin-bottom: 2px;
                border:1px solid black;
            }
            .cell {
                padding: 2px;
                background-color: #02E800;
            }
            .booked {
                padding: 2px;
                background-color: #5B1313;
            }
            .cleaning
            {
                padding: 2px;
                background-color: #FFE143;
            }
        </style>
    </head>
    <body>
        <?php require_once VIEWS_PATH.'table.php' ?>
        <hr>
        <?php require_once VIEWS_PATH.'form.php' ?>
    </body>
</html>