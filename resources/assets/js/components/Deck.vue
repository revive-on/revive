<template>
  <div>
    <b-card-group deck class="container-fluid">
      <card v-for="eventValue in events" :card-event-value="eventValue" :key="eventValue.id"></card>
    </b-card-group>
  </div>
</template>

<script>
  import Card from './Card.vue';

  export default {
    components: {Card},
    created() {
      this.fireNewEvents();
    },
    methods: {
      fireNewEvents: function () {
        let self = this;
        //self.events.splice(0, self.events.length);
        console.log("fire!");
        // axios.get("/cardEvents/listCardEvents").then(function (response) {
        //     let data = response.data;
        //     self.events.push(...data);
        // }).catch(function (ex) {
        //     // ex 처리
        // });

      }
    },
    data() {
      return {
        show: true,
        events: [{'id': 1, 'title' : '월요일 - 연구실','content': '기반 기술 연구'},
          {'id': 2, 'title' : '화요일 - 사무실', 'content': 'hi'},
          {'id': 3, 'title' : '수요일 - 연구실', 'content': 'hi'},
          {'id': 4, 'title' : '목요일 - 경비실', 'content': 'hi'},
          {'id': 5, 'title' : '금요일 - 휴게실', 'content': 'hi'}]
      }
    }
  }
</script>