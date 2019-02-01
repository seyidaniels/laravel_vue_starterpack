<template>
  <div>
    <app-auth v-show="!authenticated"></app-auth>

    <app-dashboard v-show="authenticated"></app-dashboard>

  </div>
</template>
<script>
import Dashboard from "@/js/components/Dashboard";
import Auth from "@/js/components/Auth";
import store from '@/js/store' // your vuex store

export default {
  components: {
    "app-auth": Auth,
    "app-dashboard": Dashboard
  },
  data: function() {
    return {
      authenticated: false
    };
  },
};
</script>
