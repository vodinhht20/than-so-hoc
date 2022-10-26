<?php

  function removeSign($string)
  {
      $signed = array("à", "à", "á", "ạ", "ả", "ã", "â", "ầ", "ấ", "ậ", "ẩ", "ẫ", "ă", "ằ", "ắ"
      , "ặ", "ẳ", "ẵ", "è", "é", "ẹ", "ẻ", "ẽ", "ê", "ề", "ế", "ệ", "ể", "ễ", "ì", "í", "ị", "ỉ", "ĩ",
      "ò", "ò", "ó", "ọ", "ỏ", "õ", "ô", "ồ", "ố", "ộ", "ổ", "ỗ", "ơ"
      , "ờ", "ớ", "ợ", "ở", "ỡ",
      "ù", "ú", "ụ", "ủ", "ũ", "ư", "ừ", "ừ", "ứ", "ự", "ử", "ữ",
      "ỳ", "ý", "ỵ", "ỷ", "ỹ",
      "đ",
      "À", "Á", "Ạ", "Ả", "Ã", "Â", "Ầ", "Ấ", "Ậ", "Ẩ", "Ẫ", "Ă"
      , "Ằ", "Ắ", "Ặ", "Ẳ", "Ẵ",
      "È", "É", "Ẹ", "Ẻ", "Ẽ", "Ê", "Ề", "Ế", "Ệ", "Ể", "Ễ",
      "Ì", "Í", "Ị", "Ỉ", "Ĩ",
      "Ò", "Ó", "Ọ", "Ỏ", "Õ", "Ô", "Ồ", "Ố", "Ộ", "Ổ", "Ỗ", "Ơ"
      , "Ờ", "Ớ", "Ợ", "Ở", "Ỡ",
      "Ù", "Ú", "Ụ", "Ủ", "Ũ", "Ư", "Ừ", "Ứ", "Ự", "Ử", "Ữ",
      "Ỳ", "Ý", "Ỵ", "Ỷ", "Ỹ",
      "Đ", "ê", "ù", "à", "ỳ", "ò", "ạ");
      $unsigned = array("a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a", "a"
      , "a", "a", "a", "a", "a", "a",
      "e", "e", "e", "e", "e", "e", "e", "e", "e", "e", "e",
      "i", "i", "i", "i", "i",
      "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o", "o"
      , "o", "o", "o", "o", "o",
      "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u", "u",
      "y", "y", "y", "y", "y",
      "d",
      "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A", "A"
      , "A", "A", "A", "A", "A",
      "E", "E", "E", "E", "E", "E", "E", "E", "E", "E", "E",
      "I", "I", "I", "I", "I",
      "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O", "O"
      , "O", "O", "O", "O", "O",
      "U", "U", "U", "U", "U", "U", "U", "U", "U", "U", "U",
      "Y", "Y", "Y", "Y", "Y",
      "D", "e", "u", "a", "y", "o", "a");
    return str_replace($signed, $unsigned, $string);
  }

  function wordValueOne()
  {
    return [
      'A' => 1,
      'B' => 2,
      'C' => 3,
      'D' => 4,
      'E' => 5,
      'F' => 6,
      'G' => 7,
      'H' => 8,
      'I' => 9,
      'J' => 10,
      'K' => 11,
      'L' => 12,
      'M' => 13,
      'N' => 14,
      'O' => 15,
      'P' => 16,
      'Q' => 17,
      'R' => 18,
      'S' => 19,
      'T' => 20,
      'U' => 21,
      'V' => 22,
      'W' => 23,
      'X' => 24,
      'Y' => 25,
      'Z' => 26,
    ];
  }

  function wordValueTwo()
  {
    return [
      'A' => 1,
      'B' => 2,
      'C' => 3,
      'D' => 4,
      'E' => 5,
      'F' => 6,
      'G' => 7,
      'H' => 8,
      'I' => 9,
      'J' => 1,
      'K' => 2,
      'L' => 3,
      'M' => 4,
      'N' => 5,
      'O' => 6,
      'P' => 7,
      'Q' => 8,
      'R' => 9,
      'S' => 1,
      'T' => 2,
      'U' => 3,
      'V' => 4,
      'W' => 5,
      'X' => 6,
      'Y' => 7,
      'Z' => 8,
    ];
  }

  function arraySearchAll($needle, $haystack)
  {
    $array = [];
    foreach ($haystack as $k=>$v) {
        if($haystack[$k] == $needle){
            $array[] = $k;
        }
    }
    return $array;
  }

  function transferString($arrText)
  {
    $vowel = ['A', 'I', 'U', 'E', 'O'];
    $vowelWords = [];
    $consonantWords = [];

    // Lấy ra index các nguyên âm
    foreach($vowel as $word) {
      $result = arraySearchAll($word, $arrText);
      if (!empty($result)) {
        array_push($vowelWords, ...$result);
      }
    }

    // TH1 Nếu Y là nguyên âm
    $arrMatch = arraySearchAll('Y', $arrText);
    foreach ($arrMatch as $matchIndex) {
      $beforeWord = $arrText[$matchIndex-1] ?? false;
      $affterWord = $arrText[$matchIndex+1] ?? false;
      if ((!in_array($beforeWord, $vowel)) && (!in_array($affterWord, $vowel))) {
        array_push($vowelWords, $matchIndex);
      }
      if (empty($beforeWord) && empty($affterWord)) {
        array_push($vowelWords, $matchIndex);
      }
      if (!empty($beforeWord) && $beforeWord == "U") {
        array_push($vowelWords, $matchIndex-1);
        array_push($vowelWords, $matchIndex);
      }
    }

    // TH1 Nếu W là nguyên âm
    $arrMatch = arraySearchAll('W', $arrText);
    $especially = ["A", "E", "O"];
    foreach ($arrMatch as $matchIndex) {
      $beforeWord = $arrText[$matchIndex-1] ?? false;
      $affterWord = $arrText[$matchIndex+1] ?? false;
      if (empty($affterWord) && in_array($beforeWord, $especially)) {
        array_push($vowelWords, $matchIndex-1);
        array_push($vowelWords, $matchIndex);
      }
      if (in_array($beforeWord, $vowel) && (!in_array($arrText[$matchIndex-2] ?? true, $vowel)) && (!in_array($arrMatch[$matchIndex+1] ?? true, $vowel)) ) {
        array_push($vowelWords, $matchIndex-1);
        array_push($vowelWords, $matchIndex);
      }
      if (in_array($affterWord, $vowel) && (!in_array($arrText[$matchIndex-1] ?? true, $vowel)) && (!in_array($arrMatch[$matchIndex+2] ?? true, $vowel)) ) {
        array_push($vowelWords, $matchIndex+1);
        array_push($vowelWords, $matchIndex);
      }
    }
    $vowelWords = array_unique($vowelWords);
    $consonantWords = array_diff(array_keys($arrText), $vowelWords);
    sort($vowelWords);
    sort($consonantWords);
    return [
      'vowel_words' => array_values($vowelWords),
      'consonant' => array_values($consonantWords),
    ];
  }

  function mapIndexOfWord($arrIndex, $arrText)
  {
    foreach ($arrIndex as &$indexWord) {
      $indexWord = $arrText[$indexWord];
    }
    return $arrIndex;
  }

  function mapValueWord($arrText, array $values)
  {
    return array_filter($arrText, function(&$item) use($values) {
      $item = $values[$item] ?? null;
      return !empty($item);
    });
  }

  function arrSumNumber($num, $maxNum)
  {
    $numSum = array_sum(str_split($num));
    while ($numSum >= $maxNum) {
      $numSum = array_sum(str_split($numSum));
    }
    return $numSum;
  }

  function listNumberMaster() {
    return [
      "44",
      "55",
      "11",
      "22",
      "33",
      "13",
      "31",
    ];
  }

  // lấy giá trị đường đời
  function getLife($DD1, $DD3, $DD10)
  {
    $result[] = $DD1;
    if (in_array($DD3, listNumberMaster())) {
      $result[] = $DD3;
    }
    $result[] = $DD10;
    return implode("/", $result);
  }

  // lấy giá trị sứ mệnh
  function getMission($arrayInp)
  {
    $result = null;
    if (count($arrayInp) == count(array_unique($arrayInp))) {
      $result = implode("/", $arrayInp);
    }
    return $result;
  }

  // lấy giá trị nhân cách
  function getPersonality($arrayInp)
  {
    $result = null;
    if (count($arrayInp) == count(array_unique($arrayInp))) {
      $result = implode("/", $arrayInp);
    }
    return $result;
  }

  // lấy giá trị linh hồn
  function getSoul($arrayInp)
  {
    $result = null;
    if (count($arrayInp) == count(array_unique($arrayInp))) {
      $result = implode("/", $arrayInp);
    }
    return $result;
  }

  function printData($getLife, $getMission, $getPersonality, $getSoul)
  {
    if ($getLife) {
      echo "Đường đời: $getLife \n";
    }

    if ($getMission) {
      echo "Sứ mệnh: $getMission \n";
    }

    if ($getPersonality) {
      echo "Nhân cách: $getPersonality \n";
    }

    if ($getSoul) {
      echo "Linh hồn: $getSoul \n";
    }
  }

  //////////// Task  //////////////////

  function TP1($birthday) {
    return $birthday[2];
  }

  // Tổng ngày sinh không rút gọn
  function TP2($day) {
    return arrSumNumber($day, 31);
  }

  // Tổng ngày sinh rút gọn còn 1 chữ số
  function TP3($day) {
    return arrSumNumber($day, 9);
  }

  // Tháng sinh
  function TP4($birthday)
  {
    return $birthday[1];
  }

  // Tổng tháng sinh rút gọn còn 1 chữ số
  function TP5($month)
  {
    return arrSumNumber($month, 9);
  }

  // Năm sinh
  function TP6($birthday) {
    return $birthday[0];
  }

  // Tổng Năm sinh ko rút gọn
  function TP7($year) {
    return arrSumNumber($year, 30);
  }

  // Tổng năm sinh 1 chữ số
  function TP8($year) {
    return arrSumNumber($year, 9);
  }

  function TP9(array $wordValues)
  {
    return array_sum($wordValues);
  }

  function TP10($number)
  {
    return arrSumNumber($number, 99);
  }

  function TP11($number)
  {
    return arrSumNumber($number, 9);
  }

  function TP12($wordValues)
  {
    return array_sum($wordValues);
  }

  function TP13($number)
  {
    return arrSumNumber($number, 99);
  }

  function TP14($number)
  {
    return arrSumNumber($number, 9);
  }

  function TP15($arrayInp)
  {
    return array_sum($arrayInp);
  }

  function TP16($number)
  {
    return arrSumNumber($number, 99);
  }

  function TP17($number)
  {
    return arrSumNumber($number, 9);
  }

  function TP37($wordValues)
  {
    return array_sum($wordValues);
  }

  function TP38($number)
  {
    return arrSumNumber($number, 99);
  }

  function TP39($number)
  {
    return arrSumNumber($number, 9);
  }

  function TP40($wordValues)
  {
    return array_sum($wordValues);
  }

  function TP41($number)
  {
    return arrSumNumber($number, 99);
  }

  function TP42($number)
  {
    return arrSumNumber($number, 9);
  }

  function TP43($arrayInp)
  {
    return array_sum($arrayInp);
  }

  function DD1($arrayInp)
  {
    return array_sum($arrayInp);
  }

  function DD3($arrayInp)
  {
    return array_sum($arrayInp);
  }

  function DD10($number)
  {
    return arrSumNumber($number, 9);
  }


  /////// Main  /////////
  function main($name, $birthday) {
    $birthDayArr = explode('-', $birthday);
    $nameFormat = strtoupper($name);
    $arrText = str_split($nameFormat);

    $transferString = transferString($arrText);
    $vowelWord = mapIndexOfWord($transferString['vowel_words'], $arrText);
    $consonant = mapIndexOfWord($transferString['consonant'], $arrText);
    $TP1 = TP1($birthDayArr); //
    $TP2 = TP2($TP1);
    $TP3 = TP3($TP2);
    $TP4 = TP4($birthDayArr); //
    $TP5 = TP5($TP4);
    $TP6 = TP6($birthDayArr); //
    $TP7 = TP7($TP6);
    $TP8 = TP8($TP7);
    $TP9 = TP9(mapValueWord($vowelWord, wordValueOne()));
    $TP10 = TP10($TP9);
    $TP11 = TP11($TP10);
    $TP12 = TP12(mapValueWord($consonant, wordValueOne()));
    $TP13 = TP13($TP12);
    $TP14 = TP14($TP13);
    $TP15 = TP15(array($TP9, $TP12));
    $TP16 = TP16($TP15);
    $TP17 = TP17($TP16);
    $TP37 = TP37(mapValueWord($vowelWord, wordValueTwo()));
    $TP38 = TP38($TP37);
    $TP39 = TP39($TP38);
    $TP40 = TP40(mapValueWord($consonant, wordValueTwo()));
    $TP41 = TP41($TP40);
    $TP42 = TP42($TP41);
    $TP43 = TP43(array($TP37, $TP42));
    $DD1 = DD1(array($TP1, $TP4, $TP7));
    $DD3 = DD3(array($TP3, $TP5, $TP8));
    $DD10 = DD10($DD1);

    $getLife = getLife($DD1, $DD3, $DD10);
    $getMission = getMission(array($TP43, $TP16, $TP17));
    $getPersonality = getPersonality(array($TP40, $TP13, $TP14));
    $getSoul = getSoul(array($TP37, $TP10, $TP11));

    printData($getLife, $getMission, $getPersonality, $getSoul);
  };


  $inpName = readline("Enter fullname: ");
  $inpBirthday = readline("Enter birthday (Y-m-Y): ");
  if ($inpName && $inpBirthday) {
      $name = removeSign($inpName);
      $birthday = $inpBirthday;
      echo $name . "\n";
      echo $birthday . "\n";
      echo "------------------- \n";
      main($name, $birthday);
  }
  // if (isset($_POST['form_submit'])) {
  //   $name = removeSign($_POST['name']);
  //   $birthday = $_POST['birthday'];
  //   echo $_POST['name'] . "\n";
  //   echo $birthday . "\n";
  //   echo "------------------- \n";
  //   echo main($name, $birthday);
  // }
