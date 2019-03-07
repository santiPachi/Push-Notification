<?php 
    $user = $_GET['users'];
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <title></title>
        <link rel="stylesheet" href="">
        <!-- libreria push para notificaciones -->
        <script src="js/push.min.js"></script>
    </head>
    <body>
        
        <div class="contenedor">		
            <button onclick="consultatUsuairio()">Notify me!</button>
        </div>

        <script>
               
                function consultatUsuairio() {
                    var request = new XMLHttpRequest();
                    //obtener el id de la url
                    var users;
                    users = "<?php echo $user; ?>";
                    //consulta de usuario por id en el servidor
                    request.open('GET', 'http://169.62.217.179:5000/users/'+users, true);
                    request.onload = function () {
                    var data = JSON.parse(this.response);

                        if (request.status >= 200 && request.status < 400) {
                       
                            console.log(data)
                            
                   
                        } else {
                            console.log('error');
                        }
                        
                    }
                    request.send();

                    //Crear notificacion 
                    
                     
                    Push.create("juan", {
                        body: "dasd",
                        icon: 'logo.png',
                        timeout: 4000,
                        onClick: function () {
                            window.focus();
                            this.close();
                        }
                    });

                }
               
        </script>
    </body>
</html>

