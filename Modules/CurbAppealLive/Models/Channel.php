<?php

namespace Modules\CurbAppealLive\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\User;

class Channel extends Model
{
    use HasFactory;

    protected $fillable = [];
    
    protected $table = 'users_channels';

    protected static function newFactory()
    {
        return \Modules\ReactionGo\Database\factories\ChannelFactory::new();
    }

    public function user(){
        return $this->belongsTo( User::class );
    }
}
