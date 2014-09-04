<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Bienvenidos a mi App</title>
    <script type="text/javascript">
        function eliminar_todo(id){
            if(confirm("ESTA SEGURO DE ELIMINAR TAREA CON ID: "+id+" ?")) {
                window.location.href = "index.php?controller=todo&action=delete&id="+id;
            };
        }
    </script>
</head>
<body>