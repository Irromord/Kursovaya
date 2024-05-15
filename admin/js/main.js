var containerId = '#tabs-container';
var tabsId = '#tabs';

$(document).ready(function(){

    $(tabsId + ' A').click(function(){
        if($(this).parent().hasClass('current')){ return false; }

        $(tabsId + ' LI.current').removeClass('current');
        $(this).parent().addClass('current');

        loadTab($(this));
        return false;
    });
});

function loadTab(tabObj){
    if(!tabObj || !tabObj.length){ return; }
    $(containerId).addClass('loading');
    $(containerId).fadeOut('fast');

    $(containerId).load(tabObj.attr('href'), function(){
        $(containerId).removeClass('loading');
        $(containerId).fadeIn('fast');
    });
}


$(document).ready(function () {

$(function () {

$(".btn-del2").click(function(){

var id = $(this).attr("id");

if(confirm("Вы действительно хотите удалить эту запись?"))
    {
        $.ajax({
            type: "POST",
            url: "delete_offer.php",
            data: {id: id}
        });
    }

$("#tabs-container").load("offer.php");
return false;
});
});
});

$(document).ready(function () {

$(function () {

$(".btn-del4").click(function(){

var id = $(this).attr("id");

if(confirm("Вы действительно хотите удалить эту запись?"))
    {
        $.ajax({
            type: "POST",
            url: "delete_newusers.php",
            data: {id: id}
        });
    }

$("#tabs-container").load("newusers.php");
return false;
});
});
});


$(document).ready(function () {

$(function () {

$(".btn-del5").click(function(){

var id = $(this).attr("id");

if(confirm("Вы действительно хотите удалить эту запись?"))
    {
        $.ajax({
            type: "POST",
            url: "delete_liver.php",
            data: {id: id}
        });
    }
return false;
});
});
});


$(document).ready(function () {

$(function () {

$(".btn-del3").click(function(){

var id = $(this).attr("id");

if(confirm("Вы действительно хотите удалить эту запись?"))
    {
        $.ajax({
            type: "POST",
            url: "delete_contact.php",
            data: {id: id}
        });
    }

$("#tabs-container").load("contact.php");
return false;
});
});
});

$(document).ready(function () {

$(function() {

$(".btn-del").click(function(){

var id = $(this).attr("id");

if(confirm("Вы действительно хотите удалить эту запись?"))
    {
        $.ajax({
            type: "POST",
            url: "delete_order.php",
            data: {id: id}
        });
    }
$("#tabs-container").load("orders.php");
return false;
});
});
});


function call() {
 	  var msg   = $('.contact_form').serialize();
        $.ajax({
          type: 'POST',
          url: 'savenews.php',
          data: msg,
          success: function(data) {
            $("#tabs-container").load("Createnews.php");
          },
          error:  function(xhr, str){
	    alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });

    };


    function call1(id) {
     	  var msg   = $('#'+id).serialize();
            $.ajax({
              type: 'POST',
              url: 'savenewusers.php',
              data: msg,
              success: function(data) {
                $("#tabs-container").load("newusers.php");
              },
              error:  function(xhr, str){
    	    alert('Возникла ошибка: ' + xhr.responseCode);
              }
            });

        };

        function call3(id) {
              var msg   = $('#'+id).serialize();
                $.ajax({
                  type: 'POST',
                  url: 'updateusers.php',
                  data: msg,
                  success: function(data) {
                  },
                  error:  function(xhr, str){
                alert('Возникла ошибка: ' + xhr.responseCode);
                  }
                });

            };

            function call4() {
                  var msg   = $('#contact_form').serialize();
                    $.ajax({
                      type: 'POST',
                      url: 'makenewusers.php',
                      data: msg,
                      success: function(data) {
                      },
                      error:  function(xhr, str){
                    alert('Возникла ошибка: ' + xhr.responseCode);
                      }
                    });

                };
