<?php

namespace App\Controllers\PokedexController;

use App\controllers\BaseController;

class Pokedex extends BaseController
{
    public function index()
    {
        return view('pokedex\pokedex');
    }
    
    public function create()
    {
        return view('pokedex\create');
    }
    
    public function store()
    {
        echo "store";
    }

    public function show()
    {
        echo "show";
    }
    
    public function edit($id)
    {
        echo "edit";
    }
    
    public function update($id)
    {
        echo "update";
    }

    public function destroy($id)
    {
        echo "eliminar";
    }
}