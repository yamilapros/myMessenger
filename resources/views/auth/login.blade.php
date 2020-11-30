@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
                <b-card title="Iniciar sesión">
                    <b-form method="POST" action="{{ route('login') }}">
                        <b-form-group
                            label="Email:"
                            label-for="email"
                        >
                            <b-form-input
                            id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}"
                            required
                            placeholder="Email"
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group
                            label="Contraseña:"
                            label-for="password"
                        >
                            <b-form-input
                            id="password"
                            type="password"
                            name="password"
                            value="{{ old('password') }}"
                            required
                            placeholder="password"
                            ></b-form-input>
                        </b-form-group>

                        <b-form-group>
                            <b-form-checkbox
                            id="remember"
                            name="remember"
                            {{ old('remember') ? 'checked="true"' : '' }}
                            >
                            Recordarme
                            </b-form-checkbox>
                        </b-form-group>

                        <b-button type="submit" variant="primary">Entrar</b-button>
                        <b-button href="{{ route('password.request') }}" variant="link">Olvidaste tu contraseña?</b-button>
                    </b-form>  
                </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
