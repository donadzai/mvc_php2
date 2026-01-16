<form action="<?= APP_URL . "?act=stored" ?>" method="POST" class="w-full">
    <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-4 gap-4">
        <div class="">
            <label for="name" class="block my-3">Nhập tên</label>
            <input id="name" type="text" class="px-4 py-2 border rounded-xl w-full" placeholder="Nhập tên..." name="name">
            <?php if (isset($_SESSION['name'])) : ?>
                <span>Có lỗi</span>
            <?php endif; ?>
        </div>

        <div class="">
            <label for="email" class="block my-3">Nhập email</label>
            <input id="email" type="text" class="px-4 py-2 border rounded-xl w-full" placeholder="Nhập email" name="email">
        </div>

        <div class="">
            <label for="phoneNumber" class="block my-3">Nhập số điện thoại</label>
            <input id="phoneNumber" type="text" class="px-4 py-2 border rounded-xl w-full" placeholder="Nhập số điện thoại" name="phoneNumber">
        </div>

        <div class="">
            <label for="img" class="block my-3">Nhập ảnh</label>
            <input id="img" type="text" class="px-4 py-2 border rounded-xl w-full" placeholder="Nhập link ảnh..." name="img">
        </div>

        <div class="">
            <label for="birth" class="block my-3">Nhập ngày sinh</label>
            <input id="birth" type="date" class="px-4 py-2 border rounded-xl w-full" name="birth">
        </div>

        <div class="">
            <label for="status" class="block my-3">Trạng thái</label>
            <input id="status" type="checkbox" class="" name="status">
            <span class="">Hoạt động</span>
        </div>
    </div>
    <button class="p-4 bg-blue-500 rounded-3xl mt-4 text-white hover:bg-blue-300 transition-colors cursor-pointer" name="createCustomer">Thêm mới</button>
</form>