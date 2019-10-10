  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "iasrzu2k.html" ;
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
