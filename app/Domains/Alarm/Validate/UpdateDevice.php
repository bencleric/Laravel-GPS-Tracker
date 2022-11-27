<?php declare(strict_types=1);

namespace App\Domains\Alarm\Validate;

use App\Domains\Shared\Validate\ValidateAbstract;

class UpdateDevice extends ValidateAbstract
{
    /**
     * @return array
     */
    public function rules(): array
    {
        return [
            'related' => ['bail', 'array'],
            'related.*' => ['bail', 'integer'],
        ];
    }
}