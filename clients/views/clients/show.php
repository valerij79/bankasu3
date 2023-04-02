<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Client</h1>
                </div>

                <form>
                <div class="form-group">
                    <label for="fname">First name:</label><br>
                    <input class="col-8" type="text" id='name' name='name' value=<?= $client['name'] ?>><br>
                    <label for="lname">Last name:</label><br>
                    <input class="col-8" type="text" id='surname' name='surname' value=<?= $client['surname'] ?>><br>
                    <label for="lname">Personal ID:</label><br>
                    <input class="col-8" type="text" id='personal_id' name='personal_id' value=<?= $client['personal_id'] ?>><br>
                    <label >Account number:</label><br>
                    <input class="col-8" type="text" id='account_no' name='account_no' value=<?= $client['account_no'] ?>><br>
                    <label for="lname">The amount of existing funds:</label><br>
                    <input class="col-8" type="text" id='funds' name='funds' value=<?= $client['funds'] ?>><br>
                </div>
                </form>

                <!-- <div class="card-body">
                    <div class="client-line">
                        <div class="form">
                            <?= $client['name'] ?>
                        </div>
                        <div class="form-control">
                            <?= $client['surname'] ?>
                        </div>
                        <div class="form-control>
                            <?= $client['personal_id'] ?>
                        </div>
                        <div class=" form-control">
                            <?= $client['account_no'] ?>
                        </div>
                        <div class="form-control">
                            <?= $client['funds'] ?>
                        </div> -->
                        <a class="btn btn-info" href=" <?= $client['id'] ?>/addFunds">Add funds</a>
                        <a class="btn btn-warning" href=" <?= $client['id'] ?>/removeFunds">Subtract funds</a>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>