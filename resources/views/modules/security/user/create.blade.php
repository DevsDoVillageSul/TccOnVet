@extends('layouts/contentLayoutMaster')

@section('title', 'Usuários')

@section('content')
<div class="row">
    <div class="col-lg-12 col-12">
        <div class="card">
            <div class="card-header">
                <h3>Cadastro de Usuários</h3>
            </div>
            <div class="card-body">
                <form id="formUserData" action="{{ url('data/security/user/save') }}" class="form">
                    <input type="hidden" name="id" id="id" value="{{ $user->id ?? '0' }}" />
                    <div class="row">                        
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Nome</label>
                                <input type="text" name="name" class="form-control" id="name" 
                                placeholder="Digite o Nome" required value="{{ $user->name ?? '' }}" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Função</label>
                                <input type="text" name="jobtitle" class="form-control" id="jobtitle" 
                                placeholder="Digite a Função" value="{{ $user->jobtitle ?? '' }}" />
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Nível de Acesso</label>
                                <select name="role_id" id="role_id" class="form-control" required>
                                    <option value="" >Selecione:</option>
                                    @foreach($roles as $role)
                                    <option value="{{ $role->id }}" {{$role->id == $user->role_id ?'selected="selected"' : '' }}  >  {{ $role->name }} </option>
                                    @endforeach                                   
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Página Inicial</label>
                                <select name="home_id" id="home_id" class="form-control" required>
                                    <option value="" >Selecione:</option>
                                    @foreach($permissions as $permission)
                                    <option value="{{ $permission->id }}"
                                        {{ $permission->url == "" ? 'disabled="disabled"' : '' }}
                                    >
                                        {{ __('locale.'.$permission->name) }}
                                    </option>
                                        @foreach($permission->permissions as $filho)
                                        <option value="{{ $filho->id }}"
                                            {{ $filho->url == "" ? 'disabled="disabled"' : '' }} {{$filho->id == $user->home_id ?'selected="selected"' : '' }}
                                        >
                                            &nbsp;&nbsp; ->
                                            {{ __('locale.'.$filho->name) }}
                                        </option>
                                        @endforeach
                                    @endforeach
                                </select>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">E-mail</label>
                                <input type="email" name="email" class="form-control" id="email" 
                                placeholder="Digite o E-mail" required value="{{ $user->email ?? '' }}"/>
                                <small class="form-text text-muted">Será utilizado para acesso ao Sistema</small>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Senha</label>
                                <input type="password" name="password" class="form-control" id="password" 
                                placeholder="Digite a Senha" />
                                <small class="form-text text-muted">Será utilizado para acesso ao Sistema</small>
                            </div>
                        </div> 
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Telefone</label>
                                <input type="text" name="phone" class="form-control" id="phone" 
                                placeholder="Digite o Telefone"  value="{{ $user->phone ?? '' }}"/>
                            </div>
                        </div>
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label" for="nome">Celular</label>
                                <input type="text" name="cellphone" class="form-control" id="cellphone" 
                                placeholder="Digite o Celular" value="{{ $user->cellphone ?? '' }}" />
                            </div>
                        </div>      
                    </div>       
                    <div class="row">
                        <div class="col-md-6 col-12">
                            <div class="form-group">
                                <label class="form-label">Status</label>
                                <div class="custom-control-primary custom-switch">
                                    <input type="checkbox" name="ativo" class="custom-control-input" 
                                        id="ativo" value="1"                                        
                                        {{ !isset($user->active) || ( isset($user->active) && $user->active == 1 ) ? 'checked="checked"' : '' }}> 
                                    <label class="custom-control-label" for="ativo">
                                        <span class="switch-icon-left">
                                            <i data-feather="check"></i>
                                        </span>
                                        <span class="switch-icon-right">
                                            <i data-feather="x"></i>
                                        </span>
                                    </label>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="row">&nbsp;</div>

                    <div class="row">
                        <div class="col-md-6 col-12">
                            <button type="submit" class="btn btn-primary data-submit mr-1">Salvar</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
@section('page-script')
<script>
    $(document).ready(function(){
        $('#formUserData').on('submit', function () {
            postData('formUserData', '{{ url("security/users") }}');
            return false;
        });
        new Cleave('#phone', {
            numericOnly: true,
            blocks: [0, 2, 0, 4, 4],
            delimiters: ["(", ")", " ", "-"]
        });

        new Cleave('#cellphone', {
            numericOnly: true,
            blocks: [0, 2, 5, 4],
            delimiters: ["(", ") ", "-"]
        });
    });
</script>
@endsection