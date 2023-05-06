jQuery(function () { 
$(window).on('load', function () {//function ready ale rekomendowane
    // alert("Strona załadowana");
    $("#header").delay("3000").slideUp();

    $("#button3").click(function(){
        if($("#list").is(':visible')){
            $("#list").hide();
        }
        else{
            $("#list").show();
        }
    })
    $("#button4t").click(function(){
        $(".p4").css("color",$("#s4").val())
    })
    $("#button4b").click(function(){
        $(".p4").css("background-color",$("#s4").val())
    })
    $("#button5").click(function(){
        if($("#51").attr("class")=="class51"){
            $("#51").removeClass("class51")
            $("#51").addClass("class52");
        }
        else{
            $("#51").removeClass("class52")
            $("#51").addClass("class51");    
        }
    })
    $("#textarea6").on("keypress",function(e){
        if(e.which == 13){
        $("#text6").text($("#textarea6").val())
        e.preventDefault();
        }
    })

    $("#male").on("click", "img", function() {
        $("#duzyobrazek").attr("src",$(this).attr("src"))
    })
    $("#button8").click(function(){
        $("#lista8").append(`<li>${$("#text8").val()}</li>`)
    })
 
});
});

