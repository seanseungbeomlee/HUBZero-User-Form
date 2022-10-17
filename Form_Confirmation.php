<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $M1 = $_POST["M1"];
  $M2 = $_POST["M2"];
  $a = $_POST["a"];
  // $pdflatex = new PhpLatex_PdfLatex();
  if (empty($M1) or empty($M2) or empty($a)) {
    echo "Missing MESA paramters.";
  } else {
    echo "Mass of star 1: " . $M1;
    echo "<br>";
    echo "Mass of star 2: " . $M2;
    echo "<br>";
    echo "Orbital separation: " . $a;
    echo "<br>";
  }
  // $pathToGeneratedPdf = $pdflatex->compileString('
  // \documentclass{article}
  // \begin{document}
  // Hello from \LaTeX!
  // \end{document}
  // ');
}
?>

<html>
<script src="https://polyfill.io/v3/polyfill.min.js?features=es6"></script>
<script id="MathJax-script" async src="https://cdn.jsdelivr.net/npm/mathjax@3/es5/tex-mml-chtml.js"></script>
<body>
  $$x = {-b \pm \sqrt{b^2-4ac} \over 2a}.$$
</body>
</html>