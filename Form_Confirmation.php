<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
  $M1 = $_POST["M1"];
  $M2 = $_POST["M2"];
  $a = $_POST["a"];
  $mta = $_POST["mta"];
  $mtb = $_POST["mtb"];
  $mtg = $_POST["mtg"];
  // $pdflatex = new PhpLatex_PdfLatex();
  if (empty($M1) or empty($M2) or empty($a) or empty($mta) or empty($mtb) or empty($mtg)) {
    echo "Missing MESA paramters.";
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
  Mass of star 1: \(<?php echo $M1?> M_\odot\) <br>
  Mass of star 2: \(<?php echo $M2?> M_\odot\) <br>
  Orbital separation: \(<?php echo $a?> R_\odot\) <br>
  Mass Transfer Alpha: <?php echo $mta?> <br>
  Mass Transfer Beta: <?php echo $mtb?> <br>
  Mass Transfer Gamma: <?php echo $mtg?> <br>
</body>
</html>