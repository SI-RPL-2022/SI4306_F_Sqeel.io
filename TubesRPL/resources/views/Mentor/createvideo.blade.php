@extends('layout.mentor')

@section('content')
    <form class="" action="/create/video" method="POST">
        @csrf
        <h3 class="mb-5" style="font-weight: bold">Create New Video</h3>
        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">ID Video</label>
            <div class="col">
                <input type="text" class="form-control" id="idvideo" name="idvideo" placeholder="Enter Youtube ID Video">
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">Judul Playlist</label>
            <div class="col">
                <input type="text" class="form-control" value="{{ $playlist->judul }}" disabled>
                <input type="text" class="form-control" name="judul" id="judul" value="{{ $playlist->judul }}" hidden>
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
        <hr>
        <input type="text" class="form-control" id="playlist_id" name="playlist_id" value="{{ $playlist->id }}" hidden>
        <div class="d-grid gap-3 d-md-block" style="margin-bottom: 5rem;">
            <button type="submit" class="btn create btn-lg">Create</button>
            <a href="/create/materi" class="btn cancel btn-lg">Back to Home</a>
        </div>
    </form>
@endsection
