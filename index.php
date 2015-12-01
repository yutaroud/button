<HTML lang="ja">
<HEAD>
    <TITLE>我らのO-書店～燃やせ！?～</TITLE>
    <link rel="stylesheet" href="css/o.css" type="text/css" id="css_file">
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
 <!-- brのご使用は計画的に 改行目的以外でのbrの利用はNGです。　-->

<div id="wrapper">
    <!-- ヘッダー -->
    <div id="header">
    <h1>あなたの手でO-書店を爆破せよ。</h1>
    <p class="logo"><a href="index.html">O-書店</a></p>
    </div>
    <div id ="contents">
        <!-- ファイルのコンテンツ-->
<img src="img/front.png" name="syasin"><br>

<INPUT type="button" value="爆発させる" onclick="pic1();sound();sound2();document.getElementById('css_file').href
           ='css/bakuha.css'">
<p>※サウンドが流れるので注意してね。</p>
<?php

$file = "number.php";
$fp = fopen ( $file,"r" );
$now = fgets ( $fp );
fclose ( $fp );
$now ++;
$fp = fopen ( $file, "w" );
fputs ( $fp, $now );
fclose ( $fp);
?>
<form action="index.php" method="get">
    <input type="submit" value="リセット">
<p>爆発 合計 <table border="0" cellspacing="0" cellpadding="0"><tr><td align="center"><img src="http://www.rays-counter.com/d327_f4_023/565da570965ef/" alt="アクセスカウンター" border="0"></a></td></tr><tr><td align="center" style="font-size:xx-small"></td></tr></table>
<p/>
</form>

</div>
<!-- 音声ファイルの読み込み 9〜10行目にURLを指定 -->
<audio id="sound-file" preload="auto">
    <source src="music/bakuha.mp3" type="audio/mp3">
</audio>
<audio id="sound-file2" preload="auto">
    <source src="music/kasai.mp3" type="audio/mp3">
</audio>
<div id="footer">
    <p>※このサイトはあくまでジョークサイトです。ご了承ください。</p>
</div>

</div>
</BODY>
</HTML>