<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ env('APP_NAME') }}</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css">
    <link rel="stylesheet"
        href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@20..48,100..700,0..1,-50..200" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('assets/css/style.css') }}">
    <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}" />
</head>

<body>

    <header>
        <div class="cabecalho">
            <div class="container">
                <div class="row align-items-center justify-content-center min-vh-100 py-5 gy-4">

                    <!-- Col 1 -->
                    <div class="col-12 col-lg-6 text-white pe-lg-5 coluna-1 text-center text-lg-start">

                        <div class="">
                            <img src="{{ asset('assets/img/logo-2.png') }}" alt="" width="130"
                                class="mb-4 mb-lg-2 logo">
                        </div>

                        <div class="pe-lg-4">
                            <h1 class="fw-bold display-4  mb-4 text-center text-lg-start">Lorem ipsum dolor sit amet
                                consectetur adipisicing elit.
                            </h1>
                            <p class="fs-3 lead  text-center text-lg-start">
                                Lorem ipsum dolor sit, amet consectetur adipisicing elit. Consequatur quam illo autem
                                magnam
                                totam.
                            </p>
                        </div>
                    </div>

                    <!-- Col 2 -->
                    <div class="col-12 col-lg-4  text-white">
                        <div class="h4 text-center">
                            Preencha o formulário e receba agora o nosso e-book!
                        </div>

                        @if (session('email_success'))
                            <div class="alert alert-success mt-3" role="alert">
                                <div class="small">Sucesso!</div>
                                <strong>
                                    O link para baixar o e-book foi enviar para seu e-mail.
                                </strong>
                            </div>
                        @endif

                        <form action="{{ route('baixar_ebook.send_email') }}" method="post">
                            @csrf
                            <!-- Nome -->
                            <div class="mb-2">
                                <label for="nome" class="form-label mb-1 fw-semibold">Nome*</label>
                                <input type="text"
                                    class="form-control form-control-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="nome" id="nome" required>
                                @error('nome')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Nome -->
                            <div class="mb-2">
                                <label for="email" class="form-label mb-1 fw-semibold">E-mail*</label>
                                <input type="email"
                                    class="form-control form-control-sm rounded-pill shadow-none px-3 @error('email') is-invalid @enderror"
                                    name="email" id="email" required>
                                @error('email')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- empresa -->
                            <div class="mb-2">
                                <label for="empresa" class="form-label mb-1 fw-semibold">Empresa*</label>
                                <input type="text"
                                    class="form-control form-control-sm rounded-pill shadow-none px-3 @error('empresa') is-invalid @enderror"
                                    name="empresa" id="empresa" required>
                                @error('empresa')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- n_col_empresa -->
                            <div class="mb-2">
                                <label for="n_col_empresa" class="form-label mb-1 fw-semibold">Qual o número de
                                    colaboradores da
                                    empresa?*</label>
                                <select
                                    class="form-select form-select-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="n_col_empresa" id="n_col_empresa" required>
                                    <option value="" selected>Selecione</option>
                                    <option value="0 a 50">0 a 50</option>
                                    <option value="51 a 100">51 a 100</option>
                                    <option value="101 a 200">101 a 200</option>
                                    <option value="201 a 1.000">201 a 1.000</option>
                                    <option value="1.001 a 5.000">1.001 a 5.000</option>
                                    <option value="5.001 a 10.000">5.001 a 10.000</option>
                                    <option value="10.001 ou mais">10.001 ou mais</option>
                                </select>
                                @error('n_col_empresa')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- cargo -->
                            <div class="mb-2">
                                <label for="cargo" class="form-label mb-1 fw-semibold">
                                    Cargo*</label>
                                <select
                                    class="form-select form-select-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="cargo" id="cargo" required>
                                    <option value="" selected>Selecione</option>
                                    <option value="CEO">CEO</option>

                                    <option value="Diretor(a)">Diretor(a)</option>

                                    <option value="Gerente">Gerente</option>

                                    <option value="Coordenador(a)">Coordenador(a)</option>

                                    <option value="Analista">Analista</option>

                                    <option value="Assistente">Assistente</option>

                                    <option value="Estagiário(a)">Estagiário(a)</option>

                                    <option value="Jovem Aprendiz">Jovem Aprendiz</option>

                                    <option value="Autônomo">Autônomo</option>

                                    <option value="Sou Candidato">Sou Candidato</option>
                                </select>
                                @error('cargo')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- Qual área/departamento você trabalha? -->
                            <div class="mb-2">
                                <label for="qual_area_trabalha" class="form-label mb-1 fw-semibold">Qual
                                    área/departamento
                                    você trabalha?</label>
                                <select
                                    class="form-select form-select-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="qual_area_trabalha" id="qual_area_trabalha" required>
                                    <option value="" selected>Selecione</option>
                                    <option value="RH">RH</option>

                                    <option value="Departamento Pessoal">Departamento Pessoal</option>

                                    <option value="Compras">Compras</option>

                                    <option value="Marketing e Comunicação">Marketing e Comunicação</option>

                                    <option value="Tecnologia">Tecnologia</option>

                                    <option value="Financeiro">Financeiro</option>

                                    <option value="Jurídico">Jurídico</option>

                                    <option value="Outros">Outros</option>
                                </select>
                                @error('qual_area_trabalha')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- n_col_empresa -->
                            <div class="mb-2">
                                <label for="quantos_estagios" class="form-label mb-1 fw-semibold">Sua empresa possui
                                    estagiários? Quantos?*</label>
                                <select
                                    class="form-select form-select-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="quantos_estagios" id="quantos_estagios" required>
                                    <option value="" selected>Selecione</option>
                                    <option value="Não">Não</option>

                                    <option value="1 a 05 estagiários">1 a 05 estagiários</option>

                                    <option value="06 a 20 estagiários">06 a 20 estagiários</option>

                                    <option value="21 a 50 estagiários">21 a 50 estagiários</option>

                                    <option value="51 a 100 estagiários">51 a 100 estagiários</option>

                                    <option value="Acima de 100 estagiários">Acima de 100 estagiários</option>
                                </select>
                                @error('quantos_estagios')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <!-- possui_aprendiz -->
                            <div class="mb-2">
                                <label for="possui_aprendiz" class="form-label mb-1 fw-semibold">Sua empresa possui
                                    aprendizes? Quantos?*</label>
                                <select
                                    class="form-select form-select-sm rounded-pill shadow-none px-3 @error('nome') is-invalid @enderror"
                                    name="possui_aprendiz" id="possui_aprendiz" required>
                                    <option value="" selected>Selecione</option>
                                    <option value="Não">Não</option>

                                    <option value="1 a 10 aprendizes">1 a 10 aprendizes</option>

                                    <option value="11 a 50 aprendizes">11 a 50 aprendizes</option>

                                    <option value="51 a 100 aprendizes">51 a 100 aprendizes</option>

                                    <option value="Acima de 100 aprendizes">Acima de 100 aprendizes</option>
                                </select>
                                @error('possui_aprendiz')
                                    <div class="invalid-feedback mt-0 fw-bold">{{ $message }}</div>
                                @enderror
                            </div>
                            <div class="text-center mt-4">
                                <button type="submit" class="btn btn-warning rounded-pill px-4 py-2 fw-bold border-0 text-white" style="background: #fe8405 !important">
                                    <div class="px-2 fs-5 d-flex align-items-center gap-1">
                                        <span class="material-symbols-outlined ">
                                            download
                                            </span>
                                        Baixe o e-book gratuito
                                    </div>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </header>

    <main>
        <!-- Sobre -->
        <section>
            <div class="bg-white">
                <div class="container py-5 ">
                    <div class="row">
                        <div class="col-12 col-lg-9 mx-auto">
                            <div class="d-flex justify-content-center">
                                <h2 class="text-center  fw-bold mb-4">Sobre</h2>
                            </div>
                            <p class="lead">Para muitos estudantes brasileiros, o estágio é a porta de entrada para o
                                mundo
                                profissional.
                                Entretanto, até 2008, com uma lei bastante genérica, muitos universitários acabavam em
                                subempregos,
                                com
                                cargos distantes da área de formação, atividades que pouco acrescentavam ao
                                desenvolvimento
                                profissional
                                e baixa remuneração.</p>

                            <p class="lead">
                                Essa realidade mudou em 2008, com a aprovação da Lei 11.788/08, que surgiu para dar mais
                                segurança e
                                estabelecer de maneira mais clara direitos e deveres de cada uma das partes —
                                transformando
                                a
                                realidade
                                dos estágios no Brasil.
                            </p>

                            <p class="lead">
                                E, apesar de jogar luz sobre alguns pontos, a Lei de Estágio ainda gera uma série de
                                dúvidas. Para
                                saná-las de uma vez por todas, preparamos este manual definitivo com tudo o que
                                estudantes e
                                profissionais de RH precisam saber.
                            </p>

                            <p class="lead">
                                Esperamos que o material esclareça os seus pontos.
                            </p>

                            <p class="fw-bold">
                                Vem com a gente!
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section>
            <div class="" style="background: #ffbe00">
                <div class="container py-5 ">
                    <div class="row">
                        <div class="col-12 col-lg-9 mx-auto">
                            <div class="d-flex justify-content-center">
                                <h2 class="text-center  fw-bold text-dark mb-4">
                                    O que você vai encontrar no e-book:
                                </h2>
                            </div>
                            <div class="row pt-4 gy-4">
                                <!--  -->
                                <div class="col-12 col-lg-3">
                                    <div class=" text-white border-0 d-flex align-items-end justify-content-center p-0 rounded-circle mx-auto"
                                        style="width: 130px; height: 130px; background: #154B5E">
                                        <span class="material-symbols-outlined m-auto " style="font-size: 60px">
                                            receipt_long
                                        </span>
                                    </div>
                                    <div class="fw-bold fs-5 text-center">
                                        Os 10 Mandamentos da Lei de Estágio
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-12 col-lg-3">
                                    <div class=" text-white border-0 d-flex align-items-end justify-content-center p-0 rounded-circle mx-auto"
                                        style="width: 130px; height: 130px; background: #154B5E">
                                        <span class="material-symbols-outlined m-auto " style="font-size: 60px">
                                            contact_support
                                        </span>
                                    </div>
                                    <div class="fw-bold fs-5 text-center">
                                        Dúvidas e Dicas
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-12 col-lg-3">
                                    <div class=" text-white border-0 d-flex align-items-end justify-content-center p-0 rounded-circle mx-auto"
                                        style="width: 130px; height: 130px; background: #154B5E">
                                        <span class="material-symbols-outlined m-auto " style="font-size: 60px">
                                            handshake
                                        </span>
                                    </div>
                                    <div class="fw-bold fs-5 text-center">
                                        Obrigações e Direitos
                                    </div>
                                </div>
                                <!--  -->
                                <div class="col-12 col-lg-3">
                                    <div class=" text-white border-0 d-flex align-items-end justify-content-center p-0 rounded-circle mx-auto"
                                        style="width: 130px; height: 130px; background: #154B5E">
                                        <span class="material-symbols-outlined m-auto " style="font-size: 60px">
                                            person
                                        </span>
                                    </div>
                                    <div class="fw-bold fs-5 text-center">
                                        Papel do Agente Integrador
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section>
            <div class="bg-light">
                <div class="container py-5 ">
                    <div class="row py-4">
                        <div class="col-12 col-lg-9 mx-auto">

                            <div class="row align-items-center ">
                                <div class="col-12 col-lg-5">
                                    <h2 class="fw-bold fs-1 text-center text-lg-start">Vamos fazer o futuro. Juntos!
                                    </h2>
                                </div>
                                <div class="col-12 col-lg-7">
                                    <iframe class="w-100" height="315"
                                        src="https://www.youtube.com/embed/hIw7x9QIv4s" title="YouTube video player"
                                        frameborder="0"
                                        allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                                        allowfullscreen></iframe>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--  -->
        <section>
            <div class="bg-white">
                <div class="container py-5 ">
                    <div class="row py-3">
                        <div class="col-12 col-lg-9 mx-auto">
                            <div class="d-flex justify-content-center">
                                <h2 class="text-center  fw-bold mb-4">Veja alguns dos nossos
                                    clientes</h2>
                            </div>
                            <div class="row gy-3 justify-content-center">
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/corteva.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/amazon.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/andrade.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/corteva.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/amazon.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/andrade.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/amazon.png') }}" alt="" class="w-100">
                                </div>
                                <div class="col-6 col-lg-3">
                                    <img src="{{ asset('assets/img/andrade.png') }}" alt="" class="w-100">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main>

    <footer style="background: #154B5E">
        <div class="container py-5 text-white">
            <div class="row justify-content-center gy-3 align-items-end">
                <div class="col-12 col-lg-4">
                    <div class="fs-4 fw-bold">
                        <div class="mb-2">
                            <img src="{{ asset('assets/img/logo-3.png') }}" alt="" width="130"
                                class="mb-4 mb-lg-2">
                        </div>
                        {{ env('APP_NAME') }}
                    </div>
                </div>
                <div class="col-12 col-lg-4 ">
                    <div class="d-flex justify-content-lg-end">
                        <div class="d-flex gap-2">
                            <a href="#" class="btn btn-light p-0 rounded-circle d-flex"
                                style="width: 40px; height: 40px" title="Twitter">
                                <i class="fa-brands fa-twitter m-auto fs-5 "></i>
                            </a>
                            <a href="#" class="btn btn-light p-0 rounded-circle d-flex"
                                style="width: 40px; height: 40px" title="Facebook">
                                <i class="fa-brands fa-facebook m-auto fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light p-0 rounded-circle d-flex"
                                style="width: 40px; height: 40px" title="Linkedin">
                                <i class="fa-brands fa-linkedin m-auto fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light p-0 rounded-circle d-flex"
                                style="width: 40px; height: 40px" title="Instagram">
                                <i class="fa-brands fa-instagram m-auto fs-5"></i>
                            </a>
                            <a href="#" class="btn btn-light p-0 rounded-circle d-flex"
                                style="width: 40px; height: 40px" title="YouTube">
                                <i class="fa-brands fa-youtube m-auto fs-5"></i>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>

</body>

</html>
