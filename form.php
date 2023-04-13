<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script>
function validate(){
    var input = document.getElementById("angka").value;
    
    if(isNaN(input)){
        alert("Input berupa Angka!!");
        return false;
    }

    return true;
}


    </script>
    <title>form</title>
</head>
<body>
    <form  id="numberform" onsubmit="return validate()">
        <input type="text" id="angka"name="number" placeholder="Input angka">
        <br><br>
        <input type="submit" id="gsegitiga" value="generate segitiga"></input>
        <input type="submit" id="gganjil"  value="generate ganjil"></input>
        <input type="submit" id="gprima"  value="generate prima"></input>
</form>

<h1>result</h1>
<div id="segitiga"></div>
<div id="ganjil"></div>
<div id="prima"></div>


</body>
</html>

<script src = "https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
  


$('#gsegitiga').click(function(e){
    e.preventDefault();
      var input = $('#angka').val();
       if(isNaN(input)){
        alert("Input berupa Angka!!");
        return false;
    }else{
        var output = '';
        for (let i=1; i<= input ; i++){
        for(let j=1;j<=i;j++){
        output += i.toString();
       
    }
    output += '\n';
}
$('#segitiga').text(output);
    }

    return true;
      
});

$('#gprima').click(function(e){
    e.preventDefault();
      var input = $('#angka').val();
      if(isNaN(input)){
        alert("Input berupa Angka!!");
        return false;
    }else{
       var output = '';
        for (var i=1; i<= input ; i++){
       if(isPrima(i)){
        output += i + '\n';
       }
    }
    $('#prima').text(output);
}
});

$('#gganjil').click(function(e){
    e.preventDefault();
      var input = $('#angka').val();
       var output = '';
        for (var i=1; i<= input ; i++){
       if(i%2===1){
        output += i + '\n';
       }
    }
    $('#ganjil').text(output);
});

function isPrima(n){
    if (n<=1){
        return false;
    }
    for (var i =2;i<n;i++){
        if (n%i===0){
            return false;
        }
    }
    return true;
}

</script>