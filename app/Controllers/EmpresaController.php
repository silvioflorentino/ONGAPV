<?php

namespace App\Controllers;

class EmpresaController extends BaseController
{

        public function empresa()
        {
                echo view('cadastroEmpresa');
        }


        public function inserirEmpresa()
        {
                $data['msg'] = '';
                $request = service('request');
                if ($request->getMethod() === 'post') {
                        $EmpresaModel = new \App\Models\EmpresaModel();

                        $opcao = ['cost' => 8];

                        $senhaCrip = password_hash($request->getPost('senha_emp'), PASSWORD_BCRYPT, $opcao);

                        $EmpresaModel->set('tp_logra_emp', $request->getPost('tp_logra_emp'));
                        $EmpresaModel->set('nm_logra_emp', $request->getPost('nm_logra_emp'));
                        $EmpresaModel->set('num_logra_emp', $request->getPost('num_logra_emp'));
                        $EmpresaModel->set('bairro_emp', $request->getPost('bairro_emp'));
                        $EmpresaModel->set('cidade_emp', $request->getPost('cidade_emp'));
                        $EmpresaModel->set('cep_emp', $request->getPost('cep_emp'));
                        $EmpresaModel->set('cnpj_emp', $request->getPost('cnpj_emp'));
                        $EmpresaModel->set('email_emp', $request->getPost('email_emp'));
                        $EmpresaModel->set('nm_rz_social_emp', $request->getPost('nm_rz_social_emp'));
                        $EmpresaModel->set('nm_fantasia_emp', $request->getPost('nm_fantasia_emp'));
                        $EmpresaModel->set('site_emp', $request->getPost('site_emp'));
                        $EmpresaModel->set('senha_emp', $senhaCrip);

                        if ($EmpresaModel->insert()) {
                                $data['msg'] = "Informações cadastradas com sucesso";
                        } else {
                                $data['msg'] = "Informações não cadastradas";
                        }
                }

                echo view('header');
                echo view('cadastroEmpresa', $data);
                echo view('footer');
        }
}
