<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>

<body>

    <section>
        <h3 class="text-center my-4">Register Here</h3>
        <div class="row d-flex align-items-center justify-content-center">
            <div class="col-md-6">
                {{-- <?php
                echo '<pre>';
                print_r($errors);
                ?> --}}
                {{-- {{$errors}}
               @if ($errors->any())
               @foreach ($errors->all() as $err)
                    <li>{{$err}}</li>
               @endforeach
               @endif --}}
                <form action="{{ url('/') }}/register" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label for="" class="py-3">Enter Name</label>
                        <input type="text" name="name" placeholder="Enter Name" class="form-control"
                            value="{{ old('name') }}">
                    </div>
                    <span style="color: red">
                        @error('name')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Enter Mobile No</label>
                        <input type="text" name="mobile" placeholder="Enter Mobile Number" class="form-control"
                            value="{{ old('mobile') }}">
                    </div>
                    <span style="color: red">
                        @error('mobile')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Enter Email</label>
                        <input type="text" name="email" placeholder="Enter Email Id" class="form-control"
                            value="{{ old('email') }}">
                    </div>
                    <span style="color:red">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Enter Password</label>
                        <input type="text" name="password" placeholder="Enter Password" class="form-control"
                            value="{{ old('password') }}">
                    </div>
                    <span style="color:red">
                        @error('password')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Enter Password</label>
                        <input type="text" name="confirmPassword" placeholder="Enter Confirm Password"
                            class="form-control" value="{{ old('password_confirmation') }}">
                    </div>
                    <span style="color:red">
                        @error('confirmPassword')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Select Profile</label>
                        <input type="file" name="image" class="form-control" value="{{ old('image') }}">
                    </div>
                    <span style="color: red">
                        @error('image')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Gender</label>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="male">
                            <label class="form-check-label">Male</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="female">
                            <label class="form-check-label">Female</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="radio" name="gender" value="other">
                            <label class="form-check-label">Other</label>
                        </div>
                    </div>
                    <span style="color: red">
                        @error('gender')
                            {{ $message }}
                        @enderror
                    </span>

                    <div class="form-group">
                        <label for="" class="py-3">Hobbies</label>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Cricket">
                            <label class="form-check-label">Cricket</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Chess">
                            <label class="form-check-label">Chess</label>
                        </div>
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" name="hobbies[]" value="Singing">
                            <label class="form-check-label">Singing</label>
                        </div>
                    </div>
                    <span style="color: red">@error('hobbies'){{$message}}@enderror</span>
                    <div class="form-group text-center my-4">
                        <button class="btn btn-success">Submit</button>
                    </div>
                </form>
            </div>
        </div>

    </section>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"
        integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js"
        integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous">
    </script>
</body>

</html>
