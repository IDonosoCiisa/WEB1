<?php
namespace App\Http\Controllers;
use App\Providers\gateway\UfGateway;

class UFController extends Controller

{
    protected $ufGateway;

    public function __construct(UfGateway $ufGateway)
    {
        $this->ufGateway = $ufGateway;
    }

    public function getUf()
    {
        $uf = $this->ufGateway->getUf();
        return view('ufView', compact('uf'));
    }
}
