<?= $this->extend('layouts/app') ?>
<?= $this->section('content')  ?>
<div class="row justify-content-center">
    <div class="col-11 p-0">
        <div class="card">
            <div class="card-header">
                Lista de pessoas 
                <a href="<?= base_url('/person')?>" class="btn btn-sm btn-primary">Voltar para a lista</a>
            </div>
            
            <div class="card-body">
                <form action="<?= base_url('/person')?>" method="post">
                    <?= $this->include('components/error_messages') ?>
                    <input type="text" class="form-control mb-2" name="name" placeholder="Nome">
                    <input type="email" class="form-control mb-2" name="email" placeholder="Email">
                    <input type="text" class="form-control mb-2" name="phone" placeholder="Telefone">
                    <input type="text" class="form-control mb-2" name="address" placeholder="Endereço">
                    <button class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>