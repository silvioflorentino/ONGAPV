<?php
echo view('header.php');
?>

    <section class="contato"><!--contato-->
        <div class="center">
            <div class="contato-titulo"><!--contato-titulo-->
                <h2>Cadastro de Grupo Vulnerável</h2>
                <p>Você viu alguma pessoa em situação de vulnerabilidade nas ruas e quer ajudar de algum como? Aqui é o lugar certo! Cadastre as informações desse grupo e iremos incluí-los na nossa causa!</p>
            </div>


                
                <div class="container">
                    <form method="Post">
                  
                      <label for="apelidoGrupo">Apelido</label>
                      <input type="text" id="apelidoGrupo" name="apelido_grupo" placeholder="Dê um apelido para o grupo vulnerável" required>

                      <label for="localGrupo">Localização</label>
                      <textarea id="localGrupo" name="local_grupo" placeholder="Descreva com o máximo de detalhes possíveis onde o grupo se encontra" style="height:200px" required></textarea>               
                      
                      <label for="descGrupo">Descrição</label>
                      <textarea id="descGrupo" name="desc_grupo" placeholder="Descreva o grupo com a quantidade de pessoas, idade aproximada, características físicas, etc" style="height:200px" required></textarea>
                  
                      <input type="submit" value="Cadastrar">
                  
                    </form>
                  </div>
        </div>
    </section>

    <?php
    echo view('footer.php');
    ?>