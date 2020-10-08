require('./bootstrap');

window.$ = require('jquery');

function deletedListener() {
  target = $('#products-deleted');
  target.change(deletedToggle);
}

function deletedToggle() {
  var me = $(this);
  var isChecked = me.is(':checked');

  getProducts(isChecked);
}

function getProducts(deleted) {

  var url = "/api/products/all";
  if (deleted) {
    url = "/api/products/deleted";
  }

  $.ajax({
    url: url,
    method: "GET",
    success: function(products) {

      var target = $('#products');
      target.html('');

      var Handlebars = require("handlebars");
      var template = $('#product-template').html();
      var compiled = Handlebars.compile(template);

      for (var i = 0; i < products.length; i++) {

        var product = products[i];
        var id = product.id;

        product.route = "{{ route('products.show'," + id + ") }}";

        var productHTML = compiled(product);
        target.append(productHTML);
      }

    },
    error: function(err) {
      console.log('error', err);
    }
  });

}

function init() {

  deletedListener();

  getProducts(false);

}

$(document).ready(init);
