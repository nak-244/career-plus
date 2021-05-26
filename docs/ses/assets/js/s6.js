  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "f5spe8t5.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
