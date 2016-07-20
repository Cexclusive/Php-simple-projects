<html>
    <head>
        <title>Reguler Expression</title>
        <style>
            form{
                margin-top:180px;

            }
            .x{
                width: 393px;
                height: 35px;
                color: #55DDF2;
                background: #F3F3F3;
                font-size: 17px;
                font-weight: bold;
 text-align: center;
            }
            .y{
                width: 100px;
                height: 36px;
                color: #fff;
                background: #5DC;
                font-size: 18px
            }
            .output{
                margin-left: 510px;
                font-size: 30px;
            }
        </style>
    </head>
    <body>

    <center>
        <form action="index.php" method="POST">
            Phone No:<input class="x" type="text" name="num" maxlength="11">
            <input class="y" type="submit" >
        </form>
    </center>

    <span class="output">
        <?php
        if (isset($_POST['num'])) {
            switch (1) {
                case preg_match("/017(\d{8})/", $_POST['num']):
                    echo "Grameenphone = $_POST[num]";
                    break;
                case $z = preg_match("/019(\d{8})/", $_POST['num']):
                    echo "Banglalink = $_POST[num]";
                    break;
                case $z = preg_match("/016(\d{8})/", $_POST['num']):
                    echo "Airtel = $_POST[num]";
                    break;
                case $z = preg_match("/018(\d{8})/", $_POST['num']):
                    echo "Robi = $_POST[num]";
                    break;
                case $z = preg_match("/015(\d{8})/", $_POST['num']):
                    echo "TeleTalk = $_POST[num]";
                    break;
                case $z = preg_match("/011(\d{8})/", $_POST['num']):
                    echo "CityCell = $_POST[num]";
                    break;
                default :
                    echo "Number Invalid";
            }
        } else {
            echo "Please submit a Phone number";
        }
        ?>
    </span>
</body>
</html>
