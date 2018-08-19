<template>
    <div>
        <b-card-group deck>
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
                self.events.splice(0, self.events.length);
                console.log("fire!");
                axios.get("/cardEvents/listCardEvents").then(function (response) {
                    let data = response.data;
                    self.events.push(...data);
                }).catch(function (ex) {
                    // ex 처리
                });

            }
        },
        data() {
            return {
                show: true,
                events: []
            }
        }
    }
</script>