<template>
  <div class="container">
    <div v-for="(post, index) in posts" :key="index">
      <span>Titolo: {{ post.title }}</span>
      <p>Contenuto: {{ post.content }}</p>
    </div>
  </div>
</template>

<script>
export default {
  name: "PostCardComponent",
  props: ["posts"],
};
</script>

<style>
</style>
