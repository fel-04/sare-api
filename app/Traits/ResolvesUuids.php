<?php

namespace App\Traits;

use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Model;

trait ResolvesUuids
{
    protected function resolveUuidsToIds(): void
    {
        foreach ($this->all() as $key => $value) {

            // Solo campos que terminen en _uuid
            if (!Str::endsWith($key, '_uuid')) {
                continue;
            }

            if (empty($value)) {
                continue;
            }

            // Inferimos el nombre del campo id
            $idField = Str::replaceLast('_uuid', '_id', $key);

            // Inferimos el modelo (convención)
            $modelClass = $this->guessModelFromField($key);

            if (!class_exists($modelClass)) {
                continue;
            }

            /** @var Model $model */
            $model = $modelClass::where('uuid', $value)->first();

            if ($model) {
                $this->merge([
                    $idField => $model->id,
                ]);
            }
        }
    }

    protected function guessModelFromField(string $field): ?string
    {
        $name = Str::studly(Str::replaceLast('_uuid', '', $field));

        return "App\\Models\\{$name}";
    }
}