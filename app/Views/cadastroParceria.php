<?php
echo view('header.php');
?>
    
    <section class="contato"><!--contato-->
        <div class="center">
            <div class="contato-titulo"><!--contato-titulo-->
                <h2>Cadastro de Parceria (exemplo: igreja)</h2>
                <p>Interessado em colaborar com a causa? Cadastre-se como uma parceria da ONG APV para ajudar as pessoas em situação de vulnerabilidade, apoie nossa causa e nos ajude.</p>
            </div>


                
                <div class="container">
                <form method="Post">
                  
                    <label for="nomeParceria">Nome</label>
                    <input type="text" id="nomeParceria" name="nomeParceria" placeholder="Nome da parceria" required>

                    <label for="tpLogParceria">Tipo Logradouro</label>
                    <input type="text" id="tpLogParceria" name="tpLogParceria" placeholder="Tipo do logradouro da parceria" required>

                    <label for="nmLogParceria">Nome Logradouro</label>
                    <input type="text" id="nmLogParceria" name="nmLogParceria" placeholder="Nome do logradouro da parceira" required> 

                    <label for="numLogParceria">Número Logradouro</label>
                    <input type="text" id="numLogParceria" name="numLogParceria" placeholder="Número do logradouro da parceria" required>

                    <label for="bairroParceria">Bairro</label>
                    <input type="text" id="bairroParceria" name="bairroParceria" placeholder="Bairro da parceria" required>

                    <label for="cidadeParceria">Cidade</label>
                    <input type="text" id="cidadeParceria" name="cidadeParceria" placeholder="Cidade da parceria" required>

                    <label for="cepParceria">CEP</label>
                    <input type="text" id="cepParceria" name="cepParceria" placeholder="CEP da parceria (99.999-999)" required>

                    <label for="emailParceria">Email</label>
                    <input type="text" id="emailParceria" name="emailParceria" placeholder="Seu email..." required>

                    <label for="siteParceria">Site (não obrigatório)</label>
                    <input type="text" id="siteParceria" name="siteParceria" placeholder="Seu site..." >

                    <label for="senhaParceria">Senha</label>
                    <input type="text" id="senhaParceria" name="senhaParceria" placeholder="Sua senha..." required>

                    <input type="submit" value="Cadastrar">
                  
                    </form>
                  </div>
        </div>
    </section>

    <?php
    echo view('footer.php');
    ?>