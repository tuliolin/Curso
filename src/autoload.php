<?php

spl_autoload_register (function ($classe)
{
    $prefixo = "App\\";

    $diretorio = __DIR__ . '/src/';

    if (strncmp($prefixo, $classe, strlen($prefixo)) !== 0) {
        return;
    }

    $namespace = substr($classe, strlen($prefixo));

    $namescape_arquivo = str_replace('\\', DIRECTORY_SEPARATOR, $namespace);

    $arquivo = $diretorio . $namescape_arquivo . '.php';
}
);