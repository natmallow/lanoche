// A $( document ).ready() block.
$(document).ready(function () {


    $("input[name='month']").keyup(function () {
        console.log(this.value.length);
        
        
        if (this.value.length > 2) {
            $("input[name='month']").val(this.value.substring(1, 3));
        }
        
        if (this.value.length >= 2) {
            $("input[name='day']").focus();
        }
        
    })

    $("input[name='day']").keyup(function () {
        
        if (this.value.length > 2) {
            $("input[name='day']").val(this.value.substring(1, 3));
        }
        
        if (this.value.length >= 2) {
            $("input[name='year']").focus();
        }
    })

    $("input[name='year']").keyup(function () {
        if (this.value.length > 4) {
            $("input[name='year']").val(this.value.substring(0, 4));
        }
    })

});
function validateDOB(item, length, value) {

    var rules = {
        month: {
            required: !0, range: [1, 12]
        },
        day: {
            required: !0, range: [1, 31]
        }
        ,
        year: {
            required: !0, range: [1900, 3e3]
        }
    }
    


}