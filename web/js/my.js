$(function(){
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});

$("#form_type").change(function(){
    var type = $( "#form_type option:selected" ).index();
    var suffix = ["Cosmetics",
        "Fragrances mostly",
        "Health Care & pharmacy",
        "authorize boutique",
        "Drugstore",
        "Baby care mostly",
        "Shoes",
        "Accessories",
        "Jewelry mostly",
        "Jewelry & timepiece",
        "Electronics store",
        "Electronics shop",
        "Home appliances",
        "department store",
        "Glasses",
        "Sport & Outdoors",
        "Outdoors mostly",
        "Toys & Games",
        "Children's fashion",
        "Child care",
        "Supermarket",
        "Men's fashion",
        "Women's fashion",
        "Clothes",
        "Upmarket department store",
        "Bags & Luggage"];
    switch(type) {
        case 0:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[0]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[1]+"</option>");
            $("#form_suffix").append("<option value='3'>"+suffix[2]+"</option>");
            $("#form_suffix").append("<option value='4'>"+suffix[3]+"</option>");
            break;
        case 1:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[4]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[5]+"</option>");
            break;
        case 2:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[6]+"</option>");
            break;
        case 3:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='1'>"+suffix[7]+"</option>");
            $("#form_suffix").append("<option value='1'>"+suffix[8]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[9]+"</option>");
            break;
        case 4:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[10]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[11]+"</option>");
            break;
        case 5:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[12]+"</option>");
            break;
        case 6:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[13]+"</option>");
            break;
        case 7:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[15]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[16]+"</option>");
            break;
        case 8:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[14]+"</option>");
            break;
        case 9:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[17]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[18]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[19]+"</option>");
            break;
        case 10:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[20]+"</option>");
            break;
        case 11:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[21]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[22]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[23]+"</option>");
            break;
        case 12:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[24]+"</option>");
            break;
        case 13:
            $("#form_suffix").empty();
            $("#form_suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#form_suffix").append("<option value='2'>"+suffix[25]+"</option>");
            break;
        default:
            $("#form_suffix").empty();
    }

});