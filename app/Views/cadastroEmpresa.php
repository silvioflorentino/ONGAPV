<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Empresa</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se com sua empresa para ajudar as pessoas em situação de vulnerabilidade, ajude-nos para melhorar uma vida. Seja um colaborador!</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="tpLogEmpresa">Tipo Logradouro</label>
                <input type="text" id="tpLogEmpresa" name="tp_logra_emp" placeholder="Tipo do logradouro da empresa" required>

                <label for="nmLogEmpresa">Nome Logradouro</label>
                <input type="text" id="nmLogEmpresa" name="nm_logra_emp" placeholder="Nome do logradouro da empresa" required>

                <label for="numLogEmpresa">Número Logradouro</label>
                <input type="text" id="numLogEmpresa" name="num_logra_emp" placeholder="Número do logradouro da empresa" required>

                <label for="bairroEmpresa">Bairro</label>
                <input type="text" id="bairroEmpresa" name="bairro_emp" placeholder="Bairro da empresa" required>

                <label for="cidadeEmpresa">Cidade</label>
                <input type="text" id="cidadeEmpresa" name="cidade_emp" placeholder="Cidade da empresa" required>

                <label for="cepEmpresa">CEP</label>
                <input type="text" id="cepEmpresa" name="cep_emp" placeholder="CEP da empresa (99.999-999)" required>

                <label for="cnpjEmpresa">CNPJ</label>
                <input type="text" id="cnpjEmpresa" name="cnpj_emp" placeholder="CNPJ da empresa" required>

                <label for="emailEmpresa">Email</label>
                <input type="text" id="emailEmpresa" name="email_emp" placeholder="Email da empresa" required>

                <label for="nmRazSocEmpresa">Nome Razão Social</label>
                <input type="text" id="nmRazSocEmpresa" name="nm_rz_social_emp" placeholder="Nome razão social da empresa" required>

                <label for="nmFantEmpresa">Nome Fantasia</label>
                <input type="text" id="nmFantEmpresa" name="nm_fantasia_emp" placeholder="Nome fantasia da empresa" required>

                <label for="siteEmpresa">Site (não obrigatório)</label>
                <input type="text" id="siteEmpresa" name="site_emp" placeholder="Site da empresa">

                <label for="senhaEmpresa">Senha</label>
                <input type="text" id="senhaEmpresa" name="senha_emp" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

            </form>
        </div>
    </div>
</section>