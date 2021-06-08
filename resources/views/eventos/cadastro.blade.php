@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">
            <div class="card">
                <div class="card-header"> Cadastro De Eventos </div>

                <div class="card-body">
                      <form action="{{ route('cadastro.pessoa') }}" method="POST">
                        @csrf
                        <div class="row">
                            <div class="col-md-12">
                                <div class="form-group">
                                    <label for="" class="form-label">Nome Do Evento *</label>
                                    <input type="text" placeholder="Nome Do Evento" name="nome" class="form-control">
                                    @if ($errors->has('nome'))
                                        <div class="text-danger">
                                            <li>{{ $errors->first('nome') }}</li>
                                        </div>
                                    @endif
                                </div>
                               
    
                                <div class="form-grop mt-3">
                                  <label for="" class="form-label">Descrição Do Evento *</label>
                                  <textarea name="descricao" placeholder="Descrição Do Evento" class="form-control" cols="30" rows="10"></textarea>
                                    @if ($errors->has('telefone'))
                                        <div class="text-danger">
                                            <li>{{ $errors->first('telefone') }}</li>
                                        </div>
                                    @endif
                                </div>
    
                                <div class="form-group mt-3">
                                  <label for="" class="form-label">Data Do Evento *</label>
                                    <input type="date" placeholder="Data Do Evento" name="hora_evento" class="w-25 form-control">
                                    @if ($errors->has('apelido'))
                                        <div class="text-danger">
                                            <li>{{ $errors->first('apelido') }}</li>
                                        </div>
                                    @endif
                                </div>

                                  <div class="form-group mt-3">
                                    <label for="" class="form-label">Endereço Do Evento *</label>
                                    <select name="id_endereco" class="form-control w-50" aria-label="Default select example">
                                        <option value="">Selecione</option>
                                    </select>
                                    @if(isset($endereco) && $endereco != '')
                                       <p class="text-danger mt-3"> <strong>Observação:</strong> No momento você não possui nenhum endereço cadastrado, clique <a href="">aqui</a> para cadastrar. </p>
                                    @endif
                                    @if ($errors->has('apelido'))
                                        <div class="text-danger">
                                            <li>{{ $errors->first('apelido') }}</li>
                                        </div>
                                    @endif
                                </div>
                           </div>
                           
    
                           <div class="d-flex justify-content-center col-12 mt-5">
                               <a href="/pessoa" class="btn btn-secondary mr-3"> Voltar </a>    
                               <button class="btn btn-dark" id="salvar_pessoa"> Salvar </button>
                           </div>

                           <!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal">
                          Launch demo modal
                        </button>

                  
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/eventos/cadastro.js') }}"></script> 

@endsection

