

$(function() {
    $('#sortable').sortable({
        axis: 'y',
        opacity: 0.7,
        handle: 'span',
        update: function(event, ui) {
            var list_sortable = $(this).sortable('toArray').toString();
    		// change order in the database using Ajax
            $.ajax({
                url: 'set_order.php',
                type: 'POST',
                data: {ID_Amulet:list_sortable},
                success: function(data) {
                    //finished
                }
            });
        }
    }); // fin sortable
});