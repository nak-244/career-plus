  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "43nt9yii.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
