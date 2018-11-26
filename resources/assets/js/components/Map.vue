<template>
  <div>
    <h4 class="mb-6">
    </h4>
    <b-container fluid class="text-center">
      <b-row v-for="i in map.height" :key="i">
        <b-col v-for="j in map.width" :key="j">
          <div v-if="isAreaLocated(i,j)">
            <h1>
              로케
            </h1>
          </div>
          <div v-else>
            <h1>
              노케
            </h1>
          </div>
        </b-col>
      </b-row>
    </b-container>
  </div>
</template>

<script>
  export default {
    components: {},
    mounted() {
      this.fetchInfo();
    },
    data: function () {
      return {
        map: {},
        areas: []
      }
    },
    methods: {
      fetchInfo: function () {
        axios.get('/api/maps/1').then((res) => {
          this.map = res.data[0];
          console.log(this.map);
          console.log(this.map.width);
          console.log(this.map.height);
        });
        axios.get('/api/maps/1/areas').then((res) => {
          this.areas = res.data;
        });
      },
      isAreaLocated: function (i, j) {
        for (let x = 0; x < this.areas.length; x++) {
          let area = this.areas[x];
          if (area.top === (i - 1)) {
            if (area.left === (j - 1)) {
              return true;
            }
          }
        }
        return false;
      }
    },
    name: "game_map"
  }
</script>

<style scoped>

</style>