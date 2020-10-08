<script id="product-template" type="text/x-handlebars-template">

  <div class="card mb-3" style="width: calc(25% - 10px);">
    <img class="card-img-top" src="{{ img }}" alt="Product Image">
    <div class="card-body">
      <h5 class="card-title">{{ name }}</h5>
      <p class="card-text">
        {{ short_desc }}
      </p>
      <a href="{{ route }}" class="btn btn-primary">Show</a>
    </div>
  </div>

</script>
