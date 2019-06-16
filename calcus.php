<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    
<div class="">
            <div class="hero-unit bg-light pt-2 pb-2" id="calculator-wrapper">
                <div class="row">
                    <div class="col-md-4 bg-white">
                    <div id="calculator-screen" class="uneditable-input pl-1"></div>
                    </div>
                    <div class="col-md-4" style="text-align: center;">
                    <div class="visible-phone">
                        =
                    </div>
                    </div>
                    <div class="col-md-4 bg-white p-1">
                    <div id="calculator-result"  class="uneditable-input">0</div>
                    </div>
                </div>
            </div>

            <div class="row">

            <div class="col-md-8">
                <div id="calc-board">
                <div class="row-fluid">
                    <a href="#" class="btnc btn btn-outline-dark" data-constant="SIN" data-key="115">sin</a>
                    <a href="#" class="btnc btn btn-outline-dark" data-constant="COS" data-key="99">cos</a>
                    <a href="#" class="btnc btn btn-outline-dark" data-constant="MOD" data-key="109">md</a>
                    <a href="#" class="btnc btn btn-danger" data-method="reset" data-key="8">C</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="55">7</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="56">8</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="57">9</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="BRO" data-key="40">(</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="BRC" data-key="41">)</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="52">4</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="53">5</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="54">6</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="MIN" data-key="45">-</a>
                    <a href="#" class="btnc btn btn-outline-dark" data-constant="SUM" data-key="43">+</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="49">1</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="50">2</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="51">3</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="DIV" data-key="47">/</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="MULT" data-key="42">*</a>
                </div>
                <div class="row-fluid mt-2">
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="46">.</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-key="48">0</a>
                    <a href="#" class="btnc btn btn-outline-dark mr-1" data-constant="PROC" data-key="37">%</a>
                    <a href="#" class="btnc btn btn-primary" data-method="calculate" data-key="61">=</a>
                </div>
                </div>
            </div>

            <div class="col-md-4 bg-light">
                <legend class="text-center">History</legend>
                <div id="calc-panel">
                <div id="calc-history">
                    <ol id="calc-history-list"></ol>
                </div>
                </div>
            </div>
            <hr>

            </div>
            </div>

            <script  src="js/main.js" > </script>
</body>
</html>