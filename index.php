  




<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Calculator.css">
</head>
<body>
    <div class="Container">
        <div class="Calculator">
            <div class="screen">
              <input class="input1" type="text" name="screen1" id="screen1">
              <input class="input2" type="text" name="screen2" id="screen2">
              <input class="input3" type="text" name="screen3" id="screen3" style="text-align:right;">
            </input>
 
              
            </div>
 
            <div class="console">
              <div class="warp1">
                <table>
                      <tr>
                          <td><button class="btn" type="button" id="num7" name="num7" onclick="input_Click(7)">7</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="num8" name="num8" onclick="input_Click(8)">8</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="num9" name="num9" onclick="input_Click(9)">9</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="chia" name="chia" onclick="input_Click(/)">/</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="k" name="k" >CE</button></form></td>
                        </tr>

                        <tr>
                          <td><form method="post"><button class="btn" type="button" id="num4" name="num4" onclick="input_Click(4)">4</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="num5" name="num5" onclick="input_Click(5)">5</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="num6" name="num6" onclick="input_Click(6)">6</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="nhan" name="nhan">*</button></form></td>
                          <td><form method="post"><button class="btn" type="button" id="k1" name="k1">C</button></form></td>
                        </tr>
                </table>  
                
              </div>
              <div class="warp2">
                <div class ="warp2-1" style="display:flex;" >
                  <div class="warp2-1-in1" style="display: block;">
                      <div class="warp2-1-in1-1">
                        <table>
                          <tr>
                            <td><form method="post" ><button class="btn" type="button"  id="num1" name="num1" onclick="input_Click(1)">1</button></form></form></td>
                            <td><form method="post"><button class="btn" type="button" id="num2" name="num2" onclick="input_Click(2)">2</button></form></form></td>
                            <td><form method="post"><button class="btn" type="button" id="num3" name="num3" onclick="input_Click(0)">3</button></form></form></td>
                            <td><form method="post"><button class="btn" type="button" id="tru" name="tru" onclick="input_Click(-)">-</button></form></form></td>
                            
                          </tr>
                        </table> 
                        </div>
                      <div class="warp2-1-in1-2">
                        <table>
                        <tr>
                            <td><form method="post"><button class="btn btn0" type="button"  id="num0" name="num0" onclick="input_Click(0)" >0</button></form></form></td>
                            <td><form method="post"><button class="btn" type="button" id="numdot" name="numdot">.</button></form></form></td>
                            <td><form method="post"><button class="btn" type="button" id="cong" name="cong" onclick="handlerNumber('cong')">+</button></form></form></td>
                          </tr>
                          

                        </table>
                      </div>


                  </div>
                  
                  <div class="warp2-1-in2" style="display: flex;">
                        <button class="btn btnEquals" type="button" onclick="handlerEquals(prepping)">=</button>
                  </div>
                  </div>  
              </div>

            

            </div>
        </div>
    </div>
    <script>

  var numberScreen1="";
  var numberScreen2="";
  var numberScreen3="";
  var prepping="";
  var str1="";
function input_Click(str){
  numberScreen2+=str;
  document.getElementById('screen2').value=numberScreen2;
};

function handlerNumber(strMath){
 

  switch(strMath){
      case "/":
      {
        document.getElementById('screen3').value="/";
        sendScreen();
      }
      break;

      case "cong":
        {
        numberScreen1=""+document.getElementById('screen2').value + "+";

        document.getElementById('screen2').value="";
        numberScreen2="";

        document.getElementById('screen1').value=numberScreen1;

        prepping="+";



      }
      break;

      case "-":
      break;

      case "*":
      break;

      case "=":
      {
      }
      break;

      default:
        break;
  }
};

function handlerEquals(str){
  if(document.getElementById('screen2').value === "")
  {
    document.getElementById('screen2').value="vui long nhap so vao";
  }
  else{

    let result;
    if(str=="+"){
      result = parseFloat(document.getElementById('screen1').value)+parseFloat(document.getElementById('screen2').value);
    }
    else if(str=="-"){
      result = parseFloat(document.getElementById('screen1').value)+parseFloat(document.getElementById('screen2').value);
    }
    else if(str=="/"){
      result = parseFloat(document.getElementById('screen1').value)+parseFloat(document.getElementById('screen2').value);
    }
    else if(str=="*"){
      result = parseFloat(document.getElementById('screen1').value)+parseFloat(document.getElementById('screen2').value);
    }

    document.getElementById('screen3').value=""+result;

    
  }
};



</script>

</body>
</html>