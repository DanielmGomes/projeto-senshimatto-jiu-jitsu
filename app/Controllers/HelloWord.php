<?php namespace App\Controllers;

class HelloWord extends BaseController
{
	public function index()
	{
		echo "<h1>hello word</h1>";
	}

    public function hellopersonalisado($nome)
    {
        echo "<h1> hello, $nome </h1>";
    }

}
