@extends('layouts.app')
@section('content')
<div class="container-login100">
    <div class="wrap-login100">
        <div class="login100-form-title" style="background-image: url(img/2S3.png);">
                    <!-- <div class="login100-form-title"> -->
            <span class="login100-form-title-1"></span>
        </div>
        		<form class="login100-form validate-form" method="POST" action="{{ route('login') }}">
					@csrf
			<div class="wrap-input100 validate-input m-b-26" data-validate="login é obrigatorio">
				<span class="label-input100">Login</span>
				<input id="email"  class="form-control input100 @error('email') is-invalid @enderror" type="email" name="email"placeholder="Entre com seu email" value="{{ old('email') }}" required autocomplete="email" autofocus>
				
				<span class="focus-input100"></span>
				@error('email')
               <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                </span>
                @enderror

			</div>

			<div class="wrap-input100 validate-input m-b-18" data-validate = "Senha obrigatoria">
				<span class="label-input100">Senha</span>
				<input id="password" class="form-control input100 @error('password') is-invalid @enderror" type="password" name="password" required placeholder="Entre com sua senha"  autocomplete="current-password">
				
				<span class="focus-input100"></span>		
				@error('password')
					<span class="invalid-feedback" role="alert">
						<strong>{{ $message }}</strong>
					</span>
				@enderror
			</div>
					<div class="container-login100-form-btn">
						<button type="submit" class="login100-form-btn">
							Entrar
						</button>
					</div>

				</form>
            </div>
        </div>

        <div class="footer">
    <div class="position-relative">
    <div style="background-color:#001956;font-size:0.8rem;">Copyright 2021 © Secretaria de Estado de Educação do Amazonas - Todos os direitos reservados.</div>
      <img src="img\rodape2.png" id="imagem">
    </div>
  </div>
</div>
    @endsection