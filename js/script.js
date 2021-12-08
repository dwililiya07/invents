function tampilkanSemuaMenu() { 
    $.getJSON('data/events.json', function (data) {
        let event = data.event;
        $.each(event, function(i, data) {
           $('#daftar-event').append('<div class="col-md-4"><div class="card mb-3"><img class="img-poster" src="img/event/'+ data.gambar+'"class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><h5 class="card-title">'+ data.date+'</h5><a href="detail.html" class="btn btn-primary">Details</a></div></div></div>');
        });
    });
}
tampilkanSemuaMenu();


function tampilkanDetail() {
    $.getJSON('data/events.json', function (data) {
        let event = data.event;
        $.each(event, function(i, data) {
            $('#detail').append('<div class="col-md-4"><div class="card mb-3"><img class="img-poster" src="img/event/'+ data.gambar+'"class="card-img-top"><div class="card-body"><h3 class="card-title">'+ data.introduce+'</h3><p class="card-text">Theme :'+ data.nama +'</p><p class="card-text">date :'+ data.date+'</p><p class="card-text">time :'+ data.time+'</p><p class="card-text">location :'+ data.location+'</p><p class="card-text">speaker :'+ data.speaker+'</p><p class="card-text">moderator :'+ data.moderator+'</p><p class="card-text">benefit :'+ data.benefit+'</p><p class="card-text">deskripsi :'+ data.deskripsi+'</p></div></div></div>')
        });
    });
}
tampilkanDetail()

// $('.nav-link').on('click', function () {
//     $('.nav-link').removeClass('active');
//     $(this).addClass('active');

    // let kategori = $(this).html();
    // $('h1').html(kategori);

    // $('#daftar-menu').html('');
    // if(kategori == 'All Event') {
    //     tampilkanSemuaMenu();
    //     return;
    // }

    // $.getJSON('data/events.json', function(data) {
    //     let event = data.event;
    //     let content = ' ';

    //     $.each(event, function (i, data) {
    //         if(data.kategori == kategori.toLowerCase()) {
    //             content += '<div class="col-md-4"><div class="card mb-3"><img src="img/event/'+ data.gambar+'"class="card-img-top"><div class="card-body"><h5 class="card-title">'+ data.nama +'</h5><h5 class="card-title">'+'<a href="#" class="btn btn-primary">Read More</a></div></div></div>';
    //         }
    //     });

    //     $('#daftar-event').html(content);
    // });

// });