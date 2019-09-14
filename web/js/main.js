
$('.add-to-cart').on('click', function (e) {
    e.preventDefault();
    var id = $(this).data('id') ,
        qty = $('#qty').val() ;
    $.ajax({
        url: '/cart/add',
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});


function showCart(cart) {
    $('#cart .modal-body').html(cart);
    $('#cart').modal();
}


$('#cart .modal-body').on('click', '.del-item', function () {
   var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function () {
            alert('Error!');
        }
    });
});
$('.shop_table').on('click', '.del-cart-product', function () {
   var id = $(this).data('id');
    $.ajax({
        url: '/cart/del-item',
        data: {id: id},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            location.reload();
        },
        error: function () {
            alert('Error!');
        }
    });
    return false;
});


function clearCart() {
    $.ajax({
        url: '/cart/clear',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function () {
            alert('Error');
        }
    });
}

function getCart() {
    $.ajax({
        url: '/cart/show',
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            showCart(res);
        },
        error: function () {
            alert('Error');
        }
    });
    return false;
}

$('.cart_item').on('click' , '.minus' , function () {
   var id = $(this).data('id') ,
       qty = $('#qty').val() ;
   $.ajax({
       url: '/cart/minus',
       data: {id: id, qty: qty},
       type: 'GET',
       success: function (res) {
           if(!res) alert('Error');
           location.reload();
       },
       error: function () {
           alert('Error!');
       }
   });

});

$('.shopping-cart').on('click', '.refresh' , function () {
    var id = $(this).data('id') ,
        qty = $(this).data('qty') ;
    $.ajax({
        url: '/cart/refresh',
        data: {id: id, qty: qty},
        type: 'GET',
        success: function (res) {
            if(!res) alert('Ошибка');
            location.reload();
        },
        error: function () {
            alert('Error!');
        }
    });
});