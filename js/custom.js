$(document).ready(function(){
     $('[data-toggle="tooltip"]').tooltip(); 
    $('.sort-by-x').on('click', function(){ 
    	$('#preloader').show();
    	$('.sort-by-x').not(this).removeClass('ascend descend active');
        $(this).addClass('active');
        filter_by = '';
    	filter_by_order = '';
    	filter_by = $(this).attr('data-id'); 
    	/*
        if($(this).hasClass('sort-by-price')){
            filter_by = ".filter_price"; 
        }
        if($(this).hasClass('sort-by-depart')){  
            filter_by = ".filter_dep_time"; 
        }
        if($(this).hasClass('sort-by-arrival')){ 
            filter_by = ".filter_arr_time";
        }
        if($(this).hasClass('sort-by-duration')){ 
            filter_by = ".filter_duration";
        }
        */
        if($(this).hasClass('ascend')){
            $(this).removeClass('ascend').addClass('descend'); 
            filter_by_order = "desc";  
        } else {
            $(this).removeClass('descend').addClass('ascend'); 
            filter_by_order = "asc";
        } 
        var divs_price_filter0 = sortUsingNestedText(filter_by,filter_by_order);
        $("#allFlightList").append(divs_price_filter0); 
        $('i.fa[data-toggle=tooltip]').tooltip();
        $('#preloader').fadeOut('500');
    });
    function sortUsingNestedText(sortby, order) { 
        var divs = $(".onlyOneWay_loop");
        var divs_price_filter = divs.sort(function (a, b) { 
            var dd1 = parseInt($(a).find(sortby).text());
            var dd2 = parseInt($(b).find(sortby).text());
            if(order == 'asc'){
                return (dd1 < dd2) ? -1 : (dd1 > dd2) ? 1 : 0;
            } else {
                return (dd1 > dd2) ? -1 : (dd1 < dd2) ? 1 : 0;
            }
        });  
        return divs_price_filter;
    }
    $(".time_filter_li, .stops_filter_li, .airline_filter_li").on('click', function(){ 
        $(this).toggleClass('active');  
        filter_function();
    });
    function filter_function(){
        var total_results=0;
        var showing=0;
        var total_active_count = $('.filters-container ul li.active').length;
        var time_filter_length = $('.time_filter_li.active').length;
        var stop_filter_length = $('.stops_filter_li.active').length;
        var air_filter_length = $('.airline_filter_li.active').length; 
 
        $('.onlyOneWay_loop').each(function(){
            var timeFilterOK = false;
            var stopsFilterOK = false;
            var airlineFilterOK = false;
            total_results++;
            var loop_time = parseInt($(this).find('.filter_dep_time').html()); 
            var loop_stops = parseInt($(this).find('.filter_stops').html());
            var loop_airline = $(this).find('.filter_airline_type').html();
            /*==== TIME FILTERING START ====*/ 
            if(time_filter_length>0){
                $('.time_filter_li.active').each(function(){ 
                    var min_time = $(this).attr('data-id-min');
                    var max_time = $(this).attr('data-id-max');  
                    if(max_time == 240){
                        if((loop_time >= 0 && loop_time <= 240) || loop_time >= 1260){ 
                            timeFilterOK = true;
                        }
                    } else {
                        if(loop_time >= min_time && loop_time <= max_time){ 
                            timeFilterOK = true;
                        }
                    }
                });
            }
            /*====   TIME FILTERING END  ====*/
            /*==== STOPS FILTERING START ====*/ 
            if(stop_filter_length>0){
                $('.stops_filter_li.active').each(function(){ 
                    var stops_count = $(this).attr('data-id');      
                    if(loop_stops == stops_count){ 
                        stopsFilterOK = true;
                    } else if(stop_filter_length == 2 && loop_stops>=2){ 
                        stopsFilterOK = true;
                    }
                });
            }
            /*====  STOPS FILTERING END  ====*/
            /*===   AIRLINE FILTERING START  ===*/
            if(air_filter_length>0){
                $('.airline_filter_li.active').each(function(){ 
                    var airline_val = $(this).attr('data-id');      
                    if(loop_airline == airline_val){ 
                        airlineFilterOK = true;
                    } 
                });
            }
            /*====  AIRLINE FILTERING END  ====*/
            if((total_active_count ==0) || ((time_filter_length == 0 || timeFilterOK == true) && (stop_filter_length == 0 || stopsFilterOK == true) && (air_filter_length == 0 || airlineFilterOK == true))){
                showing++;
                $(this).show();
            } else {
               $(this).hide(); 
            }
            if(showing != total_results){
                var filter_text = "Showing "+showing+" Results out of "+total_results+".";
            } else {
                var filter_text = "Showing "+total_results+" Results.";
            } 
            $('#filtertext').html(filter_text);

            if(showing==0) {
                $('#filter_no_results').show().html("No flight found for your filter criteria."); 
            } else {
                $('#filter_no_results').html("").hide(); 
            } 
        })
    }
});
