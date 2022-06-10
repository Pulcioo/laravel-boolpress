<template>
  <div class="container">
    <div id="card" v-for="post in posts" :key="post.id">
      <span>Titolo: {{ post.title }}</span>
      <router-link :to="{ name: 'detail', params: { slug: post.slug } }">
        + Dettagli
      </router-link>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCardComponent",
  props: ["posts"],
};
</script>

<style lang="scss" scoped>
#card {
  margin: 20px 0px;
}
</style>
