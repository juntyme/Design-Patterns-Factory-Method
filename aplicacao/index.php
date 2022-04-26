<?php

abstract class Aplicacao
{
    abstract public function criaDocumento();
}

interface Documento
{
    public function abrir();
    public function fechar();
    public function gravar();
}


class MinhaAplicacao extends Aplicacao
{
    public function criaDocumento()
    {
        return new MeuDocumento();
    }
}

class MeuDocumento implements Documento
{

    public function abrir()
    {
        return 'Abrir Documento';
    }
    public function fechar()
    {
        return 'Fechar Documento';
    }
    public function gravar()
    {
        return 'Gravar Documento';
    }
}

$factory = new MinhaAplicacao;
$instance = $factory->criaDocumento();

var_dump($instance->gravar());
