var onGoingEvent = 0;
var preloader = ' <img src="'+base_url+'/assets/img/preloader1.gif" style="height:18px; width:auto">';

var $active,$next;
function cycleQuotes(){

      $active = $('.quotes .visible');
      $next = ($active.next().length > 0) ? $active.next() : $('.quotes div:first');
      $active.removeClass('visible animated zoomIn');
      $next.addClass('visible').addClass('animated zoomIn');
}
$(document).ready(function(){
    var inter = setInterval('cycleQuotes()', 5000);
    $(document).on("click",".section_link", function(){
        var div_show = $(this).attr("data-show");
        $('.section').addClass('hide_panel');
        $(div_show).removeClass('hide_panel');
    });
    $(document).on("click",".edit-section", function(){
        $("#Modal .modal-title").html('Edit Section Name');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_section/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
        });
    });
     $(document).on("click",".edit-work", function(){
        $("#Modal .modal-title").html('Edit Work Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_workex/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
     $(document).on("click",".edit-education", function(){
        $("#Modal .modal-title").html('Edit Education Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_education/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
      $(document).on("click",".edit-nysc", function(){
        $("#Modal .modal-title").html('Edit NYSC Section');
        $("#Modal .modal-body-main").html('Loading');
        var id = $(this).attr('data-id');
        $.get(base_url+'/cvbuilder/edit_ui_nysc/'+id,function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });

    $(document).on("click",".remove-work", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_work/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().remove();
        });

    });
     $(document).on("click",".remove-education", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_education/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().remove();
        });

    });
      $(document).on("click",".remove-nysc", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_nysc/'+id+'/'+cv_code,function(data){
            item.parent().parent().parent().parent().parent().remove();
        });

    });

      $(document).on("click",".remove-section", function(){
        var item = $(this);
        var id = item.attr('data-id');
        var cv_code = $("#cv_code").val();
        $.post(base_url+'/cvbuilder/remove_section/'+id+'/'+cv_code,function(data){
            item.parent().remove();
            $("#section_panel #prop"+id).remove();
        });

    });

    $(document).on("click",".preview", function(){
        var item = $(this);
        var cv_code = $("#cv_code").val();
        var style = $("input[name=cvstyle]:checked").val();
        if(onGoingEvent == 0){
            onGoingEvent =1;
            var item = $(this);
            item.html(item.html()+preloader);
            var cv_code = $("#cv_code").val();
            var val = $("#builderForm").serialize();
            $.post(base_url+'/cvbuilder/saveinfo/'+cv_code,val,function(data){
                if(data == 'success'){
                    $("#style-modal").modal('hide');
                    //window.open(base_url+'/cvbuilder/preview/'+cv_code+'/'+style,'_blank');
                    $("#Preview_Modal").modal('show');
                    $("#Preview_Modal .modal-content").html('Loading');

                    $.get(base_url+'/cvbuilder/preview/'+cv_code+'/'+style,function(data){
                        $("#Preview_Modal").modal('show');
                        $("#Preview_Modal .modal-content").html(data);
                    });

                } else alert(data);
                item.html('Preview');
                onGoingEvent = 0;
            });
       }
       // $("#Preview_Modal").modal('show');
       //  $.get(base_url+'/cvbuilder/preview/'+cv_code+'/'+style,function(data){
       //      z
       //  });

    });

    $(document).on("click",".submit-form", function(){
       //$("#builderForm").submit();
       if(onGoingEvent == 0){
        onGoingEvent =1;
        var item = $(this);
        item.html(item.html()+preloader);
        var cv_code = $("#cv_code").val();
        var val = $("#builderForm").serialize();
        $.post(base_url+'/cvbuilder/saveinfo/'+cv_code,val,function(data){
            if(data == 'success'){
               
            } else alert(data);
            item.html('Save');
            onGoingEvent = 0;
        });
       } });

    $(".profile-toggle a").on("click", function(event) {
            event.preventDefault();//the default action of the event will not be triggered
            $(".side-menu").toggle(300);
        });


});

