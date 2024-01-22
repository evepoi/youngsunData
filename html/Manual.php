메뉴얼
전시 포스터 시간계산 작성안내
파일명 : Poster_exhing.php
신규 전시 추가
    <div>
        <div class="poster">
            <figure>
                <img src="https://github.com/evepoi/youngsun_img/blob/master/img/exh/exh_main_2024_01_02.png?raw=true" alt="2024.01.02.전시">
            </figure>
        </div>
        <div class="infor">
            <h3><span id="Start_Exh"></span><strong>영선갤러리</strong><em  id="artlist1"></em><!--<em>소장전</em>--></h3>
        </div>
    </div>
를 추가한다.

전시명 : <strong>영선갤러리</strong>에 작성한다.
부 전시명을 <!--<em>소장전</em>-->에 작성한다.

직전 전시내용을 다음과 같이 정리한다.
    <div>
        <div class="poster">
            <figure>
                <img src="https://github.com/evepoi/youngsun_img/blob/master/img/exh/exh_main_2023_12_05.png?raw=true" alt="영선갤러리 한국화전">
            </figure>
        </div>
        <div class="infor">
            <h3><span id="End_Exh"></span><strong>영선갤러리</strong><em>한국화전</em></h3>
        </div>
    </div>

변경사항
<span id="Start_Exh"> => <span id="End_Exh">로 변경.
<em  id="artlist1"></em><!--<em>소장전</em>--> => <em>소장전</em> 로 변경.

위 직전 전시 내용에서 <span id="End_Exh">를 삭제처리한다.

전체적인 전시내용 포스터는 4장이므로 마지막 전시 관련 내용은 삭제처리한다.
파일명 : history_home_poster.php
<img src="https://github.com/evepoi/youngsun_img/blob/master/img/exh/exh_main_2024_01_02.png?raw=true" alt="2024.01.02.전시">의 내용과 같이 맨 위에 신규 포스터 내용을 추가한다.

파일명 : history_home.php
<div id="count_history"></div>
2023.12.05. ~ 2024.01.04. ｜ 영선갤러리 한국화전<br>
처럼 되어 있지만, 이곳은 신규전시는 <div id="count_history"></div>로 자바스크립트로 처리하므로, 신규들어올 전시의 직전 전시내용을 위 영선갤러리 한국화전과 같은 방식으로 추가하여 정리한다.