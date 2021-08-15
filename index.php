<?php 
$servername = "localhost";
$username = "root";
$password = "";
$db = "urdoctor";
$conn = new mysqli($servername, $username, $password, $db);
if ($conn->connect_error) {
  die("Không thể kết nối đến cơ sở dữ liệu");
}
?>

<html>
    <head>
        <title>urDoctor</title>
        <style>
            * {
                font-family: Arial;
            }
            h1 {
                display: inline-block;
                margin-right: 1rem;
                color: white;
            }
            .head {
                height: 5rem;
                width: 100%;
                display: flex;
                align-items: center;
                justify-content: center;
                background-color: #1fc8db;
                background-image: linear-gradient(
                    140deg
                    , #EADEDB 0%, #BC70A4 50%, #BFD641 75%);
            }
            .nav {
                height: 100%;
                display: inline-block;
            }
            .nav ul {
                height: 100%;
                padding: 0;
                margin: 0;
            }
            .nav ul li {
                list-style-type: none;
                float: left;
                height: 100%;
                padding: 0;
                margin: 0;
            }
            .nav ul li a {
                display: inline-block;
                height: 100%;
                padding: 0 1rem;
                display: flex;
                align-items: center;
                justify-content: center;
                text-decoration: none;
                color: white;
            }

            #datlich {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 10rem;
            }

            #datlich input {
                width: 100%;
            }

            #datlich button {
                background-color: blue;
                color: white;
                padding: .7rem;
                border-radius: .7rem;
                border: none;
                outline: none;
                cursor: pointer;
                
            }

            #thanhtoan {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 10rem;
            }

            #thanhtoan .type {
                display: grid;
                grid-template-columns: 1fr 1fr 1fr;
                grid-gap: 2rem;
            }

            #thanhtoan .type div {
                display: flex;
                flex-direction: column;
                align-items: center;
                justify-content: center;
            }

            #thanhtoan .type div span {
                display: inline-block;
                margin-top: 1rem;
            }

            #thanhtoan .type .img {
                height: 15rem;
                width: 15rem;
            }

            #nhathuoc {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 10rem;
            }

            #info {
                display: flex;
                align-items: center;
                justify-content: center;
                flex-direction: column;
                margin-top: 10rem;
            }
        </style>
    </head>
    <body>
        <div class="head">
            <h1>urDoctor</h1>
            <nav class="nav">
                <ul>
                    <li>
                        <a href="#datlich">Đặt lịch hẹn</a>
                    </li>
                    <li>
                        <a href="#thanhtoan">Thanh toán</a>
                    </li>
                    <li>
                        <a href="#nhathuoc">Nhà thuốc</a>
                    </li>
                    <li>
                        <a href="#info">Thông tin</a>
                    </li>
                </ul>
            </nav>
        </div>
        <div id="datlich">
            <h2>Đặt lịch hẹn với bác sĩ</h2>
            <form action="done.php" method="POST">
                <table>
                    <tr>
                        <td>Họ và tên *</td>
                        <td>
                            <input type="text" name="name" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Tuổi</td>
                        <td>
                            <input type="number" name="age" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <input type="text" name="address">
                        </td>
                    </tr>
                    <tr>
                        <td>Vấn đề cần tư vấn *</td>
                        <td>
                            <input type="text" name="problem" required>
                        </td>
                    </tr>
                    <tr>
                        <td>Thời gian rảnh *</td>
                        <td>
                            <input type="datetime-local" name="meetingtime" required>
                        </td>
                    </tr>
                </table>
                <button type="submit" class="btn btn-primary" style="margin-top: 1rem;">
                    Đặt lịch
                </button>
            </form>
        </div>
        <div id="thanhtoan">
            <h2>Thanh toán</h2>
            <div class="type">
                <div>
                    <div class="img" style="background-image: url(assets/banktype/visa.jpg)"></div>
                    <span>VISA</span>
                </div>
                <div>
                    <div class="img" style="background-image: url(assets/banktype/localbank.png)"></div>
                    <span>Ngân hàng nội địa</span>
                </div>
                <div>
                    <div class="img" style="background-image: url(assets/banktype/momo.png)"></div>
                    <span>Momo</span>
                </div>
            </div>
        </div>
        <div id="nhathuoc">
            <h2>Nhà thuốc</h2>
        </div>

        <div id="info">
            <h2>Thông tin</h2>
            <span>Địa chỉ: quận Bình Tân, Tp. HCM</span>
        </div>
    </body>
</html>