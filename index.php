<!DOCTYPE html>
<html lang='pt-br'>

    <!-- instanciando o cabeçalho da página-->
    <head>
        <meta charset='utf-8'> 
        <title>Banco de dados veterinária</title>
        <link rel='stylesheet' href='css/style_index.css'>
        <link rel="shortcut icon" href="images/logo_sem_fundo.png" />
    </head>

    <!-- instanciando o corpo da página-->
    <body>
        <!-- topo da página -->
        <div id='topo'>
            <div id="image">
                <img src="images/logo_sem_fundo.png"/>
            </div>
            <div id='texto'>
                <h1>Banco de dados para clínica veterinária</h1>
                <h1>Grupo PET-Tele</h1>
            </div>
        </div>

        <!-- meio da página -->
        <div id='conteudo'>
            <div id='box'>
                <!-- entrada para buscar os dados -->
                <div id="esquerda">
                    <form action="#" method="post">
                        <div class="opcoes">
                            <label for="nomeTutor">Digite o nome do Tutor:</label>
                            <input type="text" id="nomeTutor" name="nomeTutor" required>
                        </div>
                        <div class="opcoes">
                            <label for="nomePet">Digite o nome do Pet:</label>
                            <input type="text" id="nomePet" name="nomePet" required>
                        </div>
                        <div class="opcoes">
                            <button type="submit">Buscar</button>
                        </div>
                    </form>
                </div>
                <!-- opção para imprimir o prontuário -->
                <div id="direita">
                    <div class="opcoes">
                        <button onclick="visualizarProntuario()">Visualizar Prontuário</button>
                        <button onclick="imprimirProntuario()">Imprimir Prontuário</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- funções para imprimir e visualizar o prontuário em js -->
        <script>
            function visualizarProntuario(){
                window.location.href = 'prontuario.php';
            }

            function imprimirProntuario() {
                window.print();
            }
        </script>

        <!-- redireciona para acesso restrito-->
        <div id='acesso_restrito'>
                <a target='_blank' href='acesso_restrito.php'>Acesso restrito</a>
            </div>

        <!-- rodapé da página -->
        <footer id='rodape'>
            <h2>Criação e manutenção: <a target='_blank' href='https://www.telecom.uff.br/pet/petws/index.php'>Grupo PET-Tele</a></h2>
        </footer> 
    </body>

</html>