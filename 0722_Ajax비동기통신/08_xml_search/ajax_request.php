<?php 
// ajax_request.php

$xmlData = new DOMDocument();

//xml문서 데이터를 로딩하여 변수에 담는다.
$xmlData->load('city.xml');

// 로드한 XML문서에서 태그 이름이 "name"인 모든 요소를 선택함.
$names = $xmlData->getElementsByTagName("name");

// Ajax 요청으로 전달받은 keyword 헤더의 값을 반환함.
$keyword = $_GET['keyword']; //사용자가 입력한 지역명
$result = "";

//반복문을 통해 도시지역명 개수만큼 내용을 실행한다.
for($i=0;$i<($names->length);$i++){
  if(!empty($keyword)){//사용자가 입력을 했을 때만 실행해야..
    $wordLength = strlen($keyword);

    //<name>태그요소의 텍스트 노드값을 반환한다.
    $name = $names->item($i)->childNodes->item(0)->nodeValue;

    //사용자가 입력한 글자수 만큼 비교한다.
    //strcasecmp() - 영문자 대, 소문자 구분하지 않는 비교메서드
    //substr() - 문자열 자르기
    if(strcasecmp(substr($name, 0, $wordLength), $keyword)==0){
      $result .=$name.nl2br("\n");
      //서울 부산  
      //=> 서울
      //   부산
    }
  } 
}
echo $result; //결과값 출력
?>