<?php
echo view('header.php');
?>

    <section class="contato"><!--contato-->
        <div class="center">
            <div class="contato-titulo"><!--contato-titulo-->
                <h2>Cadastro de Voluntário</h2>
                <p>Interessado em colaborar com a causa? Cadastre-se como um voluntário para ajudar as pessoas em situação de vulnerabilidade, atitudes também são como doações, nos ajude entregando as doações.</p>
            </div>


                
                <div class="container">
                <form method="Post">
                  
                    <label for="nomeVol">Nome Completo</label>
                    <input type="text" id="nomeVol" name="nomeVol" placeholder="Seu nome..." required>

                    <label for="emailVol">Email</label>
                    <input type="text" id="emailVol" name="emailVol" placeholder="Seu email..." required>

                    <label for="cpfVol">CPF</label>
                    <input type="text" id="cpfVol" name="cpfVol" placeholder="999.999.999-99" required> 

                    <label for="nmLogVol">Endereço</label>
                    <input type="text" id="nmLogVol" name="nmLogVol" placeholder="Rua" required> 

                    <label for="numLogVol">Número do endereço</label>
                    <input type="text" id="numLogVol" name="numLogVol" placeholder="Número" required> 

                    <label for="cepVol">CEP</label>
                    <input type="text" id="cepVol" name="cepVol" placeholder="99.999-999" required> 

                    <label for="dataNascVol">Data de Nascimento</label>
                    <input type="text" id="dataNascVol" name="dataNascVol" placeholder="99/99/9999" required>
                    
                    <label for="atividade">Atividade</label>
                    <select id="atividade" name="atividade" required>
                      <option value="entrega">Entregar as doações</option>
                      <option value="separo">Separar as doações</option>
                      <option value="prepararAlimentos">Preparação de alimentos</option>
                    </select>

                    <label for="senhaDoador">Senha</label>
                    <input type="text" id="senhaDoador" name="senhaDoador" placeholder="Sua senha..." required>

                    <input type="submit" value="Cadastrar">


                    </form>
                  </div>
        </div>
    </section>

    <?php
    echo view('footer.php');
    ?>