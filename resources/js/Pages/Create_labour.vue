<template>
  <Nav />
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">
        Okay we will create a form where we will give money to labour
      </h1>
    </div>
  </div>
</template>
<script>
import Nav from "../Shared/Nav";

export default {
  components: { Nav },
  props: {
    msg: String,
  },
};
</script>