<?php

function printMessage($message) {
    if ($message=='success-create')
        return '<Sua conta foi registrada com sucesso!</span>';
    if ($message=='error-create')
        return '<span class="text-error">Erro ao registrar.</span>';

    if ($message=='success-remove')
        return '<span class="text-success">Registro removido com suceco!</span>';
    if ($message=='error-remove')
        return '<span class="text-error">Erro ao remover registro.</span>';

    if ($message=='success-update')
        return '<span class="text-success">Registro autualizado com sucesso!</span>';
    if ($message=='error-update')
        return '<span class="text-error">Erro ao autalizar o cadastro.</span>';
}
