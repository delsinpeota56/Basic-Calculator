<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <style>
        .calculator{
            width: 230px;
            background-color: #C4C4C4;
            padding-top: 0.5px;
            border-color: #000000;
            border-width: 10px;
            margin-left: 40%;
            margin-top: 10%;
        }
        .input{
            width: 200px;
            height: 35px;
            padding-left: 5px;
            padding-top: 5px;
            margin-left: 15px;
            margin-top: 20px;
            margin-bottom: 20px;
            font-size: 25px;
            background-color: #017528;
        }
        .tombol{
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            margin-right: 10px;
            background-color: #0F0A4E;
            color: white;
            font-size: 20px;
            border-width: 0px;
        }
        .tombolop{
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            margin-right: 10px;
            background-color: #2F00F6;
            color: white;
            font-size: 20px;
            border-width: 0px;
        }
        .tombolk{
            width: 40px;
            height: 40px;
            margin-bottom: 10px;
            margin-right: 119px;
            background-color: red;
            color: white;
            font-size: 20px;
            border-width: 0px;
        }
    </style>

    <title> Calculator </title>
</head>
<body>

    <div class="calculator">
        <div class="input" id="input">  </div>

        <div class="button">
            <button class="tombolk" id="tombol" style="margin-left: 15px" onclick="hasil('C')"> C </button>
            <button class="tombolop" id="tombol" onclick="hasil('<-')"> <- </button> <br>

            <button class="tombol" id="tombol" style="margin-left: 15px" onclick="hasil('1')"> 1 </button>
            <button class="tombol" id="tombol" onclick="hasil('2')"> 2 </button>
            <button class="tombol" id="tombol" onclick="hasil('3')"> 3 </button>
            <button class="tombolop" id="tombol" onclick="hasil('+')"> + </button> <br>

            <button class="tombol" id="tombol" style="margin-left: 15px" onclick="hasil('4')"> 4 </button>
            <button class="tombol" id="tombol" onclick="hasil('5')"> 5 </button>
            <button class="tombol" id="tombol" onclick="hasil('6')"> 6 </button>
            <button class="tombolop" id="tombol" onclick="hasil('-')"> - </button> <br>

            <button class="tombol" id="tombol" style="margin-left: 15px" onclick="hasil('7')"> 7 </button>
            <button class="tombol" id="tombol" onclick="hasil('8')"> 8 </button>
            <button class="tombol" id="tombol" onclick="hasil('9')"> 9 </button>
            <button class="tombolop" id="tombol" onclick="hasil('*')"> * </button> <br>

            <button class="tombol" id="tombol" style="margin-left: 15px" onclick="hasil('.')"> . </button>
            <button class="tombol" id="tombol" onclick="hasil('0')"> 0 </button>
            <button class="tombol" id="tombol" onclick="hasil('=')"> = </button>
            <button class="tombolop" id="tombol" onclick="hasil('/')"> / </button> <br>
        </div>
    </div>

</body>

<script>
    let isi = document.getElementById('input');
    isi.innerText = '';
    
    function hasil(par){
        if (par=='C'){
            isi.innerText = '';    
        }else if(par == '='){
            isi.innerText = eval(isi.innerText);
        }else if(par == '<-'){
            if(isi.innerText != 'overflow!'){
                isi.innerText = isi.innerText.slice(0,-1);
            }
        }else{
            isi.innerText += par;
        }

        if(isi.innerText.length >= 10 ){
            isi.innerText = 'overflow!';
        }
    }
</script>

</html>