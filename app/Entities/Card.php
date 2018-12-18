<?php
namespace App\Entities;
use Illuminate\Database\Eloquent\Model;
class Card extends Model
{
    protected $table="cards";
    protected $primaryKey="id";
    protected $fillable=[
    	'userid','articleid',
    ];
    protected $dates=[
    	'created_at','updated_at'
    ];
}

