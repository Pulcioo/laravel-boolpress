<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">ERROR 404 - NOT FOUND</div>
      <div class="col-12 text-center">
        <router-link :to="{ name: 'home' }">Torna alla Home</router-link>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  name: "NotFoundComponent",
};
</script>

<style>
</style>
