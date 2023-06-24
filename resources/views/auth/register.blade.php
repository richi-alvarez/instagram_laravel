@extends('layouts.app')

@section('content')
<b-container>
    <b-row align-h="center">
        <b-col cols="8">
            <b-card title="Registro" class="my-2">
                @if ($errors->any())
                <b-alert show variant="danger">
                    <ul class="mb-0">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                </b-alert>
                @else
                    <b-alert show>
                        por favor ingrese tus datos
                    </b-alert>
                @endif
                <b-form method="POST" action="{{ route('register') }}">
                    @csrf

                    <b-form-group
                        label="Nombre"
                        label-for="name">
                        <b-form-input id="name"
                            type="name"
                            name="name"
                            value="{{ old('name') }}" required autofocus
                            >
                        </b-form-input>
                    </b-form-group> 

                    <b-form-group
                        label="Correo electrónico"
                        label-for="email"
                        description="we'll never share your email with anyone else.">
                        <b-form-input id="email"
                            type="email"
                            name="email"
                            value="{{ old('email') }}" required
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
                            >
                        </b-form-input>
                    </b-form-group>   

                    <b-form-group
                        label="Confirmar password"
                        label-for="password_confirmation">
                        <b-form-input 
                            type="password"
                            id="password-confirm"
                            name="password_confirmation"
                            required
                            >
                        </b-form-input>
                    </b-form-group>   


                    <b-button type="submit"
                        variant="primary"> {{ __('Confirmar Registro') }}
                    </b-button>
                    <b-button href="{{ route('login') }}"
                        variant="link"> {{ __('ya te registraste?') }}
                    </b-button>

                </b-form>
            </b-card>
        </b-col>
    </b-row>
</b-container>
@endsection
