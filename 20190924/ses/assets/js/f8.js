  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "b9methzi.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
