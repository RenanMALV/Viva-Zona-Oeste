@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Para iniciar seus cadastro informe os dados abaixo!') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Completo') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="social_name" class="col-md-4 col-form-label text-md-right">{{ __('Nome Social') }}</label>

                            <div class="col-md-6">
                                <input id="social_name" type="text" class="form-control @error('social_name') is-invalid @enderror" name="social_name" value="{{ old('social_name') }}" required autocomplete="social_name">

                                @error('social_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cpf" class="col-md-4 col-form-label text-md-right">{{ __('CPF') }}</label>

                            <div class="col-md-6">
                                <input id="cpf" type="text" class="form-control @error('cpf') is-invalid @enderror" name="cpf" value="{{ old('cpf') }}" required autocomplete="cpf">

                                @error('cpf')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-form-label text-md-right">&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input onclick="removereq()" type="checkbox" id="estrangeiro" value="1"><label for="estrangeiro">É estrangeiro?</label><br>
                            </div>
                        </div>
                        <script>
                            function removereq(){
                                var checkBox = document.getElementById("estrangeiro");
                                
                                if (checkBox.checked == true){
                                    document.getElementById("cpf").removeAttribute("required");
                                } else {
                                    document.getElementById("cpf").setAttribute("required",'true');
                                }
                                
                            }    
                        </script>
                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Senha') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirme sua senha') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="telefone" class="col-md-4 col-form-label text-md-right">{{ __('Telefone') }}</label>
                            <div class="col-md-6">
                                <input id="telefone" type="telefone" class="form-control @error('telefone') is-invalid @enderror" name="telefone" value="{{ old('telefone') }}" required autocomplete="telefone">

                                @error('telefone')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                            <div class="col-md-4 col-form-label text-md-right">&nbsp;
                            </div>
                            <div class="col-md-6">
                                <input type="checkbox" name="whatsapp" id="whatsapp" value="1"><label for="whatsapp">É Whatsapp?</label><br>
                                <input type="checkbox" name="telegram" id="telegram" value="1"><label for="telegram">É Telegram?</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="estado" class="col-md-4 col-form-label text-md-right">{{ __('Estado') }}</label>

                            <div class="col-md-6">
                                <select class="form-control select2" name="estado" id="estado">
                                    <option value="AC">Acre</option>
                                    <option value="AL">Alagoas</option>
                                    <option value="AP">Amapá</option>
                                    <option value="AM">Amazonas</option>
                                    <option value="BA">Bahia</option>
                                    <option value="CE">Ceará</option>
                                    <option value="DF">Distrito Federal</option>
                                    <option value="ES">Espírito Santo</option>
                                    <option value="GO">Goiás</option>
                                    <option value="MA">Maranhão</option>
                                    <option value="MT">Mato Grosso</option>
                                    <option value="MS">Mato Grosso do Sul</option>
                                    <option value="MG">Minas Gerais</option>
                                    <option value="PB">Paraíba</option>
                                    <option value="PR">Paraná</option>
                                    <option value="PA">Pará</option>
                                    <option value="PE">Pernambuco</option>
                                    <option value="PI">Piauí</option>
                                    <option value="RJ">Rio de Janeiro</option>
                                    <option value="RN">Rio Grande do Norte</option>
                                    <option value="RS">Rio Grande do Sul</option>
                                    <option value="RO">Rondônia</option>
                                    <option value="RR">Roraima</option>
                                    <option value="SC">Santa Catarina</option>
                                    <option value="SP">São Paulo</option>
                                    <option value="SE">Sergipe</option>
                                    <option value="TO">Tocantins</option>
                                </select>

                                @error('estado')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="cidade" class="col-md-4 col-form-label text-md-right">{{ __('Cidade') }}</label>

                            <div class="col-md-6">
                                <input id="cidade" type="text" class="form-control @error('cidade') is-invalid @enderror" name="cidade" value="{{ old('cidade') }}" required autocomplete="cidade">

                                @error('cidade')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="como_conheceu" class="col-md-4 col-form-label text-md-right">{{ __('Como conheceu o Viva Zona Oeste?') }}</label>

                            <div class="col-md-6">
                                <select class="form-control select2" name="como_conheceu" id="como_conheceu">
                                    <option value="Site do Viva Zona Oeste">Site do Viva Zona Oeste</option>
                                    <option value="Youtube">Youtube</option>
                                    <option value="Instagram">Instagram</option>
                                    <option value="Facebook">Facebook</option>
                                    <option value="Whatsapp">Whatsapp</option>
                                    <option value="Telegram">Telegram</option>
                                    <option value="Evento online">Evento online</option>
                                    <option value="Evento presencial">Evento presencial</option>
                                    <option value="Indicação de amige">Indicação de amige</option>
                                    <option value="Outro">Outro</option>
                                </select>
                                @error('como_conheceu')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="instrucao" class="col-md-4 col-form-label text-md-right">{{ __('Grau de Instrução') }}</label>

                            <div class="col-md-6">
                                <select class="form-control select2" name="instrucao" id="instrucao">
                                    <option value="Analfabeto">Analfabeto</option>
                                    <option value="Fundamental incompleto">Fundamental incompleto</option>
                                    <option value="Fundamental completo">Fundamental completo</option>
                                    <option value="Médio incompleto">Médio incompleto</option>
                                    <option value="Médio completo">Médio completo</option>
                                    <option value="Superior incompleto">Superior incompleto</option>
                                    <option value="Superior completo">Superior completo</option>
                                    <option value="Pós-graduação incompleto">Pós-graduação incompleto</option>
                                    <option value="Pós-graduação completo">Pós-graduação completo</option>
                                    <option value="Mestrado incompleto">Mestrado incompleto</option>
                                    <option value="Mestrado completo">Mestrado completo</option>
                                    <option value="Doutorado incompleto">Doutorado incompleto</option>
                                    <option value="Doutorado completo">Doutorado completo</option>
                                </select>
                                @error('instrucao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="profissao" class="col-md-4 col-form-label text-md-right">{{ __('Profissão') }}</label>

                            <div class="col-md-6">
                                <input id="profissao" type="profissao" class="form-control @error('profissao') is-invalid @enderror" name="profissao" value="{{ old('profissao') }}" required autocomplete="profissao">

                                @error('profissao')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="atua" class="col-md-4 col-form-label text-md-right">{{ __('Você mora ou atua na Zona Oeste, da cidade do Rio de Janeiro?') }}</label>

                            <div class="col-md-6" style="padding-top: 12px;">
                                <input type="radio" name="atua" id="atua_sim" value="1"><label for="atua_sim">Sim</label><br>
                                <input type="radio" name="atua" id="atua_nao" value="0"><label for="atua_nao">Não</label>
                            </div>
                        </div>


                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <input type="checkbox" name="aceita_contato" id="aceita_contato" value="1"><label for="aceita_contato">Aceito receber o contato da Equipe Viva Zona Oeste</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-8">
                                <input type="checkbox" name="aceita_parceiros" id="aceita_parceiros" value="1"><label for="aceita_parceiros">Aceito receber o contato de Parceiros Viva Zona Oeste</label>
                            </div>
                        </div>

                        <div class="form-group row">
                            <div class="col-md-1"></div>
                            <div class="col-md-10">
                                <input type="checkbox" name="termos" id="termos" value="1" required><label for="termos">Declaro que li e concordo com os Termos de Uso e a Política de Privacidade.</label>
                            </div>
                        </div>



                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Enviar Cadastro') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection