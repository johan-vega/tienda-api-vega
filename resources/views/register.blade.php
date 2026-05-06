<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registro de Usuario</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>

<body class="auth-page">
    <main class="auth-shell">
        <section class="auth-card">
            <aside class="auth-panel">
                <span class="auth-badge">Acceso estudiantil</span>
                <h1 class="auth-title">Registro comodo, claro y rapido.</h1>
                <p class="auth-description">
                    Crea tu cuenta para acceder al sistema con una interfaz limpia, tonos suaves y una experiencia
                    pensada para sentirse ligera al usar.
                </p>
                <ul class="auth-highlights">
                    <li>Completa tus datos en pocos pasos y con enfoque visual minimalista.</li>
                    <li>Selecciona tu carrera y deja lista tu cuenta para ingresar al sistema.</li>
                    <li>La paleta verdosa pastel mantiene el formulario relajado y legible.</li>
                </ul>
            </aside>

            <section class="auth-form-panel">
                <header class="auth-form-header">
                    <h2>Crear cuenta</h2>
                    <p>Ingresa tu informacion para registrarte como estudiante.</p>
                </header>

                @if (session('success'))
                    <div class="auth-alert auth-alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                    <div class="auth-alert auth-alert-error">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif

                <form action="{{ url('/register') }}" method="POST" class="auth-form">
                    @csrf

                    <div class="field">
                        <label for="name">Nombre</label>
                        <input type="text" id="name" name="name" value="{{ old('name') }}"
                            placeholder="Tu nombre completo" required>
                    </div>

                    <div class="field">
                        <label for="email">Correo</label>
                        <input type="email" id="email" name="email" value="{{ old('email') }}"
                            placeholder="correo@ejemplo.com" required>
                    </div>

                    <div class="field">
                        <label for="password">Contrase&ntilde;a</label>
                        <input type="password" id="password" name="password" placeholder="Minimo 8 caracteres"
                            required>
                    </div>

                    <div class="field">
                        <label for="password_confirmation">Confirmar contrase&ntilde;a</label>
                        <input type="password" id="password_confirmation" name="password_confirmation"
                            placeholder="Repite tu contrasena" required>
                    </div>

                    <div class="field">
                        <label for="career_id">Carrera</label>
                        <select name="career_id" id="career_id" required>
                            <option value="" disabled {{ old('career_id') ? '' : 'selected' }}>Selecciona una carrera
                            </option>
                            @foreach ($careers as $career)
                                <option value="{{ $career->id }}" {{ old('career_id') == $career->id ? 'selected' : '' }}>
                                    {{ $career->name }}
                                </option>
                            @endforeach
                        </select>
                    </div>

                    <label for="terms_accepted" class="checkbox-field">
                        <input type="checkbox" name="terms_accepted" id="terms_accepted"
                            {{ old('terms_accepted') ? 'checked' : '' }} required>
                        <span>Acepto los terminos y condiciones.</span>
                    </label>

                    <button type="submit" class="auth-submit">Registrar cuenta</button>
                </form>
            </section>
        </section>
    </main>
</body>

</html>
