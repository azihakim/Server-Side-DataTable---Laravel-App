<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <link href="https://cdn.datatables.net/v/bs5/dt-2.1.2/datatables.min.css" rel="stylesheet">
</head>

<body>
    <h1>Hello, world!</h1>
    <div class="table-responsive container mt-3">
        <table class="table" id="tableDT">
            <thead>
                <tr>
                    <td>No</td>
                    <td>Nama</td>
                    <td>Email</td>
                    <td>aksi</td>
                </tr>
            </thead>
            <tbody>

            </tbody>
        </table>
    </div>

    <input type="hidden" id="table-url" value="{{ route('table') }}">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.datatables.net/v/bs5/dt-2.1.2/datatables.min.js"></script>
    <script src="{{ asset('main.js') }}"></script>

</body>

</html>
