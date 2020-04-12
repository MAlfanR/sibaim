$(document).ready(function(){
    setTimeout(function(){
        loadAjax();
    }, 5000);
});

function loadAjax(){
    id = $('#id').val();

    $.ajax({
        url: 'http://localhost/sibaim/Surat/index/' + id,
        success: function(){
            console.log('success');
        }
    })
}