$(function(){
    $("#add_new_section").click(function(){
        $("#Modal .modal-title").html('Add New Section');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_ui_section',function(data){
            $("#Modal .modal-body-main").html(data);
        });
    });

});
$(function(){
    $("#add_new_work_ex").click(function(){
        $("#Modal .modal-title").html('Add New Work Ex');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_workex',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });

});

$(function(){
    $("#add_new_education").click(function(){
        $("#Modal .modal-title").html('Add New Education');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_education',function(data){
            $("#Modal .modal-body-main").html(data);
            onmodalload("#Modal");
        });
    });
});
$(function(){
    $("#add_new_nysc").click(function(){
        $("#Modal .modal-title").html('Add New Education');
        $("#Modal .modal-body-main").html('Loading');
        $.get(base_url+'/cvbuilder/fetch_nysc',function(data){
            $("#Modal .modal-body-main").html(data);
        });
    });
});

function work_ex_submit(){
        var val = $("#work_ex_form").serialize();
        var id = $("#cv_id").val();
        val = val+'&cv_id='+id;
        $.post(base_url+'/cvbuilder/fetch_workex',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#work_ex_panel").prepend('<div class="workex-item"> <div class="row" style="padding:10px 0"> <div class="col-md-10" id="work"> <input type="checkbox" name="work_ex[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="work'+data.id+'"> <div class="col-md-4"> <span class="small-text">Position</span><br> <b>'+data.title+'</b> </div> <div class="col-md-4"> <span class="small-text">Company</span><br> <b>'+data.company+'</b> </div> <div class="col-md-4"> <span class="small-text">Duration</span><br> <b>'+data.startdate+' - '+data.enddate+'</b> </div> </div> </div> <div class="col-md-2"> <div class="edit"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-work"><i class="fa fa-edit"></i></a> <a href="" class="remove-work" data-id="'+data.id+'" title="">x</a> </div> </div> </div> </div>');
        });
};
function education_submit(){
        var val = $("#education_form").serialize();
        var id = $("#cv_id").val();
        val = val+'&cv_id='+id;
        $.post(base_url+'/cvbuilder/fetch_education',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#education_panel").prepend('<div class="education-item"> <div class="row"> <div class="col-md-10" id="edu"> <input type="checkbox" name="education[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="edu'+data.id+'"> <div class="col-md-4"> <span class="small-text">Course</span><br> <b>'+data.coursename+'</b> </div> <div class="col-md-4"> <span class="small-text">Institute</span><br> <b>'+data.institutename+'</b> </div> <div class="col-md-4"> <span class="small-text">Duration</span><br> <b>'+data.startdate+'-'+data.enddate+'</b> </div> </div> </div> <div class="col-md-2"> <div class="edit-edu"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-education"><i class="fa fa-edit"></i></a> <a href="" class="remove-education" data-id="'+data.id+'" title="">x</a> </div> </div> </div> </div>');
        });
};

function addsection_submit(){
        var val = $("#addsection_form").serialize();
        var id = $("#cv_id").val();
        val = val+'&cv_id='+id;
        $.post(base_url+'/cvbuilder/fetch_addsection',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            // $("#sortable1").append('<div style="background:#EEE; padding:5px 10px; text-align:center; font-size:14px; margin-bottom:1px" class="section_link" data-show="#prop'+data.id+'"><input type="checkbox" name="section[]" id="" value="'+data.id+'" checked>'+data.section_name+'</div>');
            $("#sortable1").append('<div class="section_link" data-show="#prop'+data.id+'"><input type="checkbox" name="section[]" id="" value="'+data.id+'" checked=""><span id="section'+data.id+'">'+data.section_name+'</span><a href="javascript:;" data-id="'+data.id+'" class="remove-section" style="float:right;">x</a><a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-section"><i class="fa fa-edit"></i></a></div>');
            $("#section_panel").append('<div class="row section hide_panel" id="prop'+data.id+'"><h2>'+data.section_name+'</h2><div class="col-md-11"><div class="form-group"><textarea name="section_'+data.id+'" class="form-control textarea"  cols="50" rows="10"></textarea></div></div></div>');
            $(".section_link[data-show=#prop"+data.id+"]").trigger('click');
            onmodalload("#prop"+data.id);
        });
};

