document.addEventListener("DOMContentLoaded", function () {
    var cells = document.querySelectorAll("#comparisonTable td");

    cells.forEach(function (cell) {
        var cellValue = cell.textContent.trim();

        if (cellValue === "true") {
            cell.style.color = "green";
        } else if (cellValue === "false") {
            cell.style.color = "red";
        }
    });
});
