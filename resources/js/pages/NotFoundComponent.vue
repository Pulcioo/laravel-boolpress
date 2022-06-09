<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>ERROR 404 - NOT FOUND</h2>
      </div>
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
