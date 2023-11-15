<!DOCTYPE html>
<html>

<head>
    <style>
        /* Mã CSS */
    </style>
</head>

<body>

    <div class="form">
        <form action="" id="form1">
            <input type="text" id="fname" name="fname" placeholder="Họ tên"><br>
            <input type="text" id="femail" name="femail" placeholder="Địa chỉ Email"><br>
            <input type="text" id="fcontent" name="fcontent" placeholder="Nội dung yêu cầu"><br>
            <input type="submit" value="Gửi yêu cầu">
        </form>
    </div>
</body>

</html>

<style>

    .form {
        text-align: center;
        margin-top: 40px;
        max-width: 420px;
        margin: 50px auto;
    }

    #form1 input[type=text] {
        color:  #333333;
        font-family: sans-serif;
        font-weight: 500;
        font-size: 18px;
        border-radius: 5px;
        line-height: 22px;
        background-color: transparent;
        border: 2px solid #044402;
        transition: all 0.3s;
        padding: 13px;
        margin-bottom: 15px;
        width: 100%;
        box-sizing: border-box;
        outline: 0;
    }

    #form1 #fcontent {
        height: 100px;
    }

    #form1 input[type=submit] {
        color: white;
        font-family: sans-serif;
        font-weight: 500;
        font-size: 18px;
        border-radius: 5px;
        line-height: 22px;
        background-color: #044402;
        border: 2px solid #044402;
        transition: all 0.3s;
        padding: 13px;
        margin-bottom: 15px;
        width: 100%;
        box-sizing: border-box;
        outline: 0;
    }

    #form1 input[type="submit"]:hover {
        background: #CC4949;
    }
</style>