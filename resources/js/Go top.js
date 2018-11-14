$(document).ready(function(){
        
    $('.slide-down').mouseover(function(){
        $('.slide-down').animate({
            'border-color' : 'transparent',
            'background-color' : 'gray',
            color : 'black'
        }, 300);
            
    });
    
    $('.slide-down').mouseout(function(){
        $('.slide-down').animate({
            'border-color' : '#aac7cd',
            'background-color' : 'transparent',
            color : '#B99867'
        }, 300);
            
    });
    
    $(".slide-down").click(function() {
        $('html, body').animate({
            scrollTop: $(".section-2").offset().top
        }, 1000);
    });
    
    $('.view-collection').mouseout(function(){
        $('.view-collection').animate({
            'border-color' : '#283345',
            'background-color' : 'transparent',
            color : 'black'
        }, 300);
            
    });
    
    $('.view-collection').mouseover(function(){
        $('.view-collection').animate({
            'border-color' : 'transparent',
            'background-color' : 'gray',
            color : 'black'
        }, 300);
            
    });

    
});