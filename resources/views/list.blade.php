@if (count($dados) > 0)

    <h3 class="text-center" style="margin: 30px 0;">Registros</h3>

    @foreach ($dados as $index => $registros)
        <div id="" class="box boxRegistros">
            <div class="box-header with-border">
                <h3 class="box-title" style="margin-top: 10px;">{{ $index }}</h3>
                <div class="box-tools pull-right">
                    <button id="" type="button" class="btn btn-box-tool buttonRegistros" data-widget="collapse">
                        <i class="fa fa-minus"></i>
                    </button>
                </div>
            </div>

            <div class="box-body">
                @foreach ($registros as $index => $data)
                    <div class="table-responsive">
                        <table class="table table-bordered table-hover">
                            <h3>{{ $index }}</h3>
                            <thead>
                                <tr>
                                    <th class="text-center" style="width: 20%;">Horário</th>
                                    <th class="text-center" style="width: 35%;">Terminal</th>
                                    <th class="text-center" style="width: 35%;">Código</th>
                                    <th class="text-center" style="width: 10%">Localização</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $i => $dado)
                                    <tr>
                                        <td class="text-center">{{ date('H:i', strtotime($dado->data)) }}</td>
                                        <td class="text-center">
                                            {{ !empty($dado->terminalNome) ? $dado->terminalNome : 'Sem terminal' }}
                                        </td>
                                        <td class="text-center">
                                            {{ !empty($dado->codigo) ? $dado->codigo : 'Ponto sem QRCode' }}
                                        </td>

                                    </tr>
                                @endforeach

                            </tbody>
                        </table>
                        <button type="button" class="btn btn-default pull-right">Imprimir</button>
                    </div>
                @endforeach
            </div>
        </div>
    @endforeach

    <div class="box-footer text-center">
        @if (!$dados->links() == null)
            {{ $dados->links() }}
        @endif
    </div>

@else
    <div class="alert alert-danger ">Não há registros para o período selecionado.</div>
@endif
