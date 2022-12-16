<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;


/**
 * App\Models\Department
 *
 * @property integer $id
 * @property string $departmentName
 * @property string $namePostman
 * @property integer $amountOfUsedCoffeeCups
 * @property boolean $isCoffeeDrinkable
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|Department newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|Department query()
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereAmountOfUsedCoffeeCups($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereDepartmentName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereIsCoffeeDrinkable($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereNamePostman($value)
 * @method static \Illuminate\Database\Eloquent\Builder|Department whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class Department extends Model
{
    //use HasFactory; not sure what this is for.
    protected $casts = [
        'id' => 'integer',
        'amountOfUsedCoffeeCups' => 'integer',
        'isCoffeeDrinkable' => 'boolean',
    ];
}


