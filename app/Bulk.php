<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Bulk extends Model
{
    protected $table = 'bulk';
    protected $fillable = [
        'due_amount',
        'paid_amount',
        'concession_amount',
        'scholarship_amount',
        'reverse_concession_amount',
        'write_off_amount',
        'adjusted_amount',
        'refund_amount',
        'fund_transfer_amount'
    ];
}