function editsection_submit(id){
        var val = $("#editsection_form").serialize();
        var cv_code = $("#cv_code").val();
        val = val+'&section_id='+id+'&cv_code='+cv_code;
        $.post(base_url+'/cvbuilder/edit_section',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#section"+id).html(data.section_name);
        });
};

function editwork_submit(id){
        var val = $("#editwork_form").serialize();
        var cv_code = $("#cv_code").val();
        val = val+'&work_id='+id+'&cv_code='+cv_code;
        $.post(base_url+'/cvbuilder/edit_work',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#work"+id).find('b').eq(0).html(data.title);
            $("#work"+id).find('b').eq(1).html(data.company);
            $("#work"+id).find('b').eq(2).html(data.startdate + '-' +data.enddate);

        });
};

function editeducation_submit(id){
        var val = $("#editeducation_form").serialize();
        var cv_code = $("#cv_code").val();
        val = val+'&education_id='+id+'&cv_code='+cv_code;
        $.post(base_url+'/cvbuilder/edit_education',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#edu"+id).find('b').eq(0).html(data.coursename);
            $("#edu"+id).find('b').eq(1).html(data.institutename);
            $("#edu"+id).find('b').eq(2).html(data.startdate+ '-' +data.enddate);
        });
};
function nysc_submit(){
    var val = $("#nysc_form").serialize();
    var id = $("#cv_id").val();
    val = val+'&cv_id='+id;
    $.post(base_url+'/cvbuilder/fetch_nysc',val,function(data){
    data = $.parseJSON(data);
    $("#Modal .modal-body-main").html(data.message);
    $("#nysc_panel").prepend('<div class="nysc-item"><div class="row"> <div class="col-md-12" id="nysc"> <input type="checkbox" name="nysc[]" value="'+data.id+'" checked=""> <div class="row" style="padding:0" id="nysc'+data.id+'"> <div class="col-md-3"> <span class="small-text">Batch</span><br> <b>'+data.batch+'</b> </div> <div class="col-md-3"> <span class="small-text">Year</span><br> <b>'+data.year+'</b> </div> <div class="col-md-4"> <span class="small-text">PPA</span><br> <b>'+data.ppa+'</b> </div> <div class="col-md-2"> <div class="edit-edu"> <a href="javascript:;" data-id="'+data.id+'" data-toggle="modal" data-target="#Modal" class="edit-nysc"><i class="fa fa-edit"></i></a> <a href="" class="remove-nysc" data-id="'+data.id+'" title="">x</a> </div> </div> </div> </div> </div></div>');
    });
};
function editnysc_submit(id){
        var val = $("#editnysc_form").serialize();
        var cv_code = $("#cv_code").val();
        val = val+'&nysc_id='+id+'&cv_code='+cv_code;
        $.post(base_url+'/cvbuilder/edit_nysc',val,function(data){
            data = $.parseJSON(data);
            $("#Modal .modal-body-main").html(data.message);
            $("#nysc"+id).find('b').eq(0).html(data.batch);
            $("#nysc"+id).find('b').eq(1).html(data.year);
            $("#nysc"+id).find('b').eq(2).html(data.ppa);
        });
};
$(document).ready(function(){
    $('.textarea').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": false, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false //Button to change color of font  
    });
});

function onmodalload(divid){
    $(divid + ' .textarea').wysihtml5({
        "font-styles": false, //Font styling, e.g. h1, h2, etc. Default true
        "emphasis": true, //Italics, bold, etc. Default true
        "lists": true, //(Un)ordered lists, e.g. Bullets, Numbers. Default true
        "html": false, //Button which allows you to edit the generated HTML. Default false
        "link": true, //Button to insert a link. Default true
        "image": false, //Button to insert an image. Default true,
        "color": false //Button to change color of font  
    });
}











