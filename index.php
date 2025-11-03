<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>SMV Stream Configuration</title>
  <style>
    h1 {
      text-align: center;
      font-weight: normal;
      color: #012C6D;
    }

    table {
      border-collapse: separate;
      border-spacing: 0px 20px;
      margin-left: 150px;       
      font-family: sans-serif;
    }

    input[type="text"] {
      width: 400px;
      padding: 8px;
      border: 1px solid #ccc;
      border-radius: 5px;
      box-shadow: 0 0 5px rgba(0,0,0,0.1);
      transition: box-shadow 0.3s ease;
    }
    select[type="type"] {
      width: 500px;
      padding: 15px;
      border: 1px solid #ccc;
      border-radius: 5px;
      font-family: sans-serif;
      background-color: white;
    }
    button[type="submit"] {             
      width: 100px;
      padding: 10px 20px;
      background-color:  #B1B5B3;
      color: #000000;           
      text-transform: lowercase;
      border: 1px solid #bbb;
      border-radius: 20px;
      cursor: pointer;
     

    }
  </style>
</head>

<body>

  <h1>SMV Stream Configuration</h1>
  <script>
    function saveButton() {
        var cycles = document.getElementById("cycles").value;
        var freq = document.getElementById("freq").value;
        var phase = document.getElementById("phase").value;
        var phasor = document.getElementById("phasor").value;
        var sms = document.getElementById("sms").value;
        var type = document.getElementById("type").value;
        var name = document.getElementById("name").value;
        var rate = document.getElementById("rate").value;
        
        if (isNaN(cycles))
        {
           	alert("cycles is not numeric");

        }
        else
        {
       

            if(cycles < 0)
            {
                alert("Cycles has to be bigger than 0");
            }
        }
        if (isNaN(phasor))
        {
            alert("phasor is not numeric");
        }
        else 
        {
	       
            
            if(phasor < 0)
            {
                alert("Phasor has to be bigger than 0");
            }
        }
        if (isNaN(rate))
        {
            alert("rate is not numeric");
        }
        else
        {
           

            if(rate < 0)
            {
                alert("rate has to be bigger than 0");
            }
        }

        
                          
                  
        var alertValue = "Saved \n Cycle: " + cycles + "\n Freq: " + freq + "\n" +
                 "Phase: " + phase + "\n" +
                 "Phasor: " + phasor + "\n" +
                 "Sms: " + sms + "\n" +
                 "Type: " + type + "\n" +
                 "Name: " + name + "\n" +
                 "Rate: " + rate;
      alert(alertValue);
    }

  </script>
    <table>
        <tr>
            <td><label for="cycles">Cycles per phasor sample</label></td>
            <td><input type="text" id="cycles" name="cycles"></td>
        </tr>
        <tr>
            <td><label for="freq">Freq datapoint name</label></td>
            <td><input type="text" id="freq" name="freq"></td>
        </tr>
        <tr>
            <td><label for="phase">Phase datapoint name</label></td>
            <td><input type="text" id="phase" name="phase"></td>
        </tr>
        <tr>
            <td><label for="phasor">Phasor frequency</label></td>
            <td><input type="text" id="phasor" name="phasor"></td>
        </tr>
        <tr>
            <td><label for="sms">Sms datapoint name</label></td>
            <td><input type="text" id="sms" name="sms"></td>
        </tr>
        <tr>
            <td><label for="type">Smv data type</label></td>
        <td>
            <select id="type" name="type">
            <option value="INT32">INT32</option>
            <option value="INT64">INT64</option>
            <option value="FLOAT64">FLOAT64</option>
            <option value="FLOAT32">FLOAT32</option>
            <option value="UINT64">UINT64</option>
            <option value="UINT32">UINT32</option>
            </select>
        </td>
        </tr>
        <tr>
            <td><label for="name">Smv datapoint name</label></td>
            <td><input type="text" id="name" name="name"></td>
        </tr>
        <tr>
            <td><label for="rate">Smv sample rate</label></td>
            <td><input type="text" id="rate" name="rate"></td>
        </tr>
        <tr>
            <td colspan="2" style="text-align: center;">
            <button type="submit" onclick="saveButton()">save</button>  
            </td>
        </tr>
    </table>
 
</body>
</html>
