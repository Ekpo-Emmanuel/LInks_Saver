<html>
    <head>
        <style>
            @keyframes animate {
            0%{
                transform: translateY(0) rotate(0deg);
                opacity: 1;
                border-radius: 0;
            }
            100%{
                transform: translateY(-1000px) rotate(720deg);
                opacity: 0;
                border-radius: 50%;
            }
            }

            .background {
            position: fixed;
            width: 100vw;
            height: 100vh;
            top: 0;
            left: 0;
            margin: 0;
            padding: 0;
            background: #4e54c8;
            overflow: hidden;
            z-index: -1;
            }
            .background li {
            position: absolute;
            display: block;
            list-style: none;
            width: 20px;
            height: 20px;
            background: rgba(255, 255, 255, 0.2);
            animation: animate 45s linear infinite;
            }

            .background li:nth-child(0) {
            left: 17%;
            width: 116px;
            height: 116px;
            bottom: -116px;
            animation-delay: 1s;
            }
            .background li:nth-child(1) {
            left: 19%;
            width: 116px;
            height: 116px;
            bottom: -116px;
            animation-delay: 5s;
            }
            .background li:nth-child(2) {
            left: 21%;
            width: 92px;
            height: 92px;
            bottom: -92px;
            animation-delay: 10s;
            }
            .background li:nth-child(3) {
            left: 26%;
            width: 78px;
            height: 78px;
            bottom: -78px;
            animation-delay: 9s;
            }
            .background li:nth-child(4) {
            left: 76%;
            width: 148px;
            height: 148px;
            bottom: -148px;
            animation-delay: 15s;
            }
            .background li:nth-child(5) {
            left: 19%;
            width: 102px;
            height: 102px;
            bottom: -102px;
            animation-delay: 15s;
            }
            .background li:nth-child(6) {
            left: 58%;
            width: 107px;
            height: 107px;
            bottom: -107px;
            animation-delay: 16s;
            }
            .background li:nth-child(7) {
            left: 87%;
            width: 132px;
            height: 132px;
            bottom: -132px;
            animation-delay: 1s;
            }
            .background li:nth-child(8) {
            left: 85%;
            width: 145px;
            height: 145px;
            bottom: -145px;
            animation-delay: 5s;
            }
            .background li:nth-child(9) {
            left: 1%;
            width: 107px;
            height: 107px;
            bottom: -107px;
            animation-delay: 28s;
            }
            .background li:nth-child(10) {
            left: 57%;
            width: 83px;
            height: 83px;
            bottom: -83px;
            animation-delay: 27s;
            }
            .background li:nth-child(11) {
            left: 19%;
            width: 158px;
            height: 158px;
            bottom: -158px;
            animation-delay: 53s;
            }
            .background li:nth-child(12) {
            left: 18%;
            width: 102px;
            height: 102px;
            bottom: -102px;
            animation-delay: 35s;
            }
            .background li:nth-child(13) {
            left: 4%;
            width: 77px;
            height: 77px;
            bottom: -77px;
            animation-delay: 52s;
            }
            .background li:nth-child(14) {
            left: 5%;
            width: 152px;
            height: 152px;
            bottom: -152px;
            animation-delay: 38s;
            }
            .background li:nth-child(15) {
            left: 37%;
            width: 166px;
            height: 166px;
            bottom: -166px;
            animation-delay: 55s;
            }
            .background li:nth-child(16) {
            left: 74%;
            width: 90px;
            height: 90px;
            bottom: -90px;
            animation-delay: 30s;
            }
            .background li:nth-child(17) {
            left: 0%;
            width: 77px;
            height: 77px;
            bottom: -77px;
            animation-delay: 56s;
            }
            .background li:nth-child(18) {
            left: 26%;
            width: 133px;
            height: 133px;
            bottom: -133px;
            animation-delay: 88s;
            }
            .background li:nth-child(19) {
            left: 14%;
            width: 76px;
            height: 76px;
            bottom: -76px;
            animation-delay: 4s;
            }
            .background li:nth-child(20) {
            left: 65%;
            width: 133px;
            height: 133px;
            bottom: -133px;
            animation-delay: 32s;
            }
            .background li:nth-child(21) {
            left: 62%;
            width: 104px;
            height: 104px;
            bottom: -104px;
            animation-delay: 20s;
            }
            .background li:nth-child(22) {
            left: 36%;
            width: 154px;
            height: 154px;
            bottom: -154px;
            animation-delay: 75s;
            }
            .background li:nth-child(23) {
            left: 58%;
            width: 156px;
            height: 156px;
            bottom: -156px;
            animation-delay: 90s;
            }
            .background li:nth-child(24) {
            left: 79%;
            width: 148px;
            height: 148px;
            bottom: -148px;
            animation-delay: 57s;
            }
            .background li:nth-child(25) {
            left: 19%;
            width: 139px;
            height: 139px;
            bottom: -139px;
            animation-delay: 2s;
            }
            .background li:nth-child(26) {
            left: 59%;
            width: 116px;
            height: 116px;
            bottom: -116px;
            animation-delay: 77s;
            }
            .background li:nth-child(27) {
            left: 6%;
            width: 155px;
            height: 155px;
            bottom: -155px;
            animation-delay: 69s;
            }
            .background li:nth-child(28) {
            left: 17%;
            width: 149px;
            height: 149px;
            bottom: -149px;
            animation-delay: 69s;
            }
            .background li:nth-child(29) {
            left: 6%;
            width: 139px;
            height: 139px;
            bottom: -139px;
            animation-delay: 56s;
            }
            .background li:nth-child(30) {
            left: 87%;
            width: 93px;
            height: 93px;
            bottom: -93px;
            animation-delay: 63s;
            }
            .background li:nth-child(31) {
            left: 49%;
            width: 134px;
            height: 134px;
            bottom: -134px;
            animation-delay: 44s;
            }
            .background li:nth-child(32) {
            left: 53%;
            width: 78px;
            height: 78px;
            bottom: -78px;
            animation-delay: 80s;
            }
            .background li:nth-child(33) {
            left: 6%;
            width: 154px;
            height: 154px;
            bottom: -154px;
            animation-delay: 87s;
            }
            .background li:nth-child(34) {
            left: 54%;
            width: 98px;
            height: 98px;
            bottom: -98px;
            animation-delay: 111s;
            }
            .background li:nth-child(35) {
            left: 9%;
            width: 114px;
            height: 114px;
            bottom: -114px;
            animation-delay: 78s;
            }
            .background li:nth-child(36) {
            left: 1%;
            width: 107px;
            height: 107px;
            bottom: -107px;
            animation-delay: 115s;
            }
            .background li:nth-child(37) {
            left: 4%;
            width: 144px;
            height: 144px;
            bottom: -144px;
            animation-delay: 108s;
            }
            .background li:nth-child(38) {
            left: 29%;
            width: 80px;
            height: 80px;
            bottom: -80px;
            animation-delay: 102s;
            }
        </style>
    </head>
    <body>
    <div>
    <ul class="background">
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    <li></li>
    </ul>
</div>
    </body>
</html>