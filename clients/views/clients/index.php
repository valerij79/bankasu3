<div class="container">
    <div class="row">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Clients List</h1>
                </div>
                <div class="card-body">
                    <ul class="list-group">
                        <?php foreach($clients as $client) : ?>
                        <li class="list-group-item">
                            <?= $client['name'] ?>
                            <?= $client['surname'] ?>
                            <?= $client['tt'] ? 'TIK TOK' : 'FB' ?>
                        </li>
                        <?php endforeach ?>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>