@extends('layout.main')
@section('content')
    <form class="" action="" method="POST" enctype="multipart/form-data">
        @csrf
        <h3 class="mb-5" style="font-weight: bold">Edit Course</h3>
        <div class="mb-3 mt-4 row">
            <label class="mb-3 text-muted" for="">Title</label>
            <div class="col">
                <input type="text" class="form-control" id="judul" name="judul" placeholder="Enter course title...">
            </div>
        </div>
        <div class=" mb-4 row">
            <label class="mb-3 text-muted" for="kategori">Category</label>
            <div class="col ">
                <select class="form-select" name="kategori_id" id="kategori_id">
                    <option value="1">Web Development</option>
                    <option value="2">Design</option>
                    <option value="3">Marketing</option>
                    <option value="4">Photography</option>
                    <option value="5">Mobile Development</option>
                    <option value="6">Finance</option>
                </select>
            </div>
        </div>
        <div class="mt-3 mb-4 row ">
            <Label class="mb-3 text-muted">Description</Label>
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi"
                        style="height: 100px"></textarea>
                    <label for="deskripsi" class="text-muted">Enter course description...</label>
                </div>
            </div>
        </div>
        <div class="mt-3 mb-4 row ">
            <Label class="mb-3 text-muted">Thumbnail</Label>
            <div class="col">
                <input class="form-control" type="file" name="thumbnail" id="formFile">
            </div>
        </div>
        <input type="text" value="{{ auth()->user()->id }}" name="user_id" id="user_id" hidden>
        <hr>
        <div class="d-grid gap-3 d-md-block" style="margin-bottom: 5rem;">
            <button type="submit" class="btn create btn-lg">Create</button>
            <button type="button" class="btn cancel btn-lg">Cancel</button>
        </div>
    </form>
@endsection
