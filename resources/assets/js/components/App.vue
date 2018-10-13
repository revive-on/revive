<template>
  <div id="app">
    <b-navbar toggleable="md" type="dark" variant="info">
      <b-navbar-brand href="#">리바이브</b-navbar-brand>


      <b-navbar-brand href="#">
        <img src="images/pung.png" width="50">
      </b-navbar-brand>
      <b-collapse is-nav id="nav_text_collapse">
        <b-navbar-nav >
          <b-navbar-brand class="mr-3" >1 Week</b-navbar-brand>
          <b-navbar-brand class="mr-3">💲300</b-navbar-brand>
          <b-navbar-brand class="mr-3">🔰50</b-navbar-brand>
          <b-navbar-brand class="mr-3">🔯50</b-navbar-brand>
        </b-navbar-nav>
      </b-collapse>
    </b-navbar>
    <section class="row controls" v-if="!gameIsRunning">
      <div class="small-12 columns">

      </div>
    </section>
    <section class="row controls" v-else>
      <div class="small-12 columns">
        <h1 style="text-align:center;">Select the card</h1>

      </div>

    </section>
    <deck></deck>

    <b-img  src="images/hank.jpg"rounded="circle" width="75" height="75" blank-color="#777" alt="img" class="mr-3 ml-3" />
    <b-img  src="images/hank.jpg"rounded="circle" width="75" height="75" blank-color="#777" alt="img" class="mr-3 ml-3" />
    <b-img  src="images/hank.jpg"rounded="circle" width="75" height="75" blank-color="#777" alt="img" class="mr-3 ml-3" />
    <b-button size="lg" class="mr-5 " variant="success" style="float:right;" >결정</b-button>
  </div>
</template>

<script>
  import Deck from './Deck.vue';

  export default {

    components: {Deck},
    methods: {
      startGame: function () {
        this.gameIsRunning = true;
        this.turns = 0
      },
      nextTurn: function () {
        this.turns++;
      }
    },
    created() {
      this.turns = 0
    },
    data: function () {
      return {
        gameIsRunning: false,
        cards: [],
        turns: 0
      }
    }
  }
</script>
<style>
  #app {
  }

  .heading h1 {
    margin-bottom: 0;
  }
</style>