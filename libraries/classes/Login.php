<?php

/**
 * Created by PhpStorm.
 * User: manuelernesto
 * Date: 2/15/16
 * Time: 11:17 PM
 */
class libraries_Classes_Login
{
    public function logar($tipo, $eamil, $senha)
    {
        switch ($tipo) {
            case 'professor':
                $logar = new libraries_classes_Professor();
                break;

            case 'aluno':
                $logar = new libraries_classes_Aluno();
                break;
        }

        return $logar->logar($eamil, $senha);
    }
}