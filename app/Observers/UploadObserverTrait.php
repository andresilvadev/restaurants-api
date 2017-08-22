<?php

namespace App\Observers;

use Illuminate\Http\UploadedFile;
use Illuminate\Support\Facades\Storage;

trait UploadObserverTrait
{
    protected function sendFile($model)
    {
        $field = $this->field;

        if($model->$field->isValid()){
            $this->upload();
        }

    }

    protected function removeFile($model)
    {
        $field = $this->field;
        Storage::delete($this->path . $model->$field);
    }

    protected function updateFile($model)
    {
        $field = $this->field;
        if(is_a($model->$field, UploadedFile::class) and $model->$field->isValid()){
            $previous_image = $model->getOriginal($field);
            $this->upload($model);

            Storage::delete($this->path . $previous_image);
        }
    }

    protected function upload($model)
    {
        /**
         * Pega o campo do banco de dados que vai ser salvo
         */
        $field = $this->field;

        /**
         * Gera um nome randomico com a extensão
         */
        $extension = $model->$field->extension();
        $name = bin2hex(openssl_random_pseudo_bytes(8));
        $name = $name . '.' . $extension;

        /**
         * Envia os dados para a amazon
         */
        $model->$field->storeAs($this->path, $name);

        /**
         * Atualizo com o name
         */
        $model->$field = $name;

    }
}