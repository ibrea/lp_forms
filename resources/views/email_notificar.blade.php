@component('mail::message')
## Nova solicitação para baixar e-book
<br>
<p class="">
    <strong>Nome:</strong><br>
    {{$data->nome}}
    <br>
    <br>
    <strong>E-mail:</strong><br>
    {{$data->email}}
    <br>
    <br>
    <strong>Empresa:</strong><br>
    {{$data->empresa}}
    <br>
    <br>
    <strong>Qual o número de colaboradores da empresa:</strong><br>
    {{$data->n_col_empresa}}
    <br>
    <br>
    <strong>Cargo:</strong><br>
    {{$data->cargo}}
    <br>
    <br>
    <strong>Qual área/departamento:</strong><br>
    {{$data->qual_area_trabalha}}
    <br>
    <br>
    <strong>Sua empresa possui estagiários? Quantos?:</strong><br>
    {{$data->quantos_estagios}}
    <br>
    <br>
    <strong>Sua empresa possui aprendizes? Quantos?:</strong><br>
    {{$data->possui_aprendiz}}
   
</p>
 
Saudações,<br>
<a href="{{config('app.url')}}" class="">{{ config('app.name') }}</a>

@component('mail::subcopy')
{{-- Se você estiver com problemas para clicar no botão "Baixar e-book", copie e cole o URL abaixo em seu navegador da web: {{'http://google.com'}} --}}
@endcomponent
@endcomponent