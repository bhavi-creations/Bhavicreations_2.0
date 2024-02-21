function runAnimations() {
  runAnimations_011();
}
runAnimations();
function runAnimations_011() {
  document.querySelector("#id-06").addEventListener("click", func_06_07);

  function func_06_07(e) {
    e.stopPropagation();

    document.querySelector("#id-04").classList.add("animationClass-04");
    document.querySelector("#id-06").classList.add("animationClass-06");
    document.querySelector("#id-05").classList.add("animationClass-05");
    document.querySelector("#id-06").removeEventListener("click", func_06_07);

    setTimeout(() => {
      document.querySelector("#id-06").addEventListener("click", func_06_04);
    }, 100);
  }

  function func_06_04(e) {
    e.stopPropagation();

    document.querySelector("#id-04").classList.add("animationClass-07");
    document.querySelector("#id-06").classList.add("animationClass-09");
    document.querySelector("#id-05").classList.add("animationClass-08");
    document.querySelector("#id-06").removeEventListener("click", func_06_04);

    setTimeout(() => {
      //loop login
      document.querySelector("#id-04").classList.remove("animationClass-04");
      document.querySelector("#id-06").classList.remove("animationClass-06");
      document.querySelector("#id-05").classList.remove("animationClass-05");
      document.querySelector("#id-04").classList.remove("animationClass-07");
      document.querySelector("#id-06").classList.remove("animationClass-09");
      document.querySelector("#id-05").classList.remove("animationClass-08");
      runAnimations_011();
    }, 300.00001192092896);
  }
}
