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
    <p class="form-sub">フォーム→Gmailで問い合わせ受信（※DB登録なし）</p>

    <div class="row">
        <div class="col-md-8 form">
            <form method="post" action="/contact/confirm">
            @csrf
                <div class="form-group">
                    <label>name</label>
                    <input type="text" name="name" class="form-control">
                </div>
                <div class="form-group">
                    <label>email</label>
                    <input type="email" name="email" class="form-control">
                </div>
                <div class="form-group">
                    <label>subject</label>
                    <input type="text" name="subject" class="form-control">
                </div>
                <div class="form-group">
                    <label>inquiry</label>
                    <textarea type="text" name="inquiry" class="form-control" rows="10"></textarea>
                </div>

                <button type="submit" class="btn btn-primary">入力内容確認</button>
            </form>
        </div>
    </div>
</body>
</html>