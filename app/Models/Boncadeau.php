<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;


class Boncadeau extends Model
{
    use HasFactory;
    use Sortable;
    protected $connection = 'mysql2';
    protected $table = 'Bon_cadeau';
    protected $fillable = [
        'id_bonCadeau',
        'nom_destinataire',
        'titre',
        'message',
        'id_experience'
        
    ];
    public $sortable = [ 'id_bonCadeau', 'nom_destinataire', 'titre','message','id_experience'];
}
