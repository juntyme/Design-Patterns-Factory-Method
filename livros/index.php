<?php

interface LivroFactoryInterface
{
    public function make(string $category): LivroInterface;
}

class LivroFactory implements LivroFactoryInterface
{
    public function make(string $category): LivroInterface
    {
        switch ($category) {
            case 'drama':
                return new Drama;
                break;
            case 'Comedy':
                return new Comedy;
                break;
            default:
                throw new Exception("Categoria {$category} não encontrada");
        }
    }
}

interface LivroInterface
{
    public function info();
}

class Comedy implements LivroInterface
{
    public function info()
    {
        return 'Livro de Comédia';
    }
}

class Drama implements LivroInterface
{
    public function info()
    {
        return 'Livro de Drama';
    }
}

$factory = new LivroFactory;
$instance = $factory->make('drama');

var_dump($instance->info());
