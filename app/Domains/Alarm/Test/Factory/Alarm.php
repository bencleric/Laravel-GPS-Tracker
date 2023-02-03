<?php declare(strict_types=1);

namespace App\Domains\Alarm\Test\Factory;

use Illuminate\Database\Eloquent\Factories\Factory as FactoryEloquent;
use App\Domains\Alarm\Model\Alarm as Model;

class Alarm extends FactoryEloquent
{
    /**
     * @var string
     */
    protected $model = Model::class;

    /**
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'type' => 'movement',
            'enabled' => true,

            'created_at' => date('Y-m-d H:i:s'),
            'updated_at' => date('Y-m-d H:i:s'),
        ];
    }
}