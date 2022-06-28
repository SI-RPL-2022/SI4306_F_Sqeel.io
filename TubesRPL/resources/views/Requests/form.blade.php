@extends('Layout.loginLayout')

@section('login')
    <form action="/mentor/fullfilment" method="POST" enctype="multipart/form-data">
        @csrf
        <h4>Data Upload</h4>
        <div class="mb-3 mt-4 row">
            <div class="col">
                <label for="cv" class="form-label">Curriculum Vitae</label>
                <input type="file" class="form-control" id="cv" name="cv" style="padding: 6px"
                    accept="application/pdf">
            </div>
        </div>
        <div class="mb-3 mt-4 row">
            <div class="col">
                <label for="cv" class="form-label">Integrity Pact</label>
                <input type="file" class="form-control" id="pi" name="pi" style="padding: 6px"
                    accept="application/pdf">
            </div>
            <p class="text-secondary mt-2">download the integrity pact <a href="/document">here</a></p>
        </div>
        <input type="text" name="id" value="{{ auth()->user()->id }}" hidden>
        <div class="d-grid gap-2 col-12 mx-auto">
            <button type="submit" class="btn ">Submit</button>
        </div>
    </form>
@endsection
