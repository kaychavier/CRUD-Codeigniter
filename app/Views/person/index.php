<?= $this->extend('layouts/app') ?>
<?= $this->section('content')  ?>
<div class="row justify-content-center">
    <div class="col-11 p-0">
        <div class="card">
            <div class="card-header">
                Lista de pessoas 
                <a href="<?= base_url('/person/new')?>" class="btn btn-sm btn-primary">Adicionar pessoas</a>
            </div>
            
            <div class="card-body table-responsive">
                <?= $this->include('components/success_message'); ?>
                <table class="table table-hover table-borderless">
                    <thead>
                        <th>#</th>
                        <th>Nome</th>
                        <th>Email</th>
                        <th>Telefone</th>
                        <th>Endereço</th>
                        <th>Ações</th>
                    </thead>
                    <tbody>
                        <?php 
                            foreach($people as $person):
                        ?>
                        <tr>
                            <td>
                                <?= $person['id'] ?>
                            </td>
                            <td>
                                <?= $person['name'] ?>
                            </td>
                            <td>
                                <?= $person['email'] ?>
                            </td>
                            <td>
                                <?= $person['phone'] ?>
                            </td>
                            <td>
                                <?= $person['address'] ?>
                            </td>
                            <td>
                                <a href="<?= base_url('/person/' . $person['id'] . '/edit') ?>" class="btn btn-sm btn-outline-success"> 
                                    <i class="bi bi-pencil-square"></i>
                                </a>
                                <form action="<?= base_url('/person/' . $person['id'])?>" method="post">
                                    <input hidden name="_method" value="DELETE">
                                    <button class="btn btn-sm btn-outline-danger" onclick="return confirm('Deseja excluir a pessoa?')">
                                        <i class="bi bi-trash"></i>
                                    </button>
                                </form>
                            </td>
                        </tr>
                        <?php 
                            endforeach; 
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection() ?>