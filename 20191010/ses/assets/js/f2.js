  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "jhep43db.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
