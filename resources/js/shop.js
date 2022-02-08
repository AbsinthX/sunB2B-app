$(function() {
    $('a#filter-button').click(function() {
            getProducts( $('a.products-actual-count').first().text());
    });

    $('div.products-count a').click(function (event) {
        event.preventDefault();
        $('a.products-actual-count').text($(this).text());
        getProducts($(this).text());
    });


    function getProducts(paginate){
        const form = $('form.sidebar-filter').serialize();
        $.ajax({
            method: "GET",
            url: "/sklep",
            data: form + "&" + $.param({paginate: paginate})
        })
            .done(function (response) {
                $('div#products-wrapper').empty();
                $.each(response.data, function (index, product) {
                    const html = '<div class="col-6 col-md-6 col-lg-4 mb-3">' +
                        '            <div class="card h-100 border-0">' +
                        '                <div class="card-img-top">' +
                        '                    <img src="' + getImage(product) +'" class="img-fluid mx-auto d-block" alt="Zdjęcie produktu">' +
                        '                </div>' +
                        '                <div class="card-body text-center">' +
                        '                    <h4 class="card-title">' +
                        product.name +
                        '                    </h4>' +
                        '                    <h5 class="card-price small">' +
                        '                        <i>' + product.price + ' zł</i>' +
                        '                    </h5>' +
                        '                </div>' +
                        '            </div>' +
                        '        </div>';
                    $('div#products-wrapper').append(html);
                });
            })
            .fail(function (data) {
                alert("FAIL...");
            })
    }

    function getImage(product) {
        if (!!product.image_path) {
            return storagePath + product.image_path;
        }
        return defaultImage;
    }
});
