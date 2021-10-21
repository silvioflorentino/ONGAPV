<?php

namespace App\Controllers;

class DoadorController extends BaseController
{
        public function doador()
        {
                echo view('header');
                echo view('cadastroDoador');
                echo view('footer');
        }

        public function inserirDoador()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $DoadorModel = new \App\Models\DoadorModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_doador'), PASSWORD_BCRYPT, $opcao);

                        $DoadorModel->set('nm_doador', $request->getPost('nm_Doador'));
                        $DoadorModel->set('email_doador', $request->getPost('email_Doador'));
                        $DoadorModel->set('cpf_doador', $request->getPost('cpf_Doador'));
                        $DoadorModel->set('dt_nasc_doador', $request->getPost('dt_nasc_Doador'));
                        $DoadorModel->set('senha_doador', $senhaCrip);
                        //$DoadorModel->set('anonimo_doador', $request->getPost('anonimo_doador'));

                        if ($DoadorModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroDoador', $data);
                echo view('footer');
        }
}
