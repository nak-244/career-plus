  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "8mep7_yr.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
