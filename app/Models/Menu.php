<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Menu extends Model
{
    use HasFactory;

    /**
     * The attributes that are mass assignable.
     *
     * @var list<string>
     */
    protected $fillable = [
        'name',
        'url',
        'icon',
        'parent_id',
        'sort_order',
        'status',
    ];

    /**
     * The parent menu of this menu.
     */
    public function parent()
    {
        return $this->belongsTo(Menu::class, 'parent_id');
    }

    /**
     * The child (sub) menus under this menu.
     */
    public function children()
    {
        return $this->hasMany(Menu::class, 'parent_id');
    }

    /**
     * Order the results hierarchy-first: parents before children, then by sort order.
     */
    public function scopeParentsFirst($query)
    {
        return $query
            ->orderByRaw('parent_id IS NOT NULL')
            ->orderBy('parent_id')
            ->orderBy('sort_order');
    }
}
