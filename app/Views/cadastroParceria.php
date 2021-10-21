<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Parceria (exemplo: igreja)</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como uma parceria da ONG APV para ajudar as pessoas em situação de vulnerabilidade, apoie nossa causa e nos ajude.</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="nomeParceria">Nome</label>
                <input type="text" id="nomeParceria" name="nm_parc" placeholder="Nome da parceria" required>

                <label for="tpLogParceria">Tipo Logradouro</label>
                <input type="text" id="tpLogParceria" name="tp_logra_parc" placeholder="Tipo do logradouro da parceria" required>

                <label for="nmLogParceria">Nome Logradouro</label>
                <input type="text" id="nmLogParceria" name="nm_logra_parc" placeholder="Nome do logradouro da parceira" required>

                <label for="numLogParceria">Número Logradouro</label>
                <input type="text" id="numLogParceria" name="num_logra_parc" placeholder="Número do logradouro da parceria" required>

                <label for="bairroParceria">Bairro</label>
                <input type="text" id="bairroParceria" name="bairro_parc" placeholder="Bairro da parceria" required>

                <label for="cidadeParceria">Cidade</label>
                <input type="text" id="cidadeParceria" name="cidade_parc" placeholder="Cidade da parceria" required>

                <label for="cepParceria">CEP</label>
                <input type="text" id="cepParceria" name="cep_parc" placeholder="CEP da parceria (99.999-999)" required>

                <label for="emailParceria">Email</label>
                <input type="text" id="emailParceria" name="email_parc" placeholder="Seu email..." required>

                <label for="siteParceria">Site (não obrigatório)</label>
                <input type="text" id="siteParceria" name="site_parc" placeholder="Seu site...">

                <label for="senhaParceria">Senha</label>
                <input type="text" id="senhaParceria" name="senha_parc" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

            </form>
        </div>
    </div>
</section>