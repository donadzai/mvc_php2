<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tìm kiếm</title>
</head>

<body>
    <div class="flex justify-between items-center mb-8">
        <h2 class="text-3xl font-bold">Kết quả tìm kiếm cho <?= " " . $keyword ?></h2>
    </div>
    <table class="w-full text-left divide-y">
        <thead class="bg-gray-100 uppercase">
            <th scope="col" class="px-6 py-3 font-bold">STT</th>
            <th scope="col" class="px-6 py-3 font-bold">Tên</th>
            <th scope="col" class="px-6 py-3 font-bold">Hình ảnh</th>
            <th scope="col" class="px-6 py-3 font-bold">Email</th>
            <th scope="col" class="px-6 py-3 font-bold">Số điện thoại</th>
            <th scope="col" class="px-6 py-3 font-bold">Ngày sinh</th>
            <th scope="col" class="px-6 py-3 font-bold">Trạng thái</th>
            <th scope="col" class="px-6 py-3 font-bold">Hành động</th>
        </thead>
        <tbody class="divide-y divide-gray-200 bg-white">
            <?php foreach ($customers as $customer) : ?>
                <tr class="hover:bg-gray-50 transition-colors">
                    <td class="px-6 py-4"><?= $customer->id ?></td>
                    <td class="px-6 py-4"><?= $customer->name ?></td>
                    <td class="px-6 py-4">
                        <img src="<?= $customer->img ?>" alt="<?= $customer->img ?>">
                    </td>
                    <td class="px-6 py-4"><?= $customer->email ?></td>
                    <td class="px-6 py-4"><?= $customer->phoneNumber ?></td>
                    <td class="px-6 py-4"><?= $customer->birth ?></td>
                    <td class="px-6 py-4"><?= $customer->status == 1 ? 'Hoạt đông' : 'Đã khóa' ?></td>
                    <td class="px-6 py-4">
                        <a href="<?= APP_URL . "?act=edit&id=" . $customer->id ?>" class="inline-block px-4 py-2 bg-cyan-500 rounded-full text-white">Sửa</a>
                        <a href="<?= APP_URL . "?act=delete&id=" . $customer->id ?>" class="inline-block px-4 py-2 bg-pink-500 rounded-full text-white">Xóa</a>
                    </td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</body>

</html>