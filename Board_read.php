<?
	echo("<font size=5 face='고딕'><b>게시판읽기</b></font>");
	echo("<p>");
	$filename="Data.txt";
	$fp=fopen($filename,"r");
	if(filesize($filename)<=0){
		$string=" ";
	}//file에 아무것도 없는 경우 백지를 출력하기 위해 설정
	else{
		$string = fread($fp, filesize($filename));
	}//file에 글이 있으면 file을 읽음.
	fclose($fp);
	echo("<textarea rows=7 cols=50>$string</textarea>");//textarea를 통해 file에서 읽은 내용을 출력.
	echo("<p>");
	echo("<a href='Board_main.php'><u>되돌아가기</u></a>");//main화면으로 돌아가기 위한 링크.	
?>