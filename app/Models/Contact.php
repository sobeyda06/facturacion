<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\HasMany;

final class Contact extends Model
{
    public $table = "contacts";
    use HasFactory;


    protected $fillable = [
        'name',
        'identification',
        'measurer',
        'current_reading',
        'previous_reading',
        'monthly_consumption',
        'amount_payable',
        'arrears',
        'location'
    ];

    public function invoices(): HasMany
    {
        return $this->hasMany(Invoice::class);
    }
}
