<template>
  <nav id="main-nav">
    <ul id="main-menu" class="sm sm-blue">
      <li><Link href="/">Home</Link></li>
      <li>
        <Link href="/labour" class="parent">Given To labour</Link>
      </li>
    </ul>
  </nav>
</template>
<script>
</script>
<script>
import { Link } from "@inertiajs/inertia-vue3";
export default {
  components: { Link },
};
</script>

