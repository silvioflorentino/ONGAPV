<?php

namespace App\Controllers;

class ParceriaController extends BaseController
{

        public function parceria()
        {
                echo view('cadastroParceria');
        }
        
        public function inserirParceria()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $ParceriaModel = new \App\Models\ParceriaModel();

                        $opcao = ['cost' => 8];

                        $senhaCrip = password_hash($request->getPost('senha_parc'), PASSWORD_BCRYPT, $opcao);

                        $ParceriaModel->set('nm_parc', $request->getPost('nm_parc'));
                        $ParceriaModel->set('tp_logra_parc', $request->getPost('tp_logra_parc'));
                        $ParceriaModel->set('nm_logra_parc', $request->getPost('nm_logra_parc'));
                        $ParceriaModel->set('num_logra_parc', $request->getPost('num_logra_parc'));
                        $ParceriaModel->set('bairro_parc', $request->getPost('bairro_parc'));
                        $ParceriaModel->set('cidade_parc', $request->getPost('cidade_parc'));
                        $ParceriaModel->set('cep_parc', $request->getPost('cep_parc'));
                        $ParceriaModel->set('email_parc', $request->getPost('email_parc'));
                        $ParceriaModel->set('site_parc', $request->getPost('site_parc'));
                        $ParceriaModel->set('senha_parc', $senhaCrip);

                        if ($ParceriaModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroParceria', $data);
                echo view('footer');
        }
}
