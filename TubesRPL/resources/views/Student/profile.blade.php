@extends(auth()->user()->role_id == 2 ? 'layout.mentor' : 'layout.main')

@section('content')
    <form class="container" action="/profile/{{ $user->id }}" method="POST" enctype="multipart/form-data"
        style="width: 60%;">
        @csrf
        <h1 class="mb-3">Edit Profile</h1>
        <div class="mb-3">
            <label for="" class="form-label mb-3">Profile Picture</label><br>
            <img src="/images/profil/profile.jpg" class="mb-3" id="output" width="100px" height="100px"
                style="border-radius: 50%;">
            <input class="form-control" name="profile" id="profile" type="file" accept="image/*"
                onchange="loadFile(event)">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Name</label>
            <input type="Name" class="form-control" name="nama" id="nama" placeholder="name@example.com"
                value="{{ $user->nama }}">
        </div>
        <div class="mb-3">
            <label for="exampleFormControlInput1" class="form-label">Email address</label>
            <input type="email" class="form-control" name="email" id="email" value="{{ $user->email }}" disabled>
        </div>
        <div class=" mb-3">
            <label for="exampleFormControlTextarea1" class="form-label">Bio</label>
            <textarea class="form-control" id="bio" name="bio" rows="3" placeholder="Enter Short Bio...">{{ $user->bio }}</textarea>
        </div>
        <hr>
        <div class="float-end">
            <a href="/" class="btn btn-secondary border-0">Cancel</a>
            <button class="btn btn-primary border-0" type="submit" style="background: #B48BF0;">Save</button>
        </div>

    </form>
    <script>
        var loadFile = function(event) {
            var output = document.getElementById('output');
            output.src = URL.createObjectURL(event.target.files[0]);
            output.onload = function() {
                URL.revokeObjectURL(output.src) // free memory
            }
        };
    </script>
@endsection
