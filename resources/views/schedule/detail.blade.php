<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/reset.css')  }}">
    <link rel="stylesheet" href="{{ asset('/css/detail.css')  }}">
    <title>詳細ページ</title>
</head>
<body>
    <h3>{{ $schedule->start_date }}</h3>
    <h3>{{ $schedule->sch_part }}</h3>
    <p>{{ $schedule->id }}</p>
    <ul>
        @foreach($exercises as $exercise)
        <li>{{ $exercise->name }}</li>
        @endforeach
    </ul>
    <a href="{{ route('index') }}">戻る</a>
</body>
</html>