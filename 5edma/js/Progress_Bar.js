document.getElementById("slider").addEventListener("change", function() {
    $(".progress").css("width", $("#slider").val() + "%");
  a =document.getElementById("price123").getAttribute('value');
  c =document.getElementById("price321").getAttribute('value'); 
 
  MAX_PRICE=document.getElementById("price123").getAttribute('valuemax'); ;
  MIN_PRICE=document.getElementById("price123").getAttribute('valuemin'); 
  MAX_DIM=document.getElementById("price321").getAttribute('valuemax'); 
  MIN_DIM=document.getElementById("price321").getAttribute('valuemin'); 
  W=document.getElementById("price321").getAttribute('valuew'); 
  b=(MIN_PRICE * MAX_PRICE)/200;
  x=( MAX_DIM + MIN_DIM ) /200 ;

  document.getElementById("price123").innerHTML=    Math.trunc( b* $(".progress").width() );

  document.getElementById("price321").innerHTML= "dimensions :"+ Math.trunc( x* $(".progress").width() ) + "<br> weight :"+ Math.trunc( W* $(".progress").width() ) ;


   // document.getElementById("price123").innerHTML= '$'+     a * ( $(".progress").width()  )    ;
 
    console.log(  $(".progress").width() )
 })