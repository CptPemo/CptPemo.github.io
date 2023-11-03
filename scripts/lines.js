document.addEventListener("DOMContentLoaded", function () {
    const image = document.getElementById("image");
    const linesContainer = document.getElementById("lines-container");

    // Funktion zum Zeichnen eines Strichs
    function drawLine(x1, y1, x2, y2) {
        const line = document.createElement("div");
        line.className = "line";
        line.style.left = x1 + "px";
        line.style.top = y1 + "px";
        line.style.width = Math.abs(x2 - x1) + "px";
        line.style.height = Math.abs(y2 - y1) + "px";
        linesContainer.appendChild(line);
    }

    // Beispiel: Zeichnen eines Strichs
    drawLine(200, 0, 0, 0);
    drawLine(0,200,0,0);

    // Funktion zum Anpassen der Striche bei Änderung der Bildschirmgröße
    function updateLinesSize() {
        const imageRect = image.getBoundingClientRect();
        const scale = image.width / imageRect.width;
        const lines = document.getElementsByClassName("line");

        for (const line of lines) {
            const originalLeft = parseFloat(line.style.left);
            const originalTop = parseFloat(line.style.top);
            const originalWidth = parseFloat(line.style.width);
            const originalHeight = parseFloat(line.style.height);

            line.style.left = (originalLeft / scale) + "px";
            line.style.top = (originalTop / scale) + "px";
            line.style.width = (originalWidth / scale) + "px";
            line.style.height = (originalHeight / scale) + "px";
        }
    }

    // Event-Listener für Änderung der Bildschirmgröße
    window.addEventListener("resize", updateLinesSize);
});
