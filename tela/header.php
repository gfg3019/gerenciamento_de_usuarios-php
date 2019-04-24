<!DOCTYPE html> 
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title>Gerenciador de Usuarios</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
        <script src="https://cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <link rel="stylesheet" href="https://cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
        <script>
            $(document).ready(function() {
                $('#example').DataTable();
            } );
        </script>
        <link rel="stylesheet" href="css/estilo.css">
    </head>
    <body>
        <header class="p-4 mb-2 bg-dark text-white">
            <h4>Gerenciamento de Usuarios</h4>
            <nav class="navbar navbar-expand-lg navbar-light">
                <ul class="navbar-nav active">
                <li class="nav-item">
                    <div class="form-inline my-2 my-lg-0 col-md-6">
                        <a href="novo.php" class="btn btn-info btn-lg">novo registro</a>
                    </div>
                </li>
                </ul>
            </nav>
        </header>