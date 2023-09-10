$(document).ready(function (){
    function changeStatus(status_id) {
        alert('dwa');
        var url = 'adminOrder/changeStatus/' + status_id + ''
        var data = {}
        $.post(url, data, function (msg) {
            console.log(msg);

        })

    }
})