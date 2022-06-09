<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Blog</h2>
      </div>
      <div v-if="posts.length > 0">
        <PostCardComponent :posts="posts" />
      </div>
      <div v-else>Caricamento in corso...</div>
    </div>
  </div>
</template>

<script>
import PostCardComponent from "../components/PostCardComponent.vue";

export default {
  name: "BlogComponent",
  data() {
    return {
      posts: [],
    };
  },
  components: {
    PostCardComponent,
  },
  mounted() {
    window.axios
      .get("http://127.0.0.1:8000/api/posts")
      .then((result) => {
        console.log(result);
        this.posts = result.data;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style>
</style>
