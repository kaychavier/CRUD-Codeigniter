<?= $this->extend('layouts/app') ?>
<?= $this->section('content')  ?>
<div class="row justify-content-center">
    <div class="col-11 p-0">
        <div class="card">
            <div class="card-header">
                Lista de pessoas 
                <a href="<?= base_url('/person/')?>" class="btn btn-sm btn-primary">Voltar para a lista</a>
            </div>
            
            <div class="card-body">
                <form action="<?= base_url('/person/' . $person['id'] )?>" method="post">
                    <?= $this->include('components/error_messages') ?>
                    <input hidden name="_method" value="PUT">
                    <input type="text" class="form-control mb-2" name="name" placeholder="Nome" value="<?= $person['name'] ?>">
                    <input type="email" class="form-control mb-2" name="email" placeholder="Email" value="<?= $person['email'] ?>">
                    <input type="text" class="form-control mb-2" name="phone" placeholder="Telefone" value="<?= $person['phone'] ?>">
                    <input type="text" class="form-control mb-2" name="address" placeholder="Endereço" value="<?= $person['address'] ?>">
                    <button class="btn btn-primary">
                        <i class="bi bi-save me-2"></i>Salvar
                    </button>
                </form>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>