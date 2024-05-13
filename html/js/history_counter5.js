//타이머 전시 예정 
function counter(){
    //var dday = new Date("Apr 7,2018,09:00:00").getTime(); //디데이
        var dday = new Date("2024-06-15 15:00:00").getTime(); //디데이
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
                    $('#count_history5').html('2024.06.15. ｜ 행복한 미술애호가 입문과 예술의 역할｜김윤섭 소장'); //기록내용
                } else {
                    if (d>0) {
                        view = view+d +'일 ';
                    }
                    if (h>0) {
                        view = view+h+':';
                    }
                    if (m>0) {
                        view = view+m+':';
                    }
                    $('#count_history5').html(view+s+'후 전시 ｜ 행복한 미술애호가 입문과 예술의 역할｜김윤섭 소장'); //기록내용
                }
            }, 1000);
        }
        counter();