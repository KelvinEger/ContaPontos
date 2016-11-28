<!DOCTYPE html>
<html>
    <head>
        <title>Contador - Menu</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/css/materialize.min.css">
        <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.97.6/js/materialize.min.js"></script>
    </head>
    <body>
        <header>
            <div class="container">
                <div class="titulo nav-wrapper valing-wrapper center-align">
                    <h3 class="white-text">Contando pontos</h3>
                    <br>
                </div>
            </div>
        </header>
        <div class="container">
            <form method="post">
                <table class="container centered striped responsive-table">
                    <tr>
                        <td>Nome</td>
                        <td>Ação</td>
                    </tr>
                    <tr>
                        <td>Equipe Azul</td>
                        <td><a class="waves-effect blue darken-4 btn"  onclick="envia('azul')">Votar</a></td>
                        <!--<td onclick="envia('1')"><a class="waves-effect waves-light btn">Votar</a></td>-->
                    </tr>
                    <tr>
                        <td>Equipe Verde</td>
                        <td><a class="waves-effect green darken-4 btn"  onclick="envia('verde')">Votar</a></td>
                        <!--<td onclick="envia(-2)"><a class="waves-effect waves-light btn">Votar</a></td>-->
                    </tr>
                    <tr>
                        <td>Equipe Amarelo</td>
                        <td><a class="waves-effect amber accent-3 btn"  onclick="envia('amarelo')">Votar</a></td>
                        <!--<td onclick="envia(-3)"><a class="waves-effect waves-light btn">Votar</a></td>-->
                    </tr>
                    <tr>
                        <td>Equipe Rosa</td>
                        <td><a class="waves-effect  red accent-3 btn"  onclick="envia('rosa')">Votar</a></td>
        <!--              //  <td onclick="envia(-4)"><a class="waves-effect waves-light btn">Votar</a></td>-->
                    </tr>
                    <tr>
                        <td>Equipe Vermelho</td>
                        <td><a class="waves-effect red accent-4 btn"  onclick="envia('vermelho')">Votar</a></td>
                        <!--<td onclick="envia(-5)"><a class="waves-effect waves-light btn">Votar</a></td>-->
                    </tr>
                </table>
            </form>
            </br>
            </br>
            </br>
            </br>
            </br>
            <div class="apura">
            </div>
        </div>
        <footer class="page-footer">
            <div class="container">
                <div class="row">
                    <div class="col l6 s12">
                        <h5 class="white-text">Conta pontos SC ltda</h5>
                        <p class="grey-text text-lighten-4"> <a class="waves-effect grey darken-4 btn"  onclick="apura()">Apurar</a></p>
                    </div>
                </div>
            </div>
            <div class="footer-copyright">
                <div class="container">
                    © 2016 Copyright Text | <a class="grey-text text-lighten-4" href="https://www.facebook.com/kelvin.eger.5">Kelvin Eger</a> 
                </div>
            </div>
            <script type="text/javascript">
                function envia(valor) {
                    var info = {"valor": valor};
                    $.ajax({
                        type: 'post',
                        url: 'contabiliza.php',
                        data: info,
                    }).done(function (data) {
                        Materialize.toast(data, 3000);

                    });
                }
                function apura() {
                    var info = {"valor": 10};
                    $.ajax({
                        type: 'post',
                        url: 'contabiliza.php',
                        data: info,
                        success: function (data) {
                            $(".apura").html(data);
                        }
                    });
                }
            </script>
    </body>
</footer>
</body>
</html>
