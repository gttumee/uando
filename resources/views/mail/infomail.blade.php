
<!DOCTYPE html>
<html>
<head>
    <title>作業依頼</title>
</head>
<body>
    <h1>作業依頼</h1>

    <table border="1">
        <tr>
            <th>お名前</th>
            <th>電子メール</th>
            <th>電話番号</th>
            <th>住所</th>
            <th>メッセージ内容</th>
        </tr>
        <tr>
            <td>{{ $data['name'] }}</td>
            <td>{{ $data['email'] }}</td>
            <td>{{ $data['phone'] }}</td>
            <td>{{ $data['address'] }}</td>
            <td>{{ $data['content'] }}</td>
        </tr>
    </table>
</body>
</html>
