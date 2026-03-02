<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\CaesarCipher;

class CaesarCipherController extends Controller
{
    public function index()
    {
        return view('caesar');
    }

    public function process(Request $request)
    {
        $request->validate([
            'text' => 'required',
            'shift' => 'required|integer'
        ]);

        $text = $request->text;
        $shift = $request->shift;
        $type = $request->type;

        if ($type === 'encrypt') {
            $result = CaesarCipher::encrypt($text, $shift);
        } else {
            $result = CaesarCipher::decrypt($text, $shift);
        }

        return view('caesar', compact('text', 'shift', 'type', 'result'));
    }
}
