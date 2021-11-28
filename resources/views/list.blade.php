@extends('welcome')

@section('content')

    <div class="container">

        <div class="row" style="padding-bottom: 10%">
            <div class="col-6 ">
                <h4>Calculadora</h4>
            </div>
            <div class="col-6 text-right">
                <?= $ip ?>
            </div>
        </div>

        <div class="row">
            <div class="col">
                <div id='dadosCalculo' style="background-color: #8080801a; padding-bottom: 5%">&nbsp;&nbsp;</div>
            </div>
        </div>
        <hr/>
        <div class="card">
            <div class="card-body">
        <div class="row" style="padding-bottom: 2%">
            <div class="col">
                <button type="button" class="btn btn-outline-warning btn-block limpar">LIMPAR</button>
            </div>
        </div>
        {{-- <hr/> --}}
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-outline-warning btn-block number operador" value="%">MOD</button>
            </div>
            <div class="col-6">
                <button type="button" class="btn btn-outline-warning btn-block number operador" value="/">
                    dividir
                </button>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="7">7</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="8">8</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="9">9</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning btn-block number operador" value="*"> Multiplicar </button>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="4">4</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="5">5</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="6">6</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning btn-block number operador" value="-"> Subtratir </button>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="1">1</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="2">2</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value="3">3</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning btn-block number operador" value="+">Somar</button>
            </div>
        </div>
        <hr/>
        <div class="row">
            <div class="col-6">
                <button type="button" class="btn btn-secondary btn-block number" value="0">0</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-secondary btn-block number" value=",">,</button>
            </div>
            <div class="col">
                <button type="button" class="btn btn-warning btn-block" id="calcular">=</button>
            </div>
        </div>
    </div>
        </div>
    </div>
@stop
