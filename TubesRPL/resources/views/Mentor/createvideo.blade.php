@extends('layout.mentor')

@section('content')
    <form class="" action="">
        @csrf
        <h3 class="mb-5" style="font-weight: bold">Create New Video</h3>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">ID Video</label>
            <div class="col">
                <input type="text" class="form-control" id="idvideo" name="idvideo" placeholder="Enter Youtube ID Video">
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">ID Playlist</label>
            <div class="col">
                <input type="text" class="form-control" id="playlist_id" name="playlist_id" placeholder="ID playlist" disabled>
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">Judul Video</label>
            <div class="col">
                <input type="text" class="form-control" id="judulVideo" name="judulVideo" placeholder="Enter Judul Video">
            </div>
        </div>
        <div class="mt-3 mb-4 row ">
            <Label class="mb-2 text-muted">Description</Label>
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi"
                        style="height: 100px"></textarea>
                    <label for="deskripsi" class="text-muted">Enter video description...</label>
                </div>
            </div>
        </div>
        {{-- <div class="mt-3 mb-4 row ">
            <Label class="mb-3 text-muted">Thumbnail</Label>
            <div class="col">
                <input class="form-control" type="file" name="thumbnail" id="formFile">
            </div>
        </div>
        <input type="text" value="{{ auth()->user()->id }}" name="user_id" id="user_id" hidden> --}}
        <hr>
        <div class="d-grid gap-3 d-md-block" style="margin-bottom: 5rem;">
            <button type="button" class="btn create btn-lg">Create</button>
            <button type="button" class="btn cancel btn-lg">Cancel</button>
        </div>
    </form>
@endsection
