jQuery(document).ready(function ($) {

    $(".scroll").click(function (event) {
        event.preventDefault();
        $('html,body').animate({ scrollTop: $(this.hash).offset().top }, 1000);
    });

    var navoffeset = $(".agileits_header").offset().top;
    $(window).scroll(function () {
        var scrollpos = $(window).scrollTop();
        if (scrollpos >= navoffeset) {
            $(".agileits_header").addClass("fixed");
        } else {
            $(".agileits_header").removeClass("fixed");
        }
    });

    $(".dropdown").hover(
        function () {
            $('.dropdown-menu', this).stop(true, true).slideDown("fast");
            $(this).toggleClass('open');
        },
        function () {
            $('.dropdown-menu', this).stop(true, true).slideUp("fast");
            $(this).toggleClass('open');
        }
    );

    $().UItoTop({ easingType: 'easeOutQuart' });

    $('#example').okzoom({
        width: 150,
        height: 150,
        border: "1px solid black",
        shadow: "0 0 5px #000"
    });

});

$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        start: function (slider) {
            $('body').removeClass('loading');
        }
    });
});

paypal.minicart.render();

paypal.minicart.cart.on('checkout', function (evt) {
    var items = this.items(),
        len = items.length,
        total = 0,
        i;

    // Count the number of each item in the cart
    for (i = 0; i < len; i++) {
        total += items[i].get('quantity');
    }

    if (total < 3) {
        alert('The minimum order quantity is 3. Please add more to your shopping cart before checking out');
        evt.preventDefault();
    }
});


// Cart
function showCart(cart) {
    $('#modal-cart .modal-body').html(cart)
    $('#modal-cart').modal();
    let cartSum = $('#cart-sum').text() ? $('#cart-sum').text() : '$0'
    if (cartSum) {
        $('.cart-sum').text(cartSum)
    }
}

function getCart() {
    $.ajax({
        url: 'cart/show',
        type: 'GET',
        success(res) {
            if (!res) alert('Ошибка открытия корзины')
            showCart(res)
        },
        error() {
            alert('Error')
        }
    })
}

function clearCart() {
    $.ajax({
        url: 'cart/clear',
        type: 'GET',
        success(res) {
            if (!res) alert('Ошибка очистки корзины')
            showCart(res)
        },
        error() {
            alert('Error')
        }
    })
}

$('.add-to-cart').on('click', function () {
    let id = $(this).data('id')
    $.ajax({
        url: 'cart/add',
        data: { id },
        type: 'GET',
        success: function (res) {
            if (!res) {
                alert('Ошибка. пустой результат')
                return
            }
            showCart(res)
        },
        error: function () {
            alert('Error')
        }
    })
    return false
})

$('#modal-cart .modal-body').on('click', '.del-item', function () {
    let id = $(this).data('id');
    $.ajax({
        url: 'cart/del-item',
        data: { id },
        success(res) {
            if (!res) alert('Ошибка удаления товара')
            let now_location = document.location.pathname
            if (now_location == '/cart/checkout') {
                location = 'cart/checkout'
            }
            showCart(res)
        },
        error() {
            alert('Error')
        }
    })
})

$('.value-plus, .value-minus').on('click', function () {
    let id = $(this).data('id'),
        qty = $(this).data('qty')

    $('.cart-table .overlay').fadeIn();

    $.ajax({
        url: 'cart/change-cart',
        data: { id, qty },
        type: 'GET',
        success(res) {
            if (!res) alert('Error change qty')
            location = 'cart/checkout';
        },
        error() {
            alert('Error')
        }
    })
})

// !Cart