<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" >

    <title>Basic setting</title>
</head>

<body>
    <section class="container mt-2">
        <div class="card">
            <div class="card-body">
                <h4>Basic Setting</h4>
                <hr>
                <form action="{{ route('basicsettings.store') }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-6">
                            <label>Title</label>
                            <input type="text" class="form-control" name="title" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Mobile</label>
                            <input type="number" class="form-control" name="mobile" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Email</label>
                            <input type="email" class="form-control" name="email" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Address</label>
                            <input type="text" class="form-control" name="address" value="">
                        </div>
                        <div class="form-group col-md-6">
                            <label>Footer</label>
                            <input type="text" class="form-control" name="footer" value="">
                        </div>
                        <div class="form-group col-md-6"> 
                        </div>
                        <div class="form-group col-md-6">
                           <button type="submit" class="btn btn-sm btn-info">Save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section> 
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js" >
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/js/bootstrap.bundle.min.js" >
    </script> 
</body>

</html>
