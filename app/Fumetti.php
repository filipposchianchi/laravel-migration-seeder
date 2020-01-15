<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Fumetti extends Model {

    //protected $table = "fumetti";

    protected $fillable = [
        "titolo", "autore", "anno", "recensione", "voto"
    ];
}
?>