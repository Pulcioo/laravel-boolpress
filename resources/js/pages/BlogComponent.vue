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
      <div class="col-12 text-center">
        <button
          v-if="prevPageUrl"
          @click="previousPage()"
          class="btn btn-primary"
        >
          Precedente
        </button>
        <span>Pagina {{ currentPage }} di {{ lastPage }}</span>
        <button v-if="nextPageUrl" @click="nextPage()" class="btn btn-primary">
          Successiva
        </button>
      </div>
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
      currentPage: 1,
      lastPage: 1,
      prevPageUrl: "",
      nextPageUrl: "",
    };
  },
  components: {
    PostCardComponent,
  },
  mounted() {
    this.loadPage("http://127.0.0.1:8000/api/posts");
  },
  methods: {
    loadPage(url) {
      window.axios
        .get(url)
        .then((result) => {
          console.log(result);
          this.posts = result.data.data;
          this.currentPage = result.data.current_page;
          this.lastPage = result.data.last_page;
          this.prevPageUrl = result.data.prev_page_url;
          this.nextPageUrl = result.data.next_page_url;
        })
        .catch((e) => {
          console.log(e);
        });
    },
    previousPage() {
      this.loadPage(this.prevPageUrl);
    },
    nextPage() {
      this.loadPage(this.nextPageUrl);
    },
  },
};
</script>

<style>
</style>
