$(function(){
    $("#header").load("header.html");
    $("#footer").load("footer.html");
});

$("#type").change(function(){
    var type = $( "#type option:selected" ).index();
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
        case 1:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[0]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[1]+"</option>");
            $("#suffix").append("<option value='3'>"+suffix[2]+"</option>");
            $("#suffix").append("<option value='4'>"+suffix[3]+"</option>");
            break;
        case 2:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[4]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[5]+"</option>");
            break;
        case 3:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[6]+"</option>");
            break;
        case 4:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='1'>"+suffix[7]+"</option>");
            $("#suffix").append("<option value='1'>"+suffix[8]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[9]+"</option>");
            break;
        case 5:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[10]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[11]+"</option>");
            break;
        case 6:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[12]+"</option>");
            break;
        case 7:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[13]+"</option>");
            break;
        case 8:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[15]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[16]+"</option>");
            break;
        case 9:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[14]+"</option>");
            break;
        case 10:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[17]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[18]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[19]+"</option>");
            break;
        case 11:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[20]+"</option>");
            break;
        case 12:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[21]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[22]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[23]+"</option>");
            break;
        case 13:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[24]+"</option>");
            break;
        case 14:
            $("#suffix").empty();
            $("#suffix").append("<option value='1'>"+suffix[3]+"</option>");
            $("#suffix").append("<option value='2'>"+suffix[25]+"</option>");
            break;
        default:
            $("#suffix").empty();
    }

});