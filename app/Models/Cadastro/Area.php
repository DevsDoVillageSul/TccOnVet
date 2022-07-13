<?php

namespace App\Models\Cadastro;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use OwenIt\Auditing\Contracts\Auditable;

class Area extends Model implements Auditable
{
    use HasFactory, \OwenIt\Auditing\Auditable;

    protected $table = "areas";
    protected $tipos = [
        'arrendada' => 'Área arrendada',
        'confinamento' => 'Área confinamento',
        'outras' => 'Outras áreas para atividade',
        'reserva' => 'Reserva Legal e App',
    ];

    public function contatos()
    {
        return $this->hasMany(FornecedorContato::class, 'fornecedor_id');
    }

    public function scopeFiltros($query, $request)
    {
        if (isset($request->search) && $request->search != "") {
            $query->where(function ($q) use ($request) {
                $q->where('nome', 'like', "%{$request->search}%");
            });
        }

        return $query;
    }

    public function scopeAtivo($query)
    {
        return $query->where('ativo', 1);
    }

    public function getTipo()
    {
        return $this->tipos[$this->tipo];
    }

    public function getTipos()
    {
        return $this->tipos;
    }
}