<button id="button" type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">
    Launch demo modal
</button>

<!-- Modal -->
<div class="modal fade show" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">New order</h4>
                        <p class="card-description">
                            Instant Ordewr
                        </p>
                        <form class="forms-sample">
                            <div class="form-group">
                                <label for="exampleInputUsername1">Table NO</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="TAble no">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Food</label>
                                <input type="email" class="form-control" id="exampleInputEmail1" placeholder="food">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputUsername1">Waiter ID</label>
                                <input type="text" class="form-control" id="exampleInputUsername1"
                                    placeholder="Waiter ID">
                            </div>

                            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light" data-dismiss="modal">Cancel</button>
                        </form>
                    </div>
                </div>
            </div>

        </div>
        <!-- <div class="modal-footer">

            <button type="submit" class="btn btn-primary mr-2">Submit</button>
                            <button class="btn btn-light" data-dismiss="modal">Cancel</button>
        </div> -->
    </div>
</div>
