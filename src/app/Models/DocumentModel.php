<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use App\Models\CategoryModel;

class DocumentModel extends Model
{
    use SoftDeletes, HasFactory;

    protected $table = 'documents';

    /**
     * The attributes that are mass assignable.
     *
     * @var string[]
     */
    protected $fillable 
        = [
            'title',
            'content',
            'category_id',
        ];

    protected $casts
        = [
            'category_id' => 'integer',
        ];

    public function category(): BelongsTo
    {
        return $this->belongsTo(CategoryModel::class, 'category_id');
    }
}