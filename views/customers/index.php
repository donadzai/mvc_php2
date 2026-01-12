<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quản lý khách hàng</title>
</head>

<body>
    <h2>Quản lý khách hàng</h2>
    <table>
        <thead>
            <th>STT</th>
            <th>Tên</th>
            <th>Hình ảnh</th>
            <th>Enail</th>
            <th>Số điện thoại</th>
            <th>Ngày sinh</th>
            <th>Trạng thái</th>
        </thead>
        <tbody>
            <?php foreach ($customers as $customer): ?>
            <tr>
                <td><?= $customer->id ?></td>
                <td><?= $customer->name ?></td>
                <td>
                    <img src="<?= $customer->img ?>" alt="">
                </td>
                <td><?= $customer->email ?></td>
                <td><?= $customer->phoneNumber ?></td>
                <td><?= $customer->date ?></td>
                <td><?= $customer->status == 1 ? 'Hoạt động' : 'Khóa' ?></td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>