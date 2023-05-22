@component('mail::message')
    ## Baixar e-book

    <p class="">
        @php
            /*
            vc consegue pegar os dados do usuário com a variavel $data

            $data->nome
            $data->email
            $data->empresa
            $data->n_col_empresa
            $data->cargo
            $data->qual_area_trabalha
            $data->quantos_estagios
            $data->possui_aprendiz
        
        
            */
        @endphp
        {{ $data }}
    </p>

    <p class="">]
        Lorem ipsum
    </p>

    @component('mail::button', ['url' => 'http://google.com'])
        Baixar e-book
    @endcomponent

    Saudações,<br>
    <a href="{{ config('app.url') }}" class="">{{ config('app.name') }}</a>

    @component('mail::subcopy')
        Se você estiver com problemas para clicar no botão "Baixar e-book", copie e cole o URL abaixo em seu navegador da web:
        {{ 'http://google.com' }}
    @endcomponent
@endcomponent
