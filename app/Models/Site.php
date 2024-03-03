<?php
namespace App\Models;

use Eloquent;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Site extends Eloquent
{
    use HasFactory;
    protected $fillable = ['url', 'da', 'dr', 'traffic', 'niche', 'news', 'price'];

}