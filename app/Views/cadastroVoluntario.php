<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Voluntário</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como um voluntário para ajudar as pessoas em situação de vulnerabilidade, atitudes também são como doações, nos ajude entregando as doações.</p>
        </div>

        <div class="container">
            <form method="POST">

                <label for="nomevol">Nome Completo</label>
                <input type="text" id="nomevol" name="nm_vol" placeholder="Seu nome..." required>

                <label for="telVol">Telefone Celular</label>
                <input type="text" id="telVol" name="nm_vol" placeholder="Seu nome..." required>

                <label for="emailvol">Email</label>
                <input type="email" id="emailvol" name="email_vol" placeholder="Seu email..." required>

                <label for="cpfvol">CPF</label>
                <input type="text" id="cpfvol" name="cpf_vol" placeholder="999.999.999-99" required>

                <label for="nmlogvol">Endereço</label>
                <input type="text" id="nmlogvol" name="nm_logra_vol" placeholder="Rua" required>

                <label for="numlogvol">Número do endereço</label>
                <input type="text" id="numlogvol" name="num_logra_vol" placeholder="Número" required>

                <label for="cepvol">CEP</label>
                <input type="text" id="cepvol" name="cep_vol" placeholder="99.999-999" required>

                <label for="datanascvol">Data de Nascimento</label>
                <input type="text" id="datanascvol" name="dt_nasc_vol" placeholder="99/99/9999" required>

                <label for="atividade">Atividade</label>
                <select id="atividade" name="ativ_vol" required>
                    <option value="Entregar_Doacoes">Entregar as doações</option>
                    <option value="Separar_Doacoes">Separar as doações</option>
                    <option value="Preparacao_Alimentos">Preparação de alimentos</option>
                </select>

                <label for="senhaDoador">Senha</label>
                <input type="password" id="senhaDoador" name="senha_vol" placeholder="Sua senha..." required>

                <button type="submit" class="btn btn-success">Cadastrar</button>

            </form>
        </div>
    </div>
</section>