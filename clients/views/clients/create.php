<div class="container">
    <div class="row justify-content-center">
        <div class="col-8">
            <div class="card mt-5">
                <div class="card-header">
                    <h1>Add Client</h1>
                </div>
                <div class="card-body">
                    <form action="<?= URL ?>clients/create" method="post">
                        <div class="mb-3">
                            <label class="form-label">Client Name</label>
                            <input type="text" class="form-control" name="name">
                            <div class="form-text">Please add client name here.</div>
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
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>