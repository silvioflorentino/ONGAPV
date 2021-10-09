<?php
echo view('header.php');
?>

    <section class="contato"><!--contato-->
        <div class="center">
            <div class="contato-titulo"><!--contato-titulo-->
                <h2>Cadastro de Empresa</h2>
                <p>Interessado em colaborar com a causa? Cadastre-se com sua empresa para ajudar as pessoas em situação de vulnerabilidade, ajude-nos para melhorar uma vida. Seja um colaborador!</p>
            </div>


                
                <div class="container">
                    <form action="action_page.php">

                    <label for="tpLogEmpresa">Tipo Logradouro</label>
                    <input type="text" id="tpLogEmpresa" name="tpLogEmpresa" placeholder="Tipo do logradouro da empresa" required>

                    <label for="nmLogEmpresa">Nome Logradouro</label>
                    <input type="text" id="nmLogEmpresa" name="nmLogEmpresa" placeholder="Nome do logradouro da empresa" required>

                    <label for="numLogEmpresa">Número Logradouro</label>
                    <input type="text" id="numLogEmpresa" name="numLogEmpresa" placeholder="Número do logradouro da empresa" required>

                    <label for="bairroEmpresa">Bairro</label>
                    <input type="text" id="bairroEmpresa" name="bairroEmpresa" placeholder="Bairro da empresa" required>

                    <label for="cidadeEmpresa">Cidade</label>
                    <input type="text" id="cidadeEmpresa" name="cidadeEmpresa" placeholder="Cidade da empresa" required>

                    <label for="cepEmpresa">CEP</label>
                    <input type="text" id="cepEmpresa" name="cepEmpresa" placeholder="CEP da empresa (99.999-999)" required>

                    <label for="cnpjEmpresa">CNPJ</label>
                    <input type="text" id="cnpjEmpresa" name="cnpjEmpresa" placeholder="CNPJ da empresa" required>

                    <label for="emailEmpresa">Email</label>
                    <input type="text" id="emailEmpresa" name="emailEmpresa" placeholder="Email da empresa" required>

                    <label for="nmRazSocEmpresa">Nome Razão Social</label>
                    <input type="text" id="nmRazSocEmpresa" name="nmRazSocEmpresa" placeholder="Nome razão social da empresa" required>

                    <label for="nmFantEmpresa">Nome Fantasia</label>
                    <input type="text" id="nmFantEmpresa" name="nmFantEmpresa" placeholder="Nome fantasia da empresa" required>

                    <label for="siteEmpresa">Site</label>
                    <input type="text" id="siteEmpresa" name="siteEmpresa" placeholder="Site da empresa" required>

                    <label for="senhaEmpresa">Senha</label>
                    <input type="text" id="senhaEmpresa" name="senhaEmpresa" placeholder="Sua senha..." required>

                    <input type="submit" value="Cadastrar">
                  
                    </form>
                  </div>
        </div>
    </section>

    <?php
    echo view('footer.php');
    ?>