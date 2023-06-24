@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Inicio de sesión">
                <b-alert show>
                    Ingresa tus Datos por favor!
                </b-alert>
                <b-form class="form-horizontal" method="post" 
                    action="{{ route('login') }}">
                    @csrf
                    <b-form-group
                        label="Correo electrónico"
                        label-for="email"
                        description="we'll never share your email with anyone else.">
                        <b-form-input id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}" required autofocus
                            placeholder="example@email.com"
                            >
                        </b-form-input>
                    </b-form-group>   

                    <b-form-group
                        label="Password"
                        label-for="password">
                        <b-form-input 
                            type="password"
                            id="password"
                            name="password"
                            required
                            alue="{{ old('password') }}"
                            >
                        </b-form-input>
                    </b-form-group> 
                    <b-form-group>
                        <b-form-checkbox
                            name="remember"
                            {{ old('remember') ? 'checked="true"': '' }}
                            >
                            Recordar Sesión
                        </b-form-checkbox>
                    </b-form-group> 
                    <b-button type="submit" variant="primary">
                        Ingresar
                    </b-button>
                    <b-button href="{{ route('password.request') }}" variant="link">
                        Olvidaste la contraseña?
                    </b-button>

                </b-form>    
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
                        

  