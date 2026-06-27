<?php
    if($_SESSION["func"] == "aluno"){
        echo "<a href='home.php'>Início</a>";
        echo "<a href='cursos.php'>Cursos</a>";
        echo "<a href='boletim.php'>Boletim</a>";
        echo "<a href='requerimentos.php'>Requerimentos</a>";
        echo "<a href='ajuda.php'>Ajuda</a>";
        echo "<a href='suporte.php'>Suporte</a>";
        echo "<input type='button' id='sair' onclick='sair()' value='Sair'>";
        echo "
        <script>
            function sair(){
                const dados = {
                    comando: 'sair'
                }
                fetch('php/acoes.php', {
                    method: 'post',
                    headers: {
                        'Content-Type' : 'application/json'
                    },
                    body: JSON.stringify(dados)
                })
                .then(response => response.json())
                .then(dado => {
                    if(dado['status'] == 'sucesso'){
                        alert('Saindo...');
                        window.location = 'login.php';
                    }
                })
                .catch(error => {
                    alert('Erro: '+error);
                })
            }
        </script>";
    }
    ?>