<?php

namespace App\Models;

use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;


/**
 * App\Models\Department
 *
 * @property integer $id
 * //
 * @property string $department_name
 * @property string $name_postman
 * //
 * @property integer $amount_of_used_coffee_cups
 * @property boolean $is_coffee_drinkable
 * //
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * //
 * @method static Builder|Department newModelQuery()
 * @method static Builder|Department newQuery()
 * @method static Builder|Department query()
 * //
 * @mixin Eloquent
 * @property-read \Illuminate\Database\Eloquent\Collection|\App\Models\Employee[] $employees
 * @property-read int|null $employees_count
 * @method static \Database\Factories\DepartmentFactory factory(...$parameters)
 */
class Department extends Model
{
    // Did you figure it out?
    use HasFactory;

    protected $casts = [
        'id' => 'integer',
        //
        'amount_of_used_coffee_cups' => 'integer',
        //
        'is_coffee_drinkable' => 'boolean',
    ];

    public function employees(): HasMany
    {
        return $this->hasMany(Employee::class, 'department_id', 'id');
    }
}


