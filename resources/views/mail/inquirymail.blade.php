
<!DOCTYPE html>
<html>
<head>
    <title>問い合わせ。</title>
</head>
<body>
    <h1>問い合わせ。</h1>

    <table border="1">
        <tr>
            <th>お名前</th>
            <th>電子メール</th>
            <th>電話番号</th>
            <th>メッセージ内容</th>
        </tr>
        <tr>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td>{{ $data['phone'] }}</td>
            <td>{{ $data['message'] }}</td>
        </tr>
    </table>
</body>
</html>
