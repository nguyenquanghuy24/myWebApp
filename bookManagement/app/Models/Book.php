<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

use Illuminate\Notifications\Notifiable;

class Book extends Model
{
    protected $fillable =[
        'bookName',
        'bookCode',
        'bookAuthor',
        'publishYear',
        'ISBN',
        'category',
        'description',
    ];
}
