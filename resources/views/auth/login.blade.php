@extends("auth.layouts")
@section("title", "Connexion")
@section("form")
<!-- Formulaire de connexion -->
<form action="{{ url('login') }}" method="POST">
    @csrf
    <h2 class="title-form">Signin</h2>

    <div class="form-group">
        <input type="email" id="email-login" name="email" placeholder=" "
            class="{{  $errors->has('email') ? 'border-danger' : ''}}">
        <label for=" email-login">Email</label>
        @error('email')
        <span class="text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" id="password-login" name="password" placeholder=" "
            class="{{ $errors->has('password') ? 'border-danger': '' }}">
        <label for="password-login">Mot de passe</label>
        @error('password')
        <span class=" text text-danger mt-5">{{ $message }}</span>
        @enderror
    </div>
    <button type="submit" class="btn btn-primary">Se connecter</button>
    <div class="forgot-password-link">
        <span class="fs-6">Vous n'avez pas de compte ? </span> <a href="{{ url("register") }}"
            id=" forgot-password-link">Inscrivez-vous</a><br>
        <a href="/auth/forgotPassword" id="forgot-password-link">Mot de passe oublié ?</a>
    </div>
</form>
@endsection