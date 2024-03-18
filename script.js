
document.addEventListener("DOMContentLoaded", function() {
    const rows = document.querySelectorAll(".row");

    rows.forEach(row => {
      const inputFields = row.querySelectorAll(".input-field");
      inputFields.forEach(input => {
        input.addEventListener("input", () => updateRowTotal(row));
      });
    });

  });

  function updateRowTotal(row) {
    const inputFields = row.querySelectorAll(".input-field");
    let rowTotal = 0;

    inputFields.forEach(input => {
      if (input.value !== "") {
        rowTotal += parseFloat(input.value);
      }
    });

    // row.querySelector(".totall").value =  rowTotal.toFixed(2);
    row.querySelector('input[class="totall"]').value =  rowTotal.toFixed(2)
    

}

  
