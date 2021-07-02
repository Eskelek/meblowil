$(function () {
    'use strict'
    //loader
    const destroyLoader = function() {
        $(".preloader").css({display: "none"});
    }
    
    $(".toMainSite").click(function(){
        destroyLoader();
    })
    
    const hideMainLoader = function() {   
        $(".preloader").animate({opacity: 0},800, destroyLoader);
        $(".hideToLoad").animate({opacity: 1},500);
    }
    setTimeout(hideMainLoader, 4500)
    
    //showElements
    const doc = $(document);
    $(doc).scroll(function(){
        let scrollPosition = $(doc).scrollTop();
        let documentHeight = $(doc).height();
        let scrollBarHeight = $(window).innerHeight();
        let documentHeightWithoutScrollBar = documentHeight - scrollBarHeight;
        
        const whyAsTitle = $(".whyAs--title");
        const whyAsBoxImg = $(".whyAs--box--img")
        const whyAsBoxInfo = $(".whyAs--box--info")
        
        const elementsToShow = [whyAsTitle, whyAsBoxImg, whyAsBoxInfo]
    })
    
    //furniture background animation
    setTimeout(function(){
        const redBackground = $(".aboutThisFurniture--red");
        $(redBackground).animate({width: "30%", opacity: ".7"}, 1500);
        const aboutThisFurnitureDescription = $(".aboutThisFurniture--description");
        $(aboutThisFurnitureDescription).animate({opacity: "1", right: "0"}, 1000)
    }, 100)
    //powiększanie zdjęcia
    $(".box--img--sizeUp").click(function(){
        const viewWindow = $(".furniture--details");
        let detailsImg = $(".detailsImg");
        const quantity = $(this).closest('.box--img').children(".img--move").length;
        
        let imgPath = $(this).closest('.box--img').find('img').attr('src');
        viewWindow.animate({width: "80vw", height: "80vh", opacity: "1"}, 700);
        detailsImg.attr('src', imgPath);
        
    })
    //wyłaczanie powiekszenia
    $(".fa-times-circle").click(function(){
        const viewWindow = $(".furniture--details");
        const detailsImg = $(".detailsImg");
        
        viewWindow.animate({width: "0vw", height: "0vh", opacity: "0"}, 500,function(){
            detailsImg.attr('src', "#");
        });
        
    })
    //slidery meblowe
    
    const wikiImgArray = ["images/wersalki/kanapa_Wiki.png", "images/wersalki/kanapa_Wiki2.jpg"];
    const dinoImgArray = ["images/narozniki/naroznik_Dino.png", "images/narozniki/naroznik.dino2.jpg"];
    const tytusImgArray = ["images/narozniki/naroznik_Tytus_lewy.png", "images/narozniki/naroznik_tytus2.jpg"];
    const kanapaOlaImgArray = ["images/wersalki/kanapa_ola2.jpg", "images/wersalki/kanapa_ola.jpg"];
    const naroznikOlafImgArray = ["images/narozniki/NaroznikOlaf.jpg", "images/narozniki/NaroznikOlaf2.jpg"];
    const naroznikNoellImgArray = ["images/narozniki/NaroznikNoell.jpg", "images/narozniki/NaroznikNoell1.jpg"];
    const naroznikDinoImgArray = ["images/narozniki/naroznikDino.jpg", "images/narozniki/NaroznikDino2.jpg"];
    const naroznikCzesterImgArray = ["images/narozniki/NaroznikCzester.jpg", "images/narozniki/NaroznikCzester.png"];
    const KanapaJolaImgArray = ["images/wersalki/KanapaJola.jpg", "images/wersalki/KanapaJola2.jpg"];
    
    const xxx = ["images/wersalki/kanapa_Wiki.png", "images/wersalki/kanapa_Wiki2.jpg"];
    
    const arrayImgBase = {
        "kanapaOlaImgArray" : kanapaOlaImgArray,
        "wikiImgArray" : wikiImgArray,
        "dinoImgArray" : dinoImgArray,
        "tytusImgArray" : tytusImgArray,
        "naroznikOlafImgArray" : naroznikOlafImgArray,
        "naroznikNoellImgArray" : naroznikNoellImgArray,
        "naroznikDinoImgArray" : naroznikDinoImgArray,
        "naroznikCzesterImgArray" : naroznikCzesterImgArray,
        "KanapaJolaImgArray" : KanapaJolaImgArray,
    };
    
    const arrayImgIndex = {
        "kanapaOlaImgArray" : 0,
        "wikiImgArray" : 0,
        "dinoImgArray" : 0,
        "tytusImgArray" : 0,
        "naroznikCzesterImgArray" : 0,
        "naroznikDinoImgArray" : 0,
        "naroznikNoellImgArray" : 0,
        "naroznikOlafImgArray" : 0,
        "KanapaJolaImgArray" : 0
    };
    
    const moveImgToRight = function(arrayId, parent) {
        

        
        const actualArray = arrayImgBase[arrayId];
        const actualArrayIndex = arrayImgIndex[arrayId];
        let newIndex

        console.log(actualArray);
        
        if(actualArrayIndex + 1 == actualArray.length) {
            arrayImgIndex[arrayId] = 0;
            newIndex = 0;
        } else {
            arrayImgIndex[arrayId] = arrayImgIndex[arrayId] + 1;
            newIndex = arrayImgIndex[arrayId];
        }
        
        $("#" + arrayId).find("img").attr("src", actualArray[ newIndex ]);
        
    }
    
    const moveImgToLeft = function(arrayId) {
        
        const actualArray = arrayImgBase[arrayId];
        const actualArrayIndex = arrayImgIndex[arrayId];
        const actualArrayLength = actualArray.length;
        
        let newIndex;
        
        if(actualArrayIndex == 0) {
            arrayImgIndex[arrayId] = actualArrayLength - 1;
            newIndex = actualArrayLength - 1;
        } else {
            arrayImgIndex[arrayId] = arrayImgIndex[arrayId] - 1;
            newIndex = arrayImgIndex[arrayId];
            console.log(newIndex)
        }
        
        $("#" + arrayId).find("img").attr("src", actualArray[ newIndex ]);
        
    }
    
    $(".img--right").on("click", function(){
        const parent = $(this).closest(".box--img--controls").closest(".box--img").closest(".img-slider");
        const arrayId = $(parent).attr("id");
        
        moveImgToRight(arrayId, parent)
    })
    
    $(".img--left").on("click", function(){
        const parent = $(this).closest(".box--img--controls").closest(".box--img").closest(".img-slider");
        const arrayId = $(parent).attr("id");
        
        moveImgToLeft(arrayId, parent)
    })
    
    //mobile menu
    $(".fa-bars").click(function(){
        const headerList = $(".header--list");
        const furnitures = $(".furnitures");
        if(headerList.hasClass("active")) {
            $(".nav").animate({height: "60px"}, 700);
            $(headerList).animate({opacity: "0", height: "0"}, 1000).removeClass("active");
            $(".header--list--offerList").removeClass("active").animate({height: "0", opacity: "0"}, 500);
        } else {
            $(".nav").css({height: "auto"});
            $(headerList).animate({opacity: "1", height: "125px", zIndex: "50"}, 1000).addClass("active");
        }
    })
    //dropdown in menu
    $(".dropDown").click(function(){
        let windowWidth = $(window).outerWidth();
        const dropDownList = $(".header--list--offerList");
        
        if(windowWidth <= 750) {
            if(dropDownList.hasClass("active")) {
                $(dropDownList).removeClass("active").animate({height: "0", opacity: "0"}, 500);
            } else {
                $(dropDownList).addClass("active").animate({height: "220", opacity: "1"}, 500);
                $(".header--offerlist--item").animate({height: "30px"})
            }
        } else {
            if(dropDownList.hasClass("active")) {
                $(dropDownList).removeClass("active").animate({height: "0", opacity: "0", position: "static"}, 500);
            } else {
                $(dropDownList).addClass("active").animate({height: "100%", opacity: "1", position: "absolute", top: "100%"}, 500);
            }
        }
    })
    //envelope to form
    const envelope = $(".envelope--to--form");
    const marker = $(".marker--to--map");
    
    $(envelope).on("click", function() {
        $("body, html").animate({
            scrollTop: $(".contact--head").offset().top
        }, 1000);
    })
    $(marker).on("click", function() {
        $("body, html").animate({
            scrollTop: $(".contact--box--map").offset().top
        }, 1000);
    })
   
})