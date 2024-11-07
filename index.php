<?php
$title = "Página Inicial";
include_once "header.php";
?>

<main>
    <div class='classecontainer'>
        <div> <h1> Conectamos</h1>
        <h1> Voluntários a ONG's</h1>
        <p> Seja um voluntário e ajude outras pessoas <p>


        </div>

    <div id="carouselExample" class="carousel slide">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="assets/images/Colaborador-voluntario.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/trabalho-voluntario.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/voluntariado.jpg" class="d-block w-100" alt="...">
            </div>
            <div class="carousel-item">
                <img src="assets/images/voluntario.jpg" class="d-block w-100" alt="...">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Anterior</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Próximo</span>
        </button>
    </div>

    </div>



    <div class="container py-5">
        <h2 class="pb-2 border-bottom">Abaixo nossos principais acessos</h2>
        <div class="row g-4 py-5 row-cols-1 row-cols-lg-3">
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Nossas ONG's parceiras</h3>
                    <p>Nesta seção, veja as principais ONG's parceiras.</p>
                    <a href="#" class="btn btn-primary">
                        Saiba Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Nossos voluntários parceiros</h3>
                    <p>Conheça nossos voluntários parceiros, espalhados por todo Brasil.</p>
                    <a href="#" class="btn btn-primary">
                        Ver Mais
                    </a>
                </div>
            </div>
            <div class="col d-flex align-items-start">

                <div>
                    <h3 class="fs-2 text-body-emphasis">Cadastre-se</h3>
                    <p>Clique no link abaixo e passa parte da nossa comunidade.</p>
                    <a href="#" class="btn btn-primary">
                        Cadastre-se
                    </a>
                </div>
            </div>
        </div>
    </div>

    <div class="b-example-divider"></div>

</main>

<?php
include_once "footer.php";
?>