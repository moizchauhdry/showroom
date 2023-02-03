<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Invoice extends Model implements Auditable
{
    use HasFactory;
    use \OwenIt\Auditing\Auditable;

    protected $guarded = [];

    public function createdByUser()
    {
        return $this->belongsTo(User::class, 'created_by', 'id');
    }

    public function updatedByUser()
    {
        return $this->belongsTo(User::class, 'updated_by', 'id');
    }
}
