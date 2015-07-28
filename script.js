<script type="text/javascript">

function open_info()
{
window.open('index.html','nom_de_ma_popup','menubar=no, scrollbars=no, top=100, left=100, width=300, height=200');
}


$(function(){
$("body").createFlashMessage({
type: 'success',
message: '<b>Well done!</b>',
closeable: true,
permanent: true,
position: 'static'
});

$(document).ready(function(){
    $("#hide").click(function(){
        $("p").hide();
    });
    $("#show").click(function(){
        $("p").show();
    });
});

</script>
