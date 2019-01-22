<template>
  <p class="btn-wrap">
    <a v-if="!contacted" class="btn btn-success" @click="contact(user)">
      お茶する
    </a>
  </p>
</template>

<script>
export default {

  props: ['user'],

  data () {
    return {
      contacted: false
    }
  },

  created () {
    // this.favorited = this.defaultFavorited
  },

  methods: {
    contact (user) {
      let url = `/api/send`

      axios.post(url,{
        email: user.email
      })
        .then(response => {
          alert(`${user.name}にメールを送りました`)
        })
        .catch(error => {
          alert('fail')
        })
    },
  }

}
</script>