<?php
echo view('header.php');
?>

<section class="contato">
    <!--contato-->
    <div class="center">
        <div class="contato-titulo">
            <!--contato-titulo-->
            <h2>Cadastro de Doador</h2>
            <p>Interessado em colaborar com a causa? Cadastre-se como um doador para ajudar as pessoas em situação de vulnerabilidade, doe para melhorar uma vida.</p>
        </div>



        <div class="container">
            <form action="action_page.php">

                <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault">
                <label class="form-check-label" for="flexCheckDefault">
                    MANTER ANONIMATO E NÃO PREENCHER OS DADOS
                </label>

                </BR></BR> OU </BR></BR>

                <label for="nomeDoador">Nome Completo</label>
                <input type="text" id="nomeDoador" name="nomeDoador" placeholder="Seu nome..." required>

                <label for="emailDoador">Email</label>
                <input type="text" id="emailDoador" name="emailDoador" placeholder="Seu email..." required>

                <label for="cpfDoador">CPF</label>
                <input type="text" id="cpfDoador" name="cpfDoador" placeholder="999.999.999-99" required>

                <label for="dataNascDoador">Data de Nascimento</label>
                <input type="text" id="dataNascDoador" name="dataNascDoador" placeholder="99/99/9999" required>

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