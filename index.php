<HTML lang="ja">
<HEAD>
    <TITLE>我らのO-書店～燃やせ！！～</TITLE>
    <link rel="stylesheet" href="css/o.css" type="text/css">
    <SCRIPT language="JavaScript">
        <!--
        function pic0(){
            document.syasin.src="img/front.png";
        }
        function pic1(){
            document.syasin.src="img/fir1.jpg";
        }
        function sound()
        {
            // 対象となるID名
            var id = 'sound-file' ;

            // 初回以外だったら音声ファイルを巻き戻す
            if( typeof( document.getElementById( id ).currentTime ) != 'undefined' )
            {
                document.getElementById( id ).currentTime = 0;
            }

            // [ID:sound-file]の音声ファイルを再生[play()]する
            document.getElementById( id ).play() ;
        }
        //-->
        function sound2()
        {
            // 対象となるID名
            var id = 'sound-file2' ;

            // 初回以外だったら音声ファイルを巻き戻す
            if( typeof( document.getElementById( id ).currentTime ) != 'undefined' )
            {
                document.getElementById( id ).currentTime = 0;
            }

            // [ID:sound-file]の音声ファイルを再生[play()]する
            document.getElementById( id ).play() ;
        }

        //-->
    </SCRIPT>
</HEAD>
<BODY>
<br><br><br><br><br><br><br> <!-- brのご使用は計画的に 改行目的以外でのbrの利用はNGです。　-->
<img src="img/front.png" name="syasin"><br>

<INPUT type="button" value="爆発させる" onclick="pic1();sound();sound2()">
<p>※サウンドが流れるので注意してね。</p>

<!-- 音声ファイルの読み込み 9〜10行目にURLを指定 -->
<audio id="sound-file" preload="auto">
    <source src="music/bakuha.mp3" type="audio/mp3">
</audio>
<audio id="sound-file2" preload="auto">
    <source src="music/kasai.mp3" type="audio/mp3">
</audio>

</BODY>
</HTML>