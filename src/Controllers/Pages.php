<?php

namespace PlusTimeIT\EasyForms\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class Pages extends Controller
{
    protected $form_namespace = 'PlusTimeIT\\EasyForms\\Forms\\';

    public function example(request $request)
    {
        $example_id = $request->example_id ?? 1;
        $form_class = "{$this->form_namespace}ExampleForm{$example_id}";

        if ($example_id < 4) {
            return view('laravel-easyforms::examples.example-template')
                ->with('load', $example_id == 1 ? 'page' : 'axios')
                ->with('example', $example_id == 1 ? (new $form_class())->preFill() : (new $form_class()));
        }

        $userList = Users::getAllUsers();

        return view('laravel-easyforms::examples.example-'.$example_id)
            ->with('load', 'axios')
            ->with('userList', $userList)
            ->with('example', new $form_class());
    }

    public function exampleHome(request $request)
    {
        return view('laravel-easyforms::examples.example-home');
    }

    public function exampleWithData(request $request)
    {
        $example_id = $request->example_id ?? 1;
        $form_class = "{$this->form_namespace}ExampleForm{$example_id}";

        return view('laravel-easyforms::examples.example-template')
            ->with('load', 'axios')
            ->with('example', $form_class::fill($request));
    }
}
