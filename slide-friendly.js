
//--------------------------------------------------------
//-------- SLIDE FRIENDLY 
//--------------------------------------------------------
var slideFriendly = {
    interval:undefined,
    listen : function(){
        $(document).ready(function(){
            if($('#slide-container').length){
                slideFriendly.slide = $('#slide-container');
                $('#slide-container .slide-wrap:first').fadeIn('slow');
                slideFriendly.setUp();
                $('#slide-nav ul').children().eq(0).addClass('nav-highlight');
                slideFriendly.interval = setInterval(function(){slideFriendly.fire()},7000);
                slideFriendly.hover();
                slideFriendly.flex();
                $(window).bind('resize',slideFriendly.flex);
            }//if
        })//
    }(),//listen

    setUp : function(){

        $('#slide-container').addClass('bgColor glow');

        $('#slide-friendly .title').addClass('titleGlow');
        $('#slide-friendly .image-wrap').addClass('glow');


        $('#slide-friendly img').wrap('<div class="image-wrap" />');
        $('#slide-friendly iframe').wrap('<div class="image-wrap" />');
        $('#slide-friendly iframe').attr('frameborder',0);


        var nav = '<div id="slide-nav" class="glow bgColor"><ul id="slide-ul">';

        $('#slide-friendly ul:first-child li').each(function(){
            nav += '<li>'+$(this).text()+'</li>';
        });
        nav+='</ul><div class="clear-friendly"></div></div>';

        $('#slide-friendly ul:first-child').remove();
        $('#slide-friendly').prepend(nav); 
        $('#slide-friendly').append('<div class="clear-friendly"></div>');
    },//setUp

    flex : function(){
        var width = $('#slide-friendly').width();
        if($('#slide-friendly iframe').length){
            $('#slide-friendly iframe').css('min-height',(Math.round(width*.65)));
            $('#slide-friendly iframe').css('height',(Math.round(width*.65)));
        }//if

        var maxSlideHeight = 0;
        $('#slide-friendly .slide-wrap').each(function(i){
            if($(this).height() > maxSlideHeight){
                maxSlideHeight = $(this).height();
            }//if
        });
        $('#slide-friendly').css('min-height',(maxSlideHeight+75));
        $('#slide-friendly').css('height',(maxSlideHeight+75));
        
    },//flex

    hover:function(){

        $('body').on('mouseenter','#slide-friendly',function(){
            clearTimeout(slideFriendly.interval);
            slideFriendly.interval=undefined;
        }).on('mouseleave','#slide-friendly',function(){
            if(slideFriendly.interval===undefined){
                slideFriendly.interval = setInterval(function(){slideFriendly.fire()},7000);
            }//if
        });


        $('#slide-ul').on('mouseenter','li',function(){
            var curI = $(this).index();
            var curWI;
            $('#slide-container .slide-wrap').each(function(i){
                if($(this).css('display')=='block'){
                    curWI = i;
                    return false;
                }//if
            });
            if(curI!=curWI){
                $('#slide-container').children().eq(curI).fadeIn(800); 
                $('#slide-nav ul').children().eq(curI).addClass('nav-highlight');
                $('#slide-container').children().eq(curWI).css('display','none');
                $('#slide-nav ul').children().eq(curWI).removeClass('nav-highlight');
            }//if

             $('#slide-nav ul li.nav-highlight').each(function(){
                 if($(this).index()!=curI){
                     $(this).removeClass('nav-highlight');
                 }//if
             });
             $('#slide-container .slide-wrap').each(function(i){
                 if($(this).css('display')=='block'){
                     if($(this).index()!=curI){
                        $(this).css('display','none');
                     }//if
                 }//if
             });
        });
    },//hover

    fire : function(){
        $('#slide-container .slide-wrap').each(function(i,val){
            if($(this).css('display')=='block'){

                if(i==$('#slide-container .slide-wrap').length - 1){
                    $('#slide-container').children().eq(0).fadeIn('slow');
                    $('#slide-nav ul').children().eq(0).addClass('nav-highlight');
                }//if
                else {
                    $('#slide-container').children().eq((i+1)).fadeIn('slow');
                    $('#slide-nav ul').children().eq((i+1)).addClass('nav-highlight');
                }//

            $('#slide-nav ul').children().eq(i).removeClass('nav-highlight');
            $(val).fadeOut(0);
            return false;
            }//if
        });

    }//fire

}//slide-friendly

//--------------------------------------------------------
//-------- END SLIDE FRIENDLY 
//--------------------------------------------------------


