<?php

namespace App\Http\Controllers;

use Orion\Http\Controllers\Controller;
use App\Models\Municipio;

class MunicipioController extends Controller
{
    protected $model = Municipio::class;

    public function disableAuthorization(): bool
    {
        return true;
    }

    public function resolveUser()
    {
        return null;
    }
}
