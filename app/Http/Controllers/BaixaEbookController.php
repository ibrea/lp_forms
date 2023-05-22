<?php

namespace App\Http\Controllers;

use App\Mail\BaixaEbook;
use App\Mail\NotificarSolicitacao;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class BaixaEbookController extends Controller
{
    public function sendEmail(Request $request)
    {
        $request->validate([
            "nome" => ['required', 'max:255'],
            "email" => ['required', 'email', 'max:255'],
            "empresa" => ['required', 'max:255'],
            "n_col_empresa" =>  ['required', 'max:255'],
            "cargo" => ['required', 'max:255'],
            "qual_area_trabalha" => ['required', 'max:255'],
            "quantos_estagios" =>  ['required', 'max:255'],
            "possui_aprendiz" => ['required', 'max:255'],
        ], [], [
            "n_col_empresa" =>  'número de colaboradores',
            "qual_area_trabalha" => 'área/departamento',
            "quantos_estagios" =>  'possui estagiários',
            "possui_aprendiz" => 'possui aprendizes',
        ]);

        $data = $request;
        Mail::to($request->email)->send(new BaixaEbook($data));
        Mail::to(env('EMAIL_NOTIFICATION'))->send(new NotificarSolicitacao($data));

        return redirect()->back()->with('email_success', true);
    }
}
