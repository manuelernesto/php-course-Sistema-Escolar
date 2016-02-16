<?php

/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 8:21 PM
 */
class libraries_classes_Professor extends models_Professor
{
    public function logar($mail, $senha)
    {
        $dados_professor = parent::find('all', array('conditions' => array('prof_email=? AND prof_senha=?', $mail, $senha)));


        if (count($dados_professor) == 1):
            $_SESSION['professor_logado'] = true;
            $_SESSION['professor_lnome'] = $dados_professor[0]->prof_nome;
            $this->redirecionar();

            return true;
        endif;
    }


    private function redirecionar()
    {
        if (isset($_SESSION['professor_logado'])):
            header('location: painel/professor/');
        endif;
    }
}