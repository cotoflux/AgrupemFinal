<?php

namespace App\Http\Controllers;

use App\Text;
use Illuminate\Http\Request;

class TextController extends Controller
{
    public function queFem(Text $queFem)
    {
        $queFem = Text::getQueFem();
        return view('queFem',['queFem'=>$queFem]);
    }
    public function quiSom(Text $quiSom)
    {
        $quiSom = Text::getQuiSom();
        return view('quiSom', ['quiSom'=>$quiSom]);     
    }
    public function colabora()
    {
        $colabora1 = Text::getColabora1();
        $colabora2 = Text::getColabora2();
        $colabora3 = Text::getColabora3();
        return view('colabora',['colabora1'=>$colabora1, 'colabora2'=>$colabora2, 'colabora3'=>$colabora3]);     
    }
    public function update(Request $request, Text $text)
    {
        $text->update($request->all());
        return redirect()->back();
    }
    public function festeSoci()
    {
        $festeSoci = Text::getFesteSoci();
        $serveisSoci=Text::getServeisSoci();
        return view('festesoci',['festeSoci'=>$festeSoci, 'serveisSoci'=>$serveisSoci]);     
    }
}