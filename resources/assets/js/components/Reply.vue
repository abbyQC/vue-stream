<script>
export default {
  props: ["attributes"],
  data() {
    return {
      editing: false,
      body: this.attributes.body,
      favoritesCount: this.attributes.favoritesCount,
      isFavorited: this.attributes.isFavorited
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
      axios.post("/replies" + this.attributes.id + "/favorites");
      this.favoritesCount++;
      this.isFavorited = !this.isFavorited;
      flash("Favorited");
    },
    unfavorite() {
      axios.delete("/replies" + this.attributes.id + "/favorites");
      this.favoritesCount--;
      this.isFavorited = !this.isFavorited;
      flash("Favorite Removed");
    }
  }
};
</script>