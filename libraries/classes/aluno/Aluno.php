<?php

/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 8:21 PM
 */
class libraries_classes_Aluno extends models_Aluno
{
    public function logar($mail, $senha)
    {
        $dados_aluno = parent::find('all', array('conditions' => array('aluno_email=? AND aluno_senha=?', $mail, $senha)));
        if (count($dados_aluno) == 1):
            $_SESSION['aluno_logado'] = true;
            $_SESSION['aluno_lnome'] = $dados_aluno[0]->aluno_nome;
            $this->redirecionar();
        return true;
        endif;
    }


    private function redirecionar()
    {
        if (isset($_SESSION['aluno_logado'])):
            header('location: painel/aluno/');
        endif;
    }
}