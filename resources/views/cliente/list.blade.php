<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Listar Clientes') }}
        </h2>
    </x-slot>

    <div class="py-12">

        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="py-4 px-4 bg-white overflow-hidden shadow-sm sm:rounded-lg" style="overflow: auto">
                <table class="table">
                    <thead>
                      <tr>
                        <th scope="col">Código</th>
                        <th scope="col">Nome</th>
                        <th scope="col">Endereço</th>
                        <th scope="col">Bairro</th>
                        <th scope="col">CEP</th>
                        <th scope="col">Cidade</th>
                        <th scope="col">Estado</th>
                        <th scope="col">Ação</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ($clientes as $cliente)
                            <tr>
                                <td>{{$cliente->id}}</td>
                                <td>{{$cliente->nome}}</td>
                                <td>{{$cliente->endereco}}</td>
                                <td>{{$cliente->bairro}}</td>
                                <td>{{$cliente->cep}}</td>
                                <td>{{$cliente->cidade}}</td>
                                <td>{{$cliente->estado}}</td>
                                <td>
                                     <a href="{{ route('apagar-cliente', ['id' => $cliente->id]) }}" class="btn btn-excluir" onclick="event.preventDefault(); { window.location.href = '{{ route('apagar-cliente', ['id' => $cliente->id]) }}'; }">
                                        Excluir
                                    </a> &nbsp;
                                    <a href="editar-cliente/{{$cliente->id}}" class="btn btn-editar">Editar</a> 

                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                  </table>

                  <style>
                    .table{
                        width: 100%;
                    }

                    th, td{
                        padding: 10px 10px;
                        border: 1px solid #d3d3d3;
                    }

                    .col, tr{
                        text-align: center!important;
                    }

                    .btn{
                        padding: 5px 20px;
                        border: 1px solid transparent;
                        border-radius: 4px;
                        font-size: 15px;
                        transition: 0.5s;
                        cursor: pointer;
                    }

                    .btn-excluir{
                        background: #e8173c;
                        color: #fff;
                    }

                    .btn-editar{
                        background: #1F2937;
                        color: #fff;
                    }
                  </style>

            </div>
        </div>
    </div>
</x-app-layout>