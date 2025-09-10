var options = [];

$( '.dropdown-menu a' ).on( 'click', function( event ) {

   var $target = $( event.currentTarget ),
       val = $target.attr( 'data-value' ),
       $inp = $target.find( 'input' ),
       idx;

   if ( ( idx = options.indexOf( val ) ) > -1 ) {
      options.splice( idx, 1 );
      setTimeout( function() { $inp.prop( 'checked', false ) }, 0);
   } else {
      options.push( val );
      setTimeout( function() { $inp.prop( 'checked', true ) }, 0);
   }

   $( event.target ).blur();
      
   console.log( options );
   return false;
});

$('.dropdown-category-multi-btn').click(function (){
	if($('.dropdown-category-multi-select').css('display')=='block'){
		$('.dropdown-category-multi-select').css('display','none');
	}else{
		$('.dropdown-category-multi-select').css('display','block');
	}
});

$('.dropdown-brand-multi-btn').click(function (){
  if($('.dropdown-brand-multi-select').css('display')=='block'){
    $('.dropdown-brand-multi-select').css('display','none');
  }else{
    $('.dropdown-brand-multi-select').css('display','block');
  }
});

/*
$('.dropdown-menu-multi-btn').blur(function (){
	
	if($('.dropdown-menu-multi-select').css('display')=='block'){
		$('.dropdown-menu-multi-select').css('display','none');
	}else{
		$('.dropdown-menu-multi-select').css('display','block');
	}
	
});
*/
/** css for li using jquery **/
$('.dropdown-category-multi-select').css('left','1.5%');
$('.dropdown-brand-multi-select').css('left','1.5%');