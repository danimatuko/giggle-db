<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Joke Model
 *
 * Represents a joke with a setup and a punchline.
 *
 * @property int $id
 * @property string $setup
 * @property string $punchline
 */
class Joke extends Model
{
    use HasFactory;

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'jokes';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = ['setup', 'punchline'];
}
