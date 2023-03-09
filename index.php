

<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="Calculator.css">
</head>
<body>
    <div class="Container">
        <div class="Calculator">
            <div class="screen">
              <input type="text" name="screen" id="screen" value="<?php echo $ ?>">
            </input>

              
            </div>

            <div class="console">
              <div class="warp1">
                <table>
                      <tr>
                          <td><button class="btn" type="submit" id="num7" name="num7" >7</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="num8" name="num8">8</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="num9" name="num9">9</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="chia" name="chia">/</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="k" name="k" >CE</button></form></td>
                        </tr>

                        <tr>
                          <td><form method="post"><button class="btn" type="submit" id="num4" name="num4">4</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="num5" name="num5">5</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="num6" name="num6">6</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="nhan" name="nhan">*</button></form></td>
                          <td><form method="post"><button class="btn" type="submit" id="k1" name="k1">C</button></form></td>
                        </tr>
                </table>  
                
              </div>
              <div class="warp2">
                <div class ="warp2-1" style="display:flex;" >
                  <div class="warp2-1-in1" style="display: block;">
                      <div class="warp2-1-in1-1">
                        <table>
                          <tr>
                            <td><form method="post"><button class="btn" type="submit"  id="num1" name="num1">1</button></form></form></td>
                            <td><form method="post"><button class="btn" type="submit" id="num2" name="num2">2</button></form></form></td>
                            <td><form method="post"><button class="btn" type="submit" id="num3" name="num3">3</button></form></form></td>
                            <td><form method="post"><button class="btn" type="submit" id="tru" name="tru">-</button></form></form></td>
                            
                          </tr>
                        </table> 
                        </div>
                      <div class="warp2-1-in1-2">
                        <table>
                        <tr>
                            <td><form method="post"><button class="btn btn0" type="submit"  id="num0" name="num0" >0</button></form></form></td>
                            <td><form method="post"><button class="btn" type="submit" id="numdot" name="numdot">.</button></form></form></td>
                            <td><form method="post"><button class="btn" type="submit" id="cong" name="cong">+</button></form></form></td>
                          </tr>
                          

                        </table>
                      </div>


                  </div>
                  
                  <div class="warp2-1-in2" style="display: flex;">
                        <button class="btn btnEquals" style="">=</button>
                  </div>
                  </div>  
              </div>

            

            </div>
        </div>
    </div>
</body>
</html>