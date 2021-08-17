{{ $user }} <-- In giá trị của biến user bằng phương pháp Interpolation tức là 2 cặp ngoặc nhọn -->
<form action="{{ route('register') }}" method="POST" enctype="multipart/form-data">
    <-- Khi button được nhấn thì form sẽ gọi tới action và khi action được gọi thì nó sẽ kiểm tra method là gì và có file hay không, nếu có file thì phải có attribute là enctype="multipart/form-data"
    Sau đó route sẽ kiểm tra method của form có trùng với method được khai báo ở file web
-->
    @csrf <-- Token khai báo có sử dụng phương thức chống giả mạo yêu cầu liên trang
    Nếu không có token này thì Laravel sẽ thông báo lỗi 419
-->
<-- Ở mỗi ô input phải có 1 cái name để form hiểu được đó là 1 trường có chứa dữ liệu, nếu không nhập vào thì form vẫn lấy trường đó và giá trị là null hoặc rỗng-->
    <label for="username">Username</label>
    <input type="text" name="username" placeholder="Enter your username">
    <br>
    <label for="password">password</label>
    <input type="text" name="password" placeholder="Enter your password">
    <br>
    <button type="submit">Submit</button>
</form>
