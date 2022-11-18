<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="{{ asset('/css/app.css') }}" rel="stylesheet">
    <link href="/css/main.css" rel="stylesheet">
    <title>Form</title>
</head>
<body>
    <h1 class="form-title">Form</h1>

    <div class="row">
        <div class="col-md-8 form">
            <form>
                <div class="form-group">
                    <label>name</label>
                    <input type="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>sublect</label>
                    <input type="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label>inquiry</label>
                    <textarea type="inquiry" class="form-control" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">送信</button>
            </form>
        </div>
    </div>
</body>
</html>