<header class="header-pbh">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-sm">
                <a href="http://www.pbh.gov.br" target="_blank">
                    <img src="{{ url('/imgs/logo.png') }}" class="img-fluid" title="Prefeitura de Belo Horizonte" alt="Prefeitura de Belo Horizonte">
                </a>
            </div>
            <div class="col-sm text-light font-decorated text-right">
                <h1 class="text-uppercase">{{ config('app.name') }}</h1>
                <p>Breve descrição do sistema</p>
            </div>
        </div>
    </div>
      
    <nav class="mini-navbar navbar navbar-light">
        <ul class="navbar-nav flex-row font-decorated ml-auto">
            <li class="nav-item px-5">
                <a class="nav-link" href="/componentes" target="_self">
                <span class="nav-link-icon"><i class="fa fa-home mx-1"></i>Home</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="ajuda.pdf" target="_blank">
                    <span class="nav-link-icon"><i class="fa fa-question-circle mx-1"></i>Ajuda</span>
                </a>
            </li>
        </ul>
    </nav>
</header>