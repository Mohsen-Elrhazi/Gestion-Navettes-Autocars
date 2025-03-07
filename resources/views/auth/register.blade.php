@extends("auth.layouts")
@section("title", "Inscription")
@section("form")
<!-- Formulaire d'inscription -->
<form id="register-form" class="form" action="{{ url('register') }}" method="post">
    @csrf
    <h2 class=" title-form">signup</h2>

    <div class="form-group">
        <input type="text" id="name" name="name" placeholder=" " value="{{ old('name') }}"
            class="{{ $errors->has('name') ? 'border-danger' : '' }}">
        <label for="name">Name</label>
        @error('name')
        <span class="text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="text" id="image" name="image" placeholder=" " value="{{ old('image') }}"
            class="{{ $errors->has('image') ? 'border-danger' : '' }}">
        <label for="image">Image</label>
        @error('image')
        <span class="text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <select id="role_id" name="role_id" class="{{ $errors->has('role') ? 'border-danger' : '' }}">
            <!-- <option value="utilisateur" {{ old('role') == 'utilisateur' ? 'selected' : '' }}>Utilisateur</option>
            <option value="societeTransport" {{ old('role') == 'societeTransport' ? 'selected' : '' }}> société de transport  </option>-->
            @foreach($roles as $role)
            <option value="{{ $role->id }}">{{ $role->name }}</option>
            @endforeach
        </select>
        <label for="role">Rôle</label>
        @error('role')
        <span class="text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="email" id="email-register" name="email" placeholder=" " value="{{ old('email') }}"
            class="{{ $errors->has('email') ? 'border-danger' : '' }}">
        <label for="email-register">Email</label>
        @error('email')
        <span class="text text-danger">{{ $message }}</span>
        @enderror
    </div>
    <div class="form-group">
        <input type="password" id="password-register" name="password" placeholder=" " value="{{ old('password') }}"
            class="{{ $errors->has('password') ? 'border-danger' : '' }}">
        <label for="password-register">Mot de passe</label>
        <div>
            @error('password')
            <span class="text text-danger">{{ $message }}</span>
            @enderror
        </div>
    </div>
    <button type="submit" class="btn btn-primary">S'inscrire</button>
    <div class="forgot-password-link">
        <!-- <a href="auth/login" id="forgot-password-link"> Se connecter ?</a> -->
        <p class="">Vous avez déja inscrit ?<a href="{{ url('login') }}" id=" forgot-password-link"> Se
                connecter
            </a></p>
    </div>

</form>
@endsection