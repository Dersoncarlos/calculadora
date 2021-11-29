@extends('welcome')

@section('content')

@if (count($dados) > 0)

    <h3 class="text-center" style="margin: 30px 0;">Registros</h3>

        <div id="" class="box">


            <div class="box-body">

                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <thead>
                                <tr>
                                    <th class="text-center" >ip</th>
                                    <th class="text-center" >timestamp</th>
                                    <th class="text-center" >operation</th>
                                    <th class="text-center" >result</th>
                                    <th class="text-center" >bonus</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($dados as $i => $dado)
                                    <tr>
                                        <td class="text-center">{{ $dado->ip }}</td>
                                        <td class="text-center">{{ $dado->timestamp }}</td>
                                        <td class="text-center">{{ $dado->operation }}</td>
                                        <td class="text-center">{{ $dado->result }}</td>
                                        <td class="text-center">{{ $dado->bonus }}</td>
                                    </tr>
                                @endforeach

                            </tbody>
                        </table>

                    </div>

            </div>
        </div>

@else
    <div class="alert alert-danger ">Não há registros para o período selecionado.</div>
@endif

@stop
