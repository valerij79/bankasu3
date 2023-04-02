<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Edit Client</h1>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/edit/<?= $client['id'] ?>" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name" value="<?= $client['name'] ?>">
                            <div class="form-text">Please add client name here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Surname</label>
                            <input type="text" class="form-control" name="surname"  value="<?= $client['surname'] ?>">
                            <div class="form-text">Please add client surname here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Client Personal ID</label>
                            <input type="text" class="form-control" name="personal_id"  value="<?= $client['personal_id'] ?>">
                            <div class="form-text">Please add client personal id here</div>
                        </div>
                        <div class="mb-3">
                            <label class="form-label">Account No.</label>
                            <input type="text" class="form-control" name="account_no"  value="<?= $client['account_no'] ?>" readonly>
                        </div>
                        <input type="hidden" name="funds" value="<?= $client['funds'] ?>">
                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>