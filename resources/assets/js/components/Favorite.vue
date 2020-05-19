<template>
  <button type="button" :class="favoriateClasses" @click="toogleFavorite">
    <span class="glyphicon glyphicon-heart"></span>
    <span v-text="favoritesCount" v-show="favoritesCount"></span>
  </button>
</template>

<script>
export default {
  props: ["reply"],
  data() {
    return {
      favoritesCount: this.reply.favoritesCount,
      isFavorited: this.reply.isFavorited
    };
  },
  computed: {
    favoriteClasses() {
      return [
        "btn",
        "btn-toogle",
        this.isFavorited ? "btn-primary" : "btn-default"
      ];
    }
  },
  methods: {
    toggleFavorite() {
      return this.isFavorited ? this.unfavorite() : this.favorite();
    },
    favorite() {
      axios.post("/replies" + this.reply.id + "/favorites");
      this.favoritesCount++;
      this.isFavorited = !this.isFavorited;
      flash("Favorited");
    },
    unfavorite() {
      axios.delete("/replies" + this.reply.id + "/favorites");
      this.favoritesCount--;
      this.isFavorited = !this.isFavorited;
      flash("Favorite Removed");
    }
  }
};
</script>