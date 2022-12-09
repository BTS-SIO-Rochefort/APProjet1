<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Utilisateur extends Model
{
    use HasFactory;
    protected $fillable=['nom', 'prenom','dateNaiss','classe','statut', 'numTel','adressMail'];

    public function messages()
    {
        return $this->hasMany (Message::class);
    }
}
