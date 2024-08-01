<!DOCTYPE html>
<html lang="ko">
<?php include ("head.php"); ?>
<body>
    <?php include ("header.php"); ?>
    <section id="poster">
        <div class="container">
            <div class="row">
                <div class="exh clearfix">
                    <h2 class="ir_so">전시 포스터</h2>
                    <div class="poster_title">
                        <ul>
                            <li class="active"><a href="#">전시</a></li>
                            <li><a href="#">특강</a></li>
                        </ul>
                    </div>
                    <div class="poster_chart">
                        <?php include ("Poster_exhing.php"); ?>
                        <?php include ("Poster_lecture.php"); ?>
                    </div>
                    <div class="poster_artlist">
                        <h3>작품리스트</h3>
                        <a href="exhibition4.php"><h4>나비! 꽃으로 피다</h4></a>
                        <a href="exhibition3.php"><h4>소장작품전 (2024년 7월 01일 ~ 08월 30일)</h4></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- // poster-->
    <?php include ("footer.php"); ?>
</body>
</html>
