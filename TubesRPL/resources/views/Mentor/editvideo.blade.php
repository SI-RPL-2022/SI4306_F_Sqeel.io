@extends('layout.mentor')

@section('content')
    <form class="" action="/video/{{ $video->idvideo }}/edit" method="POST">
        @csrf
        <h3 class="mb-5" style="font-weight: bold">Edit Video</h3>
        @if (session()->has('msg'))
            <div class="alert alert-success">
                {{ session()->get('msg') }}
            </div>
        @endif
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">ID Video</label>
            <div class="col">
                <input type="text" class="form-control" id="idvideo" name="idvideo" value="{{ $video->idvideo }}"
                    placeholder="Enter Youtube ID Video">
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">Judul Playlist</label>
            <div class="col">
                <input type="text" class="form-control" value="{{ $video->playlist->judul }}" disabled>
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <label class="mb-2 text-muted" for="">Judul Video</label>
            <div class="col">
                <input type="text" class="form-control" id="judulVideo" name="judulVideo" placeholder="Enter Judul Video"
                    value="{{ $video->judulVideo }}">
            </div>
        </div>
        <div class="mt-3 mb-4 row ">
            <Label class="mb-2 text-muted">Description</Label>
            <div class="col">
                <div class="form-floating">
                    <textarea class="form-control" placeholder="Leave a comment here" id="deskripsi" name="deskripsi" style="height: 100px">{{ $video->deskripsi }}</textarea>
                </div>
            </div>
        </div>
        <hr>
        <input type="text" class="form-control" id="playlist_id" name="playlist_id" value="" hidden>
        <div class="d-grid gap-3 d-md-block" style="margin-bottom: 5rem;">
            <button type="submit" class="btn create btn-lg">Update</button>
            <a href="/mentor/myvideos/{{ $video->playlist->judul }}" class="btn cancel btn-lg">Cancel</a>
        </div>
    </form>
@endsection
