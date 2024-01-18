<!DOCTYPE html>
<html lang='pt-br'>
    
    <!-- instanciando o cabeçalho da página-->
    <head>
    <meta charset='utf-8'> 
    <title>Acesso restrito</title>
    <link rel='stylesheet' href='css/style_acesso_restrito.css'>
    <link rel="shortcut icon" href="images/logo_sem_fundo.png" />
    </head>

    <!-- instanciando o corpo da página-->
    <body>
        <!-- topo da página-->
        <div id='topo'>
            <div id='esquerda'>
                <div id='image'>
                    <img src="images/logo_sem_fundo.png"/>
                </div>
                <div id='titulo'>
                    <h1>Login acesso restrito</h1>
                </div>
            </div>
            <div id='direita'>
                <img src="images/logo_pet_tele.png"/>
            </div>
        </div>

        <!-- meio da página -->
        <div id='meio'>
            <div id='info'>
                Insira o nome de usuário e senha:
            </div>
            
            <!-- box para entrada dos dados-->
            <div id='box'>
                <div class="container_dados">
                    <form action="#" method="post">
                        <div class="entrada">
                            <label for="username">Usuário:</label>
                            <input type="text" id="username" name="username" required>
                        </div>
                        <div class="entrada">
                            <label for="password">Senha:</label>
                            <input type="password" id="password" name="password" required>
                        </div>
                        <div class="entrada">
                            <button type="submit">Entrar</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <!-- rodapé da página -->
        <footer id='rodape'>
            <h2>Criação e manutenção: <a target='_blank' href='https://www.telecom.uff.br/pet/petws/index.php'>Grupo PET-Tele</a></h2>
        </footer> 
    </body>
</html>