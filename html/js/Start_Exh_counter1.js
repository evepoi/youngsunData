//타이머 전시 예정
function counter(){
    //var dday = new Date("Apr 7,2018,09:00:00").getTime(); //디데이
            var dday = new Date("2024-09-02 00:00:00").getTime(); //디데이
            setInterval(function(){
                var now = new Date(); //현재 날짜 가져오기
                var distance = dday - now;
                var d = Math.floor(distance / (1000 * 60 * 60 * 24));
                var h = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                var m = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                var s = Math.floor((distance % (1000 * 60)) / 1000);
                var view = '';
                if(s < 10){
                    s = '0'+s;
                }
                if (distance<0) {
                    $('#Start_Exh').html('전시중');
                    $('#artlist1').html('곽연주 개인전');
                    $('#count_history').html('2024.09.02. ~ 2024.09.30. ｜ 나비! 꽃으로 피다'); //기록내용
                } else {
                    if (d>0) {
                        view = view+d +'일 ';
                    }
                    if (h>0) {
                        view = view+h+'시 ';
                    }
                    if (m>0) {
                        view = view+m+'분 ';
                    }
                    $('#artlist1').html(view+s+' 후 전시'); 
                    $('#Start_Exh').html('전시예정');
                    $('#count_history').html(view+s+'후 전시 ｜ 곽연주 개인전'); //기록내용 
                }
            }, 1000);
        }
    counter();