<?php // urlget.php
  if (isset($_GET['url']))
  {
    //전체 파일을 문자열로 읽습니다.
    echo file_get_contents("http://".sanitizeString($_GET['url']));
  }

  function sanitizeString($var)
  {
    // strip_tags($var) : strip_tags는 문자열에서 HTML 태그와 PHP 태그 제거하는 함수입니다
    $var = strip_tags($var);
    // htmlentities($var) : 주어진 모든 문자를 html 엔티티로 변환
    $var = htmlentities($var);
    // stripslashes($var) : 백 슬래시를 제거하는 기능을 가짐
    return stripslashes($var);
  }
?>
