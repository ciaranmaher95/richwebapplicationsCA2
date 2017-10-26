
$(function () {

    var id = JSON.parse(localStorage.getItem('memID'));

        if (id !== null)
        {
            $('.header').load("includes/headersignedin.html");
        }
        else
        {
            $('.header').load("includes/header.html");
        }
        $('.footer').load("includes/footer.html");
    });

