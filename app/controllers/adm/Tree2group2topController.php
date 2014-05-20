<?php

use Admin\Eloquent\Tree2group2top as Tgt;

class Tree2group2topController extends Controller
{
    public function show()
    {
        $tree2group2top = Tgt::all();
        var_dump($tree2group2top);

        return View::make('adm.nastaveni.tree2group2top.show')->with('tree2group2top', $tree2group2top);
    }

}