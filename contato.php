<?php
$title = "Contato";
include_once "header.php";
?>

<main class="container my-4">
    <div class="row g-5">
        <div class="col-md-6">
            <h4 class="mb-3">Entre em Contato</h4>
            <form class="needs-validation" novalidate="">
                <div class="row g-3">
                    <div class="col-12">
                        <label for="firstName" class="form-label">Nome</label>
                        <input type="text" class="form-control" id="firstName" placeholder="Seu nome" required="">
                        <div class="invalid-feedback">
                            Por favor, insira seu nome.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="email" class="form-label">E-mail</label>
                        <input type="email" class="form-control" id="email" placeholder="voce@exemplo.com" required="">
                        <div class="invalid-feedback">
                            Por favor, insira um e-mail válido.
                        </div>
                    </div>

                    <div class="col-12">
                        <label for="message" class="form-label">Mensagem</label>
                        <textarea class="form-control" id="message" placeholder="Escreva sua mensagem aqui..." rows="4" required=""></textarea>
                        <div class="invalid-feedback">
                            Por favor, escreva sua mensagem.
                        </div>
                    </div>
                </div>

                <hr class="my-4">

                <button class="w-100 btn btn-primary btn-lg" type="submit">Enviar Mensagem</button>
            </form>
        </div>

        <div class="col-md-6">
            <h4 class="mb-3">Informações de Contato</h4>
            <ul class="list-group">
                <li class="list-group-item">Endereço: Rua Principal, 1234, Cidade - Estado</li>
                <li class="list-group-item">Telefone: (00) 1234-5678</li>
                <li class="list-group-item">E-mail: contato@exemplo.com</li>
                <li class="list-group-item">Horário de Atendimento: Segunda a Sexta, das 9h às 18h</li>
            </ul>
        </div>
    </div>
</main>

<?php
include_once "footer.php";
?>