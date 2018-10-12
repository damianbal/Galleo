<form method="POST" action="{{ route('gallery.store') }}" class="bg-white border rounded p-3">
    @csrf
    <div class="row">
        <div class="col-sm-10">
                <div class="form-group">
        <input minlength="6" type="text" class="form-control" placeholder="Title of gallery..." name="title" required>
    </div>
        </div>

        <div class="col-sm-2">
            <button class="btn btn-primary btn-block"><i class="fas fa-plus"></i> Create</button>
        </div>
    </div>
</form>