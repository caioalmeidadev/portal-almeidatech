<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Enums\ClientStatus;

class Client extends Model
{
    protected $fillable = [
        'razao_social','nome_fantasia','responsavel_um','responsavel_dois',
        'segment_id','telefone','celular','email','cnpj',
        'endereco','bairro','numero','nfe','nfce','nfse','sped','status'
    ];

    public function segment()
    {
        return $this->belongsTo(Segment::class);
    }

    public function tickets()
    {
        return $this->hasMany(Ticket::class);
    }


    public function setCnpjAttribute($value)
    {
        $this->attributes['cnpj'] = unformatter($value,'cnpj');
    }

    public function getCnpjAttribute($value)
    {
        return cnpj($value);
    }

    public function getTelefoneAttribute($value)
    {
        return fone($value);
    }

    public function getCelularAttribute($value)
    {
        return fone($value);
    }

    public function setTelefoneAttribute($value)
    {
        $this->attributes['telefone'] = unformatter($value,'phone');
    }

    public function setCelularAttribute($value)
    {
        $this->attributes['celular'] = unformatter($value,'phone');
    }

    public function setRazaoSocialAttribute($value)
    {
        $this->attributes['razao_social'] = strtoupper($value);
    }

    public function setNomeFantasiaAttribute($value)
    {
        $this->attributes['nome_fantasia'] = strtoupper($value);
    }

    public function setResponsavelUmAttribute($value)
    {
        $this->attributes['responsavel_um'] = strtoupper($value);
    }

    public function setResponsavelDoisAttribute($value)
    {
        $this->attributes['responsavel_dois'] = strtoupper($value);
    }

    public function setEnderecoAttribute($value)
    {
        $this->attributes['endereco'] = strtoupper($value);
    }

    public function setBairroAttribute($value)
    {
        $this->attributes['bairro'] = strtoupper($value);
    }
    public function getStatusAttribute($value)
    {
        return ClientStatus::getKey($value);
    }

    public function setStatusAttribute($value)
    {
        $this->attributes['status'] = $value;
    }
}
