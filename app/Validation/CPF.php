<?php

namespace App\Validation;

class CPF
{

    /**
     * Método responsável por verificar se um CPF é realmente válido
     * @param string $cpf
     * @return boolean
     */
    public static function validar($cpf)
    {
        //OBTEM SOMENTE OS NÚMEROS
        $cpf = preg_replace('/\D/', '', $cpf);

        //VERIFICA A QUANTIDADE DE CARACTERES
        if (strlen($cpf) != 11) {
            return false;
            // echo "CPF possui uma quantidade de caracteres maior ou menor do que o correto";
        }
        /* echo "<pre>";
        print_r($cpf);
        echo "</pre>"; */

        //DIGITO VERIFICADOR
        $cpfValidacao = substr($cpf, 0, 9);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);
        $cpfValidacao .= self::calcularDigitoVerificador($cpfValidacao);

        //COMPARA O CPF CALCULADO COM O CPF ENVIADO
        return $cpfValidacao == $cpf;

    }

    /**
     * Método responsável por calcular um digito verificador com base em uma sequência númerica
     * @param string $base
     * @return string
     */
    public static function calcularDigitoVerificador($base)
    {
        $tamanho = strlen($base);
        $multiplicador = $tamanho + 1;

        //SOMA
        $soma = 0;

        //ITERA OS NÚMEROS DO CPF`
        for ($i = 0; $i < $tamanho; $i++) {
            $soma += $base[$i] * $multiplicador;
            $multiplicador--;
        }

        $resto = $soma % 11;
        

        return $resto > 1 ? 11 - $resto : 0;
    }
}
