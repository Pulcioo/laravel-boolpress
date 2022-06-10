<template>
  <div class="container">
    <div class="row">
      <div class="col-12 text-center">
        <h2>Il mio post</h2>
      </div>
      <div v-if="post">
        <h4>Titolo: {{ post.title }}</h4>
        <div>
          Contenuto: <span> {{ post.content }} </span>
        </div>
        <div>
          Tags:
          <ul>
            <li v-for="tag in post.tags" :key="tag.id">
              {{ tag.name }}
            </li>
          </ul>
        </div>
      </div>
      <div v-else>Caricamento in corso...</div>
    </div>
  </div>
</template>

<script>
export default {
  name: "DetailComponent",
  data() {
    return {
      post: undefined,
    };
  },
  mounted() {
    const slug = this.$route.params.slug;
    console.log("mounted!", slug);
    window.axios
      .get("http://127.0.0.1:8000/api/posts/" + slug)
      .then((result) => {
        console.log(result);
        this.post = result.data.results;
      })
      .catch((e) => {
        console.log(e);
      });
  },
};
</script>

<style>
</style>
