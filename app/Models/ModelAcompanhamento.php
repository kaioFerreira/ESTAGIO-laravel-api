<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ModelAcompanhamento extends Model
{
    protected $table='dbo.acompanhamento';
    
    protected $fillable=[
        'acp_prc_id',
        'acp_plt_id',
        'acp_tipo',
        'acp_esp',
        'acp_data_cumprimento',
        'acp_data_evento',
        'acp_data_prazo',
        'acp_data_cadastro',
        'acp_data'
    ];

    public $timestamps = false;
}
