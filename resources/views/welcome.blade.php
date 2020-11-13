<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel 8 Import and Export Excel & CSV Demo </title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>
    <div class="container mt-5 text-center">
        <form action="{{ route('import-file') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="form-group mb-5" style="max-width: 600px; margin: 0 auto;">
                <div class="custom-file text-left">
                    <input type="file" name="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Browse file</label>
                </div>
            </div>
            <button class="btn btn-danger">Click to Import</button>
            <a class="btn btn-primary" href="{{ route('export-file') }}">Click to Export</a>
        </form>
    </div>
</body>

</html>