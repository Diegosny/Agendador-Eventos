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
                                        <input type="hidden" name="qtd_endereco" value="{{ count($endereco) }}"> 
                                        @if(isset($endereco) && count($endereco) <= 0)
                                          <p class="text-danger mt-3"> <strong>Observação:</strong> No momento você não possui nenhum endereço cadastrado, clique <a href="" data-toggle="modal" data-target="#exampleModal">aqui</a> para cadastrar. </p>
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

                                <!-- Modal -->
                                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                  <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                      <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel">Cadastro De Endereço</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                          <span aria-hidden="true">&times;</span>
                                        </button>
                                      </div>
                                      <div class="modal-body">
                                        <div id="formulario_endereco">
                                          <meta name="csrf-token" content="{{ csrf_token() }}">
                                          <div class="form-group">
                                            <label for="">Localidade*</label>
                                              <input type="text" name="localidade" class="form-control" placeholder="Localidade">
                                          </div>

                                          <div class="form-group">
                                            <label for="">Número*</label>
                                            <input type="number" name="numero" class="form-control" placeholder="Número">
                                          </div>

                                          <div class="form-group">
                                            <label for="">Rua*</label>
                                            <input type="text" name="rua" class="form-control" placeholder="Rua">
                                          </div>

                                          <div class="form-group">
                                            <label for="">Zona*</label>
                                            <select name="zona" class="form-control" id="">
                                              <option value="">Selecione</option>
                                              <option value="Urbana">Urbana</option>
                                              <option value="Rural">Rural</option>
                                            </select>
                                          </div>

                                          <div class="form-group">
                                            <input type="hidden" name="id_user" value="{{ Auth::user()->id }}" class="form-control" placeholder="Rua">
                                          </div>                                        
                                        </div> 

                                      </div>
                                      <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancelar</button>
                                        <button type="button" id="salvar_endereco" class="btn btn-primary">Salvar</button>
                                      </div>
                                    </div>
                                  </div>
                                </div>
                          </div>
                      </form>
                </div>
            </div>
        </div>
    </div>
</div>

<script src="{{ asset('js/eventos/cadastro.js') }}"></script> 
@endsection
</body>

