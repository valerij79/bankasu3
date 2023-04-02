<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Subtract funds</h1>
                    <p>Current amount of funds: <?= $client['funds']?></p>
                </div>
                <div class="card-body">
                <form action="<?= URL ?>clients/show/<?= $client['id'] ?>/removeFunds" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="funds">
                            <div class="form-text">Please enter the required amount here</div>
                        </div>
                        <input type="submit" value="Subtract funds">                       
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

