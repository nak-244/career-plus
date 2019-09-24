  function nextPage() {
    rcheck = document.myForm.radiobutton[0].checked;
    if (rcheck) {
      document.location = "k3c3_j9j.html";
    } else {
      alert("【理解しました】をチェックしないと次へ進めません。");
    }
  }
