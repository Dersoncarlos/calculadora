<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Registro;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index(Request $request)
    {
        $ip = $request->ip();
        return view('index', compact('ip'));
    }

    public function calculator(Request $request)
    {
        $msg = 'Registro salvo/calculado com sucesso';
        $calc = $this->calculo($request->data);
        $code = 200;
        $res = [];
        // dd($calc);
        if ($calc['ok']) {
            $registro = new Registro();

            $registro->ip = $request->ip();
            $registro->timestamp = time();
            $registro->operation = $calc['expressao'];
            $registro->result = $calc['calculo'];
            $registro->bonus = 123;

            $res = $registro->save();
        } else {
            $msg = $calc['msg'];
            $code = 500;
        }

        return $this->customResponse($res, $msg, $code);
    }

    protected function calculo($string)
    {
        $formmated = preg_split('~(?<=\d)([*%/+-])~', $string, -1, PREG_SPLIT_NO_EMPTY | PREG_SPLIT_DELIM_CAPTURE);
        $valor['expressao'] = '';
        $valor['calculo'] = 0;
        $valor['ok'] = true;

        $valorCalculado = 0;
        $arrOperadores = ['*', '%', '/', '+', '-'];

        $valores = $arrOperador = [];
        foreach ($formmated as $v) {

            $valor['expressao'] .= $v;
            if (!in_array($v, $arrOperadores)) {
                $valores[] = $v;
            } else {
                $arrOperador[] = $v;
            }
        }

        for ($i = 0; $i < count($valores); $i++) {

            if (!empty($arrOperador[$i])) {
                switch ($arrOperador[$i]) {
                    case '-':
                        $valorCalculado = (($i == 0 ? $valores[$i] : $valorCalculado) - $valores[$i + 1]);
                        break;
                    case '*':
                        $valorCalculado =  (($i == 0 ? $valores[$i] : $valorCalculado) * $valores[$i + 1]);
                        break;
                    case '%':
                        $valorCalculado =  (($i == 0 ? $valores[$i] : $valorCalculado) % $valores[$i + 1]);
                        break;
                    case '/':
                        if ($valores[$i + 1] == 0) {
                            $valor['msg'] = 'erro ao tentar divir por 0';
                            $valor['ok'] = false;
                        } else {
                            $valorCalculado = (($i == 0 ? $valores[$i] : $valorCalculado) / $valores[$i + 1]);
                        }
                        break;

                    default:
                        $valorCalculado = (($i == 0 ? $valores[$i] : $valorCalculado) + $valores[$i + 1]);
                        break;
                }
            }
        }

        $valor['calculo'] = $valorCalculado;
        return $valor;
    }

    public function list()
    {
        $registro = new Registro();
        $dados[''] = $registro->get();
        return view('list', compact('ip'));
    }
}
