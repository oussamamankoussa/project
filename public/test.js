$(document).ready(function(){
let background1=null;
let background2=null;
let style_titer=null;
let style_info=null;
let style_B=null;

  $('.card1').click(function(){
     if($("#affichage").text() === ""){
      $("#affichage").prepend($(this));
      $("#model").val($(this).attr("number"));
      background1=$("#affichage #background1").attr("style");
      background2=$("#affichage #background2").attr("style");
      style_titer=$("#affichage #style_titer").attr("style");
      style_info=$("#affichage #style_info").attr("style");
      style_B= $("#affichage #style_B").attr("style");
     }else{
      console.log("aaaaa")
      $("#affichage #background1").attr("style",background1);
      $("#affichage #background2").attr("style",background2);
      $("#affichage #style_titer").attr("style",style_titer)
      $("#affichage #style_info").attr("style",style_info);
      $("#affichage p").attr("style",style_B);
      
      $("#affichage img").attr("src",`./FB_IMG_16546301093109901.jpg`);
      let a=$("#affichage").children();
       $(".contun").prepend(a);
      $("#affichage").text("");
      $("#affichage").prepend($(this));
      $("#model").val($(this).attr("number"));
      background1=$("#affichage #background1").attr("style");
      background2=$("#affichage #background2").attr("style");
      style_titer=$("#affichage #style_titer").attr("style");
      style_info=$("#affichage #style_info").attr("style");
     }
    })
      
   
   $(".update").click(function(){
    let backgroundA=$("#backgroundA").val();
    let backgroundB=$("#backgroundB").val();
    let f_titer=$("#f_titer").val();
    let color_titre=$("#color_titre").val();
    let f_info=$("#f_info").val();
    let color_info=$("#color_info").val();
    
   $("#affichage #background1").css("background-color", backgroundA);
    $("#affichage #background2").css("background-color",backgroundB);

    $("#affichage h3").css("font-size",`${f_titer}px`);
    $("#affichage h3").css("color",color_titre);

    $("#affichage p").css("font-size",`${f_info}px`);
    $("#affichage p").css("color",color_info);

});

// methode de validation de titre
$( "#titre" ).keyup(function() {
  $(this).css("border","solid green 4px");
  if($("#affichage h3").text().length < 20){
     $("#affichage h3").text($(this).val());
  }else{
    $("#affichage h3").text("");
    $(this).css("border","solid red 4px");
    $(this).val("");
  }
 
 });


     $(".valide").click(function(){

      if($("#file").val() !== "" ){

        $("#number_M").val($("#model").val());
        $("#styleCarteA").val($("#affichage #background1").attr("style"));
        $("#styleCarteB").val($("#affichage #background2").attr("style"));
        $("#Titre").val($("#affichage h3").text());
        $("#styleTitre").val($("#affichage h3").attr("style"));
        $("#styleInfo").val($("#affichage p").attr("style"));
        $(this).attr("type","submit");

      }else{
        let M_error="donnée un photo !";
        $("#erorr").text("");
        $("#erorr").prepend(M_error);
      }
     })

    
    

    // alert( "Handler for .keyup() called." );
 
  $( "#other" ).click(function() {
    $( "#target" ).keyup();
  });

      
  
  
})

