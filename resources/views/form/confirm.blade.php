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
    <h1 class="form-title">Confirm</h1>

    <div class="row">
        <div class="col-md-8 form">
            <form method="post" action="/form/thanks">
            @csrf
                <div class="form-group">
                    <label>name:</label>
                    {{ $inputs['name'] }}
                    <input name="name" type="hidden" class="form-control" value="{{ $inputs['name'] }}">
                </div>
                <div class="form-group">
                    <label>email:</label>
                    {{ $inputs['email'] }}
                    <input name="email" type="hidden" class="form-control" value="{{ $inputs['email'] }}">
                </div>
                <div class="form-group">
                    <label>subject:</label>
                    {{ $inputs['subject']}}
                    <input name="subject" type="hidden" class="form-control" value="{{ $inputs['subject']}}">
                </div>
                <div class="form-group">
                    <label>inquiry:</label>
                    {{ $inputs['inquiry']}}
                    <input name="inquiry" type="hidden" class="form-control" value="{{ $inputs['inquiry']}}">
                </div>

                <button type="submit" class="btn btn-primary">送信</button>
            </form>
        </div>
    </div>
</body>
</html>