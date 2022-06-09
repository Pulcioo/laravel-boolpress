<template>
  <header>
    <ul class="nav">
      <li
        v-for="(navItem, index) in nav"
        :key="index"
        class="nav-item mx-4 my-2"
      >
        <router-link :to="{ name: navItem.link }">
          {{ navItem.label }}
        </router-link>
      </li>
    </ul>
  </header>
</template>

<script>
export default {
  name: "HeaderComponent",
  data() {
    return {
      nav: [
        { link: "home", label: "Home" },
        { link: "contacts", label: "Contatti" },
        { link: "blog", label: "Blog" },
      ],
    };
  },
};
</script>

<style>
</style>
