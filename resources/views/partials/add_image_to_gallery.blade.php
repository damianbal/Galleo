<form method="POST" class="p-3 bg-white border mb-3" action="{{ route('gallery.store_image', $galleryId) }}" enctype="multipart/form-data">
    @csrf
    <div class="form-group">
        <input name="image" class="form-control-file" accept="image/*" type="file">
    </div>
    <div class="row">
        <div class="col-sm-6">
            <div class="form-group">
                <input name="title" class="form-control" type="text" minlength="3" placeholder="Title (optional)">
            </div>
        </div>

        <div class="col-sm-6">
            <div class="form-group">
                <input name="description" class="form-control" type="text" minlength="3" placeholder="Description (optional)">
            </div>
        </div>
    </div>

    <button type="submit" class="btn btn-primary"><i class="fas fa-plus"></i> Add</button>
</form>
