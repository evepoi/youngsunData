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
                </div>
            </div>
        </div>
    </section>
    <!-- // poster-->
    <?php include ("footer.php"); ?>
</body>
</html>
