<?php
$title = "Produtos";
include_once "header.php";
?>
<main>
    <div class="album py-5 bg-body-tertiary">
        <div class="container">
            <h2 class="pb-2 border-bottom">Produtos</h2>

            <!--
            Notem as classes row-cols que define quantas terão por linha
            neste caso temos uma coluna em cada linha, porém em seguida ele diz
            que em telas pequenas teremos 2 colunas por linha e em telas médias
            teremos 3 colunas por linha. 
            As classes vão sobrescrevendo umas as outras conforme a tela vai mudando de tamanho.
        -->
            <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                <!-- Componente pra usar no Looping do PHP     -->
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- FIM do componente -->

                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col">
                    <div class="card shadow-sm">
                        <img src="https://picsum.photos/420/255" alt="">
                        <div class="card-body">
                            <p class="card-text">Este é um exemplo do uso de Cards para uma listagem de produtos.</p>
                            <div class="d-flex justify-content-between align-items-center">
                                <div class="btn-group">
                                    <button type="button" class="btn btn-sm btn-outline-secondary">Ver produto</button>
                                </div>
                                <small class="text-body-secondary">R$29,90</small>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

</main>

<?php
include_once "footer.php";
?>