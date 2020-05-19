<template>
  <div>
    <div v-for="(reply,index) in items">
      <reply :data="reply" @deleted="remove(index)"></reply>
    </div>
    <new-reply :endpoint="endpoint" @created="add"></new-reply>
  </div>
</template>
<script>
import Collection from "./Collection";
import Reply from "./Reply.vue";
import NewReply from "./NewReply.vue";

export default Collection.extend({
  components: { Reply, NewReply },
  data() {
    return {
      endpoint: location.pathname + "/replies"
    };
  }
});
</script>