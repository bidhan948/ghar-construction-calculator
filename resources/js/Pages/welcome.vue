<template>
  <Nav />
  <div class="row">
    <div class="col-12">
      <h1 class="text-center">{{ msg }}</h1>
    </div>
  </div>
</template>
<script>
import Nav from "../Shared/Nav";

export default {
  components: { Nav },
  props: {
    msg: String
  }
};
</script>