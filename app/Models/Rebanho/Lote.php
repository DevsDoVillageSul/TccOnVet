<?php

namespace App\Models\Rebanho;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Lote extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;
    protected $table = "lotes";

    protected $sexos = [
        'MACHO' => 'Macho',
        'FEMEA' => 'Fêmea',
        'MISTO' => 'MISTO',
    ];

    protected $fases = [
        'CRIA' => 'Cria',
        'RECRIA' => 'Recria',
        'PRODUCAO' => 'Produção',
    ];
    
    public function scopeFiltros($query, $request)
    {
        if (isset($request->search) && $request->search != "") {
            $query->where(function ($q) use ($request) {
                $q->where('nome', 'like', "%{$request->search}%");
            });
        }
        
        return $query;
    }

    public function getSexo()
    {
        return $this->sexos[$this->sexo];
    }

    public function getSexos()
    {
        return $this->sexos;
    }

    public function getFase()
    {
        return $this->fases[$this->fase];
    }

    public function getFases()
    {
        return $this->fases;
    }
}
