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

                    //consulta de usuario por id en el servidor
                    request.open('GET', 'http://localhost:5000/users/2', true);
                    request.onload = function () {
                    var data = JSON.parse(this.response);

                        if (request.status >= 200 && request.status < 400) {
                            console.log(data)
                            Push.create(data, {
                                body: "dasd",
                                icon: 'logo.png',
                                timeout: 4000,
                                onClick: function () {
                                    window.focus();
                                    this.close();
                                }
                            });
                        } else {
                            console.log('error');
                        }
                    }

                    request.send();

                    //Crear notificacion 
                    
                    

                }
               
        </script>
    </body>
</html>

