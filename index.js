$(document).ready(function() {
    $('input').keydown(function(index, value) {
        if (this.value.length < 3) {
            $('input').css("color", "red");
        } else {
            $('input').css("color", "blue");
        }
    })
})

// $(document).ready(function() {
//     $('form.text').on('submit', function() {
//         var that = $(this);
//         url = that.attr('action');
//         type = that.attr('method');
//         data = {};
//         that.find('[name]'.each(function(index, value) {
//             var that = $(this);
//             name = that.attr('name');
//             value = that.val();
//             data[name] = value;
//         }));
//         $.ajax({
//             url: url,
//             type: type,
//             data: data,
//             success: function(response) {
//                 console.log(response)
//             }
//         });
//         return false;
//     });
// })