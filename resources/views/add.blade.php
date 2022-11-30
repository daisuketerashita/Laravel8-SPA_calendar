<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="{{ asset('/css/style.css')  }}" >
    <title>Document</title>
</head>
<body>
    <div>
        <form action="{{ route('store',['id' => $day]) }}" method="post" enctype="multipart/form-data">
            @csrf
            <table>
                <tr>
                    <th>日付</th>
                    <td><input type='text' class='form-control' name='sch_date' value="{{ $day }}"></td>
                </tr>
                <tr>
                    <th>部位</th>
                    <td>
                        <input type="radio" name="sch_part" value="胸">胸
                        <input type="radio" name="sch_part" value="脚">脚
                        <input type="radio" name="sch_part" value="背中">背中
                        <input type="radio" name="sch_part" value="腕">腕
                        <input type="radio" name="sch_part" value="肩">肩
                    </td>
                </tr>
            </table>
            <input type='submit' class='' value='種目管理画面へ'>
        </form>
    </div>
    <a href="{{ route('index') }}">戻る</a>
</body>
</html>