<!DOCTYPE html>
<html lang="ja">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>漫画</title>
<meta name="description" content="作品投稿・閲覧サイト">
<link rel="icon" href="img/favicon.ico">

<style>
  #jsnap {  
  width:100%;  
  display:flex;   
  overflow-x:hidden;   
  }
    
  #jsnap > div {
  height:100%;  
  width:100%;  
  flex:none;  
  display:flex;  
  align-items:center;  
  justify-content:center;  
  }
        
  #jsnap > div > img {
  width:30%;  
  padding-left:0;  
  }
    
  #back{
  float:left;   
  }
    
  #go{
  float:right;  
  }
    
  #btn {
  display:block;  
  margin:0 auto;  
  width:50%;  
  }

</style>
</head>
<body>
    <div id="jsnap">  
  
        <div><img src="{{asset('img/magazine.jpg')}}"></div>  
        <div><img src="{{asset('img/magazine2.jpg')}}"></div>  
        <div><img src="{{asset('img/magazine3.jpg')}}"></div>  
          
    </div>   
            
    <div id="btn">  
          
        <button id ="back" type = "button" onclick = "back()">  
        <span style="font-size:4em;">◀︎</span>  
        </button>   
          
        <button id = "go" type = "button" onclick = "go()">  
        <span style="font-size:4em;">▶︎</span>  
        </button>  
          
    </div>   
          

  <script>
    var element = document.getElementById("jsnap");
    var num = 0;
    function go() {
        if(num+1 < element.children.length) {
    
        var child = element.children[num+1];  
        child.scrollIntoView(  
            {
                behavior:"smooth",  
                block:"nearest",  
                inline:"nearest",  
            }
        );  
            num++;  
        }
        else {
        return;  
        }
    }
    
    function back() {
  
        if(num-1 >= 0) { 
        var child = element.children[num-1];  
    
    child.scrollIntoView(  
            {
                behavior:"smooth",  
                block:"nearest",  
                inline:"nearest",   
            }
        );   
            num--;  
        }
        else {
        return;  
        }
    }  
  </script>
</body>
</html>
