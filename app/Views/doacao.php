<!DOCTYPE html>
<html lang="pt-br" xmlns="http://www.w3.org/1999/xhtml">
<!-- adicionei o xmlns -->

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> <!-- adicionei -->

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300&display=swap" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-F3w7mX95PdgyTmZZMECAngseQB83DfGTowi0iMjiWaeVhAn4FJkqJByhZMI3AhiU" crossorigin="anonymous">

    <link href="http://localhost/2021/tccfinal/public/css/style.css" rel="stylesheet" />
    <title>ONG APV</title>

    <!-- adicionei -->
    <style type="text/css" media="all">
        #tudo {
            border: #CCCCCC 1px solid;
            width: 1200px;
            margin: 0 auto;
            background-color: #F9FFFF;
        }

        .titulo {
            text-align: center;
            background-color: #28DCDC;
            font-weight: bold;
            font-size: 28px;
        }

        .bd_titulo {
            text-align: center;
            background-color: #CCCCCC;
            font-weight: bold;
            font-size: 18px;
        }
    </style>

    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script> <!-- adicionei -->
    <script type="text/javascript">
        $(function() {
            function removeCampo() {
                $(".removerCampo").unbind("click");
                $(".removerCampo").bind("click", function() {
                    if ($("tr.linhas").length > 1) {
                        $(this).parent().parent().remove();
                    }
                });
            }

            $(".adicionarCampo").click(function() {
                novoCampo = $("tr.linhas:first").clone();
                novoCampo.find("input").val("");
                novoCampo.insertAfter("tr.linhas:last");
                removeCampo();
            });
        });
    </script>
</head>

<body>

    <header>
        <div class="center">
            <!--center-->
            <div class="logo">
                <!--logo-->
                <h2>ONG APV</h2>
            </div>
            <div class="menu">
                <!--menu-->
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Home
                </a>
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Quero ajudar
                </a>
                <a href="<?php echo base_url('/PrincipalController/principal') ?>">
                    Relatos
                </a>
                <a class="btn-menu" href="<?php echo base_url('/LoginController/login') ?>">
                    Login
                </a>
            </div>
            <div class="menu-mobile">
                <!--menu-mobile-->
                <i class="fas fa-bars menu-mobile-icon"></i>
                <div class="menu-items">
                    <!--menu-items-->
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Home</a>
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Quero ajudar</a>
                    <a href="<?php echo base_url('/PrincipalController/principal') ?>">Relatos</a>
                    <a href="<?php echo base_url('/LoginController/login') ?>">Login</a>
                </div>
            </div>
        </div>
    </header>

    <body>
        <!-- adicionei -->
        <section class="contato">
            <form method="Post" name="frm_campo_dinamico" action="">
                <div id="tudo">
                    <table style="width: 1200px" cellpadding="2" cellspacing="4">
                        <tr>
                            <td style="height: 50px" colspan="4" class="titulo">Doações</td>
                        </tr>
                        <!-- separador -->
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr>
                            <td colspan="4" align="center">Preencha os campos de acordo com o que você pretende doar.</td>
                        </tr>
                        <!-- separador -->
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr>
                            <td style="height: 40px" class="bd_titulo">Categoria</td>
                            <td class="bd_titulo">Nome (arroz, blusa)</td>
                            <td class="bd_titulo">Quantidade (unidade)</td>
                            <td class="bd_titulo">Apagar</td>
                        </tr>
                        <!-- separador -->
                        <tr>
                            <td height="10"></td>
                        </tr>
                        <tr class="linhas">

                            <td>
                                <select name="categoria[]" style="text-align:center">
                                    <option value="" selected="selected">Selecione uma categoria...</option>
                                    <option value="Alimento">Alimento</option>
                                    <option value="Vestimenta">Vestimenta</option>
                                    <option value="Absorvente">Absorvente</option>
                                    <option value="Verde">Máscara</option>
                                </select>
                            </td>
                            <td><input type="text" name="nome[]" style="text-align:center" /></td>
                            <td><input type="text" name="qtd[]" style="text-align:center" /></td>
                            <td><a href="#" class="removerCampo" title="Remover linha"><i class="fas fa-trash-alt"></i></td>
                        </tr>
                        <tr>
                            <td colspan="4">
                                <a href="#" class="adicionarCampo" title="Adicionar item"><i class="fas fa-plus-circle"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td align="right" colspan="4"><input type="submit" id="btn-cadastrar" value="Cadastrar" /></td>
                        </tr>
                    </table>
            </form>
            </div>
        </section>

        <?php

        if ($_POST) {
            $categoria          = $_POST['categoria'];
            $nome     = $_POST['nome'];
            $qtd      = $_POST['qtd'];
            $quant_linhas = count($qtd);

            // exibindo os dados
            //for ($i = 0; $i < $quant_linhas; $i++) {
                //echo  "Categoria: " . $categoria[$i] . "<br />";
               // echo  "Nome: " . $nome[$i] . "<br />";
                //echo  "Quantidade: " . $qtd[$i] . "<br />";
           // }
        }
        ?>
    </body>

</html>

<?php
echo view('footer.php');
?>