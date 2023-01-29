<?php

namespace App\Models;

//use Illuminate\Database\Eloquent\Factories\HasFactory;
use Carbon\Carbon;
use Eloquent;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Support\Collection;

/**
 * App\Models\Employee
 *
 * @property int $id
 * //
 * @property int $department_id
 * @property string $employee_name
 * //
 * @property Carbon $created_at
 * @property Carbon $updated_at
 * //
 * @property-read Department|null $department
 * @property-read Collection|Employee[] $colleagues
 * //
 * @method static Builder|employee newModelQuery()
 * @method static Builder|employee newQuery()
 * @method static Builder|employee query()
 * //
 * @mixin Eloquent
 */
class Employee extends Model
{
    //use HasFactory; Not sure what this is for..
    protected $casts = [
        'id' => 'integer',
        'department_id' => 'integer',
    ];

    public function department(): BelongsTo
    {
        return $this->belongsTo(Department::class, 'department_id', 'id');
    }

    public function colleagues(): HasMany
    {
        return $this->hasMany(static::class, 'department_id', 'department_id');
    }

    public function findColleagues(): Collection
    {
        return static::where('department_id', $this->department_id)->get();
    }
}
