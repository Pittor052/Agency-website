var getUnseenMessages = {
    init: function () {
        setInterval(function () {
            $.get($.ajax({
                url: "/admin/mailbox/get-unseen",
                type: 'GET'
            }).done(function (result) {
                var res = JSON.parse(result);
                if (res.status === 'new') {
                    var currentCount = $('#envelopeCount').text();
                    if (currentCount.length > 0) {
                        var updatedCount = parseInt(currentCount) + parseInt(res.count);
                        $('#envelopeCount').text(updatedCount);
                    } else {
                        $('#envelopeCount').text(res.count);
                    }
                }
            }));
        }, 5000)
    }
};
getUnseenMessages.init();

//Clear envelop notifications
$('#envelopeNotify').click(function () {
    $('#envelopeCount').text("");
});
