<!DOCTYPE html>
<html lang="ko">
<?php include ("head.php"); ?>
<body>
    <?php include ("header.php"); ?>

    <section id="video">
        <div class="container">
            <div class="row">
                <div class="video clearfix">
                    <?php include ("Video_list.php"); ?>
                    <div class="video_youtube">
                        <div>
                            <iframe width="560" height="315" src="https://www.youtube.com/embed/i5R_nxjYMVg?rel=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                        </div>
                        <div class="infor">
                            <h3><span>미술시장 트렌드</span><strong>김형진 관장</strong></h3>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--특강 내용-->
    
    <?php include ("footer.php"); ?>
</body>
</html>
