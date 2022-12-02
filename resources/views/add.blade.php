<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}">
    <title>追加ページ</title>
</head>

<body>
    <div class="form-wrapper">
        <div class="form-content">
            <form action="{{ route('store',['id' => $day]) }}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="inner-wrapper">
                    <h3>日付</h3>
                    <input type='text' class='sch_date' name='sch_date' value="{{ $day }}">
                    <h3>部位</h3>
                    <input type="radio" name="sch_part" value="胸" class="sch_part">胸
                    <input type="radio" name="sch_part" value="脚" class="sch_part">脚
                    <input type="radio" name="sch_part" value="背中" class="sch_part">背中
                    <input type="radio" name="sch_part" value="腕" class="sch_part">腕
                    <input type="radio" name="sch_part" value="肩" class="sch_part">肩
                    <div class="inner-button">
                    <p><input type='submit' class='form-btn next-btn' value='種目管理画面へ'></p>
                    <p><button type="button" class='form-btn prev-btn' onclick="location.href='{{ route('index') }}' ">戻る</button></p>
                    </div>
                </div>
            </form>
        </div><!-- /.form-content -->
    </div><!-- /.form-wrapper -->
</body>

</html>