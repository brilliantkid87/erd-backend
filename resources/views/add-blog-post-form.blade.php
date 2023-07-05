<!DOCTYPE html>
<html>

<head>
    <title>Laravel 8 Form Example Tutorial</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-4">
        @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
        @endif
        <div class="card mx-auto shadow p-3 mb-5 bg-body-tertiary rounded" style="max-width: 400px">
            <div class="card-header text-center font-weight-bold">
                APPLY LAMARAN
            </div>
            <div class="card-body">
                <form name="add-blog-post-form" id="add-blog-post-form" method="post" action="{{url('store-form')}}">
                    @csrf
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nama Lengkap</label>
                        <input type="text" id="title" name="title" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="jabatan">Jabatan:</label>
                        <select id="jabatan" name="jabatan" class="form-control" required>
                            <option value="">Pilih Jabatan</option>
                            <option value="Manager">Manager</option>
                            <option value="Analyst">Analyst</option>
                            <option value="Programmer">Programmer</option>
                        </select>
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Phone</label>
                        <input type="number" id="phone" name="phone" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Email</label>
                        <input type="email" id="email" name="email" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Year</label>
                        <input type="date" id="year" name="year" class="form-control" required="">
                    </div>

                    <div class="form-group">
                        <label for="teknologi">Skill Set:</label>
                        <select id="teknologi" name="teknologi" class="form-control" required>
                            <option value="">Pilih Teknologi</option>
                            <option value="HTML">HTML</option>
                            <option value="CSS">CSS</option>
                            <option value="JavaScript">JavaScript</option>
                            <option value="Python">Python</option>
                        </select>
                    </div>

                    <button type="submit" class="btn btn-danger w-100">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>