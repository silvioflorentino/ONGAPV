<?php

namespace App\Controllers;

class VoluntarioController extends BaseController
{
        public function voluntario()
        {
                echo view('header');
                echo view('cadastroVoluntario');
                echo view('footer');
        }
        public function inserirVoluntario()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $VoluntarioModel = new \App\Models\VoluntarioModel();

                        $opcao = ['cost' => 8];
                        $senhaCrip = password_hash($request->getPost('senha_vol'), PASSWORD_BCRYPT, $opcao);

                        $VoluntarioModel->set('nm_vol', $request->getPost('nm_vol'));
                        $VoluntarioModel->set('email_vol', $request->getPost('email_vol'));
                        $VoluntarioModel->set('cpf_vol', $request->getPost('cpf_vol'));
                        $VoluntarioModel->set('nm_logra_vol', $request->getPost('nm_logra_vol'));
                        $VoluntarioModel->set('num_logra_vol', $request->getPost('num_logra_vol'));
                        $VoluntarioModel->set('cep_vol', $request->getPost('cep_vol'));
                        $VoluntarioModel->set('dt_nasc_vol', $request->getPost('dt_nasc_vol'));
                        $VoluntarioModel->set('ativ_vol', $request->getPost('ativ_vol'));
                        $VoluntarioModel->set('senha_vol', $senhaCrip);

                        if ($VoluntarioModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroVoluntario', $data);
                echo view('footer');
        }
}
