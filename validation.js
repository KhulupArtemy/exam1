function addFeedback()
{
    if(!checkValues()) {
        return false;
    } else {
        alert("Данные занесены успешно")
    }

    const fullname = document.getElementById("fullname").value;
    const phone = document.getElementById("phone").value;
    const stanok = document.getElementById("stanok").value;

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", "addFeedback.php?fullname="+fullname+"&phone="+phone+"&stanok="+stanok, true);
    xmlhttp.send();
}   

function checkValues()
{
    let fullname = document.getElementById("fullname").value;
    let phone = document.getElementById("phone").value;
    let stanok = document.getElementById("stanok").value;

    if(fullname.length<1 && phone.length<1)
    {
        alert("Все поля пустые");
        return false;
    }

    if(fullname.length<2)
    {
        alert("ФИО не менее 2-ух символов");
        return false;
    }

    if((/\d/.test(fullname)))
    {
        alert("ФИО только буквы");
        return false
    }

    const phone_regex = /^(\s*)?(\+)?([- _():=+]?\d[- _():=+]?){10,14}(\s*)?$/;
    if (!phone_regex.test(phone)) {
        alert("Телефон введен не корректно");
        return false
    }

    return true;
}