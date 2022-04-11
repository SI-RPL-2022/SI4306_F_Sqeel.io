@extends('layout.mentor')

@section('content')
    @csrf
    <form class="" action="">
        <h3 class="mb-5" style="font-weight: bold">Create New Course</h3>
        <div class="mb-3 mt-4 row">
            <label class="mb-3 text-muted" for="">Thumbnail</label>
            <div class="col">
                <input type="text" class="form-control" id="thumbnail" name="thumbnail"
                    placeholder="Enter course title...">
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-3 text-muted" for="">Title</label>
            <div class="col">
                <input type="text" class="form-control" id="title" name="title" placeholder="Enter course title...">
            </div>
        </div>
        <div class=" mb-4 row">
            <label class="mb-3 text-muted" for="kategori">Category</label>
            <div class="col ">
                <select class="form-select" name="kategori" id="kategori">
                    <option value="volvo">Volvo</option>
                    <option value="saab">Saab</option>
                    <option value="opel">Opel</option>
                    <option value="audi">Audi</option>
                </select>
            </div>
        </div>
            <div class="mt-3 mb-4 row ">
                <Label class="mb-3 text-muted">Description</Label>
                <div class="col">
                    <div class="form-floating">
                        <textarea class="form-control" placeholder="Leave a comment here" id="floatingTextarea2"
                            style="height: 100px"></textarea>
                        <label for="floatingTextarea2" class="text-muted">Enter course description...</label>
                    </div>
                </div>
            </div>
            <div class="mb-3 mt-4 row">
                <label class="text-muted" for="">Thumbnail Image</label>
                <div class="">
                    <div id="msg"></div>
                    <form method="post" id="image-form">
                        <input type="file" name="img[]" class="file" accept="image/*">
                        <div class="input-group my-3">
                            <input type="text" class="form-control" disabled placeholder="Upload File" id="file">
                            <div class="input-group-append">
                                <button type="button" class="browse btn">Browse</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="ml-2 col-sm-6">
                    <img src="https://placehold.it/80x80" id="preview" class="img-thumbnail">
                </div>
            </div>
            <hr>
            <div class="d-grid gap-3 d-md-block" style="margin-bottom: 5rem;">
                <button type="button" class="btn create btn-lg">Create</button>
                <button type="button" class="btn cancel btn-lg">Cancel</button>
            </div>
    </form>
@endsection
