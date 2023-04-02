<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Client</h1>
                </div>

                <!-- <div class="card-body">
                    <form action="<?= URL ?>clients/create" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name">
                            
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Surname</label>
                            <input type="text" class="form-control" name="surname">
                            <div class="form-text">Please add client surname here.</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Personal ID</label>
                            <input type="number" class="form-control" name="personal_id">
                            <div class="form-text">Please add client Personal No. here.</div>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form> -->


                <div class="card-body">
                    <div class="client-line">
                        <div class="client-info">
                            <?= $client['name'] ?>
                            </div>
                        <div class="client-info">
                            <?= $client['surname'] ?>
                        </div>
                        <div class="client-info">
                            <?= $client['personal_id'] ?>
                        </div>
                        <div class="client-info">
                            <?= $client['account_no'] ?>
                        </div>
                        <div class="client-info">
                            <?= $client['funds'] ?>
                            <a class="btn btn-info href="<?= $client['id'] ?>/addFunds">Add funds</a>
                            <a class="btn btn-primary href="<?= $client['id'] ?>/removeFunds">Subtract funds</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>