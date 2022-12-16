<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * App\Models\Employee
 *
 * @property int $id
 * @property int $departmentId
 * @property string $employeeName
 * @property \Illuminate\Support\Carbon|null $created_at
 * @property \Illuminate\Support\Carbon|null $updated_at
 * @method static \Illuminate\Database\Eloquent\Builder|employee newModelQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|employee newQuery()
 * @method static \Illuminate\Database\Eloquent\Builder|employee query()
 * @method static \Illuminate\Database\Eloquent\Builder|employee whereCreatedAt($value)
 * @method static \Illuminate\Database\Eloquent\Builder|employee whereDepartmentId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|employee whereEmployeeName($value)
 * @method static \Illuminate\Database\Eloquent\Builder|employee whereId($value)
 * @method static \Illuminate\Database\Eloquent\Builder|employee whereUpdatedAt($value)
 * @mixin \Eloquent
 */
class employee extends Model
{
    //use HasFactory; Not sure what this is for..
    protected $casts = [
        'id' => 'integer',
        'departmentId' => 'integer',
    ];
}
