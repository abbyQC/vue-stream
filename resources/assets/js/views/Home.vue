
<template>
  <div class="container">
    <div class="columns">
      <div class="column">
        <div class="message" v-for="status in statuses" v-bind:key="status.name">
          <div class="message-header">
            <p>{{status.user.name}} said..</p>
            <p>{{status.created_at | ago | capitalize}}</p>
          </div>
          <div class="message-body" v-text="status.body"></div>
        </div>
        <add-to-stream></add-to-stream>
      </div>
    </div>
  </div>
</template>
<script>
import moment from "moment";
import Status from "../models/Status";
import AddToStream from "../components/AddToStream.vue";
export default {
  components: { AddToStream },
  data() {
    return {
      statuses: []
    };
  },
  filters: {
    ago(date) {
      return moment.utc(date).fromNow();
    },
    capitalize(value) {
      return value.toUpperCase();
    }
  },
  created() {
    //fire off an ajax request to a server to fetch all the statuses
    Status.all(statuses => (this.statuses = statuses));
  }
};
</script>