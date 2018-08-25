<?
	echo("<font size=5 face='고딕'><b>게시판 쓰기</b></font>");
	echo("<p>");
	echo("<form name='inputform' method='post' action='Board_write.php'>
		<textarea rows=7 cols=50 name=string></textarea>
		<p>
		<input type='submit' value='등록하기'>
		<input type='reset' value='다시기입'>
		</form>
	");
	$fp=fopen("Data.txt",'w');
	fwrite($fp,"$_POST[string]",strlen($_POST[string]));//string에 저장된 값을 Data.txt에 저장한다.
	fclose($fp);
	if($_POST[string]){
		echo("<meta http-equiv='Refresh' content='0; URL=http://127.0.0.1/myadmin/Board_main'>");//meta에서 URL의 주소는 특별한 상황을 생각하지 않고 작성하였습니다.만약 작동이 안되면 URL경로에 폴더명을 넣어서 실행해주시면 감사하겠습니다.
	}//등록하기를 통해 string에 값이 들어가면 실행, meta를 통해 자동으로 main화면으로 돌아가게 설정함.
	echo("<p>");
	echo("<a href='Board_main.php'><u>되돌아 가기</u></a>");//main화면으로 돌아가기위한 링크
?>